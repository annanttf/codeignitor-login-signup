<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="form" >
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
    <form name="loginForm" method="post" action="" novalidate="" ng-app="">
        <span class="validation" ng-show="loginForm.username.$touched && loginForm.username.$invalid">Username is required.</span>
        <input type="text" placeholder="username" class="form-control" id="username" name="username" ng-model="username" required/>
        
        <span class="validation" ng-show="loginForm.password.$touched && loginForm.password.$invalid">Password is required.</span>
        <input type="password" placeholder="password" class="form-control" id="password" name="password" ng-model="password" required/>
        <input type="submit" class="submit" value="Login" ng-disabled="loginForm.$invalid">
        <p class="message">Not registered? <a href="<?= base_url('register') ?>">Create an account</a></p>
     </form>
</div>