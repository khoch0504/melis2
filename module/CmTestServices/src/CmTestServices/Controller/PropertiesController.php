<?php

/**
 * Melis Technology (http://www.melistechnology.com)
 *
 * @copyright Copyright (c) 2017 Melis Technology (http://www.melistechnology.com)
 *
 */

namespace CmTestServices\Controller;

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
            $cmTestServicesTable = $this->getServiceManager()->get('CmTestServicesTable');
            $data = $cmTestServicesTable->getEntryById($id)->current();
            $form->bind($data);
        }

        $view->form = $form;

        return $view;
    }

    public function saveAction()
    {
        $translator = $this->getServiceManager()->get('translator');

        $success = 0;
        $textTitle = $translator->translate('tr_cmtestservices_title');
        $textMessage = $translator->translate('tr_cmtestservices_unable_to_save');
        $errors = [];

        $request = $this->getRequest();
        $id = null;
        $entryTitle = null;

        if ($request->isPost()){

            $this->getEventManager()->trigger('cmtestservices_properties_save_start', $this, $request);

            // Result stored on session
            $container = new Container('cmtestservices');
            $saveResult = $container['cmtestservices-save-action'];

            if (!empty($saveResult['errors']))
                $errors = $saveResult['errors'];
            if (!empty($saveResult['data']))
                $data = $saveResult['data'];

            if (empty($errors)){
                $id = $data['id'];
                $success = 1;

                $entryTitle = $translator->translate('tr_cmtestservices_common_entry_id').': '.$id;

                if ($request->getPost()['lang_cms_id'] == 'add')
                    $textMessage = $translator->translate('tr_cmtestservices_create_success');
                else
                    $textMessage = $translator->translate('tr_cmtestservices_save_success');
            }

            // Unset temporary data on session
            unset($container['cmtestservices-save-action']);
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

        $cmTestServicesForm = $this->getForm();



        $cmTestServicesForm->setData($formData);

        if ($cmTestServicesForm->isValid()){

            $formData = $cmTestServicesForm->getData();





            foreach ($formData As $input => $val)
                if (empty($val) && !is_numeric($val))
                    $formData[$input] = null;

            if (is_numeric($formData['lang_cms_id']))
                $id = $formData['lang_cms_id'];
            else
                unset($formData['lang_cms_id']);

            $cmTestServicesService = $this->getServiceManager()->get('CmTestServicesService');
            $res = $cmTestServicesService->saveItem($formData, $id);

            if (!is_null($res)){
                $id = $res;
                $success = 1;
            }
        }else{
            $errors = $cmTestServicesForm->getMessages();
            foreach ($errors as $keyError => $valueError){
                $errors[$keyError]['label'] = $translator->translate("tr_cmtestservices_input_".$keyError);
            }
        }

        $result = [
            'success' => $success,
            'errors' => $errors,
            'data' => ['id' => $id],
        ];

        return new JsonModel($result);
    }



    public function deleteAction()
    {
        $request = $this->getRequest();
        $queryData = $request->getQuery()->toArray();

        if (!empty($queryData['id'])){
            $cmTestServicesService = $this->getServiceManager()->get('CmTestServicesService');
            $cmTestServicesService->deleteItem($queryData['id']);
        }
    }

    private function getForm()
    {
        $melisCoreConfig = $this->getServiceManager()->get('MelisCoreConfig');
        $appConfigForm = $melisCoreConfig->getFormMergedAndOrdered('cmtestservices/tools/cmtestservices_tools/forms/cmtestservices_property_form', 'cmtestservices_property_form');

        // Factoring CmTestServices event and pass to view
        $factory = new \Laminas\Form\Factory();
        $formElements = $this->getServiceManager()->get('FormElementManager');
        $factory->setFormElementManager($formElements);
        $form = $factory->createForm($appConfigForm);

        return $form;
    }
}