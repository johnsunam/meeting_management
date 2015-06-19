<?php
namespace frontend\controllers;

use yii\web\Controller;

class CustomerController extends Controller{
    public function actionIndex(){
        $records = $this->getRecordsAccordingToQuery();
        $this->render('index', compact('records'));
}
}