<?php $this->start('head'); ?>
<?php $this->end(); ?>
<?php $this->start('body'); ?>
<div class="col-md-6 col-md-offset-3 well">
    <h3 class="text-center">Register Here!</h3><hr>
    <form action="" class="form" method="post">
        <div class="bg-danger">
            <?= $this->displayErrors ?>
        </div>
        <div class="form-group">
            <lable class="fname">First Name</lable>
            <input type="text" name="fname" id="fname" class="form-control" value="<?= $this->post['fname'] ?>">
        </div>
        <div class="form-group">
            <lable class="lname">Last Name</lable>
            <input type="text" name="lname" id="lname" class="form-control" value="<?= $this->post['lname'] ?>">
        </div>
        <div class="form-group">
            <lable class="email">Email</lable>
            <input type="email" name="email" id="email" class="form-control" value="<?= $this->post['email'] ?>">
        </div>
        <div class="form-group">
            <lable class="username">Username</lable>
            <input type="text" name="username" id="username" class="form-control" value="<?= $this->post['username'] ?>">
        </div>
        <div class="form-group">
            <lable class="password">Choose a Password</lable>
            <input type="password" name="password" id="password" class="form-control" value="<?= $this->post['password'] ?>">
        </div>
        <div class="form-group">
            <lable class="confirm">Confirm Password</lable>
            <input type="password" name="confirm" id="confirm" class="form-control" value="<?= $this->post['confirm'] ?>">
        </div>
        <div class="text-right">
            <input type="submit" class="btn btn-primary btn-large" value="Register">
        </div>
    </form>
</div>
<?php $this->end(); ?>