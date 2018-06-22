<?php

namespace HelloWorld\Models;

use Plenty\Modules\Plugin\DataBase\Contracts\Model;

class OrderReferrer extends Model
{
    public $id = 0;
    public $isEditable = false;
    public $backendName = '';
    public $name = '';
    public $origin = '';
    public $isFilterable = false;


    public function getTableName(): string
    {
        return 'HelloWorld::OrderReferrer';
    }
}