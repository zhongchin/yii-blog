<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/11/24
 * Time: 17:30
 */
namespace app\module\Front\widget;

use yii\base\widget;
use app\models\Columns;

class NavHeader extends  Widget{
    public $parent=5;//父类别数量
    public $sub=10;//子类别的数量

     public function init(){
        parent::init();

     }
     public function run(){
         $parents=Columns::find()->limit($this->parent)->where(["pid"=>0])->offset(0)->all();
     }
}