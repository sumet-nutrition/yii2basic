<?php


namespace app\controllers;



class HelloController  extends \yii\web\Controller{
    
    
    
    public function actionFirst() {
        echo 'สวัสดี controller';
        $title = 'แสดงในส่วน title';
        return $this->render('first', ['title'=>$title]);
    }
    
}