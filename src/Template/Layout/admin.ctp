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
<html>
    <head>
        <meta charset="utf-8" />
        <title><?=$SiteInfo['site-title']?> - Control Panel</title>

        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <?= $this->Html->meta('icon') ?>
	<?= $this->fetch('meta') ?>

    <?= $this->Html->css('../admin/libs/assets/animate.css/animate.css') ?>
     <?= $this->Html->css('../admin/libs/assets/font-awesome/css/font-awesome.min.css') ?>
    <?= $this->Html->css('../admin/libs/jquery/bootstrap/dist/css/bootstrap.css') ?>
    <? // $this->Html->css('../admin/libs/jquery/plugins/integration/bootstrap/3/dataTables.bootstrap.js') ?>
    <?= $this->Html->css('../admin/css/font.css') ?>
    <?= $this->Html->css('../admin/css/app.css') ?>
    <?= $this->fetch('css') ?>

    <?= $this->Html->script('../admin/libs/jquery/jquery/dist/jquery.js') ?>
	<?= $this->Html->script('../admin/libs/jquery/bootstrap/dist/js/bootstrap.js') ?>
	<?= $this->Html->script('../admin/js/ui-load.js') ?>
	<?= $this->Html->script('../admin/js/ui-jp.config.js') ?>
	<?= $this->Html->script('../admin/js/ui-jp.js') ?>
	<?= $this->Html->script('../admin/js/ui-nav.js') ?>
	<?= $this->Html->script('../admin/js/ui-toggle.js') ?>
	<?= $this->Html->script('../admin/js/ui-client.js') ?>
    <?= $this->Html->script('../admin/libs/jquery/datatables/media/js/jquery.dataTables.min.js') ?>
    <?= $this->Html->script('../admin/libs/jquery/plugins/integration/bootstrap/3/dataTables.bootstrap.js') ?>
    <?= $this->fetch('script') ?>  
	<script>
    $(document).ready(function() {
        $('#data_table').DataTable();
    })
    </script>


    <?php $site_url = $this->Url->build('/',true); ?> 
    </head>
    <body>
        <div class="app app-header-fixed ">


            <!-- header -->
            <header id="header" class="app-header navbar" role="menu">
                <!-- navbar header -->
                <div class="navbar-header bg-dark">
                    <button class="pull-right visible-xs dk" ui-toggle-class="show" target=".navbar-collapse">
                        <i class="glyphicon glyphicon-cog"></i>
                    </button>
                    <button class="pull-right visible-xs" ui-toggle-class="off-screen" target=".app-aside" ui-scroll="app">
                        <i class="glyphicon glyphicon-align-justify"></i>
                    </button>
                    <!-- brand -->
                    <a href="#/" class="navbar-brand text-lt">
                        <i class="fa fa-btc"></i>

                        <span class="hidden-folded m-l-xs"><?=$SiteInfo['site-name']?></span>
                    </a>
                    <!-- / brand -->
                </div>
                <!-- / navbar header -->

                <!-- navbar collapse -->
                <div class="collapse pos-rlt navbar-collapse box-shadow bg-white-only">
                    <!-- buttons -->
                    <div class="nav navbar-nav hidden-xs">
                        <a href="#" class="btn no-shadow navbar-btn" ui-toggle-class="app-aside-folded" target=".app">
                            <i class="fa fa-dedent fa-fw text"></i>
                            <i class="fa fa-indent fa-fw text-active"></i>
                        </a>
                        <a href="#" class="btn no-shadow navbar-btn" ui-toggle-class="show" target="#aside-user">
                            <i class="icon-user fa-fw"></i>
                        </a>
                    </div>
                    <!-- / buttons -->




                    <!-- nabar right -->
                    <ul class="nav navbar-nav navbar-right">

                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle clear" data-toggle="dropdown">
                                <span class="thumb-sm avatar pull-right m-t-n-sm m-b-n-sm m-l-sm">
                                    <img src="<?=$site_url?>admin/img/a0.jpg" alt="...">
                                    <i class="on md b-white bottom"></i>
                                </span>
                                <span class="hidden-sm hidden-md"><?=$sUser['email']?></span> <b class="caret"></b>
                            </a>
                            <!-- dropdown -->
                            <ul class="dropdown-menu animated fadeInRight w">
                                <li class="wrapper b-b m-b-sm bg-light m-t-n-xs">
                                </li>
                                <li>
                                    <a href="<?=$site_url?>admin/users/profile"  > 
                                        Settings
                                    </a>
                                </li>
                                <li>
                                    <a href="<?=$site_url?>admin/users/change-password"  > Change Passoword</a>
                                </li>

                                <li class="divider"></li>
                                <li>
                                    <a href="<?=$site_url?>admin/users/logout"  >Logout</a>
                                </li>
                            </ul>
                            <!-- / dropdown -->
                        </li>
                    </ul>
                    <!-- / navbar right -->
                </div>
                <!-- / navbar collapse -->
            </header>
            <!-- / header -->


            <!-- aside -->
            <aside id="aside" class="app-aside hidden-xs bg-dark">
                <div class="aside-wrap">
                    <div class="navi-wrap">


                        <!-- nav -->
                        <nav ui-nav class="navi clearfix">
                            <ul class="nav">

                                <li>
                                    <a href="#" class="auto">      
                                        <i class="glyphicon glyphicon-stats icon text-primary-dker"></i>
                                        <span class="font-bold">Dashboard
                                        </span>
                                    </a>
                                </li>

                                <li class="line dk"></li>
                                <li>
                                    <a href="#" class="auto">  
                                        <span class="pull-right text-muted">
                                            <i class="fa fa-fw fa-angle-right text"></i>
                                            <i class="fa fa-fw fa-angle-down text-active"></i>
                                        </span>

                                        <i class="glyphicon glyphicon-edit"></i>
                                        <span class="font-bold">CMS</span>
                                    </a>
                                    <ul class="nav nav-sub dk">

                                        <li>
                                            <a href="<?=$site_url?>admin/pages">
                                                <span>All Pages</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a  href="<?=$site_url?>admin/pages/add">
                                                <span>Add New Page</span>
                                            </a>
                                        </li> 

                                    </ul>
                                </li>


                                <li>
                                    <a href="#" class="auto">  
                                        <span class="pull-right text-muted">
                                            <i class="fa fa-fw fa-angle-right text"></i>
                                            <i class="fa fa-fw fa-angle-down text-active"></i>
                                        </span>

                                        <i class="glyphicon glyphicon-file icon"></i>
                                        <span class="font-bold">Blogs</span>
                                    </a>
                                    <ul class="nav nav-sub dk">
                                        <li>
                                            <a href="<?=$site_url?>admin/BlogCategories">
                                                <span>Blog Categories</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?=$site_url?>admin/BlogCategories/add">
                                                <span>Add New Category</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?=$site_url?>admin/Blogs">
                                                <span>Posts</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?=$site_url?>admin/Blogs/add">
                                                <span>Add New Post</span>
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="auto">  
                                        <span class="pull-right text-muted">
                                            <i class="fa fa-fw fa-angle-right text"></i>
                                            <i class="fa fa-fw fa-angle-down text-active"></i>
                                        </span>

                                        <i class="fa fa-bank"></i>
                                        <span class="font-bold">Stores</span>
                                    </a>
                                    <ul class="nav nav-sub dk">
                                        <li class="nav-sub-header">
                                            <a href="#">
                                                <span>Stores</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?=$site_url?>admin/stores">
                                                <span>All Stores</span>
                                            </a>
                                        </li> 
                                        <li>
                                            <a href="<?=$site_url?>admin/stores/add">
                                                <span>Add Store</span>
                                            </a>
                                        </li>
                                      <!--  <li>
                                            <a href="#">
                                                <span>Pick Up Timings</span>
                                            </a>
                                        </li>-->

                                    </ul>
                                </li>

                                <li>
                                    <a href="#" class="auto">  
                                        <span class="pull-right text-muted">
                                            <i class="fa fa-fw fa-angle-right text"></i>
                                            <i class="fa fa-fw fa-angle-down text-active"></i>
                                        </span>

                                        <i class="glyphicon glyphicon-th"></i>
                                        <span class="font-bold">Food Categories</span>
                                    </a>
                                    <ul class="nav nav-sub dk">
                                      
                                        <li>
                                            <a href="<?=$site_url?>admin/categories">
                                                <span>All Categories</span>
                                            </a>
                                        </li> 
                                        <li>
                                            <a href="<?=$site_url?>admin/categories/add">
                                                <span>Add Category</span>
                                            </a>
                                        </li>     
                                        
                                         <li>
                                            <a href="<?=$site_url?>admin/categories/sub">
                                                <span>All Sub Categories</span>
                                            </a>
                                        </li> 
                                        <li>
                                            <a href="<?=$site_url?>admin/categories/add_sub">
                                                <span>Add Sub Category</span>
                                            </a>
                                        </li>     
                                        
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="auto">  
                                        <span class="pull-right text-muted">
                                            <i class="fa fa-fw fa-angle-right text"></i>
                                            <i class="fa fa-fw fa-angle-down text-active"></i>
                                        </span>

                                        <i class="glyphicon glyphicon-stats"></i>
                                        <span class="font-bold">Allergens</span>
                                    </a>
                                    <ul class="nav nav-sub dk">
                                        <li class="nav-sub-header">
                                            <a href="#">
                                                <span>Allergens</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?=$site_url?>admin/allergens">
                                                <span>All Allergens</span>
                                            </a>
                                        </li> 
                                        <li>
                                            <a href="<?=$site_url?>admin/allergens/add">
                                                <span>Add Allergens</span>
                                            </a>
                                        </li>     
                                    </ul>
                                </li>
                                
                                <li>
                                    <a href="#" class="auto">  
                                        <span class="pull-right text-muted">
                                            <i class="fa fa-fw fa-angle-right text"></i>
                                            <i class="fa fa-fw fa-angle-down text-active"></i>
                                        </span>

                                        <i class="glyphicon glyphicon-leaf"></i>
                                        <span class="font-bold">Ingredients</span>
                                    </a>
                                    <ul class="nav nav-sub dk">
                                        <li class="nav-sub-header">
                                            <a href="#">
                                                <span>Ingredients</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?=$site_url?>admin/ingredients">
                                                <span>All Ingredients</span>
                                            </a>
                                        </li> 
                                        <li>
                                            <a href="<?=$site_url?>admin/ingredients/add">
                                                <span>Add Ingredients</span>
                                            </a>
                                        </li>     
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="auto">  
                                        <span class="pull-right text-muted">
                                            <i class="fa fa-fw fa-angle-right text"></i>
                                            <i class="fa fa-fw fa-angle-down text-active"></i>
                                        </span>

                                        <i class="fa fa-cutlery"></i>
                                        <span class="font-bold">Meals</span>
                                    </a>
                                    <ul class="nav nav-sub dk">
                                       
                                        <li>
                                            <a href="<?=$site_url?>admin/products">
                                                <span>All Dishes</span>
                                            </a>
                                        </li> 
                                         <li>
                                            <a href="<?=$site_url?>admin/products/add">
                                                <span>Add New Dish</span>
                                            </a>
                                        </li> 
                                        <li>
                                            <a href="<?=$site_url?>admin/meals">
                                                <span>All Ready Meals</span>
                                            </a>
                                        </li>  
                                         <li>
                                            <a href="<?=$site_url?>admin/meals/add">
                                                <span>Add Ready Meals</span>
                                            </a>
                                        </li> 
                                    </ul>
                                </li>




                                <li class="line dk"></li>

                                <li>
                                    <a href="#" class="auto">      
                                        <i class="glyphicon glyphicon-list"></i>
                                        <span class="font-bold">Orders Management</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="auto">      
                                        <i class="fa fa-ticket"></i>
                                        <span class="font-bold">Points Management</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="auto">      
                                        <i class="fa fa-clipboard"></i>
                                        <span class="font-bold">Feedback Management
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="auto">      
                                        <i class="fa fa-money"></i>
                                        <span class="font-bold">Coupon Management
                                        </span>
                                    </a>
                                </li>

                            </ul>
                        </nav>
                        <!-- nav -->
                    </div>
                </div>
            </aside>
            <!-- / aside -->


            <!-- content -->
            <div id="content" class="app-content" role="main">
                <div class="app-content-body ">
	   <?= $this->Flash->render() ?>

	    <?= $this->fetch('content') ?>
                </div>
            </div>
            <!-- /content -->

            <!-- footer -->
            <footer id="footer" class="app-footer" role="footer">
                <div class="wrapper b-t bg-light">
      <?=$SiteInfo['copy_rights']?>
                </div>
            </footer>
            <!-- / footer -->



        </div>





    </body>
</html>