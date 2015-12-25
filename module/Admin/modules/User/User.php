<?php

namespace app\module\Admin\modules\User;

class User extends \yii\base\Module
{
    public $controllerNamespace = 'app\module\Admin\modules\User\controllers';
    public $basePath=__DIR__;

    public function init()
    {
        parent::init();
    }
}
