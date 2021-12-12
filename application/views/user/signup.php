<div class="container">

    <div id="signupbox" style=" margin-top:50px" class="mainbox col-md-4 col-md-offset-4 col-sm-8 col-sm-offset-2">
        <div class="row center">
            </>
            <h3>Sign up</h3>
            <p>Please fill out the below form.</p>
        </div>
        <div class="row">

            <?php
if ($this->session->flashdata('successmessage')) {
    ?>
            <div class="alert alert-success"><?php echo $this->session->flashdata('successmessage'); ?></div>
            <?php
}
if ($this->session->flashdata('Error')) {
    ?>
            <div class="alert alert-warning"><?php echo $this->session->flashdata('errormessage'); ?></div>
            <?php
}
?>

            <form action="<?= base_url('user/signup') ?>" method="post">
                <div class="col-md-12 inputdiv">
                    <input class="form-control" required name='user_name' type="text"
                        placeholder="Enter your full name" />
                </div>
                <div class="col-md-12 inputdiv">
                    <input class="form-control" required name='user_email' type="email"
                        placeholder="Enter your email address" />
                </div>
                <div class="col-md-12 inputdiv">
                    <input class="form-control" required name='user_pass' type="password"
                        placeholder="Enter a password" />
                </div>
                <div class="col-md-12 inputdiv">
                    <input type="submit" value="Sign Up" class='btn btn-default formsubmitbtn' />
                </div>
            </form>
        </div>
        <div class="row center">
            <hr>
            <div class="col-md-12 ">
                <p>Already have an account?</p>
                <a href="<?= base_url('user/login') ?>" class="btn btn btn-default nexttosubmitbtn">Login Now</a>
            </div>
        </div>
    </div>
</div>