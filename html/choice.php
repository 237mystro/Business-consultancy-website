<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!-- body css -->
 <style>
    .choice_container{
        width: 70%;
        height: 400px;
        box-shadow: 0 0 4px rgba(0, 0, 0, 0.2);
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 50px auto;
        border-radius: 15px;
        padding: 30px 30px 30px 30px;
        .coach{
            background-color: #032B44;
            color: white;
            padding: 40px 40px 40px 40px;
            width: 300px;
            height: 200px;
            border-radius: 15px;
            h1{
                font-weight: bold;
            }
            button{
                background-color: #ffffff;
                color: black;
                border: none;
                border-radius: 10px;
                height: 40px;
                width: 80px;
                
                a{
                    text-decoration: none;
                    color: black;
                }
            }
        }
        .sme{
            background-color: #032B44;
            color: white;
            width: 300px;
            height: 200px;
            padding: 40px 40px 40px 40px;
            margin-left: 50px;
            border-radius: 15px;
            h1{
                font-weight: bold;
            }
            button{
                background-color: #ffffff;
                color: black;
                border: none;
                border-radius: 10px;
                height: 40px;
                width: 80px;
                a{
                    text-decoration: none;
                    color: #000000;
                }
            }
        }
    }
 </style>
<body>
    <div class="choice_container">
        <div class="coach">
            <h1>Register <br> as a coach</h1>
            <button><a href="..\BS_html\BSlecturer_registration.php">click</a></button>
        </div>
        <div class="sme">
            <h1>Register <br> as a small business</h1>
            <button><a href="..\BS_html\BSregister.php">click</a></button>
        </div>
    </div>
</body>
</html>