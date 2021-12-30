<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <script src="https://kit.fontawesome.com/8eecc6b929.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<!-- bootstrap4 cdn -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<style>
  
  #btn {
    margin: auto;
  }

  .toggle-btn {
    background-color: #e9ebee;
    color: black;

    font-size: 20px;
  }

  .toggle-btn:hover {

    border-top: 4px solid green;
    background-color: white;
  }

  .toggle-btn :active {
    border-top: 4px solid green;
  }

  .button-box {
    justify-content: center;
  }

  #btn {
    justify-content: center;
    text-align: center;
  }

  .social-signin-div {

    border-top: none;
    padding-bottom: 20px;
  }

  .social-divider {
    width: 80%;
    text-align: center;
    border-bottom: 1px solid #979faf;
    line-height: 0.1em;
    margin: 15px 0 20px;
    /* margin-left: 10%; */
  }

  .social-div {
    width: 49%;
    display: inline-block;
    padding: 5px 0px;
  }

  .social-divider span {
    background: #fff;
    padding: 0 10px;
  }

  .btn-google {
    background-image: linear-gradient(to bottom, #dd4e41, #c9453a);
    color: #fff;
    border: 1px solid #c9453a;
    float: right;
    padding: 12px 31px 12px 31px;
    text-decoration: none;

  }

  .fa {
    display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
  }

  .google img {
    width: 20;
  }

  .facebook img {
    width: 8;
  }

  .btn-facebook {
    background-image: linear-gradient(to bottom, #4b66a0, #3b5998);
    color: #fff;
    border: 1px solid #3b5998;
    float: right;
    padding: 13px 20px 14px 30px;
    text-decoration: none;
  }

  .linkedin img {
    width: 20;
  }

  .btn-linkedin {
    background-image: linear-gradient(to bottom, #0073b1, #075b8c);
    color: #fff;
    border: 1px solid #075b8c;
    float: right;
    padding: 15px 24px 14px 30px;
    text-decoration: none;
  }

  .git img {
    width: 20;
  }

  .btn-git {
    background-image: linear-gradient(to bottom, #4a4646, #191717);
    color: #fff;
    border: 1px solid #191717;
    float: right;
    padding: 15px 33px 14px 34px;
    text-decoration: none;
  }

  .google-div {
    margin: 0 auto;
    padding: 0px 32px 20px;
  }
  .google-div a {
    color: white;
  }

  .cteateA {
    width: 100%;
    margin: 0 auto;
    /* scroll-padd*/
  }

  .createA a {
    color: #0f9d58;
    align-items: center;
    /* text-align: center; */
    /* align-content: center; */
    width: 100%;
    /* scroll-padding: 60; */
    text-decoration: none;
    /* padding-left: 276px; */
  }

  .tnc {
    font-size: 10px;
    padding: 0 15px;
    color: #999;
    margin-top: 10px;
    margin-bottom: 0;
    text-align: center;
  }

  .tnc a {
    color: #0f9d58;
  }

  .container1 {
    display: none;
    background: white;

    box-shadow: 0 0 8px rgba(0, 0, 0, 0.8);
  }

  .container1 .close-btn {
    position: absolute;
    right: 1px;
    top: 50px;
    font-size: 18px;
    cursor: pointer;
    margin-top: -26px;

  }

  .container1 .close-btn:hover {
    color: green;

  }

  .show-btn {
    background: white;
    padding: 10px 12px;
    /* font-size: 20px; */
    margin-top: 10px;
    float: right;
    font-weight: 500;
    color: green;
    cursor: pointer;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.8);
  }

  #show:checked~.container1 {
    display: block;
    position: relative;

  }

  input[type="checkbox"] {
    display: none;
  }
  .show-btn #show {
    display: none;
    }

  /* test */
  input[type=text],
  input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
  }

  /* Set a style for all buttons */
  button {
    background-color: #04AA6D;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
  }

  button:hover {
    opacity: 0.8;
  }

  /* Extra styles for the cancel button */
  .cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
  }

  /* Center the image and position the close button */
  .imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
  }

  img.avatar {
    width: 40%;
    border-radius: 50%;
  }

  .container2 {
    padding: 16px;
  }

  span.psw {
    float: right;
    padding-top: 16px;
  }

  /* The Modal (background) */
  .modal {
    display: none;
    /* Hidden by default */
    position: fixed;
    /* Stay in place */
    z-index: 1;
    /* Sit on top */
    left: 0;
    top: 0;
    width: 100%;
    /* Full width */
    height: 100%;
    /* Full height */
    overflow: auto;
    /* Enable scroll if needed */
    background-color: rgb(0, 0, 0);
    /* Fallback color */
    background-color: rgba(0, 0, 0, 0.4);
    /* Black w/ opacity */
    padding-top: 60px;
  }

  /* Modal Content/Box */
  .modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto;
    /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%;
    /* Could be more or less, depending on screen size */
  }

  /* The Close Button (x) */
  .close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
  }

  .close:hover,
  .close:focus {
    color: red;
    cursor: pointer;
  }

  /* Add Zoom Animation */
  .animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
  }

  @-webkit-keyframes animatezoom {
    from {
      -webkit-transform: scale(0)
    }

    to {
      -webkit-transform: scale(1)
    }
  }

  @keyframes animatezoom {
    from {
      transform: scale(0)
    }

    to {
      transform: scale(1)
    }
  }

  /* Change styles for span and cancel button on extra small screens */
  @media screen and (max-width: 300px) {
    span.psw {
      display: block;
      float: none;
    }

    .cancelbtn {
      width: 100%;
    }
  }


  /* text */


  .input-field {
    border: 1px solid #C2C7D0;
    border-top-color: rgb(194, 199, 208);
    border-right-color: rgb(194, 199, 208);
    border-bottom-color: rgb(194, 199, 208);
    border-left-color: rgb(194, 199, 208);
    border-radius: 5px;
    box-shadow: inset 0 1px 2px rgb(151 159 175 / 10%), inset 0 1px 15px rgb(151 159 175 / 5%);
    box-sizing: border-box;
    color: #39424e;
    display: inline-block;
    line-height: 1.5em;
    margin-left: 0;
    margin-right: 0;
    margin-top: 0;
    margin-bottom: 10px;
    padding: 7px 10px;
    -webkit-transition: all 0.3s ease;
    transition: all 0.3s ease;
    font-weight: 500;
    width: 100%;
  }

  /* Style the list */
  body {
    font-family: 'Lato', sans-serif;
  }

  ul.tab {
    list-style-type: none;
    margin-top: 45px;
    padding: 0;
    overflow: hidden;
    border: 1px solid #e9ebee;
    background-color: #e9ebee;
    display: flex;


  }


  /* Float the list items side by side */

  ul.tab li {

    text-align: center;
    width: 50%;
    position: relative;
  }
  ul li {
    margin-bottom: 0 px;

    }


  /* Style the links inside the list items */

  ul.tab li a {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    transition: 0.3s;
    font-size: 17px;
    color: #000;
    width: 100%;
  }


  /* Change background color of links on hover */

  ul.tab li a:hover {
    background-color: white;
    border-top: 5px solid #04AA6D;
  }


  /* Create an active/current tablink class */

  ul.tab li a:focus,
  .active {
    background-color: white;
    border-top: 5px solid #04AA6D;
  }


  /* Style the tab content */

  .tabcontent {
    /* display: none; */
    padding: 6px 12px;
    border: 1px solid #e9ebee;
    border-top: none;
    color: blue;
    -webkit-animation: fadeEffect 1.25s;
    animation: fadeEffect 1.25s;
    /* Fading effect takes 1 second */
  }

  @-webkit-keyframes fadeEffect {
    from {
      opacity: 0;
    }

    to {
      opacity: 1;
    }
  }

  @keyframes fadeEffect {
    from {
      opacity: 0;
    }

    to {
      opacity: 1;
    }
  }

  * {
    box-sizing: border-box
  }

  /* Add padding to containers */


  /* Full-width input fields */
  input[type=text],
  input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;

    background: white;
  }

  input[type=text]:focus,
  input[type=password]:focus {
    background-color: white;
    outline: none;
  }

  /* Overwrite default styles of hr */
  hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
  }

  /* Set a style for the submit/register button */
  .registerbtn {
    background-color: #04AA6D;
    color: white;
    padding: 16px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
  }

  .registerbtn:hover {
    opacity: 1;
  }

  /* Add a blue text color to links */
  a {
    color: dodgerblue;
  }

  /* Set a grey background color and center the text of the "sign in" section */
  .signin {
    background-color: #f1f1f1;
    text-align: center;
  }
  


  /* test */
  body {
    font-family: Arial, Helvetica, sans-serif;
  }

  input[type=text],
  input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
  }

  input[type=text]:focus,
  input[type=password]:focus {
    background-color: #ddd;
    outline: none;
  }

  hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
  }

  /* Set a style for all buttons */
  button {
    background-color: #04AA6D;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
  }

  button:hover {
    opacity: 1;
  }

  /* Extra styles for the cancel button */
  .cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
  }

  /* Float cancel and signup buttons and add an equal width */
  .cancelbtn,
  .signupbtn {
    float: left;
    width: 50%;
  }

  /* Add padding to container elements */
  .container3 {
    padding: 16px;
  }

  /* Clear floats */
  .clearfix::after {
    content: "";
    clear: both;
    display: table;
  }

  /* Change styles for cancel button and signup button on extra small screens */
  @media screen and (max-width: 300px) {

    .cancelbtn,
    .signupbtn {
      width: 100%;
    }
  }

  .signinbutton {
    width: 100%;
    background-image: linear-gradient(to bottom, #2bbe60, #0f9d58);
    border: 0px;
    padding: 10px;
    color: white;
    border-radius: 2px;
  }

</style>

    <?php wp_head(); ?>


</head>

<body id="top" <?php body_class() ?>>

<!-- pageheader
================================================== -->
<section class="s-pageheader <?php echo apply_filters("philosophy_home_banner_class","s-pageheader--home"); ?>">

    <header class="header">
        <div class="header__content row">

            <div class="header__logo">
                <?php if(has_custom_logo()){
                  the_custom_logo();
                }else{
                    echo "<h1><a href='".home_url("/")."'>".get_bloginfo('name')."</a></h1>";
                }
                ?>
            </div> <!-- end header__logo -->

            <?php
            if(is_active_sidebar("header-section")){
                dynamic_sidebar("header-section");
            }
            ?>

            <a class="header__search-trigger" href="#0"></a>

            <div class="header__search">

                <?php get_search_form(); ?>

                <a href="#0" title="Close Search" class="header__overlay-close">Close</a>

            </div> 
            
            <div class="center">
  <input type="checkbox" style="display: none;" id="show">
  <label for="show"  class="show-btn">View Form</label>
  <div class="container1">
    <label for="show" class="close-btn fas fa-times"></label>

    <!-- test -->

    <body>
      <div class="col-lg-12  m-auto pt-8">
        <ul class="tab">
          <li><a href="#" class="tablinks" onclick="openContent(event, 'Patient')">Login</a></li>
          <li><a href="#" class="tablinks" onclick="openContent(event, 'Test')">Register</a></li>
        </ul>

        <div id="Patient" class="tabcontent">

        <?php
  
  function wc_login_form_callback() {
    ob_start();
    if (is_user_logged_in()) {
        global $errors_login;
        if (!empty($errors_login)) {
            ?>
            <div class="alert alert-danger">
                <?php echo $errors_login; ?>
            </div>
        <?php } ?>
        <form method="post" class="wc-login-form">
            <div class="login_form">
                <div class="log_user">
                    <label for="user_name">Username</label>
                    <input name="log" type="text" id="user_name" value="<?php echo $_POST['']; ?>">
                </div>
                <div class="log_pass">
                    <label for="user_password">Password</label>
                    <input name="pwd" id="user_password" type="password">
                </div>
                <?php
                ob_start();
                do_action('login_form');
                echo ob_get_clean();
                ?>
                <?php wp_nonce_field('userLogin', 'formType'); ?>
            </div>
            <button type="submit">LOG IN</button>
        </form>
        <?php
    } else {
        echo '<p class="error-logged">You are already logged in.</p>';
    }

    $login_form = ob_get_clean();
    return $login_form;
}

add_action('wp', 'wc_user_login_callback');

function wc_user_login_callback() {
    if (isset($_POST['formType']) && wp_verify_nonce($_POST['formType'], 'userLogin')) {

        global $errors_login;
        $uName = $_POST['log'];
        $uPassword = $_POST['pwd'];
        $redirect = $_POST['redirect'];

        if ($uName == '' && $uPassword != '') {
            $errors_login = '<strong>Error! </strong> Username is required.';
        } elseif ($uName != '' && $uPassword == '') {
            $errors_login = '<strong>Error! </strong> Password is required.';
        } elseif ($uName == '' && $uPassword == '') {
            $errors_login = '<strong>Error! </strong> Username & Password are required.';
        } elseif ($uName != '' && $uPassword != '') {
            $creds = array();
            $creds['user_login'] = $uName;
            $creds['user_password'] = $uPassword;
            $creds['remember'] = false;
            $user = wp_signon($creds, false);
            if (is_wp_error($user)) {
                $errors_login = $user->get_error_message();
            } else {
                wp_redirect(site_url());
                exit;
            }
        }
    }
}
?>

          <style type="text/css">
            body {
              font-family: Arial, Helvetica, sans-serif;
              font-size: 14px;
            }

            label {
              font-weight: bold;
              width: 100px;
              font-size: 14px;
            }

            .box {
              border: #666666 solid 1px;
              border-radius: 2px;
            }

            .signinbutton {
              width: 100%;
              background-image: linear-gradient(to bottom, #2bbe60, #0f9d58);
              border: 0px;
              padding: 10px;
              color: white;
              border-radius: 2px;
              
            }

            .signinbutton a {
                
                color: white;
            }

            .box-form {
              border: 0px;
            }
          </style>

          </head>

          <body bgcolor="#FFFFFF">

            <div align="center">


              <form action="" method="post" class="box-form">

                <input type="text" name="username" placeholder="Username or Email" class="box fa fa-user icon" /><br />
                <input type="password" name="password" placeholder="Password" class="box" /><br /><br />
                <input class="signinbutton" style="color: white;" type="submit" value=" Sign In " /><br />
              </form>

              <div class="social-signin-div">
                <div class="social-divider">
                  <span>or</span>
                </div>
                <div class="google-div m-auto social-div pull-left">
                  <a href="https://www.google.com/" id="glogin" class="btn btn-social btn-google">
                    <span class="fa google"> <i class="fab fa-2x fa-google"></i> </span>Google
                  </a>
                </div>
                <div class="google-div social-div pull-left">
                  <a href="https://www.facebook.com/" id="glogin" class="btn btn-social btn-facebook ">
                    <span class="fa facebook"> <i class="fab fa-2x fa-facebook-f"></i> </span>Facebook
                  </a>
                </div>
                <p style="display:block;margin:10px 0px;"></p>
                <div class="google-div social-div pull-left">
                  <a href="https://www.linkedin.com/" id="glogin" class="btn btn-social btn-linkedin ">
                    <span class="fa linkedin"> <i class="fab fa-2x fa-linkedin-in"></i> </span>Linkedin
                  </a>
                </div>
                <div class="google-div social-div pull-left">
                  <a href="https://www.github.com/" id="glogin" class="btn btn-social btn-git ">
                    <span class="fa git"> <i class="fab fa-2x fa-github"></i> </span>GitHub
                  </a>
                </div>
                <div class="createA"><a href="https://www.geeksforgeeks.org/why-create-an-account-on-geeksforgeeks/">Why Create an Account?</a></div>
                <div class="tnc">
                  By creating this account, you agree to our <a href="https://www.geeksforgeeks.org/privacy-policy/">Privacy Policy</a> &amp; <a href="https://www.geeksforgeeks.org/cookie-policy/" target="_blank">Cookie Policy</a>.
                </div>
              </div>



            </div>
        </div>

        <div id="Test" class="tabcontent">

        <div class="registration">
        <?php

  function wc_register_form_callback() {
      
      if (is_user_logged_in()) {
          global $registrationError, $registrationSuccess;
          if (empty($registrationError)) {
              ?>
              <div class="alert alert-danger">
                  <?php echo $registrationError; ?>
              </div>
          <?php } ?>

          <?php if (!empty($registrationSuccess)) { ?>
              <br/>
              <div class="alert alert-success">
                  <?php echo $registrationSuccess; ?>
              </div>
          <?php } ?>


          <form method="post" class="wc-register-form">
              <div class="register_form">
                  <div class="log_user">
                      <label for="user_name">User name</label>
                      <?php $user_name = isset($_POST['user_name']) ? $_POST['user_name'] : ''; ?>
                      <input type="text" name="user_name" id="user_name" value="<?php echo $user_name; ?>" />
                  </div>

                  <div class="log_user">
                      <label for="user_email">Email address</label>
                      <?php $user_email = isset($_POST['user_email']) ? $_POST['user_email'] : ''; ?>
                      <input type="email" name="user_email" id="user_email" value="<?php echo $user_email; ?>" />
                  </div>

                  <div class="log_pass">
                      <label for="user_password">Password</label>
                      <input type="password" name="user_password" id="user_password" />
                  </div>

                  <div class="log_pass">
                      <label for="user_cpassword">Password again</label>
                      <input type="password" name="user_cpassword" id="user_cpassword" />
                  </div>

                  <div class="log_pass">
                      <?php
                      ob_start();
                      do_action('register_form');
                      echo ob_get_clean();
                      ?>
                  </div>

                  <div class="log_user">
                      <?php wp_nonce_field('userRegister', 'formType'); ?>
                      <button type="submit" class="register_user">Register</button>
                  </div>
              </div>
          </form>
          <?php
      } else {
          echo '<p class="error-logged">You are already logged in.</p>';
      }
      $register_form = ob_get_clean();
      return $register_form;
  }

  add_action('wp', 'wc_user_register_callback');

  function wc_user_register_callback() {
      if (isset($_POST['formType']) && wp_verify_nonce($_POST['formType'], 'userRegister')) {

          global $registrationError, $registrationSuccess;

          $u_name = trim($_POST['user_name']);
          $u_email = trim($_POST['user_email']);
          $u_pwd = trim($_POST['user_password']);
          $u_cpwd = trim($_POST['user_cpassword']);

          if ($u_name == '') {
              $registrationError .= '<strong>Error! </strong> Enter User name.,';
          }

          if (username_exists($u_name)) {
              $registrationError .= '<strong>Error! </strong> Username In Use!.,';
          }

          if ($u_email == '') {
              $registrationError .= '<strong>Error! </strong> Enter Email.,';
          }

          if ($u_pwd == '' || $u_cpwd == '') {
              $registrationError .= '<strong>Error! </strong> Enter Password.,';
          }

          if (strlen($u_pwd) < 5) {
              $registrationError .= '<strong>Error! </strong> Use minimum 5 character in password.,';
          }

          if ($u_pwd != $u_cpwd) {
              $registrationError .= '<strong>Error! </strong> Password are not matching.,';
          }

          if ($u_email != '' && !is_email($u_email)) {
              $registrationError .= '<strong>Error! </strong> Invalid e-mail address.,';
          }

          if (email_exists($u_email) != false) {
              $registrationError .= '<strong>Error! </strong> This Email is already registered.,';
          }

          $registrationError = trim($registrationError, ',');
          $registrationError = str_replace(",", "<br/>", $registrationError);

          if (empty($registrationError)) {

              $user_login = $u_name;
              $user_email = $u_email;

              $userdata = array(
                  'user_login' => $user_login,
                  'user_pass' => $u_pwd,
                  'user_email' => $user_email
              );

              $errors = wp_insert_user($userdata);

              if (is_wp_error($errors)) {
                  $registrationError = $errors->get_error_message();
              } else {
                  $registrationSuccess = '<strong>Success! </strong> Application submitted. Please wait for user approval.';

                  wp_set_current_user($errors, $u_name);
                  wp_set_auth_cookie($errors);
                  do_action('wp_login', $u_name, $user);

                  wp_redirect(site_url());
                  exit;
              }
          }
      }
  }
?>
</div>
          <div class="social-signin-div">
            <div class="social-divider align-items-center" style="margin-left: 10%;">
              <span>or</span>
            </div>
            <div class="google-div m-auto social-div pull-left">
              <a href="https://www.google.com/" id="glogin" class="btn btn-social btn-google">
                <span class="fa google"> <i class="fab fa-2x fa-google"></i> </span>Google
              </a>
            </div>
            <div class="google-div social-div pull-left">
              <a href="https://www.facebook.com/" id="glogin" class="btn btn-social btn-facebook ">
                <span class="fa facebook"> <i class="fab fa-2x fa-facebook-f"></i> </span>Facebook
              </a>
            </div>
            <p style="display:block;margin:10px 0px;"></p>
            <div class="google-div social-div pull-left">
              <a href="https://www.linkedin.com/" id="glogin" class="btn btn-social btn-linkedin ">
                <span class="fa linkedin"> <i class="fab fa-2x fa-linkedin-in"></i> </span>Linkedin
              </a>
            </div>
            <div class="google-div social-div pull-left">
              <a href="https://www.github.com/" id="glogin" class="btn btn-social btn-git ">
                <span class="fa git"> <i class="fab fa-2x fa-github"></i> </span>GitHub
              </a>
            </div>
            <div class="createA"><a  href="https://www.geeksforgeeks.org/why-create-an-account-on-geeksforgeeks/">Why Create an Account?</a></div>
            <div class="tnc">
              By creating this account, you agree to our <a href="https://www.geeksforgeeks.org/privacy-policy/">Privacy Policy</a> &amp; <a href="https://www.geeksforgeeks.org/cookie-policy/" target="_blank">Cookie Policy</a>.
            </div>
          </div>
        </div>




    </body>
  </div>

  <script>
    function openContent(evt, contentId) {
      // Declare all variables
      var i, tabcontent, tablinks;

      // Get all elements with class="tabcontent" and hide them
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }

      // Get all elements with class="tablinks" and remove the class "active"
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tabcontent.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }

      // Show the current tab, and add an "active" class to the link that opened the tab
      document.getElementById(contentId).style.display = "";
      evt.currentTarget.className += " active";
    }
  </script>


  <script>
    $("#loginbutton").click(function() {


      $("#loginform").show("slow");
      $("#registerform").hide("slow");
    });
  </script>

  <script>
    $("#register").click(function() {
      $("#registerform").show("slow");
      $("#loginform").hide("slow");
    });
  </script>
            
            <!-- end header__search -->


            <?php get_template_part( "template-parts/common/navigation" ); ?>

        </div> <!-- header-content -->
    </header> <!-- header -->


    <?php
    if ( is_home() ) {
        get_template_part( "template-parts/blog-home/featured" );
    }
    ?>

</section> <!-- end s-pageheader -->