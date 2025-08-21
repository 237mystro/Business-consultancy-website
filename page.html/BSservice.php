<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>service and pricing</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
        integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<!-- body css -->
<style>
    body {
        font-family: Arial, sans-serif;
        background: #fff;
        text-align: center;
    }

    .pricing-section {
        margin-bottom: 15px; 
        margin-top: -300px;
    }

    h1 {
        font-size: 50px;
        margin-bottom: 2px;
        color: black;
    }

    .subtext {
        font-size: 25px;
        color: #555;
        margin-bottom: 15px;
    }

    .pricing-container {
        display: flex;
        justify-content: center;
        gap: 30px;
    }

    .card {
        background-color: #002133;
        color: white;
        padding: 50px 10px;
        width: 250px;
        border-radius: 10px;
    }

    .card h2 {
        margin-top: 0.5px;
        font-size: 37px;
    }

    .card ul {
        padding: 0px;
        margin-bottom: 20px;
    }

    .card ul li {
        margin: 10px 0px;
        position: relative;
        padding-left: 30px;
        text-align: justify;
    }

    .card ul li:before {
        content: "•";
        color: white;
        position: absolute;
        left: 20px;
    }

    .price {
        font-size: 30px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    button {
        background-color: white;
        color: #002133;
        border: none;
        padding: 10px 70px;
        border-radius: 20px;
        cursor: pointer;
        font-weight: bold;
        font-size: 20px;
    }
</style>
<!-- header css -->
<style>
    .logo{
    background-image: url(../header/image/logo.jpg);
    width: 59px;
    height: 59px;
    background-size: cover;
}
.top-bar{
    width: 100%;
    height: 86px;
    display: none;
    background-color: rgba(0, 123, 224, 0.17);
    border-radius: 15px;
    display: flex;
    justify-content: space-between;
    align-items: center;

}
.left{
    display: flex;
    flex-direction: row;
    align-items: center;
    margin-left: 30px;
    .logo_name{
        margin-left: 5px;
        font-weight: bold;
    }
}
.right{
    margin-right: 50px;
    display: flex;
    flex-direction: row;
    align-items: center;
    a{
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
    <section class="main-sec">
        <div class="nav">
            <ul class="sub">
                <div class="sub-nav">
                    <a class="sub-nv" href="..\admin-auth\userdashboard.php">
                        <i class="fa-brands fa-wpexplorer fa-xl" style="color: #ffffff;"></i>
                        <p>Explore</p>
                    </a>
                </div>
                <div class="sub-nav">
                    <a class="sub-nv" href="..\view\service.php">
                        <i class="fa-solid fa-tags fa-xl" style="color: #ffffff;"></i>
                        <p>Pricing</p>
                    </a>
                </div>
                <div class="sub-nav">
                    <a class="sub-nv" href="#">
                        <i class="fa-solid fa-circle-info fa-xl" style="color: #ffffff;"></i>
                        <p>About</p>
                    </a>
                </div>
                <div class="sub-nav">
                    <a class="sub-nv" href="#">
                        <i class="fa-solid fa-phone fa-xl" style="color: #ffffff;"></i>
                        <p>Contact</p>
                    </a>
                </div>
            </ul>
        </div>
        <section class="pricing-section">
            <h1>Pricing & Plans</h1>
            <p class="subtext">choose the ideal plan for your business. Achieve a perfect<br>balance of success rates,
                high
                revenue, and general recognition</p>

            <div class="pricing-container">
                <div class="card">
                    <h2>Basic</h2>
                    <ul>
                        <li>3 months</li>
                        <li>12 coaches</li>
                        <li>Profile editing</li>
                        <li>Verified</li>
                    </ul>
                    <div class="price">300,000FCFA</div>
                    <button>Get started</button>
                </div>

                <div class="card">
                    <h2>Medium</h2>
                    <ul>
                        <li>3 months</li>
                        <li>12 coaches</li>
                        <li>Profile editing</li>
                        <li>Verified</li>
                    </ul>
                    <div class="price">600,000FCFA</div>
                    <button>Get started</button>
                </div>

                <div class="card">
                    <h2>Advanced</h2>
                    <ul>
                        <li>3 months</li>
                        <li>12 coaches</li>
                        <li>Profile editing</li>
                        <li>Verified</li>
                    </ul>
                    <div class="price">1,000,000FCFA</div>
                    <button>Get started</button>
                </div>
            </div>
        </section>
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

</html>