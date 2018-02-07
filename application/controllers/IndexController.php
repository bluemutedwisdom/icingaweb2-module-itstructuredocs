<?php

namespace Icinga\Module\Itstructuredocs\Controllers;

use Icinga\Web\Controller\ModuleActionController;
use Icinga\Module\Itstructuredocs\Reports;

class IndexController extends ModuleActionController
{
    public function indexAction()
    {
        $this->view->reportHeader = Reports::getHeader();
    }
}
