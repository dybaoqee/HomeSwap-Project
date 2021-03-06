<?php


    require_once "config.php";


  $loginURL = $gClient->createAuthUrl();

?>

<?php
    session_start();

    if (isset($_POST['userID'])) {
        $_SESSION['userID'] = $_POST['userID'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['picture'] = $_POST['picture'];
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['accessToken'] = $_POST['accessToken'];

        exit("success");
    }
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HomeSwap - Login</title>

    <link href="..\css/bootstrap.css" rel="stylesheet">

    <link href="css/modern-business.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<style>
/*---------------------------------------------*/
h1,h2,h3,h4,h5,h6 {
  margin: 0px;
}

p {
  font-size: 14px;
  line-height: 1.7;
  color: #666666;
  margin: 0px;
}

ul, li {
  margin: 0px;
  list-style-type: none;
}


/*---------------------------------------------*/
input {
  outline: none;
  border: none;
}

textarea {
  outline: none;
  border: none;
}

textarea:focus, input:focus {
  border-color: transparent !important;
}

input:focus::-webkit-input-placeholder { color:transparent; }
input:focus:-moz-placeholder { color:transparent; }
input:focus::-moz-placeholder { color:transparent; }
input:focus:-ms-input-placeholder { color:transparent; }

textarea:focus::-webkit-input-placeholder { color:transparent; }
textarea:focus:-moz-placeholder { color:transparent; }
textarea:focus::-moz-placeholder { color:transparent; }
textarea:focus:-ms-input-placeholder { color:transparent; }

input::-webkit-input-placeholder { color: #999999; }
input:-moz-placeholder { color: #999999; }
input::-moz-placeholder { color: #999999; }
input:-ms-input-placeholder { color: #999999; }

textarea::-webkit-input-placeholder { color: #999999; }
textarea:-moz-placeholder { color: #999999; }
textarea::-moz-placeholder { color: #999999; }
textarea:-ms-input-placeholder { color: #999999; }

/*---------------------------------------------*/
button {
  outline: none !important;
  border: none;
  background: transparent;
}

button:hover {
  cursor: pointer;
}

iframe {
  border: none !important;
}


/*//////////////////////////////////////////////////////////////////
[ Utility ]*/
.txt1 {
  font-size: 13px;
  line-height: 1.5;
  color: #999999;
}

.txt2 {
  font-size: 13px;
  line-height: 1.5;
  color: #666666;
}


/*//////////////////////////////////////////////////////////////////
[ login ]*/

.limiter {
  width: 100%;
  margin: 0 auto;
}

.container-login100 {
  width: 100%;  
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
}

.wrap-login100 {
  width: 960px;
  background: #fff;
  border-radius: 10px;
  overflow: hidden;
border:1px;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
 padding: 130px 130px 42px 95px;/
}

/*------------------------------------------------------------------
[  ]*/
.login100-pic {
  width: 300px;
}

.login100-pic img {
  max-width: 100%;
}


/*------------------------------------------------------------------
[  ]*/
.login100-form {
  width: 380px;
}

.login100-form-title {
  font-size: 24px;
  color: #333333;
  line-height: 1.2;
  text-align: center;

  width: 100%;
  display: block;
  padding-bottom: 54px;
}


/*---------------------------------------------*/
.wrap-input100 {
  position: relative;
  width: 100%;
  z-index: 1;
  margin-bottom: 10px;
}

.input100 {
  font-size: 15px;
  line-height: 1.5;
  color: #666666;

  display: block;
  width: 100%;
  background: #e6e6e6;
  height: 50px;
  border-radius: 25px;
  padding: 0 30px 0 68px;
}


/*------------------------------------------------------------------
[ Focus ]*/
.focus-input100 {
  display: block;
  position: absolute;
  border-radius: 25px;
  bottom: 0;
  left: 0;
  z-index: -1;
  width: 100%;
  height: 100%;
  box-shadow: 0px 0px 0px 0px;
  color: rgba(87,184,70, 0.8);
}

.input100:focus + .focus-input100 {
  -webkit-animation: anim-shadow 0.5s ease-in-out forwards;
  animation: anim-shadow 0.5s ease-in-out forwards;
}

@-webkit-keyframes anim-shadow {
  to {
    box-shadow: 0px 0px 70px 25px;
    opacity: 0;
  }
}

@keyframes anim-shadow {
  to {
    box-shadow: 0px 0px 70px 25px;
    opacity: 0;
  }
}

.symbol-input100 {
  font-size: 15px;

  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  align-items: center;
  position: absolute;
  border-radius: 25px;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100%;
  padding-left: 35px;
  pointer-events: none;
  color: #666666;

  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}

.input100:focus + .focus-input100 + .symbol-input100 {
  color: #57b846;
  padding-left: 28px;
}

/*------------------------------------------------------------------
[ Button ]*/
.container-login100-form-btn {
  width: 100%;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  padding-top: 20px;
}

.login100-form-btn {
  font-size: 15px;
  line-height: 1.5;
  color: #fff;
  text-transform: uppercase;

  width: 100%;
  height: 50px;
  border-radius: 25px;
  background: #57b846;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 0 25px;

  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}

.login100-form-btn:hover {
  background: #333333;
}



/*------------------------------------------------------------------
[ Responsive ]*/



@media (max-width: 992px) {
  .wrap-login100 {
    padding: 177px 90px 33px 85px;
  }

  .login100-pic {
    width: 35%;
  }

  .login100-form {
    width: 50%;
  }
}

@media (max-width: 768px) {
  .wrap-login100 {
    padding: 100px 80px 33px 80px;
  }

  .login100-pic {
    display: none;
  }

  .login100-form {
    width: 100%;
  }
}

@media (max-width: 576px) {
  .wrap-login100 {
    padding: 100px 15px 33px 15px;
  }
}


/*------------------------------------------------------------------
[ Alert validate ]*/

.validate-input {
  position: relative;
}

.alert-validate::before {
  content: attr(data-validate);
  position: absolute;
  max-width: 70%;
  background-color: white;
  border: 1px solid #c80000;
  border-radius: 13px;
  padding: 4px 25px 4px 10px;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  transform: translateY(-50%);
  right: 8px;
  pointer-events: none;

  color: #c80000;
  font-size: 13px;
  line-height: 1.4;
  text-align: left;

  visibility: hidden;
  opacity: 0;

  -webkit-transition: opacity 0.4s;
  -o-transition: opacity 0.4s;
  -moz-transition: opacity 0.4s;
  transition: opacity 0.4s;
}

.alert-validate::after {
  content: "\f06a";
  display: block;
  position: absolute;
  color: #c80000;
  font-size: 15px;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  transform: translateY(-50%);
  right: 13px;
}

.alert-validate:hover:before {
  visibility: visible;
  opacity: 1;
}
    .or-text-row {
    display: table-row;
  }
  .or-text {
    display: table;     
    width: 100%;
    position: relative;
    margin: 20px 0;
  }
  .or-text-step button[disabled] {
    opacity: 1 !important;
    filter: alpha(opacity=100) !important;
  }
  .or-text-row:before {
    top: 14px;
    bottom: 0;
    position: absolute;
    content: " ";
    width: 100%;
    height: 1px;
    background-color: #e8e8e8;
    z-order: 0;
  }
  .or-text-line {    
    display: table-cell;
    text-align: center;
    position: relative;
    width: 100%;
  }
  .or-text-line p {
    margin-top:10px;
  }
  .btn-circle {
    width: 30px;
    height: 30px;
    text-align: center;
    padding: 2px 0;
    font-size: 17px;
    line-height: 1.428571429;
    border-radius: 15px;
  } 
  .btn-group{margin-bottom: 5px;}
  .fa{padding-right: 10px;}

@media (max-width: 992px) {
  .alert-validate::before {
    visibility: visible;
    opacity: 1;
  }
}
</style>

                <script>
                    window.fbAsyncInit = function() {
                        FB.init({
                            appId      : '2472422946108645',
                            cookie     : true,
                            xfbml      : true,
                            version    : 'v3.1'
                        });

                        FB.AppEvents.logPageView();

                    };

                    (function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) return;
                        js = d.createElement(s); js.id = id;
                        js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.1&appId=245080309458212&autoLogAppEvents=1';
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));

                    function statusChangeCallback(response){
                        if(response.status === "connected")
                        {
                            console.log('Logged in and authenticated.');
                            console.log(response);
                            getDataApi();
                        }
                        else
                        {
                            console.log('Not authenticated.')
                        }
                    }

                    function checkLoginState() {
                        FB.getLoginStatus(function(response) {
                            statusChangeCallback(response);
                        });
                    }
                    //
                    function getDataApi()
                    {
                        FB.api('/me?fields=id,' +
                            '              first_name,' +
                            '              last_name,' +
                            '              picture,' +
                            '              email,' +
                            '              location,' +
                            '              likes{' +
                            '                       category_list,' +
                            '                       genre,' +
                            '                       name,' +
                            '                       verification_status,' +
                            '                       category,' +
                            '                       id,' +
                            '                       created_time},' +
                            '              events{' +
                            '                       admins{' +
                            '                               name,' +
                            '                               profile_type,' +
                            '                               link,' +
                            '                               id,' +
                            '                               username},' +
                            '                       cover,' +
                            '                       ticket_uri,' +
                            '                       start_time,' +
                            '                       end_time,' +
                            '                       rsvp_status,' +
                            '                       description,' +
                            '                       id,' +
                            '                       name}'
                            , function(response)
                        {
                            if (response && !response.error)
                            {
                                document.getElementById("fb_id").value = response.id;
                                document.getElementById("fb_fname").value = response.first_name;
                                document.getElementById("fb_email").value = response.email;
                                document.getElementById("fb_response").value = JSON.stringify(response);
                                document.getElementById("fb_form").submit();

                            }
                        })
                    }
                </script>
  </head>

  <body>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
       <a class="navbar-brand" href="..\index.php"><img src="..\css/pics/HomeSwapLogo.png" height=39px; width=39px;> &nbsp;HomeSwap</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="..\Registration.html">Register</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="https://shirba.mtacloud.co.il/GoogleLogin/Login.php">Login</a>
          </li>
                      <li class="nav-item active">
            <a href="#" class="nav-link" style="color:#B39CD0;">&nbsp;&nbsp;Welcome, Guest!</a>
            </li>


       </ul>
      </div>
    </div>
  </nav>


<div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <div class="login100-pic js-tilt" data-tilt>
          <img src="../css/pics/img-01.png" alt="IMG">
        </div>

        <form class="login100-form validate-form" action="..\PHP/welcome.php" method="POST">
          <span class="login100-form-title">
            <h2>User Login</h2>
          </span>

          <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
            <input class="input100" type="text" id="email" name="email" placeholder="Email">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-envelope"></i>
            </span>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "Password is required">
            <input class="input100" type="password" name="password" placeholder="Password">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-lock" aria-hidden="true"></i>
            </span>
          </div>
        
          <div class="container-login100-form-btn">
            <button class="login100-form-btn">
              Log in
            </button>
          </div>

            <div class="or-text">
          <div class="or-text-row">
            <div class="or-text-line">
              <button type="button"  style = "border:1px solid; background-color: #ffffff;" class="btn btn-default btn-circle" disabled="disabled">or</button>
            </div>
          </div>
        </div>
        <div class="row" align="center"> 
          <div class="col-sm-6">
            <div class="btn-group">
              <!--<a  class="btn btn-primary" ><i class="fab fa-facebook"></i> Login with Facebook</a>-->


                <div
                        class="fb-login-button"
                        style="font-size:18px;"
                        data-width="25"
                        data-max-rows="1"
                        data-size="medium"
                        data-button-type="login_with"
                        data-show-faces="false"
                        data-auto-logout-link="false"
                        data-use-continue-as="false"
                        data-scope="public_profile,email"
                        onlogin="checkLoginState();">
                </div>
                

            </div>
          </div>
          <div class="col-sm-6">
            <div class="btn-group">
              <button type="button" class="btn btn-danger" style="height:28px; font-size:13px; padding-bottom: 4px; padding-top:2px; width:180px" onclick="window.location = '<?php echo $loginURL ?>';"><i class="fab fa-google"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Log in With Google</button>
            </div>
          </div>
        </div>
      

          <div class="text-center p-t-136">
            <a style="font-size:16px;" class="txt2" href="..\Registration.html">
                Don't have an account yet?
            </a>
          </div>
        </form>
      </div>
    </div>
  </div>
  
  
      <form id ="fb_form" action="welcomeFacebook.php" method="post">
        <input type=hidden id="fb_email"  name="fb_email" class="form-control">
        <input type=hidden id="fb_fname"    name="fb_fname" class="form-control">
        <input type=hidden id="fb_id"       name="fb_id" class="form-control">
        <input type=hidden id="fb_response"    name="fb_response" class="form-control">
    </form>

  

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white"> &copy; HomeSwap 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
    <script
            src="http://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>



   

  </body>

</html>
