<?php

namespace api\modules\v1\controllers\hello;

use Yii;
use yii\web\Controller;


class HelloController extends Controller
{
    public function actionIndex()
    {
        return "hello world";
    }

}
