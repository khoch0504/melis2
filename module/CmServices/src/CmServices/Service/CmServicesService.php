<?php

/**
 * Melis Technology (http://www.melistechnology.com)
 *
 * @copyright Copyright (c) 2016 Melis Technology (http://www.melistechnology.com)
 *
 */

namespace CmServices\Service;

use MelisCore\Service\MelisGeneralService;
use Laminas\Session\Container;
use Laminas\Stdlib\ArrayUtils;
use Laminas\View\Model\JsonModel;

class CmServicesService extends MelisGeneralService
{
    public function getItemById($id)
    {
        $arrayParameters = $this->makeArrayFromParameters(__METHOD__, func_get_args());
        $arrayParameters = $this->sendEvent('CmServices_service_get_item_start', $arrayParameters);

        $CmServicesTable = $this->getServiceManager()->get('CmServicesTable');
        $item = $CmServicesTable->getEntryById($arrayParameters['id'])->current();

        $arrayParameters['results'] = $item;
        $arrayParameters = $this->sendEvent('CmServices_service_get_item_end', $arrayParameters);
        return $arrayParameters['results'];
    }

    public function getList($start = null, $limit = null, $searchKeys = [], $searchValue = null, $orderKey = null, $order = 'ASC', $langId = 1, $count = false)
    {
        $arrayParameters = $this->makeArrayFromParameters(__METHOD__, func_get_args());
        $arrayParameters = $this->sendEvent('cmservices_service_get_list_start', $arrayParameters);

        $cmServicesTable = $this->getServiceManager()->get('CmServicesTable');
        $list = $cmServicesTable->getList(
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
        $arrayParameters = $this->sendEvent('cmservices_service_get_list_end', $arrayParameters);
        return $arrayParameters['results'];
    }

    public function saveItem($data, $id = null)
    {
        $arrayParameters = $this->makeArrayFromParameters(__METHOD__, func_get_args());
        $arrayParameters = $this->sendEvent('cmservices_service_save_item_start', $arrayParameters);

        if ($data) {
            $cmServicesTable = $this->getServiceManager()->get('CmServicesTable');
            $res = $cmServicesTable->save($arrayParameters['data'], $arrayParameters['id']);
        }

        $arrayParameters['result'] = $res;
        $arrayParameters = $this->sendEvent('cmservices_service_save_item_end', $arrayParameters);
        return $arrayParameters['result'];
    }

    public function deleteItem($id)
    {
        $arrayParameters = $this->makeArrayFromParameters(__METHOD__, func_get_args());
        $arrayParameters = $this->sendEvent('cmservices_service_delete_item_start', $arrayParameters);

        $cmServicesTable = $this->getServiceManager()->get('CmServicesTable');
        $res = $cmServicesTable->deleteById($arrayParameters['id']);

        $arrayParameters['result'] = $res;
        $arrayParameters = $this->sendEvent('cmservices_service_delete_item_end', $arrayParameters);
        return $arrayParameters['result'];
    }


}