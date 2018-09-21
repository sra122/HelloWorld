<?php

namespace HelloWorld\Crons;

use HelloWorld\Controllers\ContentController;
use Plenty\Modules\Cron\Contracts\CronHandler as Cron;

class ItemExportCron extends Cron
{
    public function __construct(ContentController $contentController)
    {
        $contentController->sendProductDetails();
    }
}