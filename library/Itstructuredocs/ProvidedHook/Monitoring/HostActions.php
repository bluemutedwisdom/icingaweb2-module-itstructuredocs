<?php
namespace Icinga\Module\Itstructuredocs\ProvidedHook\Monitoring;
use Icinga\Module\Monitoring\Web\Hook\HostActionsHook;
use Icinga\Module\Monitoring\Object\Host;
use Icinga\Web\Url;

class HostActions extends HostActionsHook
{
    public function getActionsForHost(Host $host)
    {
        
        $elements = array();
        
        // $elements[mt('hardwareinfo', 'Hardware Information')] = array('url' => Url::fromPath('hardwareinfo/tree',
        //     array('host' => $host->getName())),
        //     'icon' => 'host',
        //);

        $elements[mt('itstructuredocs', 'Host documentation')] = array('url' => Url::fromPath('/icingaweb2/doc/module/itstructuredocs/chapter/'.$host->getName()),
            'icon' => 'info-circled', 'data-base-target' => "_next",
        );

        return $this->createNavigation($elements);

    }
   

}