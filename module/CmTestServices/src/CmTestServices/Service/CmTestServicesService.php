<?php

/**
 * Melis Technology (http://www.melistechnology.com)
 *
 * @copyright Copyright (c) 2016 Melis Technology (http://www.melistechnology.com)
 *
 */

namespace CmTestServices\Service;

use MelisCore\Service\MelisGeneralService;
use Laminas\Session\Container;
use Laminas\Stdlib\ArrayUtils;
use Laminas\View\Model\JsonModel;

class CmTestServicesService extends MelisGeneralService
{
    public function getItemById($id)
    {
        $arrayParameters = $this->makeArrayFromParameters(__METHOD__, func_get_args());
        $arrayParameters = $this->sendEvent('CmTestServices_service_get_item_start', $arrayParameters);

        $CmTestServicesTable = $this->getServiceManager()->get('CmTestServicesTable');
        $item = $CmTestServicesTable->getEntryById($arrayParameters['id'])->current();

        $arrayParameters['results'] = $item;
        $arrayParameters = $this->sendEvent('CmTestServices_service_get_item_end', $arrayParameters);
        return $arrayParameters['results'];
    }

    public function getList($start = null, $limit = null, $searchKeys = [], $searchValue = null, $orderKey = null, $order = 'ASC', $langId = 1, $count = false)
    {
        $arrayParameters = $this->makeArrayFromParameters(__METHOD__, func_get_args());
        $arrayParameters = $this->sendEvent('cmtestservices_service_get_list_start', $arrayParameters);

        $cmTestServicesTable = $this->getServiceManager()->get('CmTestServicesTable');
        $list = $cmTestServicesTable->getList(
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
        $arrayParameters = $this->sendEvent('cmtestservices_service_get_list_end', $arrayParameters);
        return $arrayParameters['results'];
    }

    public function saveItem($data, $id = null)
    {
        $arrayParameters = $this->makeArrayFromParameters(__METHOD__, func_get_args());
        $arrayParameters = $this->sendEvent('cmtestservices_service_save_item_start', $arrayParameters);

        if ($data) {
            $cmTestServicesTable = $this->getServiceManager()->get('CmTestServicesTable');
            $res = $cmTestServicesTable->save($arrayParameters['data'], $arrayParameters['id']);
        }

        $arrayParameters['result'] = $res;
        $arrayParameters = $this->sendEvent('cmtestservices_service_save_item_end', $arrayParameters);
        return $arrayParameters['result'];
    }

    public function deleteItem($id)
    {
        $arrayParameters = $this->makeArrayFromParameters(__METHOD__, func_get_args());
        $arrayParameters = $this->sendEvent('cmtestservices_service_delete_item_start', $arrayParameters);

        $cmTestServicesTable = $this->getServiceManager()->get('CmTestServicesTable');
        $res = $cmTestServicesTable->deleteById($arrayParameters['id']);

        $arrayParameters['result'] = $res;
        $arrayParameters = $this->sendEvent('cmtestservices_service_delete_item_end', $arrayParameters);
        return $arrayParameters['result'];
    }


}