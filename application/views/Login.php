<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Riosma Login</title>
    <link rel="stylesheet" href="<?php echo base_url()?>public/login.css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
  </head>
  <body>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="pr-wrap">
                <div class="pass-reset">
                    <label>
                        Enter the email you signed up with</label>
                    <input type="email" placeholder="Email" />
                    <input type="submit" value="Submit" class="pass-reset-submit btn btn-success btn-sm" />
                </div>
            </div>
            <div class="wrap">

                <p class="form-title">
                    Sign In</p>

                <!-- <form class="login" action="login/signin" method="post"> -->
                <?php echo form_open('login/signin','class="login"'); ?>
                    <input type="text" name="email" placeholder="Username" />
                    <input type="password" name="password" placeholder="Password" />
                    <input type="submit" value="Sign In" class="btn btn-success btn-sm" />
                    <div class="remember-forgot">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" />
                                        Remember Me
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6 forgot-pass-content">
                                <a href="javascription:void(0)" class="forgot-pass">Forgot Password</a>
                            </div>
                        </div>
                    </div>
                <!-- </form> -->
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
    <!-- <div class="posted-by">Posted By: <a href="http://www.jquery2dotnet.com">Bhaumik Patel</a></div> -->
</div>

</body>
</html>

<script type="text/javascript">
$(document).ready(function () {
   $('.forgot-pass').click(function(event) {
     $(".pr-wrap").toggleClass("show-pass-reset");
   });

   $('.pass-reset-submit').click(function(event) {
     $(".pr-wrap").removeClass("show-pass-reset");
   });
});
</script>
