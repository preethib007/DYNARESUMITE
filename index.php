<?php 
  require('connection.php'); 
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DYNARESUMITE-ResumeGenerator</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  
  <header>

        <h2><img src="images/logo.png" width="80%" height="30%"></h2>
        <div class='sign-in-up'>
          <button type='button' onclick="popup('login-popup')">LOGIN</button>
          <button type='button' onclick="popup('register-popup')">REGISTER</button>
        </div>
    
  </header><br><br><br><br>
  <div class="intro">
        
        <h1>Create your professional resume with <span><u>DYNARESUMITE.</u></span></h1>
    </div><br><br><br><br>
    <div class="para">
        <p>With our <span><u>DYNARESUMITE</u></span>, it is simple for anyone to quickly create a professional resume.<br> <br>
            &emsp;&emsp;&emsp;&emsp;Enter your personal details and begin filling out your resume content.<br><br>
            &emsp;&emsp;&emsp;Finally, your resume will be created and download your resume in pdf format.<br><br></p>
    </div>

  <div class="popup-container" id="login-popup">
    <div class="popup">
      <form method="POST" action="login_register.php">
        <h2>
          <span>USER LOGIN</span>
          <button type="reset" onclick="popup('login-popup')">X</button>
        </h2>
        <input type="text" placeholder="E-mail or Username" name="email_username">
        <input type="password" placeholder="Password" name="password">
        <button type="submit" class="login-btn" name="login">LOGIN</button>
      </form>
      <div class="forgot-btn">
        <button type="button" onclick="forgotPopup()">Forgot password ?</button>
      </div>
    </div>
  </div>

  <div class="popup-container" id="register-popup">
    <div class="register popup">
      <form method="POST" action="login_register.php">
        <h2>
          <span>USER REGISTER</span>
          <button type="reset" onclick="popup('register-popup')">X</button>
        </h2>
        <input type="text" placeholder="Full Name" name="fullname">
        <input type="text" placeholder="Username" name="username">
        <input type="email" placeholder="E-mail" name="email">
        <input type="password" placeholder="Password" name="password">
        <button type="submit" class="register-btn" name="register">REGISTER</button>
      </form>
    </div>
  </div>

  <div class="popup-container" id="forgot-popup">
    <div class="forgot popup">
      <form method="POST" action="forgotpassword.php">
        <h2>
          <span>RESET PASSWORD</span>
          <button type="reset" onclick="popup('forgot-popup')">X</button>
        </h2>
        <input type="text" placeholder="E-mail" name="email">
        <button type="submit" class="reset-btn" name="send-reset-link">SEND LINK</button>
      </form>
    </div>
  </div>
  

  <script>
    function popup(popup_name)
    {
      get_popup=document.getElementById(popup_name);
      if(get_popup.style.display=="flex")
      {
        get_popup.style.display="none";
      }
      else
      {
        get_popup.style.display="flex";
      }
    }

    function forgotPopup(){
      document.getElementById('login-popup').style.display="none";
      document.getElementById('forgot-popup').style.display="flex";
    }
  </script>

</body>
</html>