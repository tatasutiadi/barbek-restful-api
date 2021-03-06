<?php

namespace app\controllers;


use yii\filters\Cors;


class Controller extends  \yii\rest\Controller{
    
    // Override behaviors() untuk menambahkan \yii\filters\Cors
    public function behaviors(){
        $behaviors = parent::behaviors();
        
        // unset / hapus authenticator
        unset($behaviors['authenticator']);
        
        // tambahkan cors filter
        $behaviors['corsFilter'] = [
        'class' => Cors::className(),
        ];
        return $behaviors;
        
    }
    
}