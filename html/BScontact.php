<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
        integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<!-- body css -->
<style>
    * {
        font-family: Arial, sans-serif;
    }
    .container{
        width: 500px;
        bottom: 0 0px 10px rgba(0,0,0,0.2);
        margin: 15px auto;
        background-color: #ffffff;
        display: flex;
        align-items: center;
        width: 80%;
        border-radius: 15px;


    }
    .sec-1{
        background-color: #032B44;
        width: 500px;
        height: cover;
        padding: 30px 30px 30px 30px;
        border-radius: 15px;
        h1{
            font-size: 52px;
        }
    }
    .contact-info{
        margin-top: 200px;
    }
    .form{
        display: flex;
        flex-direction: column;
        margin-left: 70px;
        input,textarea{
            margin-top: 30px;
            width: 400px;
            height: 50px;
            border: 1px solid black;
            color: black;
            border-radius: 10px;
        }
        button{
            width: 100px;
            height: 50px;
            margin-top: 40px;
            background-color: #032B44;
            border-radius: 10px;
            border: none;
            cursor: pointer;

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

<body>
    <header>

        <div class="top-bar">
            <div class="left">
                <p class="logo_name">Business <br> consultancy</p>
            </div>
            <div class="right">
                <a href="..\BS_html\HOME.php">Home</a>
                <a href="#">About-us</a>
                <a href="..\BS_html\BSservice.php">Service</a>
                <a href="..\BS_html\BScontact.php">Contact</a>

            </div>
        </div>


    </header>

    <div class="container">
        <div class="sec-1">
            <h1>Get <br>to us Here</h1>
            <div class="contact-info">
                <p>Email: businessconsults@gmail.com</p>
                <p>Phone: (+237) 677 345 682</p>
                <p>Phone: (+237) 697 555 790</p>
                <p>Office: Cameroon, Southwest, Buea</p>
            </div>
        </div>
        <div>
            <form action="" class="form">
                <input type="email" placeholder="enter email" required>
                <input type="text" placeholder="enter your number" required>
                <textarea name="text" id="message" placeholder="message"></textarea>
                <button type="submit">submit</button>

            </form>
        </div>
    </div>
    <script>
        document.getElementById('contactForm').addEventListener('submit', function (event) {
            event.preventDefault();
            const name = this[0].value;
            const email = this[1].value;
            const message = this[2].value;

            fetch('/api/contact', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ name, email, message })
            })
                .then(response => response.json())
                .then(data => {
                    document.getElementById('responseMessage').innerText = data.message;
                    this.reset();
                })
                .catch(error => {
                    document.getElementById('responseMessage').innerText = 'Error sending message!';
                });
        });
    </script>


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