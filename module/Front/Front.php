<?php

namespace app\module\Front;

class Front extends \yii\base\Module
{
    public $controllerNamespace = 'app\module\Front\controllers';
    public   $layout="front";
    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
}
