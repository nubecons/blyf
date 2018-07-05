<?php $site_url = $this->Url->build('/',true); ?> 

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
  <div class="tab-pane fade" id="allorders" role="tabpanel" aria-labelledby="contact-tab">
      <table class="table table-bordered">
  <thead>
    <tr class="bg-grey">
      <th scope="col">Date</th>
      <th scope="col">Order</th>
      <th scope="col">Price</th>
      <th scope="col">Rating</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"></th>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td colspan="2"></td>
      <td></td>
    </tr>
  </tbody>
</table>
  </div>
  <div class="tab-pane fade" id="points" role="tabpanel" aria-labelledby="contact-tab">
     <div class="row">
        	<div class="col-md-8 col-8">
            	<h3>You have <span class="">0</span> Mojos</h3>
                <p>Blyf are tokens earned as part of Vita Mojo’s loyalty scheme. Rating meals* is one way to earn Blyf.</p>
            </div>
            <div class="col-md-4 col-4">
            	<h3>Redeem Mojos</h3>
            	<form class="vm-check-delivery">
                         <div class="form-group float-left">
                           <input placeholder="Enter Code" name="enter code" type="text" class="form-control" value="">
                           </div>
                            <div class="box-btn float-left">
                           		<a href="#" class="cta-brown order-now button">Redeem</a>
                           </div>
                           </form>
            </div>
        </div>
  </div>
   <div class="tab-pane fade" id="user-cards" role="tabpanel" aria-labelledby="contact-tab">
      <div class="">
        	<h1 class="font-size14">Cards</h1>
            <table class="table">
  <thead>
    <tr>
      <th scope="col">CARD EXPIRE</th>
      <th scope="col">CARD LAST 4 NUMBER</th>
      <th scope="col">CARD TYPE</th>
      <th scope="col">CARD ACTIONS</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"></th>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </tbody>
</table>
        </div>
  </div>