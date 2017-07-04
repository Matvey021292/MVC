<?php
namespace core\base;
/**
 * Created by PhpStorm.
 * User: student
 * Date: 04.07.2017
 * Time: 20:44
 */
abstract class Controller
{
    protected $_view;

    public function __construct()
    {
        $this->_view = new View();

    }
    abstract public function actionIndex();

    /**
     * @param $tpl
     * @param array $data
     * @return mixed
     */

    public function render($tpl, $data=[]){

        return $this->_view->render($tpl, $data);

    }

}