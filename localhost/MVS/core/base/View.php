<?php
/**
 * Created by PhpStorm.
 * User: student
 * Date: 04.07.2017
 * Time: 20:48
 */

namespace core\base;


class View
{
    protected $_layout = 'app/views/layout.php';

    public function render($tpl,$data){
    $path = 'app/view'.$tpl. '.php';
        if (file_exists($tpl)){
            throw new \Exception('View file' .$path);
        }
        $content = include $path;
        return include $this->_layout;
    }
}