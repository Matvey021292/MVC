<?php

namespace core\base;

class Controller{

   public function render($template){

      $cont = "app/views/".$template .'.php';
      $cont = include $cont;
       return $cont;
    }
    public function actionCreate(){

    }


}
?>
