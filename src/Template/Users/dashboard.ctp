
  <section id="Order Page Section" class="">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-12">
                  <div class="mrgn-btm25 mrgn-top">
                 
                	<?=$this->element('dashboard_header', ['activeTab' => 'bio']);?>
                    
                    <div class="tab-content bckgrnd-white" id="myTabContent">
                      <div class="tab-pane fade show active" id="bio" role="tabpanel" aria-labelledby="home-tab">
                     
                        <div class="container">
                    
                        <div class="col-6">
                        <?php echo $this->Form->create($user, ["class" => "form-horizontal" , 'enctype' => 'multipart/form-data']); ?>
                            <div class="row">
                            
                            <div class="col-6">
                            <div class="form-group">
                                <label class="control-label font-size14">First Name</label>
                                
                                <?= $this->Form->control('first_name' ,['label'=>false,  "class" => "form-control" ,]) ?>
                            </div>
                            </div>
                            <div class="col-6">
                            <div class="form-group">
                                <label class="control-label font-size14">Last Name </label>
                                <?= $this->Form->control('last_name' ,[  'label'=>false,  "class" => "form-control" ,]) ?>
                            </div>
                            </div>
                            
                                <div class="col-6">
                            <div class="form-group">
                                <label class="control-label font-size14">Height (cm)</label>
                               
                                <?= $this->Form->control('height' ,[ 'max' => 500,  "min" =>"0" , "placeholder" => "0.00" , "type" => "number"  , 'label'=>false,  "class" => "form-control" ,]) ?>
                                </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="control-label font-size14">Weight (kg)</label>
                                <?= $this->Form->control('weight' ,[ 'max' => 500,  "min" =>"0" , "placeholder" => "0.00" , "type" => "number"  , 'label'=>false,  "class" => "form-control" ,]) ?>
                                </div>
                        </div>
                        <div class="col-6">
                        <p class="form-control-static font-size14">Gender <?= $user->gender?></p>
                        <label class="blyf2-checkbox">
                         <input type="radio" name="gender" value="male" <?php if($user->gender == 'male'){?> checked <?php }?> >
                        <div class="font-size14">Male</div>
                        </label>
                        <label class="blyf2-checkbox">
                        <input type="radio" name="gender" value="female"  <?php if($user->gender == 'female'){?> checked <?php }?> >
                        <div class="font-size14">Female</div>
                        </label>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                    <label class="control-label font-size14">Date of Birth</label>
                      <?= $this->Form->control('dob' ,[ 'label'=>false,  "class" => "form-control" ,]) ?>
                    </div>
                        </div>
                        <div class="col-6">
                        <div class="form-group">
                        <label class="control-label font-size14">Meals Per Day</label>
                         <?= $this->Form->control('meals_per_day' , [ 'empty' =>'Please Select','options' => $MealsPerDay,  'label'=>false,  "class" => "form-control bg-grey" ,]) ?>
                       
                            </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="control-label font-size14">Recommended Kcal per meal</label>
                                    <input disabled="" name="recommended" class="form-control" value="">
                                </div>
                            </div>
                            <div class="col-6">
                            <div class="form-group">
                            <label class="control-label font-size14">Activity Level</label>
                             <?= $this->Form->control('activity_level' , [ 'empty' =>'Please Select','options' => $ActivityLevel,  'label'=>false,  "class" => "form-control bg-grey" ,]) ?>
                          
                             </div>
                              </div>
                              <div class="col-6">
                              <div class="form-group">
                               <label class="control-label font-size14">Goal</label>
                                <?= $this->Form->control('goal' , [ 'empty' =>'Please Select','options' => $Goal,  'label'=>false,  "class" => "form-control bg-grey" ,]) ?>
                               </div>
                               </div>
                               <div class="col-12">
                                <p>Enter desired nutrients weights to calculate calories:</p> 
                                <br>
                               </div>
                               <div class="col-4">
                               <div class="form-group">
                               <label class="control-label font-size14">Fats (g)</label>
                                <?= $this->Form->control('fats' ,[ 'max' => 500,  "min" =>"0" , "placeholder" => "0.00" , "type" => "number"  , 'label'=>false,  "class" => "form-control" ,]) ?>
                               </div>
                               </div>
                               <div class="col-4">
                               <div class="form-group">
                               <label class="control-label font-size14">Proteins (g)</label>
                                <?= $this->Form->control('proteins' ,[ 'max' => 500,  "min" =>"0" , "placeholder" => "0.00" , "type" => "number"  , 'label'=>false,  "class" => "form-control" ,]) ?>
                               </div>
                               </div>
                               <div class="col-4">
                               <div class="form-group">
                               <label class="control-label font-size14">Carbs (g)</label>
                                <?= $this->Form->control('carbs' ,[ 'max' => 500,  "min" =>"0" , "placeholder" => "0.00" , "type" => "number"  , 'label'=>false,  "class" => "form-control" ,]) ?>
                               </div>
                               </div>
                            </div>
                             <div class="pull-right mrgn-top">
                            <button class="cta-brown order-now button" type="submit">Save Changes</button>
                             </div>
                             <?= $this->Form->end() ?>
                        </div>
                      <?php /*?>  <div class="col-6">
                        <div role="alert" class="alert alert-warning font-size14">Please fill in your personal data to get recommendations.</div>
                                <div id="live-poll-area">
                      <div class="graph-container">
                        <div class="graph"></div>
                      </div>
                      <div class="answer-list"></div>
                        <div class="kcal-txt-profile">
                            <span class="kcal-txt-hdng">441</span>
                                <span class="kcal-txt">KCal</span>
                                <span class="kcal-txt-small">per meal</span>
                        </div>
                    </div>
                    <div class="percent-chart right0">
                            <div style="background-color: rgb(206, 15, 66);">40%</div>
                            <div style="background-color: rgb(114, 190, 68);">36%</div>
                            <div style="background-color: rgb(241, 86, 55);">24%</div>
                        </div>
                        <div class="mrgn-top chrg-txt">
                          <p>To get personalised food recommendations based on your genetics, connect your DNAFit account now.</p>
                            </div>
                            <div class="box-btn text-center">
                                                <a href="#" class="cta-brown order-now button">Connect DNAFit Account</a>
                                            </div>
                        </div><?php */?>
                    
                        </div>
                    
                      </div>
                      <?=$this->element('dashboard_body');?>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<?=$this->element('footer');?>