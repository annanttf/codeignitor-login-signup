<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="form">
    <?php if (validation_errors()) : ?>
        <div class="isa_error" role="alert">
    		<?= validation_errors() ?>
    	</div>
    <?php endif; ?>
   	<?php if (isset($error)) : ?>
   		<div class="isa_error" role="alert">
   			<?= $error ?>
   		</div>
    <?php endif; ?> 
    <form name="registerForm" action="" novalidate="" method="post" ng-app="">
        <span class="validation" ng-show="registerForm.username.$touched && registerForm.username.$invalid">Username is required.</span>
        <input type="text" placeholder="Username" class="form-control" id="username" name="username" ng-model="username" required/>
            
        <span class="validation" ng-show="registerForm.firstname.$touched && registerForm.firstname.$invalid">First Name is required.</span>
        <input type="text" placeholder="First Name" class="form-control" id="firstname" name="firstname" ng-model="firstname" required/>
        
        <span class="validation" ng-show="registerForm.lastname.$touched && registerForm.lastname.$invalid">Last Name is required.</span>
        <input type="text" placeholder="Last Name"class="form-control" id="lastname" name="lastname" ng-model="lastname" required/>
        
        <span class="validation" ng-show="registerForm.email.$dirty && registerForm.email.$invalid">
        <span ng-show="registerForm.email.$error.required">Email is required.</span>
        <span ng-show="registerForm.email.$error.email">Invalid email address.</span>
        </span>
        <input type="email" placeholder="E-Mail address" class="form-control" id="email" name="email" ng-model="email" required/>
        
        <span class="validation" ng-show="registerForm.password.$touched && registerForm.password.$invalid">Password is required.</span>
        <span class="validation" ng-show="registerForm.password.$error.minlength">Min 6 character password.</span>
        <input type="password" placeholder="password" class="form-control" id="password" name="password" ng-model="password" ng-minlength="6" required/>
        
        <span class="validation" ng-show="registerForm.password_confirm.$touched && registerForm.password_confirm.$invalid">Confirm Password is required.</span>
        <span class="validation" ng-show="password !== password_confirm">Password mismatch</span>
        <input type="password" placeholder="Confirm Password" class="form-control" id="password_confirm" name="password_confirm" ng-model="password_confirm" required/>
        <div class="select-style">
            <select name="gender" ng-model="gender" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </div>
        
        <span class="validation" ng-show="registerForm.phone.$touched && registerForm.phone.$invalid">Phone is required.</span>
        <input type="text" placeholder="Phone" class="form-control" id="phone" name="phone" ng-model="phone" required />
        
        <input type="submit" class="submit" value="Register" ng-disabled="registerForm.$invalid" />
        <p class="message">Already registered? <a href="<?= base_url('login') ?>">Sign In</a></p>
        <div class="login-top">
    	   <p>OR</p>
    	   <ul>
    	       <li><a class="face" href="<?= base_url('index.php/hauth/login/Facebook') ?>"><span class="face"> </span>SignUp with Facebook</a></li>
    	       <li><a class="linkedin" href="<?= base_url('index.php/hauth/login/LinkedIn') ?>"><span class="linkedin"> </span>SignUp with LinkedIn</a></li>
    	   </ul>
    	</div>
    </form>
</div>
