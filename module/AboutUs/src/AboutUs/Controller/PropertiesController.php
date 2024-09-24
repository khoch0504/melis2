<?php

/**
 * Melis Technology (http://www.melistechnology.com)
 *
 * @copyright Copyright (c) 2017 Melis Technology (http://www.melistechnology.com)
 *
 */

namespace AboutUs\Controller;

use Laminas\View\Model\ViewModel;
use Laminas\View\Model\JsonModel;
use Laminas\Session\Container;
use MelisCore\Controller\MelisAbstractActionController;

class PropertiesController extends MelisAbstractActionController
{

    public function renderPropertiesFormAction()
    {
        $view = new ViewModel();
        $form = $this->getForm();

        $id = $this->params()->fromQuery('id', 'add');
        $view->id = $id;

        if ($id != 'add'){
            $aboutUsTable = $this->getServiceManager()->get('AboutUsTable');
            $data = $aboutUsTable->getEntryById($id)->current();
            $form->bind($data);
        }

        $view->form = $form;

        return $view;
    }

    public function saveAction()
    {
        $translator = $this->getServiceManager()->get('translator');

        $success = 0;
        $textTitle = $translator->translate('tr_aboutus_title');
        $textMessage = $translator->translate('tr_aboutus_unable_to_save');
        $errors = [];

        $request = $this->getRequest();
        $id = null;
        $entryTitle = null;

        if ($request->isPost()){

            $this->getEventManager()->trigger('aboutus_properties_save_start', $this, $request);

            // Result stored on session
            $container = new Container('aboutus');
            $saveResult = $container['aboutus-save-action'];

            if (!empty($saveResult['errors']))
                $errors = $saveResult['errors'];
            if (!empty($saveResult['data']))
                $data = $saveResult['data'];

            if (empty($errors)){
                $id = $data['id'];
                $success = 1;

                $entryTitle = $translator->translate('tr_aboutus_common_entry_id').': '.$id;

                if ($request->getPost()['id'] == 'add')
                    $textMessage = $translator->translate('tr_aboutus_create_success');
                else
                    $textMessage = $translator->translate('tr_aboutus_save_success');
            }

            // Unset temporary data on session
            unset($container['aboutus-save-action']);
        }

        $response = [
            'success' => $success,
            'textTitle' => $textTitle,
            'textMessage' => $textMessage,
            'errors' => $errors
        ];

        if (!is_null($id)){
            $response['entryId'] = $id;
            $response['entryTitle'] = $entryTitle;
        }

        return new JsonModel($response);
    }

    public function savePropertiesAction()
    {
        $id = null;
        $entryTitle = null;
        $success = 0;
        $errors = [];

        $translator = $this->getServiceManager()->get('translator');

        $request = $this->getRequest();
        $formData = $request->getPost()->toArray();

        $aboutUsForm = $this->getForm();

        // File input
        $filesInpt = $this->params()->fromFiles();
        if (!empty($filesInpt)){
            foreach ($filesInpt As $input => $file){
                if ($aboutUsForm->has($input))
                    if (!empty($file['tmp_name'])){
                        $this->fileInput($input, $aboutUsForm->getInputFilter());
                        $formData[$input] = $file;
                    }else
                        if (is_numeric($formData['id']))
                            $aboutUsForm->getInputFilter()->get($input)->setRequired(false);
            }
        }

        $aboutUsForm->setData($formData);

        if ($aboutUsForm->isValid()){

            $formData = $aboutUsForm->getData();

            // File data
            if (!empty($filesInpt))
                foreach ($filesInpt As $input => $file){
                    if (!empty($formData[$input]['tmp_name']))
                        $formData[$input] = '/media/AboutUs/' . basename($formData[$input]['tmp_name']);
                    else
                        unset($formData[$input]);
                }



            foreach ($formData As $input => $val)
                if (empty($val) && !is_numeric($val))
                    $formData[$input] = null;

            if (is_numeric($formData['id']))
                $id = $formData['id'];
            else
                unset($formData['id']);

            $aboutUsService = $this->getServiceManager()->get('AboutUsService');
            $res = $aboutUsService->saveItem($formData, $id);

            if (!is_null($res)){
                $id = $res;
                $success = 1;
            }
        }else{
            $errors = $aboutUsForm->getMessages();
            foreach ($errors as $keyError => $valueError){
                $errors[$keyError]['label'] = $translator->translate("tr_aboutus_input_".$keyError);
            }
        }

        $result = [
            'success' => $success,
            'errors' => $errors,
            'data' => ['id' => $id],
        ];

        return new JsonModel($result);
    }

    private function fileInput($elemName, $formFilter)
    {
        $target = $_SERVER['DOCUMENT_ROOT'].'/media/AboutUs/';
        if (!is_dir($target))
            mkdir($target, 0777);

        // File Input
        $fileInput = new \Laminas\InputFilter\FileInput($elemName);
        $fileInput->setRequired(true);
        $fileInput->getFilterChain()->attachByName(
            'filerenameupload',
            [
                'target'    => $target.'/AboutUs', // File name prefix
                'randomize' => true,
                'use_upload_extension' => true,
            ]
        );

        $formFilter->add($fileInput);
    }

    public function deleteAction()
    {
        $request = $this->getRequest();
        $queryData = $request->getQuery()->toArray();

        if (!empty($queryData['id'])){
            $aboutUsService = $this->getServiceManager()->get('AboutUsService');
            $aboutUsService->deleteItem($queryData['id']);
        }
    }

    private function getForm()
    {
        $melisCoreConfig = $this->getServiceManager()->get('MelisCoreConfig');
        $appConfigForm = $melisCoreConfig->getFormMergedAndOrdered('aboutus/tools/aboutus_tools/forms/aboutus_property_form', 'aboutus_property_form');

        // Factoring AboutUs event and pass to view
        $factory = new \Laminas\Form\Factory();
        $formElements = $this->getServiceManager()->get('FormElementManager');
        $factory->setFormElementManager($formElements);
        $form = $factory->createForm($appConfigForm);

        return $form;
    }
}