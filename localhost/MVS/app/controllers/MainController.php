<?php
/**
 * Created by PhpStorm.
 * User: student
 * Date: 04.07.2017
 * Time: 20:17
 */

namespace app\controllers;


use core\base\Controller;

class MainController extends Controller
{
public function actionIndex()
{
    // TODO: Implement actionIndex() method.
    $this->render('home');
}
}