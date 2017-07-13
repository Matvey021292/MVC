<?php
/**
 * Created by PhpStorm.
 * User: student
 * Date: 13.07.2017
 * Time: 20:55
 */

namespace core\components;


class DB
{
    private $confir;
    public function  __construct()
    {
        $this->_config =require '.core/config/db.php';
    }

}