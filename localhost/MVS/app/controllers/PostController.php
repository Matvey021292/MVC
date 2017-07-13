<?php
/**
 * Created by PhpStorm.
 * User: student
 * Date: 13.07.2017
 * Time: 19:29
 */

namespace app\controllers;


use \core\base\Controller;

class PostController extends Controller
{
    public function actionIndex(){
        $this->render('post');
    }
}