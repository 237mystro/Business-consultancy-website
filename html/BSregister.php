<!DOCTYPE html>
<html lang="en">
<?php
require 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"] ?? '';
  $password = $_POST["password"] ?? '';
  $cpassword = $_POST["cpassword"] ?? '';
  $email = $_POST["email"] ?? '';

  if ($password !== $cpassword) {
    $error1 = " password doesn't match!";
  } else {
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT) ?? '';
    $sql = "INSERT INTO admin_users( username, password, email) VALUES ( ?, ?, ?)";
    $stmt = $connect->prepare($sql);
    $stmt->bind_param("sss", $username, $password, $email);

    if ($stmt->execute() === TRUE) {
      session_start();
      $_SESSION["username"] = $username;
      header("location: BSuserdashboard.php");
    } else {
      echo "Error:" . $connect->error;
    }
  }
}
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>sign in </title>
  <link rel="Stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
    integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="..\BS_js\registration.js" defer></script>
</head>
<!-- body css -->
<style>
  * {
    color: black;
    font-family: Arial, sans-serif;

  }

  body {
    font-family: Arial, sans-serif;
    background-color: #f4f7fa;
    margin: 0;
    padding: 0;
    color: #333;
  }
.apple{
  color:black;
    border-radius: 30px;
    height: 40px;
}
.google{
  color:black;
  border-radius: 30px;
  height: 40px;
}
  .apple:hover {
    background-color: #032B44;
    color: white;
  }

  .google:hover {
    background-color: #032B44;
    color: #fff;
  }

  .register-form {
    text-align: center;
    max-width: 800px;
    margin: auto;
    padding: 0px;
    text-align: center;
    background: white;
    padding: 30px;
    margin-top: 20px;
    border-radius: 8px;

  }

  h1 {
        font-size: 48px;
        font-weight: bold;
        text-align: center;
        color: black;
  }

  h3 {
        font-size: 28px;
        font-weight: bold;
        text-align: center;
        color: black;
        margin-top: -20px;
  }

  .hr {
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 20px 0;
    color: black;
  }

  hr {
    border: 0;
    height: 1px;
    background: #ccc;
    margin: 10px 0;
    width: 300px;
    align-items: center;
    justify-content: center;
  }

  form input,
  form textarea {
    display: inline-block;
    width: 600px;
    height: 30px;
    padding: 10px;
    margin-bottom: 15px;
    border-radius: 15px;
    border: 1px solid #ccc;
    align-items: center;
    color: black;
    justify-content: center;
  }

  form button {
    width: 600px;
    height: 30px;
    padding: 10px;
    margin-bottom: 15px;
    border-radius: 15px;
    border: 1px solid #ccc;
    background-color: #032B44;
    align-items: center;
    color: white;
    justify-content: center;
    cursor: pointer;
  }

  .descrip {
    width: 600px;
    height: 100px;
    padding: 10px;
    margin-bottom: 15px;
    border-radius: 15px;
    border: 1px solid #ccc;
  }

  .form {
    background-color: #0073e6;
    text-align: center;
    border-radius: 20%;
    color: white;
    font-weight: bold;
    display: flex;
    flex-direction: column;
    justify-content: center;
  }

  .button {
    box-sizing: content-box;
    border-radius: 50;
  }
</style>
<!-- header css -->
<style>
  .logo {
    background-image: url(../header/image/logo.jpg);
    width: 59px;
    height: 59px;
    background-size: cover;
  }

  .top-bar {
    width: 100%;
    height: 86px;
    display: none;
    background-color: rgba(0, 123, 224, 0.17);
    border-radius: 15px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 10px;
    margin-left: 15px;


  }

  .left {
    display: flex;
    flex-direction: row;
    align-items: center;
    margin-left: 30px;

    .logo_name {
      margin-left: 5px;
      font-weight: bold;
    }
  }

  .right {
    margin-right: 50px;
    display: flex;
    flex-direction: row;
    align-items: center;

    a {
      margin-right: 15px;
      text-decoration: none;
      color: black;
      font-weight: bold;
      font-size: 24px;
    }
  }
</style>
<!-- footer css -->
<style>
  * {
    color: white;
  }

  footer {
    width: cover;
    height: 314;
    padding-left: 95px;
    padding-right: 95px;
    padding-bottom: 56px;
    padding-top: 56px;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    background-color: black;
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;

    .detail_footer {
      display: flex;
      flex-direction: row;
      justify-content: space-between;
      align-items: center;
    }
  }

  .get-to {
    margin-left: 265px;

    .social-medai {
      display: flex;
      flex-direction: row;
      align-items: center;
      margin-top: 25px;

      a {
        margin-right: 30px;
      }
    }
  }
