<?php

$form=\yii\widgets\ActiveForm::begin([
    "id" => "login",
    "options" => ["class" => "form-horizontal"]
]);
?>
<?php echo $form->field($model, "username"); ?>
<?php echo $form->field($model, "pwd")->passwordInput(); ?>
<div class="form-group">
    <div class="col-lg-offset-1 col-lg-11">
        <?php echo \yii\helpers\Html::submitButton("login", ["class" => "btn btn-primary"]); ?>
    </div>
</div>
<?php \yii\widgets\ActiveForm::end();?>
