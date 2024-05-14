<?php

namespace api\modules\v1\controllers\hello;

use Yii;
use yii\web\Controller;
use common\models\hello\Hello;  

class HelloController extends Controller
{
    public function actionIndex()
    {
        // 使用MyTable模型查询所有数据  
        $userModel = new Hello();
        return $userModel::find()->all();
    }

}
