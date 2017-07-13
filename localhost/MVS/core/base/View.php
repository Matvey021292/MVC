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
    private $_css =[];

    public function render($tpl,$data){
    $path = '/app/views/'.$tpl. '.php';
        if (file_exists($path)){
            throw new \Exception('View file' .$path);
        }
        $content = include $path;
        return include $this->_layout;
    }
    public function addCss($file){
        $this->_css[] = $file;
    }
    public function renderCss(){
        foreach ($this->_css as $css){
            echo "<link rel='stylesheet' href=assets/css/".$css.'">';
        }
    }
    public function addJs($file){
        $this->_js[]=$file;

    }
    public function renderJs(){
        foreach ($this->_Js as $js){
            echo "<script src='assets/js/$js'></script>";
        }
    }
}