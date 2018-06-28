

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
                                <?= $this->Form->control('email' ,[ 'label'=>false, "id" => "sender-email" ,  "class" => "form-control" , "placeholder"=>"Email"]) ?>
                                  
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
           
   
   
   
   