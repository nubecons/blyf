<!DOCTYPE html>
<html lang="en" class="">
<head>
  <meta charset="utf-8" />
  <title><?=$SiteInfo['site-title']?> - Control Panel</title>
 
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  
   <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('../admin/libs/assets/animate.css/animate.css') ?>
     <?= $this->Html->css('../admin/libs/assets/font-awesome/css/font-awesome.min.css') ?>
    <?= $this->Html->css('../admin/libs/jquery/bootstrap/dist/css/bootstrap.css') ?>
    <?= $this->Html->css('../admin/css/font.css') ?>
    <?= $this->Html->css('../admin/css/app.css') ?>
    

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
  

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
                <img src="img/a0.jpg" alt="...">
                <i class="on md b-white bottom"></i>
              </span>
              <span class="hidden-sm hidden-md"><?=$sUser['email']?></span> <b class="caret"></b>
            </a>
            <!-- dropdown -->
            <ul class="dropdown-menu animated fadeInRight w">
              <li class="wrapper b-b m-b-sm bg-light m-t-n-xs">
               
              
              </li>
              <li>
                <a href>
                  <span>Settings</span>
                </a>
              </li>
              <li>
                <a ui-sref="app.page.profile">Change Passoword</a>
              </li>
            
              <li class="divider"></li>
              <li>
                <a ui-sref="access.signin">Logout</a>
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
                <a href class="auto">      
                  <i class="glyphicon glyphicon-stats icon text-primary-dker"></i>
                  <span class="font-bold">Dashboard
                  </span>
                </a>
              </li>
                <li>
                <a href class="auto">  
                 <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span>
                      
                  <i class="glyphicon glyphicon-stats icon text-primary-dker"></i>
                  <span class="font-bold">Manage Categories</span>
                </a>
                <ul class="nav nav-sub dk">
                  <li class="nav-sub-header">
                    <a href>
                      <span>Layout</span>
                    </a>
                  </li>
                  <li>
                    <a href="layout_app.html">
                      <span>Application</span>
                    </a>
                  </li>
                  <li>
                    <a href="layout_fullwidth.html">
                      <span>Full width</span>
                    </a>
                  </li>
                  <li>
                    <a href="layout_boxed.html">
                      <span>Boxed layout</span>
                    </a>
                  </li>      
                </ul>
              </li>
              
              <li>
                <a href class="auto">  
                 <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span>
                      
                  <i class="glyphicon glyphicon-stats icon text-primary-dker"></i>
                  <span class="font-bold">Manage Store</span>
                </a>
                <ul class="nav nav-sub dk">
                  <li class="nav-sub-header">
                    <a href>
                      <span>Layout</span>
                    </a>
                  </li>
                  <li>
                    <a href="layout_app.html">
                      <span>Application</span>
                    </a>
                  </li>
                  <li>
                    <a href="layout_fullwidth.html">
                      <span>Full width</span>
                    </a>
                  </li>
                  <li>
                    <a href="layout_boxed.html">
                      <span>Boxed layout</span>
                    </a>
                  </li>      
                </ul>
              </li>
              
               <li>
                <a href class="auto">  
                 <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span>
                      
                  <i class="glyphicon glyphicon-stats icon text-primary-dker"></i>
                  <span class="font-bold">Manage Store</span>
                </a>
                <ul class="nav nav-sub dk">
                  <li class="nav-sub-header">
                    <a href>
                      <span>Layout</span>
                    </a>
                  </li>
                  <li>
                    <a href="layout_app.html">
                      <span>Application</span>
                    </a>
                  </li>
                  <li>
                    <a href="layout_fullwidth.html">
                      <span>Full width</span>
                    </a>
                  </li>
                  <li>
                    <a href="layout_boxed.html">
                      <span>Boxed layout</span>
                    </a>
                  </li>      
                </ul>
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
<?= $this->Html->script('../admin/libs/jquery/jquery/dist/jquery.js') ?>
<?= $this->Html->script('../admin/libs/jquery/bootstrap/dist/js/bootstrap.js') ?>
<?= $this->Html->script('../admin/js/ui-load.js') ?>
<?= $this->Html->script('../admin/js/ui-jp.config.js') ?>
<?= $this->Html->script('../admin/js/ui-jp.js') ?>
<?= $this->Html->script('../admin/js/ui-nav.js') ?>
<?= $this->Html->script('../admin/js/ui-toggle.js') ?>
<?= $this->Html->script('../admin/js/ui-client.js') ?>




</body>
</html>
