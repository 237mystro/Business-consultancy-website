<!DOCTYPE html>
<html lang="en">
<?php
require 'db_connect.php';
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = $_POST["password"] ?? '';
    $email = $_POST["email"] ?? '';

    
    $stmt1 = $connect->prepare("SELECT * FROM admin_users WHERE email=?");
    $stmt1->bind_param("s", $email);
    $stmt1->execute();
    $lecturer = $stmt1->get_result()->fetch_assoc();

    $stmt2 = $connect->prepare("SELECT * FROM users WHERE email =?");
    $stmt2->bind_param("s", $email);
    $stmt2->execute();
    $student = $stmt2->get_result()->fetch_assoc();

    if ($lecturer && password_verify($password, $lecturer['password'])) {
        $_SESSION['username'] = $lecturer['username'];
        $_SESSION['email'] = $lecturer['email'];
        header("location: BSadmin-dashboard.php");
    } elseif ($student && password_verify($password, $student['password'])) {
        $_SESSION['username'] = $student['username'];
        $_SESSION['email'] = $student['email'];
        header("location: BSuserdashboard.php");
    } else {
        echo "invalid email or password";
    }
    echo" email entered: $email";
    if ($lecturer) {
        echo"lecturer found. <br>";
        echo"password verify result: ". (password_verify($password, $lecturer["password"]) ? 'true': 'false');
    }elseif ($student) {
        echo"studentb ffoound. <br>";
    }else{
        echo "no user found";
    }
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="Stylesheet" href="..\BS_css\BSlogin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
        integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="..\BS_js\registration.js" defer></script>
    <title>sign in </title>
</head>
<body>
    <header>

        <div class="top-bar">
            <div class="left">
                <p class="logo_name"style="color: black;">Business consultancy</p>
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
    <section>
        <div>
            <form  method="post">
                <h1 class="welcome">Hi,<br>Welcome Back<p class="tag">Put the required info to login</p><br></h1>

                <div class="log">
                    <label  for="email">Email</label><br>
                    <input style="height: 35px";type="email" id="email" name="email" required><br>
                    <label  for="password">Password</label><br>
                    <input style="height: 35px"; type="password" id="password" name="password" required>
                    <span class="tougle" onclick="togglepassword()"></span>
                </div>
                <div class="ifot">
                    <div>
                        <label style="color: black;">
                            <input type="checkbox">Remember me
                        </label>
                    </div>
                    <p class="forget">forget password?</p>
                </div>
                <button class="login-button" type="submit" value="login"><!--<a href="..\BS_html\BSuserdashboard.php">-->login</button>
                    </form>
                
                    <p style="color: black;">don't have an account. <a style="color: blue; text-decoration: none;"
                            href="..\BS_html\choice.php">sign-up</a></p>
                </div>
        </div>
        <div class="pic"></div>

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
                <li><a style=" font-size: 24px; font-weight: bold; text-decoration: none; color: white;"
                        href="#">log-in</a></li>
                <li><a style=" font-size: 24px; font-weight: bold; text-decoration: none; color: white;"
                        href="#">sign-in</a></li>
                <li><a style=" font-size: 24px; font-weight: bold; text-decoration: none; color: white;"
                        href="#">home</a></li>
                <li><a style=" font-size: 24px; font-weight: bold; text-decoration: none; color: white;"
                        href="#">contact-us</a></li>
                <li><a style=" font-size: 24px; font-weight: bold; text-decoration: none; color: white;"
                        href="#">about-us</a></li>
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