<?php


namespace frontend\controllers;


use yii\web\Controller;

class PostCommentController extends Controller//каждые слово с большой буквы (в строке будет post-comment) и всегда с Controller
{
    public $a = 17;
    public $b = 20;
    public $defaultAction = 'summa';//переназначить метод по умолчанию

    public function actions()
    {
        return [
            // объявляет "testik" действие с помощью названия класса
            'testik' => 'app\components\HelloAction'
        ];
    }
    public function actionIndex ()//всегда public
    {
        return __METHOD__;
    }

    public function actionSumma ()
    {
        return $this->a + $this->b;
    }
}