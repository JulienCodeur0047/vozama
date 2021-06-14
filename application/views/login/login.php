<section class="login-clean" style="height: 590px;background: rgb(241, 247, 252);">
<?php echo form_open('login_process'); ?> 
    <form method="post" style="height: 419px;border-radius: 25px;width: 305px;">
		<h2 class="sr-only">Login Form</h2>
        <h1 class="text-center" style="margin: 0px;font-size: 20px;padding: 7px;height: 26px;margin-top: -23px;color: var(--gray);">connexion</h1>
        <div class="illustration" style="height: 156px;"><i class="icon ion-ios-contact-outline" style="color: var(--gray);border-color: rgb(77,137,255);"></i></div>
        <div class="form-group"><input type="text" class="form-control" name="user_name" placeholder="Utilisateur" /></div>
        <div class="form-group"><input type="password" class="form-control" name="user_password" placeholder="Mot de passe" /></div>
        <div class="form-group"><button class="btn btn-primary btn-block" type="submit" style="background: var(--blue);color: rgb(255, 255, 255);">Log In</button></div>
	</form>
<?php echo form_close(); ?> 
</section>
