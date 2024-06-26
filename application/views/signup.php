<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>User Registration</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
	color: #fff;
	background: #63738a;
	font-family: 'Roboto', sans-serif;
}
.form-control {
	height: 40px;
	box-shadow: none;
	color: #969fa4;
}
.form-control:focus {
	border-color: #5cb85c;
}
.form-control, .btn {        
	border-radius: 3px;
}
.signup-form {
	width: 450px;
	margin: 0 auto;
	padding: 30px 0;
  	font-size: 15px;
}
.signup-form h2 {
	color: #fff;
	margin: 0 0 15px;
	position: relative;
	text-align: center;
}
.signup-form h2:before, .signup-form h2:after {
	content: "";
	height: 2px;
	width: 30%;
	background: #d4d4d4;
	position: absolute;
	top: 50%;
	z-index: 2;
}	
.signup-form h2:before {
	left: 0;
}
.signup-form h2:after {
	right: 0;
}
.signup-form .hint-text {
	color: #fff;
	margin-bottom: 30px;
	text-align: center;
}
.signup-form form {
	color: #999;
	border-radius: 3px;
	margin-bottom: 15px;
	background: #f2f3f7;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	padding: 30px;
}
.signup-form .form-group {
	margin-bottom: 20px;
}
.signup-form input[type="checkbox"] {
	margin-top: 3px;
}
.signup-form .btn {        
	font-size: 16px;
	font-weight: bold;		
	min-width: 140px;
	outline: none !important;
}
.signup-form .row div:first-child {
	padding-right: 10px;
}
.signup-form .row div:last-child {
	padding-left: 10px;
}    	
.signup-form a {
	color: #fff;
	text-decoration: underline;
}
.signup-form a:hover {
	text-decoration: none;
}
.signup-form form a {
	color: #5cb85c;
	text-decoration: none;
}	
.signup-form form a:hover {
	text-decoration: underline;
}  
</style>
</head>
<body>
<div class="signup-form">
<h2>Register</h2>
<p class="hint-text">Create your account.</p>


<?php echo form_open('Signup',['name'=>'userregistration','autocomplete'=>'off']);?>
<div class="form-group">
<!--success message -->
<?php if($this->session->flashdata('success')){?>
<p style="color:green"><?php  echo $this->session->flashdata('success');?></p>	
<?php } ?>

<!--error message -->
<?php if($this->session->flashdata('error')){?>
<p style="color:red"><?php  echo $this->session->flashdata('error');?></p>	
<?php } ?>


<div class="row">
<div class="col">
<?php echo form_input(['name'=>'firstname','class'=>'form-control','value'=>set_value('firstname'),'placeholder'=>'Enter First Name']);?>
<?php echo form_error('firstname',"<div style='color:red'>","</div>");?>

</div>
<div class="col">
<?php echo form_input(['name'=>'lastname','class'=>'form-control','value'=>set_value('lastname'),'placeholder'=>'Enter Last Name']);?>
<?php echo form_error('lastname',"<div style='color:red'>","</div>");?>
</div>
</div>
</br>
<div class="row">
<div class="col">
<?php echo form_input(['name'=>'dateofbirth','class'=>'form-control','value'=>set_value('dateofbirth'),'placeholder'=>'Enter Date Of Birth']);?>
<?php echo form_error('dateofbirth',"<div style='color:red'>","</div>");?>

</div>
<div class="col">
<?php echo form_input(['name'=>'gender','class'=>'form-control','value'=>set_value('gender'),'placeholder'=>'Enter Gender']);?>
<?php echo form_error('gender',"<div style='color:red'>","</div>");?>
</div>
</div>
</br>
<div class="form-group">
<?php echo form_input(['name'=>'address','class'=>'form-control','value'=>set_value('address'),'placeholder'=>'Enter Address']);?>
<?php echo form_error('address',"<div style='color:red'>","</div>");?>

</div>
<div class="row">
<div class="col">
<?php echo form_input(['name'=>'city','class'=>'form-control','value'=>set_value('city'),'placeholder'=>'Enter City']);?>
<?php echo form_error('city',"<div style='color:red'>","</div>");?>

</div>
<div class="col">
<?php echo form_input(['name'=>'zipcode','class'=>'form-control','value'=>set_value('zipcode'),'placeholder'=>'Enter Zip Code']);?>
<?php echo form_error('zipcode',"<div style='color:red'>","</div>");?>
</div>
</div>
</br>
<div class="form-group">
<?php echo form_input(['name'=>'phoneNumber','class'=>'form-control','value'=>set_value('phoneNumber'),'placeholder'=>'Enter Phone Number']);?>
<?php echo form_error('phoneNumber',"<div style='color:red'>","</div>");?>

</div>
<div class="form-group">
<?php echo form_input(['name'=>'IncomeSources','class'=>'form-control','value'=>set_value('IncomeSources'),'placeholder'=>'Enter Income Sources']);?>
<?php echo form_error('IncomeSources',"<div style='color:red'>","</div>");?>


</div>        	
 </div>
 <div class="form-group">
<?php echo form_input(['name'=>'Amount','class'=>'form-control','value'=>set_value('Amount'),'placeholder'=>'Enter Amount']);?>
<?php echo form_error('Amount',"<div style='color:red'>","</div>");?>


</div>    <div class="form-group">
<?php echo form_input(['name'=>'accupation','class'=>'form-control','value'=>set_value('accupation'),'placeholder'=>'Enter Accupation']);?>
<?php echo form_error('accupation',"<div style='color:red'>","</div>");?>


</div>    
<div class="form-group">
<?php echo form_input(['name'=>'emailid','class'=>'form-control','value'=>set_value('emailid'),'placeholder'=>'Enter your Email id']);?>
 <?php echo form_error('emailid',"<div style='color:red'>","</div>");?>       	
 </div>

<div class="form-group">
<?php echo form_password(['name'=>'password','class'=>'form-control','value'=>set_value('password'),'placeholder'=>'Password']);?>
 <?php echo form_error('password',"<div style='color:red'>","</div>");?>  

</div>
<div class="form-group">
<?php echo form_password(['name'=>'confirmpassword','class'=>'form-control','value'=>set_value('confirmpassword'),'placeholder'=>'Confirm Password']);?>
 <?php echo form_error('confirmpassword',"<div style='color:red'>","</div>");?>  
</div>        
  
<div class="form-group">
<?php echo form_submit(['name'=>'insert','value'=>'Submit','class'=>'btn btn-success btn-lg btn-block']);?>
        </div>
    </form>
    <?php echo form_close();?>
	<div class="text-center">Already have an account? <a href="<?php echo site_url('Signin');?>">Sign in</a></div>
</div>

</body>
</html>