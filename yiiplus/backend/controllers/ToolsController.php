<?php

namespace backend\controllers;

use yii\base\Model;
use common\models\LoginForm;
class ToolsController extends \yii\web\Controller
{
    public function actionUpload()
    {
        $model = new LoginForm();
        return $this->render('upload',[
            'model'=>$model,
        ]);
    }

}
