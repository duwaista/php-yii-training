<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\web\Response;

class VueController extends Controller
{

    public function actionVue()
    {
        return $this->render('vue');
    }
}