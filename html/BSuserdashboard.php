<!DOCTYPE html>
<html lang="en">
<?php 
    require 'db_connect.php';
    session_start();

    $username= $_SESSION["username"];
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
        integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>



<!--body css-->
<style>
     * {
    color: black;
    font-family: Arial, sans-serif;

  }

    .dashboard_container {
        margin-right: 15px;
        margin-left: 30px;
    }

    .main_section {
        margin-top: 15px;
        display: flex;


    }

    .head_img {
        border-radius: 15px;
        border: solid 2px white;
        margin-left: 45px;
    }

    .dashboard_welocome {
        display: flex;
        flex-direction: row;
        background-color: #032B44;
        justify-content: space-between;
        border-radius: 15px;
        align-items: center;

        width: cover;
    }

    .profile-pic {
        background-color: #032B44;
        width: 80px;
        height: 80px;
        border-radius: 100px;
        border: 1px black solid;
        background-image: url('../BSimages/BSprofile.png');
        background-size: cover;
    }

    .welcome_speech {

        margin-right: 72px;
        margin-top: 35px;
        margin-bottom: 35px;
        color: white;
        margin-left: 15px;

        h1 {
            font-size: 32px;
            font-style: italic;

            p {
                font-style: italic;
                font-size: 20px;
                opacity: 0.71;
                margin-top: 0;
            }
        }

        div {
            display: flex;
            flex-direction: row;
            align-items: center;
            align-content: center;

            .chat_bot {
                background-color: white;
                color: black;
                font-size: 20px;
                height: 48px;
                width: 119px;
                cursor: pointer;
                border-radius: 15px;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .search {
                margin-left: 32px;
                border: 1px solid white;
                background-color: none;
                width: 364px;
                height: 48px;
                border-radius: 15px;
                display: flex;
                align-items: center;
                justify-content: center;
            }

        }
    }

    .profiles {
        margin-top: 46px;
        display: flex;
        flex-wrap: wrap;
        flex-direction: row;
        justify-content: space-between;
    }

    .profile_outline {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
        width: 550px;
        height: 244px;
        border: 1px solid black;
        border-radius: 15px;
        margin-bottom: 30px;
        margin-left: 0px;
        margin-right: 0px;
        background-color: rgba(0, 123, 224, 0.17);

        .profile_pics {
            text-align: center;
            margin-left: 60px;
        }

        .description {
            margin-left: 14px;
            padding: 5px 5px 5px 5px;
            background-color: white;
            width: 354px;
            height: 221px;
            border: 1px black solid;
            border-radius: 15px;
            margin-right: 9px;

            .rating {
                border-radius: 15px;
                border: 1px black solid;
                height: 48px;
                width: 324;
            }

            .review-connect {
                display: flex;
                align-items: center;
                justify-content: space-between;

                .review {
                    background-color: #032B44;
                    color: white;
                    font-size: 20px;
                    width: 147px;
                    height: 47px;
                    text-align: center;
                    border-radius: 100px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                }

                .connect {
                    background-color: #032B44;
                    color: white;
                    font-size: 20px;
                    width: 147px;
                    height: 47px;
                    text-align: center;
                    border-radius: 100px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                }
            }
        }
    }

    .nav {
        width: 128px;
        height: cover;
        border-radius: 15px;
        background-color: #032B44;
        margin-bottom: 30px;

        .sub {
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 0;

            .sub-nav {
                align-items: center;
                width: 128px;
                margin-top: 50px;

                .sub-nv {
                    display: flex;
                    text-decoration: none;
                    flex-direction: column;
                    color: white;
                    font-weight: bolder;
                    align-items: center;
                    padding-top: 19px;

                    p {
                        margin-top: 30px;
                    }
                }
            }

            .sub-nav:hover {
                background-color: black;
            }

        }
    }
</style>
<!--header css-->
<style>
    .logo {
        background-image: url('../BSimages/BSlogo.jpg');
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
        .profil_pic {
            width: 58px;
            height: 58px;
            border-radius: 100px;
            background-color: #032B44;
            background-image: url("../BSimages/BSprofile.png");
            background-size: cover;
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
                <p class="logo"></p>
                <p class="logo_name">Business <br> consultancy</p>
            </div>
            <div class="right">
                <p class="profil_pic"></p>
                <h1 style="font-size: 18px;"><?php echo "$username"; ?> <p style=" opacity: 0.71; margin-top: 0; font-size: 18px;">Basic plan</p>
                </h1>
            </div>
        </div>
    </header>

    <section class="main_section">

        <div class="nav">
            <ul class="sub">
                <div class="sub-nav">
                <a class="sub-nv" href="..\BS_html\BSuserdashboard.php">
                        <i class="fa-brands fa-wpexplorer fa-xl" style="color: #ffffff;"></i>
                        <p>Explore</p>
                    </a>
                </div>
                <div class="sub-nav">
                    <a class="sub-nv" href="..\BS_html\BSservice2.php">
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
                    <a class="sub-nv" href="..\BS_html\BScontact2.php">
                        <i class="fa-solid fa-phone fa-xl" style="color: #ffffff;"></i>
                        <p>Contact</p>
                    </a>
                </div>
                <div class="sub-nav">
                    <a class="sub-nv" href="..\BS_html\settinguser.php">
                    <i class="fa-solid fa-gear fa-2xl" style="color: #ffffff;"></i>
                        <p>setting</p>
                    </a>
                </div>
            </ul>
        </div>
        <div class="dashboard_container">
            <div class="dashboard_welocome">
                <img class="head_img" src="..\BSimages\BSmain_pic.png" alt="main_pic" width="500" height="223">
                <div class="welcome_speech">
                    <h1>Get the required information to drive your business towards growth <p>Explore from the best
                            coaches
                        </p>
                    </h1>
                    <div>
                        <p class="chat_bot">Chat bot</p>
                        <p class="search">search variety of coaches</p>
                    </div>
                </div>
            </div>
            <div class="profiles">
                <div class="profile_outline">
                    <div class="profile_pics">
                        <p class="profile-pic"></p>
                        <p style=" font-size: 24px; font-weight: bold;">Elizabeth</p>
                        <p style=" font-size: 20px; font-weight: bold; opacity: 0.71; margin-top: 0;">Verified</p>
                    </div>
                    <div class="description">
                        <p style=" color: black; font-size: 20px;">I have been an business consultant for more than 5
                            years
                            ...........</p>
                        <p class="rating"></p>
                        <div class="review-connect">
                            <p class="review">review</p>
                            <p class="connect">connect</p>
                        </div>
                    </div>
                </div>
                <div class="profile_outline">
                    <div class="profile_pics">
                        <p class="profile-pic"></p>
                        <p style=" font-size: 24px; font-weight: bold;">Elizabeth</p>
                        <p style=" font-size: 20px; font-weight: bold; opacity: 0.71; margin-top: 0;">Verified</p>
                    </div>
                    <div class="description">
                        <p style=" color: black; font-size: 20px;">I have been an business consultant for more than 5
                            years
                            ...........</p>
                        <p class="rating"></p>
                        <div class="review-connect">
                            <p class="review">review</p>
                            <p class="connect">connect</p>
                        </div>
                    </div>
                </div>
                <div class="profile_outline">
                    <div class="profile_pics">
                        <p class="profile-pic"></p>
                        <p style=" font-size: 24px; font-weight: bold;">Elizabeth</p>
                        <p style=" font-size: 20px; font-weight: bold; opacity: 0.71; margin-top: 0;">Verified</p>
                    </div>
                    <div class="description">
                        <p style=" color: black; font-size: 20px;">I have been an business consultant for more than 5
                            years
                            ...........</p>
                        <p class="rating"></p>
                        <div class="review-connect">
                            <p class="review">review</p>
                            <p class="connect">connect</p>
                        </div>
                    </div>
                </div>
                <div class="profile_outline">
                    <div class="profile_pics">
                        <p class="profile-pic"></p>
                        <p style=" font-size: 24px; font-weight: bold;">Elizabeth</p>
                        <p style=" font-size: 20px; font-weight: bold; opacity: 0.71; margin-top: 0;">Verified</p>
                    </div>
                    <div class="description">
                        <p style=" color: black; font-size: 20px;">I have been an business consultant for more than 5
                            years
                            ...........</p>
                        <p class="rating"></p>
                        <div class="review-connect">
                            <p class="review">review</p>
                            <p class="connect">connect</p>
                        </div>
                    </div>
                </div>
                <div class="profile_outline">
                    <div class="profile_pics">
                        <p class="profile-pic"></p>
                        <p style=" font-size: 24px; font-weight: bold;">Elizabeth</p>
                        <p style=" font-size: 20px; font-weight: bold; opacity: 0.71; margin-top: 0;">Verified</p>
                    </div>
                    <div class="description">
                        <p style=" color: black; font-size: 20px;">I have been an business consultant for more than 5
                            years
                            ...........</p>
                        <p class="rating"></p>
                        <div class="review-connect">
                            <p class="review">review</p>
                            <p class="connect">connect</p>
                        </div>
                    </div>
                </div>
                <div class="profile_outline">
                    <div class="profile_pics">
                        <p class="profile-pic"></p>
                        <p style=" font-size: 24px; font-weight: bold;">Elizabeth</p>
                        <p style=" font-size: 20px; font-weight: bold; opacity: 0.71; margin-top: 0;">Verified</p>
                    </div>
                    <div class="description">
                        <p style=" color: black; font-size: 20px;">I have been an business consultant for more than 5
                            years
                            ...........</p>
                        <p class="rating"></p>
                        <div class="review-connect">
                            <p class="review">review</p>
                            <p class="connect">connect</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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