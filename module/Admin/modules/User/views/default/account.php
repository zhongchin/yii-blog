<?php
$form=\yii\widgets\ActiveForm::begin([
     "id"=>"account",
     "options"=>[
          "class"=>"form-horizontal",
          "method"=>"post",
         'enctype' => 'multipart/form-data'
   ]
]);
?>
<?php echo $form->field($model,"username");?>
<?php echo $form->field($model,"pwd")->passwordInput();?>
<?php echo $form->field($model,"confirmPwd")->passwordInput();?>
<?php echo $form->field($model,"avatar")->fileInput();?>
<div class="form-group">
    <div class="col-lg-offset-1 col-lg-11">
        <?php echo \yii\helpers\Html::submitButton("login", ["class" => "btn btn-primary"]); ?>
    </div>
</div>
<?php \yii\widgets\ActiveForm::end();?>