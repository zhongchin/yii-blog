<?php

namespace app\module\Admin;

class Admin extends \yii\base\Module
{
    public $controllerNamespace = 'app\module\Admin\controllers';

    public function init()
    {
        parent::init();
        $this->modules=[
           'user' => [
               'class' => 'app\module\Admin\modules\User\User',
           ],
       ];
        // custom initialization code goes here
    }
}
