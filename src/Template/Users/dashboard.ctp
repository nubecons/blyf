  <?php $site_url = $this->Url->build('/',true); ?> 
  <section id="Order Page Section" class="mrgn-top104 bg-grey">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-12">
                  <div class="mrgn-btm25 mrgn-top">
                  
                	<?=$this->element('dashboard_header', ['activeTab' => 'bio']);?>
                    
<div class="tab-content bckgrnd-white" id="myTabContent">
  <div class="tab-pane fade show active" id="bio" role="tabpanel" aria-labelledby="home-tab">
  <div class="tab-pane fade show active" id="biodata" role="tabpanel" aria-labelledby="biodata-tab">
    <div class="container">
    <div class="row">
    <div class="col-6">
    	<div class="row">
        	<div class="col-6">
    	<div class="form-group">
        	<label class="control-label font-size14">Height (cm)</label>
            <input min="0" name="height" placeholder="0.00" type="number" class="form-control" value="">
            </div>
    </div>
    <div class="col-6">
    	<div class="form-group">
        	<label class="control-label font-size14">Weight (kg)</label>
            <input min="0" name="height" placeholder="0.00" type="number" class="form-control" value="">
            </div>
    </div>
    <div class="col-6">
    <p class="form-control-static font-size14">Gender</p>
    <label class="blyf2-checkbox">
    <input type="checkbox">
    <div class="font-size14">Male</div>
    </label>
    <label class="blyf2-checkbox">
    <input type="checkbox">
    <div class="font-size14">Female</div>
    </label>
    </div>
    <div class="col-6">
    	<div class="form-group">
        	<label class="control-label font-size14">Date of Birth</label>
            	<input type="text" class="form-control hasDatepicker" value="" id="dp1530123989513">			 		</div>
    </div>
    <div class="col-6">
    <div class="form-group">
    <label class="control-label font-size14">Meals Per Day</label>
    <select name="meals_per_day" class="form-control bg-grey">
    	<option value="">Please select</option>
        <option value="1">1 meal</option>
        <option value="2">2 meals</option>
        <option value="3">3 meals</option>
        <option value="4">4 meals</option>
        <option value="5">5 meals</option>
        <option value="6">6 meals</option>
        <option value="7">7 meals</option>
        <option value="8">8 meals</option>
        <option value="9">9 meals</option>
        <option value="10">10 meals</option>
        </select>
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
        <select name="activity_level_id" class="form-control bg-grey">
        	<option value="">Please select</option>
            <option value="1">Lightly Active</option>
            <option value="2">Moderately Active</option>
            <option value="3">Very Active</option>
            <option value="4">Extremely Active</option>
            <option value="5">Sedentary</option>
         </select>
         </div>
          </div>
          <div class="col-6">
          <div class="form-group">
          <label class="control-label font-size14">Goal</label>
          <select name="nutrition_goal_id" class="form-control bg-grey">
          	<option value="">Please select</option>
            <option value="1">Muscle Build</option>
            <option value="2">Fat Loss (Low Carb)</option>
            <option value="3">Fat Loss (Low Fat)</option>
            <option value="4">Brain Power</option>
            <option value="5">Balanced</option>
            <option value="6">Personal Settings</option>
            <option value="7">Endurance Training</option>
           </select>
           </div>
           </div>
           <div class="col-12">
           	<p>Enter desired nutrients weights to calculate calories:</p>
           </div>
           <div class="col-4">
           <div class="form-group">
           <label class="control-label font-size14">Fats (g)</label>
           <input name="fats" min="0" required type="number" class="form-control" value="">
           </div>
           </div>
           <div class="col-4">
           <div class="form-group">
           <label class="control-label font-size14">Proteins (g)</label>
           <input name="fats" min="0" required type="number" class="form-control" value="">
           </div>
           </div>
           <div class="col-4">
           <div class="form-group">
           <label class="control-label font-size14">Carbs (g)</label>
           <input name="fats" min="0" required type="number" class="form-control" value="">
           </div>
           </div>
        </div>
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
  </div>
   
 <?php /*?>  <?php echo $this->Form->create('', ["class" => "form-horizontal" , 'enctype' => 'multipart/form-data']); ?> 
   <div class="row">
   
    <div class="col-md-5 float-left">
    <div class="row">
        <label for="sender-email" class="control-label col-sm-3">Activity Level:</label>
         <div class="col-sm-9">
        <div class="input-icon">
        <?= $this->Form->control('first_name' ,[ 'label'=>false,  "class" => "form-control" ,]) ?>
        </div>
        </div>
    </div>
    <br>
     <div class="row">
        <label for="sender-email" class="control-label col-sm-3">Fats (g):</label>
         <div class="col-sm-9">
        <div class="input-icon">
        <?= $this->Form->control('last_name' ,[ 'label'=>false, "class" => "form-control" , ]) ?>
        </div>
        </div>
    </div>
    <br>
    
     <div class="row">
        <label for="sender-email" class="control-label col-sm-3">Proteins (g):</label>
         <div class="col-sm-9">
        <div class="input-icon">
        <?= $this->Form->control('email' ,[ 'label'=>false,  "class" => "form-control" , ]) ?>
        </div>
        </div>
    </div>
    <br>
     <div class="row">
        <label for="sender-email" class="control-label col-sm-3">Recommended Kcal per meal:</label>
         <div class="col-sm-9">
        <div class="input-icon">
         <?= $this->Form->control('new_password' ,[ 'label'=>false,  "class" => "form-control" ]) ?>
        </div>
        </div>
    </div>
    <br>
    <div class="row">
        <label for="user-pass" class="control-label col-sm-3">Activity Level:</label>
     <div class="col-sm-9">
        <div class="input-icon"><i class="icon-lock fa"></i>
        <?= $this->Form->control('confirm_password' ,[  'label'=>false,  "class" => "form-control" ]) ?>
        </div>
        </div>
    </div>
   </div>
    <div class="col-md-5 float-left">
    <div class="row">
        <label for="sender-email" class="control-label col-sm-3">Height (cm):</label>
         <div class="col-sm-9">
        <div class="input-icon">
        <?= $this->Form->control('first_name' ,[ 'label'=>false,  "class" => "form-control" , ]) ?>
        </div>
        </div>
    </div>
    <br>
     <div class="row">
        <label for="sender-email" class="control-label col-sm-3">Weight (kg):</label>
         <div class="col-sm-9">
        <div class="input-icon">
        <?= $this->Form->control('last_name' ,[ 'label'=>false, "class" => "form-control" , ]) ?>
        </div>
        </div>
    </div>
    <br>
    
     <div class="row">
        <label for="sender-email" class="control-label col-sm-3">Gender:</label>
         <div class="col-sm-9">
        <div class="input-icon">
        <?= $this->Form->control('email' ,[ 'label'=>false,  "class" => "form-control" ,]) ?>
        </div>
        </div>
    </div>
    <br>
     <div class="row">
        <label for="sender-email" class="control-label col-sm-3">Date of Birth:</label>
         <div class="col-sm-9">
        <div class="input-icon">
         <?= $this->Form->control('new_password' ,[ 'label'=>false, "class" => "form-control" ]) ?>
        </div>
        </div>
    </div>
    <br>
    <div class="row">
        <label for="user-pass" class="control-label col-sm-3">Meals Per Day:</label>
     <div class="col-sm-9">
        <div class="input-icon"><i class="icon-lock fa"></i>
        <?= $this->Form->control('confirm_password' ,[  'label'=>false,   "class" => "form-control" ]) ?>
        </div>
        </div>
    </div>
   </div>
   
   </div>
    <br>
    <div class="row text-center">
       <label for="" class="control-label col-sm-3"></label>
       <div class="col-sm-4">
        <button type="submit" class="cta-brown order-now button">Save</button>
        </div>
        <div class="col-sm-6">
         
        </div>
        
    </div>
    <?= $this->Form->end() ?><?php */?>
  
  </div>
  <div class="tab-pane fade" id="meals" role="tabpanel" aria-labelledby="profile-tab">
  <div class="col-md-6">
  	<form class="form-group">
    <div class="profile-frm">
    	<label>Name</label>
        <input placeholder="Name" name="" type="text" class="form-control" value="">
    </div>
    <div class="profile-frm mrgn-top">
    	<label>Favourite Location</label>
        <select class="form-control" id="inlineFormCustomSelectPref">
            <option selected>Favourite Location</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
  	    </select>
    </div>
    <div class="profile-frm mrgn-top">
    	<label>E-mail Address</label>
        <input placeholder="abc@gmail.com" name="" type="text" class="form-control" value="">
    </div>
    <div class="profile-frm mrgn-top">
    	<label>Password</label>
        <input placeholder="password" name="" type="password" class="form-control" value="">
    </div>
    <div class="pull-right mrgn-top">
    	<button class="cta-brown order-now button" type="submit">Reset Password</button>
    </div>
    </form>
    </div>
  <?php /*?><div class="col-md-6">
  	<form class="form-group">
    <div class="profile-frm">
    	<label>Name</label>
        <input placeholder="Name" name="" type="text" class="form-control" value="">
    </div>
    <div class="profile-frm mrgn-top">
    	<label>Favourite Location</label>
        <select class="form-control" id="inlineFormCustomSelectPref">
            <option selected>Favourite Location</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
  	    </select>
    </div>
    <div class="profile-frm mrgn-top">
    	<label>E-mail Address</label>
        <input placeholder="abc@gmail.com" name="" type="text" class="form-control" value="">
    </div>
    <div class="profile-frm mrgn-top">
    	<label>Password</label>
        <input placeholder="password" name="" type="password" class="form-control" value="">
    </div>
    <div class="pull-right mrgn-top">
    	<button class="cta-brown order-now button" type="submit">Reset Password</button>
    </div>
    </form>
    </div><?php */?>
  </div>
  <div class="tab-pane fade" id="snacks" role="tabpanel" aria-labelledby="contact-tab">
  	<div class="">
    	<div class="row">
        	<div class="col-4">
            <div class="diet-item istoggleable">
            <div class="image">
            <img src="<?=$site_url?>images/Eggs.png" alt="Eggs">
            </div>
            <div class="description">
            <h4>Eggs</h4>
            <p>Contains eggs</p>
            </div>
            </div>
            </div>
            <div class="col-4">
            <div class="diet-item istoggleable">
            <div class="image">
            <img src="<?=$site_url?>images/Eggs.png" alt="Eggs">
            </div>
            <div class="description">
            <h4>Eggs</h4>
            <p>Contains eggs</p>
            </div>
            </div>
            </div>
            <div class="col-4">
            <div class="diet-item istoggleable">
            <div class="image">
            <img src="<?=$site_url?>images/Eggs.png" alt="Eggs">
            </div>
            <div class="description">
            <h4>Eggs</h4>
            <p>Contains eggs</p>
            </div>
            </div>
            </div>
            </div>
            <div class="row mrgn-top">
            <div class="col-4">
            <div class="diet-item istoggleable">
            <div class="image">
            <img src="<?=$site_url?>images/Eggs.png" alt="Eggs">
            </div>
            <div class="description">
            <h4>Eggs</h4>
            <p>Contains eggs</p>
            </div>
            </div>
            </div>
            <div class="col-4">
            <div class="diet-item istoggleable">
            <div class="image">
            <img src="<?=$site_url?>images/Eggs.png" alt="Eggs">
            </div>
            <div class="description">
            <h4>Eggs</h4>
            <p>Contains eggs</p>
            </div>
            </div>
            </div>
            <div class="col-4">
            <div class="diet-item istoggleable">
            <div class="image">
            <img src="<?=$site_url?>images/Eggs.png" alt="Eggs">
            </div>
            <div class="description">
            <h4>Eggs</h4>
            <p>Contains eggs</p>
            </div>
            </div>
            </div>
            </div>
            <div class="row mrgn-top">
            <div class="col-4">
            <div class="diet-item istoggleable">
            <div class="image">
            <img src="<?=$site_url?>images/Eggs.png" alt="Eggs">
            </div>
            <div class="description">
            <h4>Eggs</h4>
            <p>Contains eggs</p>
            </div>
            </div>
            </div>
            <div class="col-4">
            <div class="diet-item istoggleable">
            <div class="image">
            <img src="<?=$site_url?>images/Eggs.png" alt="Eggs">
            </div>
            <div class="description">
            <h4>Eggs</h4>
            <p>Contains eggs</p>
            </div>
            </div>
            </div>
            <div class="col-4">
            <div class="diet-item istoggleable">
            <div class="image">
            <img src="<?=$site_url?>images/Eggs.png" alt="Eggs">
            </div>
            <div class="description">
            <h4>Eggs</h4>
            <p>Contains eggs</p>
            </div>
            </div>
            </div>
            </div>
        </div>
  </div>
  <div class="tab-pane fade" id="drinks" role="tabpanel" aria-labelledby="contact-tab">
      <table width="100%">
    	<tr class="tab-hedng">
        	<td width="10%">
            <div class="image">
               <div class="img-wrapper">
                 <img src="https://s3.vitamojo.com/meals/8pkVcCrzD08i6mAxEWc69bRrShfw3CIGNQjfueYM.jpeg" alt="Naked Burrito (GF, VEGAN)">
                 </div>
                 <div class="calories">441<span>KCal</span></div>
                 </div>
            </td>
            <td width="60%">
            <div class="pro-detail-txt">
            	<h3>NAKED BURRITO (GF, VEGAN)</h3>
                	<p>Wild Rice, with Black Beans, Pea Salad, Avocado Mash, Crispy Shallots & a Chipotle Plum Sauce</p>
            </div>
            </td>
            <td width="12%">
            	<div class="price">£2.75<span>1 unit</span></div>
            </td>
            <td width="10%" style="padding-left:10px;">
            	<div class="text-left cros-icon">
            	<i class="fa fa-times-circle"></i>
            </div>
            </td>
        </tr>
        <tr class="tab-hedng">
        	<td width="10%">
            <div class="image">
               <div class="img-wrapper">
                 <img src="https://s3.vitamojo.com/meals/8pkVcCrzD08i6mAxEWc69bRrShfw3CIGNQjfueYM.jpeg" alt="Naked Burrito (GF, VEGAN)">
                 </div>
                 <div class="calories">441<span>KCal</span></div>
                 </div>
            </td>
            <td width="60%">
            <div class="pro-detail-txt">
            	<h3>NAKED BURRITO (GF, VEGAN)</h3>
                	<p>Wild Rice, with Black Beans, Pea Salad, Avocado Mash, Crispy Shallots & a Chipotle Plum Sauce</p>
            </div>
            </td>
            <td width="12%">
            	<div class="price">£2.75<span>1 unit</span></div>
            </td>
            <td width="10%" style="padding-left:10px;">
            	<div class="text-left cros-icon">
            	<i class="fa fa-times-circle"></i>
            </div>
            </td>
        </tr>
        <tr class="tab-hedng">
        	<td width="10%">
            <div class="image">
               <div class="img-wrapper">
                 <img src="https://s3.vitamojo.com/meals/8pkVcCrzD08i6mAxEWc69bRrShfw3CIGNQjfueYM.jpeg" alt="Naked Burrito (GF, VEGAN)">
                 </div>
                 <div class="calories">441<span>KCal</span></div>
                 </div>
            </td>
            <td width="60%">
            <div class="pro-detail-txt">
            	<h3>NAKED BURRITO (GF, VEGAN)</h3>
                	<p>Wild Rice, with Black Beans, Pea Salad, Avocado Mash, Crispy Shallots & a Chipotle Plum Sauce</p>
            </div>
            </td>
            <td width="12%">
            	<div class="price">£2.75<span>1 unit</span></div>
            </td>
            <td width="10%" style="padding-left:10px;">
            	<div class="text-left cros-icon">
            	<i class="fa fa-times-circle"></i>
            </div>
            </td>
        </tr>
        <tr class="tab-hedng">
        	<td width="10%">
            <div class="image">
               <div class="img-wrapper">
                 <img src="https://s3.vitamojo.com/meals/8pkVcCrzD08i6mAxEWc69bRrShfw3CIGNQjfueYM.jpeg" alt="Naked Burrito (GF, VEGAN)">
                 </div>
                 <div class="calories">441<span>KCal</span></div>
                 </div>
            </td>
            <td width="60%">
            <div class="pro-detail-txt">
            	<h3>NAKED BURRITO (GF, VEGAN)</h3>
                	<p>Wild Rice, with Black Beans, Pea Salad, Avocado Mash, Crispy Shallots & a Chipotle Plum Sauce</p>
            </div>
            </td>
            <td width="12%">
            	<div class="price">£2.75<span>1 unit</span></div>
            </td>
            <td width="10%" style="padding-left:10px;">
            	<div class="text-left cros-icon">
            	<i class="fa fa-times-circle"></i>
            </div>
            </td>
        </tr>
        <tr class="tab-hedng">
        	<td width="10%">
            <div class="image">
               <div class="img-wrapper">
                 <img src="https://s3.vitamojo.com/meals/8pkVcCrzD08i6mAxEWc69bRrShfw3CIGNQjfueYM.jpeg" alt="Naked Burrito (GF, VEGAN)">
                 </div>
                 <div class="calories">441<span>KCal</span></div>
                 </div>
            </td>
            <td width="60%">
            <div class="pro-detail-txt">
            	<h3>NAKED BURRITO (GF, VEGAN)</h3>
                	<p>Wild Rice, with Black Beans, Pea Salad, Avocado Mash, Crispy Shallots & a Chipotle Plum Sauce</p>
            </div>
            </td>
            <td width="12%">
            	<div class="price">£2.75<span>1 unit</span></div>
            </td>
            <td width="10%" style="padding-left:10px;">
            	<div class="text-left cros-icon">
            	<i class="fa fa-times-circle"></i>
            </div>
            </td>
        </tr>
    </table>
  </div>
  <div class="tab-pane fade" id="coffee1" role="tabpanel" aria-labelledby="contact-tab">
      MOJOS
  </div>
   <div class="tab-pane fade" id="coffee1" role="tabpanel" aria-labelledby="contact-tab">
      MY CARDS
  </div>
</div>
</div>
                </div>
            </div>
        </div>
    </section>
	