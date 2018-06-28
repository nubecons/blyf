<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title><?=$SiteInfo['site-title']?></title>
<?= $this->Html->meta('icon') ?>
<?= $this->fetch('meta') ?>


<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700" rel="stylesheet">  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">




<?= $this->Html->css('meanmenu.min.css') ?>

<?= $this->Html->css('owl.theme.default.css') ?>
<?= $this->Html->css('bootstrap.min.css') ?>
<?= $this->Html->css('style.css') ?>
<?= $this->Html->css('custom.css') ?>

<?= $this->fetch('css') ?>

<?= $this->Html->script('jquery.js') ?>

<?= $this->Html->script('jquery.meanmenu.min.js') ?>
<?php /*?><?= $this->Html->script('custom_scripts.js') ?>
<?= $this->Html->script('wow.min.js') ?><?php */?>
<?= $this->Html->script('bootstrap.min.js') ?>
<?= $this->Html->script('isotope.pkgd.min.js') ?>
<?= $this->fetch('script') ?>
    
	<script>
		$(document).ready(function(){
			function add_header_sticky(){
			    if ($(window).scrollTop() >= 100) {
			        $('body').addClass('sticky-header');
			    }
			    else {
			        $('body').removeClass('sticky-header');
			    }
			}
			$(window).scroll(add_header_sticky);
			add_header_sticky();

			$(".mobile-nav").meanmenu();
		 	
		});
 	</script>


<?php $site_url = $this->Url->build('/',true); ?> 

</head>
<body>

    <?=$this->element('header');?>
  
    
    <div class="container">
	<?= $this->Flash->render() ?>
    </div>
    
	<?= $this->fetch('content') ?>

	<?=$this->element('footer');?>
    
	
</body>
</html>