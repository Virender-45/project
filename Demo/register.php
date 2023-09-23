<?php
require 'config/config.php';
require 'includes/form_handlers/register_handler.php';
require 'includes/form_handlers/login_handler.php';

?>

<html>
<head>
    <title>SastiBook</title>
                                <style>
  @font-face {
    font-family: 'Bellota-LightItalic';
    src: url('Demo/assets/fonts/Bellota-LightItalic.otf') format('otf');
  }
  @font-face {
    font-family: 'Bellota-BoldItalic';
    src: url('Demo/assets/fonts/Bellota-BoldItalic.otf') format('otf');
  }

  form{
    text-align: center;
  }
  .wrapper {
    background-image: linear-gradient(#66ccff, #7f00af);
    background-size: 100%;
    width: 100%;
    height: 100%;
    min-width: 950px;
} 
body{
    margin: 0;
    padding: 0;
}
.login_box {
    font-family: 'Bellota-LightItalic', sans-serif;
    position: relative;
    margin-right: auto;
    margin-left: auto;
    top: 7%;
    width: 35%;
    background-color: #ffffff;
    border: 1px solid #ededed;
    border-radius: 7px;
    padding: 5px;
    opacity: 1;
}
.login_header {
    font-family: 'Bellota-LightItalic', sans-serif;
    width: 100%;
    height: 90px;
    background-color: #9c01c2fc;
    color: #fff;
    text-align: center;
    border-top-left-radius: 7px;
    border-top-right-radius: 7px;
}
.login_header h1 {
    font-family: 'Bellota-BoldItalic', sans-serif;
    margin-top: 0;
    margin-bottom: 0;
    background-image: linear-gradient(to bottom, #66ccff 0%, #ff99cc 100%);
    color: #af00ff;
}






                                </style>

</head>


    <body>

<div class="wrapper">
    <div class="login_box">
            <div class="login_header">
                <h1>SASTIBOOK</h1>
                    Login or sign up below
            </div>

            <form action="register.php" method="POST">
                <input type="email" name="log_email" placeholder="Email Address" value=
                "<?php
                if(isset($_SESSION['log_email']))
                {
                    echo $_SESSION['log_email'];
                }
                ?>" required>
                <br>
                <input type="password" name="log_password" placeholder="Password">
                <br>
                <input type="submit" name="login_button" value="Login">
                <br>

                <?php if(in_array("Email or password was incorrect<br>", $error_array)) echo "Email or password was incorrect<br>"; ?>
            </form>





            <form action="register.php" method="POST">
                <input type="text" name="reg_fname" placeholder="First Name" value=
                "<?php
                if(isset($_SESSION['reg_fname']))
                {
                    echo $_SESSION['reg_fname'];
                }
                ?>" required>
                <br>
                <?php if(in_array("Your first name must be between 2 and 25 characters<br>", $error_array)) echo "Your first name must be between 2 and 25 characters<br>"; ?>


                <input type="text" name="reg_lname" placeholder="Last Name" value=
                "<?php
                if(isset($_SESSION['reg_lname']))
                {
                    echo $_SESSION['reg_lname'];
                }
                ?>" required>
                <br>
                <?php if(in_array("Your last name must be between 2 and 25 characters<br>", $error_array)) echo "Your last name must be between 2 and 25 characters<br>"; ?>


                <input type="emaiL" name="reg_email" placeholder="E-mail" value=
                "<?php
                if(isset($_SESSION['reg_email1']))
                {
                    echo $_SESSION['reg_email1'];
                }
                ?>" required>
                <br>


                <input type="email" name="reg_email2" placeholder="Confirm E-mail" value=
                "<?php
                if(isset($_SESSION['reg_email2']))
                {
                    echo $_SESSION['reg_email2'];
                }
                ?>" required>
                <br>
                <?php if(in_array("Email already in use<br>", $error_array)) echo "Email already in use<br>";
                else if(in_array("Invalid email format<br>", $error_array)) echo "Invalid email format<br>";
                else if(in_array("Emails don't match<br>", $error_array)) echo "Emails don't match<br>"; ?>


                <input type="password" name="reg_password" placeholder="Password" required>
                <br>
                <input type="password" name="reg_password2" placeholder="Confirm Password" required>
                <br>
                <?php if(in_array("Your passwords do not match<br>", $error_array)) echo "Your passwords do not match<br>";
                else if(in_array("Your password can only contains english characters or number<br>", $error_array)) echo "Your password can only contains english characters or number<br>";
                else if(in_array("Your password must be contain between 5 and 30 characters<br> ", $error_array)) echo "Your password must be contain between 5 and 30 characters<br>    "; ?>


                <input type="submit" name="register_button" value="Register">
                <br>

                <?php if(in_array("<span style='color: #14c800;'>You're all set! Go ahead and login!</span><br>", $error_array)) echo "<span style='color: #14c800;'>You're all set! Go ahead and login!</span><br>"; ?>

            </form>
            
        </div>
    </div>
    
     </body>
</html>