</style>

<body>
  <header style="margin-right: 15px;">

    <div class="top-bar">
      <div class="left">
        <p class="logo_name"style="color: black";>Business consultancy</p>
      </div>
      <div class="right">
        <a href="..\BS_html\HOME.php">Home</a>
        <a href="..\BS_html\About.php">About-us</a>
        <a href="..\BS_html\BSservice.php">Service</a>
        <a href="..\BS_html\BScontact.php">Contact</a>
        <a href="..\BS_html\BSlogin.php">login</a>

      </div>
    </div>


  </header>
  <section class=" register-form">
    <b>
      <h1 style="color: black;">Create an account</h1>
      <h3>(As a student)</h3>
    </b>
    <p style="color: black; margin-top: -20px;">please enter your details to create your account.</p>
  

    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">

      <input type="text" name="username" placeholder="username" id="username" required>
      <input type="email" name="email" placeholder="Email address" id="email" required />
      <input type="tel" placeholder="Enter Phone Number" name="number" id="number" required><br>
      <input type="password" name="password" placeholder="Password" id="password" required>
      <span class="tougle" onclick="togglepassword()"></span>
      <input type="password" name="cpassword" placeholder="Confirm Password" id="cpassword" required>
      <?php if (isset($error1))
        echo "<div style='color: red;'>$error1</div>" ?>
        <textarea class="descrip" name="Description" placeholder="Description" id="Description"></textarea>
        <button type="submit" value="register">Create an account</button>
      </form>
      
      <label style="color: black;">
        <input type="checkbox">Please keep me updated with the latest news!
      </label>
      <p style="color: black;">Already have an account? <a style="color: blue; text-decoration:none;" href="..\BS_html\BSlogin.php">Sign in</a>
      </p>
          <div class="hr">
      <hr>or
      <hr>
    </div>
        <button class="apple"> <i class="fa-brands fa-apple" style="color: #000000;"></i> continue with Apple</button>
    <button class="google"> <i class="fa-brands fa-google" style="color: #000000;"></i> Continue with Google</button>
    </section>
  </body>
  <footer>
    <div>
      <img src="..\BSimages\BSlogo.jpg" alt="logo" width="116" height="116">
      <p style=" font-size: 24px; font-weight: bold;">2025 design by ppef team<br>Security privacy/policies </p>
    </div>
    <div class="detail_footer">
      <div class="quick-menu">
        <p style=" font-size: 24px; font-weight: bolder; opacity: 0.71;">Quick menu</p>
        <ul style=" list-style: none;">
          <li><a style=" font-size: 24px; font-weight: bold; text-decoration: none; color: white;" href="#">log-in</a>
          </li>
          <li><a style=" font-size: 24px; font-weight: bold; text-decoration: none; color: white;" href="#">sign-in</a>
          </li>
          <li><a style=" font-size: 24px; font-weight: bold; text-decoration: none; color: white;" href="#">home</a></li>
          <li><a style=" font-size: 24px; font-weight: bold; text-decoration: none; color: white;" href="#">contact-us</a>
          </li>
          <li><a style=" font-size: 24px; font-weight: bold; text-decoration: none; color: white;" href="#">about-us</a>
          </li>
        </ul>
      </div>
      <div class="get-to">
        <p style=" font-size: 24px; font-weight: bolder; opacity: 0.71;">Get to us</p>
        <a style="font-size: 24px; font-weight: bold;" href="mailto:tekogmanain@gmail.com">tekogmanain@gmail.com</a>
        <div class="social-medai">
          <a href="https://linkedin.com">
            <i class="fa-brands fa-square-linkedin fa-2xl" style="color: #ffffff;"></i>
          </a>
          <a href="https://x.com">
            <i class="fa-brands fa-x-twitter fa-2xl" style="color: #ffffff;"></i>
          </a>
          <a href="https://instagram.com">
            <i class="fa-brands fa-square-instagram fa-2xl" style="color: #ffffff;"></i>
          </a>
          <a href="https://youtube.com">
            <i class="fa-brands fa-youtube fa-2xl" style="color: #ffffff;"></i>
          </a>
        </div>
      </div>
    </div>
  </footer>

  </html>