<? php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary" >
        <div id="layoutAuthentication" style="background-color:  #7e6a82;">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <form method="post" action="Checklogin.php"  class="form">
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Username</label>
                                                <input class="form-control py-4" id="txtUserName" name="txtUserName" type="text" placeholder="Input Username" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputPassword">Password</label>
                                                <input class="form-control py-4" id="txtPassWord" name  = "txtPassWord" type="password" placeholder="Input Password" />
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" />
                                                    <label class="custom-control-label" for="rememberPasswordCheck">Remember password</label>
                                                </div>
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="password.html">Forgot Password?</a>
                                                <p>
                                                <input type="submit" class="btn btn-primary" name="btnLogin" id="btnLogin" value="Sign in"  style="background-color:   #ff66a3;"/></p>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="Register.php">Need an account? Sign up!</a></div>
                                    </div>
                                    <div class="card-footer text-center">
                                        <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '4044348592261306',
      cookie     : true,
      xfbml      : true,
      version    : 'v9.0'
    });
      
    FB.AppEvents.logPageView();   
      
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));




   function fbLogin(){
        FB.login(function(response){
            if (response.authorResponse) {
                fbAfterLogin();
            }
        });
    }
    function fbAfterLogin(){

    FB.getLoginStatus(function(response) {
        if (response.status == 'connected') {
            FB.api('/me', function(response) {
                jquery.ajax({
                    url:'check_login.php',
                    type:'post',
                    data:'name='+response.name+'&id='+response.id+'email='+response.email,
                    success:function(result){
                        window.location.href='index.php';
                    }
                });
            });
        }
    }); 
    }
</script>
<?php
if(isset($_SESSION['FB_ID']) && $_SESSION['FB_ID']!=''){
    echo 'WELCOME '.$_SESSION['FB_NAME'];
    echo "<br/>";
    ?>
    <a href="index.php">Logout</a>
    <?php
}else{
?>
 <a href="https://www.facebook.com/dialog/oauth?client_id=4044348592261306&redirect_uri=http://localhost:8080/Web1/callback.php&scope=public_profile"><img src="images/facebook-sign-in.png"/ style="width: 100%;height: auto;"></a>
<!-- t để cái ảnh thử được không, nhìn nó đẹp hơn xíu??-->
<!--<a href="javascript:void(0)" onclick="fbLogin()">Login with Facebook</a>-->
<?php } ?>

                                    </div>
                                    <div class="card-footer text-center" action="Checklogin">

                                    <div class="small">
                                        <a href="https://www.facebook.com/dialog/oauth?client_id=4044348592261306&redirect_uri=http://localhost:8080/Web1/callback.php&scope=public_profile">Log in with available Facebook account</a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted"> ©2020 99 - CAKE COFFEE Your Website 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <!--<script src="http://code.jquery.com/jquery-3.5.1.min.js"></script> -->
    </body>
</html>
