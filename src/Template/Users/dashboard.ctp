<?php $site_url = $this->Url->build('/',true); ?> 
<link href="http://netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css" rel="stylesheet" >

<section   style="margin-bottom:50px;">

<div class="container">
        	
            	<div class="col-md-12">
                 	<?=$this->element('dashboard_header', ['activeTab' => 'bio']);?>
                    <div class="tab-content bckgrnd-white" id="myTabContent">
                      <div class="tab-pane fade show active" id="bio" role="tabpanel" aria-labelledby="home-tab">
                     
                        <div class="container">
                    
                        <div class="col-md-9">
                        <?php echo $this->Form->create($user, ["class" => "form-horizontal" , 'enctype' => 'multipart/form-data']); ?>
                            <div class="row">
                            
                            <div class="col-6">
                            <div class="form-group">
                                <label class="control-label font-size14">First Name</label>
                                
                                <?= $this->Form->control('first_name' ,['required' => true, 'label'=>false,  "class" => "form-control" ,]) ?>
                            </div>
                            </div>
                            <div class="col-6">
                            <div class="form-group">
                                <label class="control-label font-size14">Last Name </label>
                                <?= $this->Form->control('last_name' ,[ 'required' => true, 'label'=>false,  "class" => "form-control" ,]) ?>
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
                        <p class="form-control-static" style="padding-bottom:5px"> <label class="control-label font-size14">Gender</label></p>
                        <label class="blyf2-checkbox control-label font-size14">
                         <input type="radio" required name="gender" value="male" <?php if($user->gender == 'male'){?> checked <?php }?> >
                          <div> Male </div>
                        </label>
                        <label class="blyf2-checkbox control-label font-size14">
                        <input  type="radio" required name="gender" value="female"  <?php if($user->gender == 'female'){?> checked <?php }?> >
                        <div> Female </div>
                        </label>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                    <label class="control-label font-size14">Date of Birth</label>
                      <?= $this->Form->control('dob' ,[ 'required' =>true,  'onkeypress'=>"return false;" ,'id' => 'dob' , 'label'=>false,  "autocomplete"=>"off" , "class" => "form-control" ,]) ?>
                    </div>
                        </div>
                        <div class="col-6">
                        <div class="form-group">
                        <label class="control-label font-size14">Meals Per Day</label>
                         <?= $this->Form->control('meals_per_day' , [ 'empty' =>'Please Select','options' => $MealsPerDay,  'label'=>false,  "class" => "form-control" ,]) ?>
                       
                            </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="control-label font-size14">Recommended Kcal per meal</label>
                                    <?= $this->Form->control('recommended_Kcal' , ['readonly'=>true,   'label'=>false,  "class" => "form-control " ,]) ?>
                                </div>
                            </div>
                            <div class="col-6">
                            <div class="form-group">
                            <label class="control-label font-size14">Activity Level</label>
                             <?= $this->Form->control('activity_level' , [ 'empty' =>'Please Select','options' => $ActivityLevel,  'label'=>false,  "class" => "form-control " ,]) ?>
                          
                             </div>
                              </div>
                              <div class="col-6">
                              <div class="form-group">
                               <label class="control-label font-size14">Goal</label>
                                <?= $this->Form->control('goal' , ['onchange'=>'calculate_kcal()' , 'empty' =>'Please Select','options' => $Goal,  'label'=>false,  "class" => "form-control " ,]) ?>
                               </div>
                               </div>
                               <div class="col-12">
                                <p>Enter desired nutrients weights to calculate calories:</p> 
                                <br>
                               </div>
                               <div class="col-4">
                               <div class="form-group">
                               <label class="control-label font-size14">Fats (g)</label>
                                <?= $this->Form->control('fats' ,[ 'onchange'=>'calculate_kcal()' ,'maxlength' =>4,'max' => 500,  "min" =>"0" , "placeholder" => "0.00" , "type" => "number"  , 'label'=>false,  "class" => "form-control" ,]) ?>
                               </div>
                               </div>
                               <div class="col-4">
                               <div class="form-group">
                               <label class="control-label font-size14">Proteins (g)</label>
                                <?= $this->Form->control('proteins' ,['onchange'=>'calculate_kcal()' ,'maxlength' =>4, 'max' => 500,  "min" =>"0" , "placeholder" => "0.00" , "type" => "number"  , 'label'=>false,  "class" => "form-control" ,]) ?>
                               </div>
                               </div>
                               <div class="col-4">
                               <div class="form-group">
                               <label class="control-label font-size14">Carbs (g)</label>
                                <?= $this->Form->control('carbs' ,['onchange'=>'calculate_kcal()' ,'maxlength' => '4', 'max'=>"9999" ,  "min" =>"0" , "placeholder" => "0.00" , "type" => "number"  , 'label'=>false,  "class" => "form-control" ,]) ?>
                               </div>
                               </div>
                            </div>
                            
                             
                             <div class="pull-right mrgn-top">
                      
                            <button class="cta-brown order-now button" type="submit">Save Changes</button>
                             </div>
                             <?= $this->Form->end() ?>
                             
                             
                        </div> 
						<div>
						<?php /*?>  <div class="input-group date col-sm-5" id="dp3" data-date="" data-date-format="yyyy-mm-dd">
              <?php echo $this->Form->input('due_date', ['type' =>'text', "value" => '',   'class'=>'form-control' ,'dev' => false, 'label' => false]); ?>
                                        <span class="add-on input-group-addon"> <span class="glyphicon glyphicon-calendar"></span></span>
                                    </div><?php */?>
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
                    
                      </div>
                      <?=$this->element('dashboard_body');?>
                    </div>
                 </div>
            
        </div>
        
<div class="clearfix"></div> 
</section>
 <link rel="stylesheet" href="<?=$site_url?>css/datepicker.css" type="text/css" />
 <script src="<?=$site_url?>js/bootstrap-datepicker/bootstrap-datepicker.js"></script> 
  <script>
  function calculate_kcal(){
	  $goal = $('#goal').val();
	  
	  if($goal != '6'){
		  
		  $('#recommended-kcal').val('');
		  $('#fats').prop('readonly', true);
		  $('#proteins').prop('readonly', true);
		  $('#carbs').prop('readonly', true);
		  
		  return;
		 }
		 
		//$('#recommended-kcal').val('');
		$('#fats').prop('readonly', false);
		$('#proteins').prop('readonly', false);
		$('#carbs').prop('readonly', false);
		
		$fats = parseFloat($('#fats').val());
		$proteins = parseFloat($('#proteins').val());
		$carbs = parseFloat($('#carbs').val());
		
		$recommended = 0;
		if($fats != '')
		  {
		  $recommended = $recommended + ($fats  * 9)
		  }
		 if($proteins != '')
		  {
		  $recommended = parseFloat($recommended) + ($proteins  * 4)
		  }
		  if($carbs != '')
		  {
		  $recommended = parseFloat($recommended) + ($carbs  * 4)
		  } 
		$('#recommended-kcal').val($recommended);
	  
	  
	  
	  }
  
	$(document).ready(function () {
		$('#dob').datepicker();
		calculate_kcal()
	
	});
</script> 
<?=$this->element('footer');?>