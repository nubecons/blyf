<?php /*?><div class="container w-xxl w-auto-xs" ng-controller="SigninFormController" ng-init="app.settings.container = false;">
  <a href class="navbar-brand block m-t">Recruitment</a>
  <div class="m-b-lg">
    <div class="wrapper text-center">
      <strong>Sign in to find opportunity</strong>
    </div>
    <form name="form" class="form-validation">
      <div class="text-danger wrapper text-center" ng-show="authError">
          
      </div>
      <div class="list-group list-group-sm">
        <div class="list-group-item">
          <input type="email" placeholder="Email" class="form-control no-border" ng-model="user.email" required>
        </div>
        <div class="list-group-item">
           <input type="password" placeholder="Password" class="form-control no-border" ng-model="user.password" required>
        </div>
      </div>
      <button type="submit" class="btn btn-lg btn-primary btn-block" ng-click="login()" ng-disabled='form.$invalid'>Log in</button>
      <div class="text-center m-t m-b"><a ui-sref="access.forgotpwd">Forgot password?</a></div>
      <div class="line line-dashed"></div>
      <p class="text-center"><small>Do not have an account?</small></p>
      <a ui-sref="access.signup" class="btn btn-lg btn-default btn-block">Create an account</a>
    </form>
  </div>
</div><?php */?>

<?php $site_url = $this->Url->build('/',true); ?> 


				
                <div class="container w-xxl w-auto-xs " >
                
               <a href class="navbar-brand block m-t"><?=$SiteInfo['site-name']?></a>
               
               
                   <?= $this->Flash->render() ?>
                
                    
                  
                    <div class="well m-t bg-light lt">
                     <div class="wrapper text-center ">
      					<strong>Sign in</strong>
   					 </div>
                    
                       <?= $this->Form->create('',['class' => ""] ) ?>
                            <div class="row">
                             
                                <label for="sender-email" class="col-sm-3">Email:</label>
                               
                                 <div class="col-sm-9">
                                <div class="input-icon"><i class="icon-user fa"></i>
                                <?= $this->Form->text('email' ,[  "id" => "sender-email" ,  "class" => "form-control" , "placeholder"=>"Email"]) ?>
                                  
                                </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <label for="user-pass" class="control-label col-sm-3">Password:</label>
                             <div class="col-sm-9">
                                <div class="input-icon"><i class="icon-lock fa"></i>
                                <?= $this->Form->password('password' ,[  "id" => "user-passl" ,  "class" => "form-control" , "placeholder"=>"Password"]) ?>
                                </div>
                                </div>
                            </div>
                           <br>
                            <div class="row text-center">
                               <label for="" class="control-label col-sm-3"></label>
                               <div class="col-sm-4">
                                <button type="submit" class="btn btn-primary  btn-block">Login</button>
                                </div>
                                <div class="col-sm-6">
                                  <p class="text-center pull-right">
                                </div>
                                
                            </div>
                        <?= $this->Form->end() ?>
                    </div>
              
                
                </div>
           
   
   
   
   