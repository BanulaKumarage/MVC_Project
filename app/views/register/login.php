<?php $this->start('head'); ?>
<?php $this->end(); ?>
<?php $this->start('body'); ?>
<div class="col-md-6 col-md-offset-3 well">
    <form class = 'form' action="<?=SROOT?>register/login" method="post">
        <div class="bg-danger">
            <?= $this->displayErrors ?>
        </div>
        <h3 class="text-center">Login</h3>
        <div class="from-group">
            <Label for="username">User name</Label>
            <input type="text" name="username" id="username" class="form-control">
        </div>
        <div class="from-group">
            <Label for="Password">Password</Label>
            <input type="password" name="password" id="password" class="form-control">
        </div>
        <div class="from-group">
            <Label for="remember_me">Remember Me <input type="checkbox" name="remember_me" id="remember_me" value="on"></Label>
        </div>
        <div class="from-group">
            <input type="submit" value="Login" class="btn btn-large btn-primary">
        </div>
        <div class="text-right">
            <a href="<?=SROOT?>register/register" class="text-primary">Register</a>
        </div>
    </form>
</div>
<?php $this->end(); ?>