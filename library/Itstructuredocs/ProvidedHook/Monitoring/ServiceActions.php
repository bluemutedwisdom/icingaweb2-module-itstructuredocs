<?php
namespace Icinga\Module\Itstructuredocs\ProvidedHook\Monitoring;

use Icinga\Module\Monitoring\Object\Host;
use Icinga\Module\Monitoring\Object\Service;
use Icinga\Module\Monitoring\Web\Hook\ServiceActionsHook;
use Icinga\Web\Url;

class ServiceActions extends ServiceActionsHook
{
    public function getActionsForService(Service $service)
    {
        // $elements = array();
        
        // if ($service->getName() == "hardware-inventory") {
        //     $elements = array();
        //     $elements[mt('hardwareinfo', 'Hardware Information')] = array('url'  => Url::fromPath('hardwareinfo/tree', array('host' => $service->getHost()->getName())),
        //     'icon' => 'host',
            
        //     );
        // }



        // return $this->createNavigation($elements);

    }
}