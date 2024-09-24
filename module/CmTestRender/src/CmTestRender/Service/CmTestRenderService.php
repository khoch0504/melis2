<?php

/**
 * Melis Technology (http://www.melistechnology.com)
 *
 * @copyright Copyright (c) 2016 Melis Technology (http://www.melistechnology.com)
 *
 */

namespace CmTestRender\Service;

use MelisCore\Service\MelisGeneralService;
use Laminas\Session\Container;
use Laminas\Stdlib\ArrayUtils;
use Laminas\View\Model\JsonModel;

class CmTestRenderService extends MelisGeneralService
{
    public function getItemById($id)
    {
        $arrayParameters = $this->makeArrayFromParameters(__METHOD__, func_get_args());
        $arrayParameters = $this->sendEvent('CmTestRender_service_get_item_start', $arrayParameters);

        $CmTestRenderTable = $this->getServiceManager()->get('CmTestRenderTable');
        $item = $CmTestRenderTable->getEntryById($arrayParameters['id'])->current();

        $arrayParameters['results'] = $item;
        $arrayParameters = $this->sendEvent('CmTestRender_service_get_item_end', $arrayParameters);
        return $arrayParameters['results'];
    }

    public function getList($start = null, $limit = null, $searchKeys = [], $searchValue = null, $orderKey = null, $order = 'ASC', $langId = 1, $count = false)
    {
        $arrayParameters = $this->makeArrayFromParameters(__METHOD__, func_get_args());
        $arrayParameters = $this->sendEvent('cmtestrender_service_get_list_start', $arrayParameters);

        $cmTestRenderTable = $this->getServiceManager()->get('CmTestRenderTable');
        $list = $cmTestRenderTable->getList(
            $arrayParameters['start'],
            $arrayParameters['limit'],
            $arrayParameters['searchKeys'],
            $arrayParameters['searchValue'],
            $arrayParameters['orderKey'],
            $arrayParameters['order'],
            $arrayParameters['langId'],
            $arrayParameters['count']
        );

        $arrayParameters['results'] = $list;
        $arrayParameters = $this->sendEvent('cmtestrender_service_get_list_end', $arrayParameters);
        return $arrayParameters['results'];
    }

    public function saveItem($data, $id = null)
    {
        $arrayParameters = $this->makeArrayFromParameters(__METHOD__, func_get_args());
        $arrayParameters = $this->sendEvent('cmtestrender_service_save_item_start', $arrayParameters);

        if ($data) {
            $cmTestRenderTable = $this->getServiceManager()->get('CmTestRenderTable');
            $res = $cmTestRenderTable->save($arrayParameters['data'], $arrayParameters['id']);
        }

        $arrayParameters['result'] = $res;
        $arrayParameters = $this->sendEvent('cmtestrender_service_save_item_end', $arrayParameters);
        return $arrayParameters['result'];
    }

    public function deleteItem($id)
    {
        $arrayParameters = $this->makeArrayFromParameters(__METHOD__, func_get_args());
        $arrayParameters = $this->sendEvent('cmtestrender_service_delete_item_start', $arrayParameters);

        $cmTestRenderTable = $this->getServiceManager()->get('CmTestRenderTable');
        $res = $cmTestRenderTable->deleteById($arrayParameters['id']);

        $arrayParameters['result'] = $res;
        $arrayParameters = $this->sendEvent('cmtestrender_service_delete_item_end', $arrayParameters);
        return $arrayParameters['result'];
    }


}