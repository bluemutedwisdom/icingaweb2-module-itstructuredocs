<?php
/* Icinga Web 2 OSMC Module (c) 2017 Icinga Development Team | GPLv2+ */
namespace Icinga\Module\Itstructuredocs;

use Icinga\Module\Monitoring\Hook\DetailviewExtensionHook;
use Icinga\Module\Monitoring\Object\MonitoredObject;
use Icinga\Module\Monitoring\Object\Service;
use Icinga\Module\Monitoring\Object\Host;


class DetailviewExtension extends DetailviewExtensionHook
{
    public function getHtmlForObject(MonitoredObject $object)
    {
        if ($object->getName() == "hardware-inventory") {


            // $hardinfo_out = '<h2>Detail View</h2><br><img src="/icingaweb2/img/hardwareinfo/logo-icinga.png"><br>';

            // $hardinfo_out = '';

            // return $hardinfo_out;
        
        }

    }


}
