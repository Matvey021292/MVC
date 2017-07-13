<?php

namespace app\controllers;


use core\base\Controller;

class PostController extends Controller
{
    public function actionCreate(){
        //todo add rpoduct to db
    }
    public function actionDelete($id){
        //todo delete product from db
    }
    public function actionIndex(){
        $this->render('post');
    }
}