<?php
use yii\helpers\Html;
?>
</<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <?= Html::csrfMetaTags();?>
    <title><?php echo Html::encode($this->title)?></title>
    <?php $this->registerMetaTag(["name"=>"viewport","content"=>"width=device-width, initial-scale=1.0"]);?>
    <?php  $this->registerCssFile("/css/bootstrap.css");?>
    <?php $this->registerCssFile("http://cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap-theme.min.css");?>

    <?php $this->registerJsFile("js/jquery-1.11.1.min.js");?>
    <?php $this->registerJsFile("/js/bootstrap.min.js");?>

    <?php $this->registerCssFile("/css/xenon-core.css"); ?>

    <?php $this->head()?>
</head>

<body>
<body>
<?php $this->beginBody() ?>
  <div class="wrap">
      <?php $navHeader=\app\module\Front\widget\NavHeader::begin(["parent"=>4,"sub"=>10]);?>

      <?php $navHeader->end();?>
    <div class="container">
    <?php echo $content;?>
    </div>
  </div>
<?php $this->endBody();?>
</body>
</body>
</html>
<?php $this->endPage();?>
