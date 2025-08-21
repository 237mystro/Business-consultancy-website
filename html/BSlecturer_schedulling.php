<!DOCTYPE html>
<html lang="en">
<?php 
    require 'db_connect.php';
    session_start();

    $username= $_SESSION["username"];
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="..\BS_css\BSschedulling.css">
    <script src="..\BS_js\BSschedulling.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
        integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<!-- scduling header style -->
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
            color: black;
        }
    }

    .right {
        margin-right: 30px;
        display: flex;
        flex-direction: row;
        align-items: center;

        h1 {
            font-size: 20px;
            font-weight: bold;
            margin-left: 6px;
            color: black;
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
    .detail-logo{
        padding-left: 20px;
    }
    footer {
        width: 100%;
        height: 314px;

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
            padding-right: 20px;
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
<!-- side bar css -->
<style>
    .body {
        display: flex;
        align-items: center;
        flex-direction: row;
        margin-top: 0;
    }

    .nav {
        width: 128px;
        height: 800px;
        margin-top: 15px;
        border-radius: 15px;
        margin-left: 15px;
        background-color: #032B44;

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

    .main {
        flex: 1;
        padding: 1rem;
    }

    .main h1 {
        color: #573fbc;
    }

    .date-display {
        margin-top: 1rem;
        font-weight: bold;
    }

    .calendar {
        margin-top: 1rem;
    }

    .calendar-header {
        display: flex;

        margin-bottom: 0.5rem;
        font-weight: bold;
    }

    table {
        border-collapse: collapse;
        width: 40px;
    }

    th,
    td {
        border: 1px solid #ddd;
        width: 100px;
        height: 40px;
        text-align: center;
    }

    .legend {
        margin-top: 1rem;
    }

    .legend div {
        margin: 0.3rem 0;
        display: flex;
        align-items: center;
    }

    #calendar-days {
        display: grid;
        grid-template-columns: repaeat(7, 1fr);

    }
</style>
<body>
<div class="top-bar">
        <div class="left">
            <p class="logo"></p>
            <p class="logo_name">Business <br> consultancy</p>
        </div>
        <div class="right">
            <p class="profil_pic"></p>
            <h1><?php echo "$username" ?><p style=" color: black; opacity: 0.71; margin-top: 0;">Basic plan</p>
            </h1>
        </div>
    </div>
    <div class="body">
    <div class="nav">
            <ul class="sub">
                <div class="sub-nav">
                    <a class="sub-nv" href="..\BS_html\BSadmin-dashboard.php">
                        <i class="fa-solid fa-user fa-2xl" style="color: #ffffff;"></i>
                        <p>profile</p>
                    </a>
                </div>
                <div class="sub-nav">
                    <a class="sub-nv" href="..\BS_html\BSlecturer_schedulling.php">
                        <i class="fa-solid fa-calendar-days fa-2xl" style="color: #ffffff;"></i>
                        <p>schedule</p>
                    </a>
                </div>
                <div class="sub-nav">
                    <a class="sub-nv" href="#">
                        <i class="fa-sharp fa-solid fa-building-columns fa-2xl"></i>
                        <p>students</p>
                    </a>
                </div>
                <div class="sub-nav">
                    <a class="sub-nv" href="..\BS_html\setting.php">
                        <i class="fa-solid fa-gear fa-2xl" style="color: #ffffff;"></i>
                        <p>settings</p>
                    </a>
                </div>
                <a href="..\BS_html\HOME.php" class="logout">log out</a>
            </ul>
        </div>
        <div class="calender-container">
            <h2 style="color: black;">Schedule your lessons</h2>
            <div class="calender">
                <div class="month-nav">
                    <button class="prev-month" id="prev-month">Prev</button>
                    <h3 id="month-year"></h3>
                    <button id="next-month">Next</button>
                </div>
                <div class="weekdays">
                    <div>sunday</div>
                    <div>monday</div>
                    <div>tuesday</div>
                    <div>wednesday</div>
                    <div>thursday</div>
                    <div>friday</div>
                    <div>saturday</div>
                </div>
                <div id="calender-days"></div>
            </div>
            <div id="schedule-modal" class="schedule-modal">
                <input id="schedule-input" type="text" placeholder="enter your event">
                <button id="schedule-confirm">Confirm</button>
                <button id="schedule-cancel">Cancel</button>
            </div>
            <div id="event-details">
            </div>
        </div>
    </div>
</body>

<footer>
    <div class="detail-logo">
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
            <a style="font-size: 24px; font-weight: bold;" href="mailto:business-consultancy@gmail.com">business-consultancy@gmail.com</a>
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