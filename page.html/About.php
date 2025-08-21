<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="..\page.css\about.css">
</head>
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
        color: black;
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
            color: white;
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
                <p class="logo_name">Business <br> consultancy</p>
            </div>
            <div class="right">
                <a href="..\BS_html\HOME.php">Home</a>
                <a href="..\BS_html\About.php">About-us</a>
                <a href="..\BS_html\BSservice.php">Service</a>
                <a href="..\BS_html\BScontact.php">Contact</a>

            </div>
        </div>


    </header>
    <div>
        <div class="story">
                <h1>Our story</h1>
            <h2>Driving by passion, Defined by Result</h2>
            <p>For over a decade, we have been dedicated to delivering innovative solution. We believe in the power
                of
                collaboration and are committed to helping our clients succeed </p>

        </div>
        <div class="empower">
            <div class="MISSION">
                <h2>OUR MISSION</h2>
                <p>To empower business with innovative digital solutions <br> that drive grrowth and creat lasting
                    value. </p>
            </div>
            <div class="vision">
                <h2>OUR VISION</h2>
                <p>To be the trusted and sought-after partner for businesses seeking <br> to navigate the complexity of
                    modern market.</p>
            </div>
        </div>
        <div class="main-dream">
            <h1> Our Core Values</h1>
            <div class="mn-dream">
                <div>
                    <h3>Intergrity</h3>
                    <p>We operate with honesty, transperency, and a commitment to doing what is right for our clients
                    </p>
                </div>
                <div>
                    <h3>Innovation</h3>
                    <p>We constantly seek new solutions and creative approaches to solve complex business challenges
                    </p>
                </div>
                <div>
                    <h3>Collaboration</h3>
                    <p>We work as a team both internally and with our clients, to achieve shared goals</p>
                </div>
            </div>
        </div>


    </div>
</body>
<footer>
    <div>
        <img src="..\BSimages\BSlogo.jpg" alt="logo" width="116" height="116">
        <p style=" font-size: 24px; font-weight: bold; color: white;">2025 design by ppef team<br>Security
            privacy/policies </p>
    </div>
    <div class="detail_footer">
        <div class="quick-menu">
            <p style=" font-size: 24px; font-weight: bolder; opacity: 0.71; color: white;">Quick menu</p>
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
            <p style=" font-size: 24px; font-weight: bolder; opacity: 0.71;color: white;">Get to us</p>
            <a style="font-size: 24px; font-weight: bold; color: white;"
                href="mailto:tekogmanain@gmail.com">tekogmanain@gmail.com</a>
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