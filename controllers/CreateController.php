<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\web\Response;

class CreateController extends Controller {
    public function actionIndex() {
        $posts = Yii::$app->db->createCommand('SELECT * FROM Persons')->queryAll();
        return $this->render('index', ['posts'=>$posts]);
    }
    public function actionCreate() {
        $request = Yii::$app->request;
        if ($request->isPost) {
            Yii::$app->db->createCommand()->insert('Persons', [
                'username' => Yii::$app->request->post()['email'],
                'password' => '11234',
                'isAdmin' => 1
            ])->execute();
        }   
        return $this->render('create');
    }
}