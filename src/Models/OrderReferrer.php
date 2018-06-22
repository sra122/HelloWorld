<?php

namespace HelloWorld\Models;

use Plenty\Modules\Plugin\DataBase\Contracts\Model;

class OrderReferrer extends Model
{
    public $id = 0;

    public function getTableName(): string
    {
        return 'HelloWorld::OrderReferrer';
    }
}