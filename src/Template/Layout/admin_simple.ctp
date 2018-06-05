<!DOCTYPE html>
<html lang="en" class="">
<head>
  <meta charset="utf-8" />
  <title><?=$SiteInfo['site-title']?></title>
 
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  
   <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('../admin/libs/assets/animate.css/animate.css') ?>
    <?= $this->Html->css('../admin/libs/jquery/bootstrap/dist/css/bootstrap.css') ?>
    <?= $this->Html->css('../admin/css/font.css') ?>
    <?= $this->Html->css('../admin/css/app.css') ?>
    

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
  

</head>
<body>
<div class="app app-header-fixed ">
 <?= $this->fetch('content') ?>
</div>


 <?= $this->Html->css('../libs/jquery/jquery/dist/jquery.js') ?>
 <?= $this->Html->css('../libs/jquery/bootstrap/dist/js/bootstrap.js') ?>



</body>
</html>
