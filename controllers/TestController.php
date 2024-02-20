<?php

namespace app\controllers;
class TestController extends \yii\rest\Controller
{
    public function ActionIndex(){
        return [
            'asd' => 1,
            'dsa' => 2,
            'wdsa' => 'Жизнь',
        ];
    }
}