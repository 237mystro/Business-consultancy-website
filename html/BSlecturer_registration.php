<!DOCTYPE html>
<html lang="en">
<?php
require 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["userName"] ?? '';
    $cpassword = $_POST["cpassword"] ?? '';
    $password = $_POST["password"] ?? '';
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
            header("location: BSadmin-dashboard.php");
        } else {
            echo "Error:" . $connect->error;
        }
    }


}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="..\BS_js\registration.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
        integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    .register {
        margin: 30px auto;
        margin-bottom: 30px;
        padding: 4px 4px 4px 4px;
        display: flex;
        flex-direction: column;
        color: black;
        justify-content: center;
        box-shadow: 0 0 4px rgba(0, 0, 0, 0.2);
        width: 70%;
        border-radius: 15px;
        padding: 10px 10px 10px 10px;
    }

    h1 {
        font-size: 48px;
        font-weight: bold;
        text-align: center;
        color: black;
    }
    h3{
        font-size: 28px;
        font-weight: bold;
        text-align: center;
        color: black;
        margin-top: -20px;
    }

    .chnage-option {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
        color: black;

        hr {
            width: 100px;
            margin-left: 15px;
            margin-right: 15px;
            margin-bottom: 10px;
            color: black;

        }
    }

    .signUp-container {
        display: flex;
        align-items: center;
        flex-direction: column;

        input,
         textarea {
            justify-content: center;
            align-items: center;
            width: 500px;
            height: 30px;
            text-align: left;
            border-radius: 15px;
            border: 1px solid black;
            padding: 10px;
            color: black;
            margin-top: 15px;

        }

        #eyeOpen {
            position: absolute;
            cursor: pointer;
            margin-top: 25px;
            margin-left: 400px;
        }

        #description {
            height: 50px;
            width: 500px;
            border: 1px solid black;
            border-radius: 15px;
            padding: 10px;
            color: black;
        }

        .checks {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;

            input {
                width: 15px;
                height: 15px;
            }

        }
    }

    .first-signin-option {
        display: flex;
        align-items: center;
        flex-direction: row;
        justify-content: center;
        margin-top: 20px;
        margin-bottom: 20px;
    }

    #google,
    #aplle {
        border: 1px solid black;
        width: 100px;
        height: 30px;
        border-radius: 15px;
        background-color: white;
        justify-content: center;
        text-align: center;
        cursor: pointer;
        margin-left: 10px;
        margin-right: 10px;
        color: black;
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
    #google:hover {
        background-color: #032b44;
        color: white;
    }

    #aplle:hover {
        background-color: #032b44;
        color: white;
    }

    .submit-button {
        border: none;
        width: 500px;
        border-radius: 15px;
        height: 50px;
        font-weight: bold;
        font-size: 24px;
        background-color: #032b44;
        color: white;
        cursor: pointer;
        margin-top: 20px;
    }
</style>
<!-- header css -->
<style>
    * {
        color: black;
        font-family: Arial, sans-serif;

    }

    .logo {
        background-image: url(../header/image/logo.jpg);
        width: 59px;
        height: 59px;
        background-size: cover;
    }

    .top-bar {
        width: 100%;
        height: 86px;
        background-color: rgba(0, 123, 224, 0.17);
        border-radius: 15px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin: 10px auto;
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
        margin-left: 30px;

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
    <header>

        <div class="top-bar">
            <div class="left">
                <p class="logo_name" style="color: black";>Business consultancy</p>
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
    <div class="register">
        <h1>Create an Account</h1>
        <h3>(As a lecturer)</h3>
        <p style="color: black; text-align: center; margin-top: -20px;">please enter your details to create your account.</p>
        <!--action="/your-submit-url"-->.
        <form id="submit" action="<?php echo $_SERVER["PHP_SELF"]; ?>" class="signUp-container" method="post">

            <input type="text" placeholder="FirstName here" name="userName" id="userName" required><br>
            <input type="email" placeholder="Enter your Email" name="email" id="email" required><br>
             <input type="tel" placeholder="Enter Phone Number" name="number" id="number" required><br>
            <input type="password" placeholder="enter your password" name="password" id="password" required><br>
            <span class="tougle" onclick="togglepassword()"></span>
            <span id="eyeOpen"></span>
            <input type="password" placeholder="confrim your password" name="cpassword" id="cpassword" required><br>
            <?php if (isset($error1))
                echo "<div style='color: red;'>$error1</div>" ?>
                <textarea name="description" id="description" name="Description" placeholder="description(OPTIONAL)"
                    rows="4" cols="5"></textarea><br>
                <button type="submit" class="submit-button"><!--<a href="..\BS_html\BSadmin-dashboard.php">-->sign
                    up</a></button><br>
                <div class="checks">
                    <label style="color: black; ">

                        <input type="checkbox">Please keep me updated with the latest news!
                    </label>
                    <p style="color: black;">Already have an account? <a style="color: blue; text-decoration: none;"
                            href="..\BS_html\BSlogin.php">Sign in</a>
                    </p>
                </div>
            </form>
  <div class="chnage-option">
            <hr>or continue with email
            <hr>
        </div>
          <div class="first-signin-option">
            <button id="google"><i class="fa-brands fa-google" style="color: #000000;"></i> Google</button>
            <button id="aplle"><i class="fa-brands fa-apple" style="color: #000000;"></i>Apple</button>
        </div>
</div>

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
                    <li><a style=" font-size: 24px; font-weight: bold; text-decoration: none; color: white;"
                            href="#">log-in</a>
                    </li>
                    <li><a style=" font-size: 24px; font-weight: bold; text-decoration: none; color: white;"
                            href="#">sign-in</a>
                    </li>
                    <li><a style=" font-size: 24px; font-weight: bold; text-decoration: none; color: white;"
                            href="#">home</a></li>
                    <li><a style=" font-size: 24px; font-weight: bold; text-decoration: none; color: white;"
                            href="#">contact-us</a>
                    </li>
                    <li><a style=" font-size: 24px; font-weight: bold; text-decoration: none; color: white;"
                            href="#">about-us</a>
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