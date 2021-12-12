<div class="container">

    <div id="signupbox" style=" margin-top:50px" class="mainbox col-md-4 col-md-offset-4 col-sm-8 col-sm-offset-2">
        <div class="row center">
            </>
            <h3>Sign In</h3>
            <p>Please enter your email and password</p>
        </div>

        <?php
if ($this->session->flashdata('successmessage')) {
    ?>
        <div class="alert alert-success"><?php echo $this->session->flashdata('successmessage'); ?></div>
        <?php
}
if ($this->session->flashdata('errormessage')) {
    ?>
        <div class="alert alert-warning"><?php echo $this->session->flashdata('errormessage'); ?></div>
        <?php
}
?>

        <div class="row">
        <form action="<?= base_url('user/login') ?>" method="post">
                <div class="col-md-12 inputdiv">
                    <input class="form-control" name='login_email' type="email" placeholder="Enter your email address" />
                </div>
                <div class="col-md-12 inputdiv">
                    <input class="form-control" name='login_pass' type="text" placeholder="Enter a password" />
                </div>
                <div class="col-md-12 inputdiv">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Remember me
                        </label>
                    </div>
                </div>

                <div class="col-md-12 inputdiv">
                    <input type="submit" value="Login" class='btn btn-default formsubmitbtn' />
                </div>

            </form>

        </div>
        <div class="row center">
            <a class='center' href="#">Forgot password?</a>
            <hr>
            <div class="col-md-12 ">
                <p>Dont't have an account?</p>
                <a href="<?= base_url('user/signup') ?>" class="btn btn btn-default nexttosubmitbtn">Signup Now</a>
            </div>
        </div>
    </div>
</div>