<html>
    <head>
        <title>Login from</title>
        <style>
            .loginbox{
                width:320px;
                height:650px;
                background:#000;
                colour:#fff;
                top:50%;
                left:50%;
                position:absolute;
                transform:translate(-50%,-50%);
                box-sizing:border-box;
                padding:70px 30px;
            }
            
            h1{
                
                text-align:center;
                color:white;
            }

            p{
                color:white;
            }

            .loginbox p{
                margin:0;
                padding:0;
                font-weight:bold;
            }

            .loginbox input{
                width:100%;
                margin-botton:20px;
            }

            .loginbox input[type="text"], input[type="password"],[type="number"], input[type="email"]
            {
                border:none;
                border-bottom: 1px solid #fff;
                background:transparent;
                outline:none;
                height:40px;
                color: #fff;
                font-size:16px;
            }
            .loginbox input[type="submit"]
            {
                border:none;
                outline:none;
                height:40px;
                background: #bac675;
                color: #3e3d3d;
                font-size: 18px;
                border-radius:20px;
            }
            
            .loginbox input[type="submit"]:hover
            {
                cursor:pointer;
                background:#ffc107;
                color:#000;
            }

            .loginbox a{
                text-decoration:none;
                font-size:12px;
                line-height:20px;
                color:blue;
            }

            .loginbox a:hover
            {
                color:white;
            }
            
            </style>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
            </head>
        <body>

            <div class="loginbox">
                
                <h1>Sign Up</h1>
                <form action="Signup_upload" method="POST" enctype="multipart/form-data">
                    <p>Username</p>
                    <input type="text" name="text" placeholder="Enter Your name"><br><br>
                    <p>New Password</p>
                    <input type="password" name="password" placeholder="Enter new password"><br><br>
                    <p>confirm Password</p>
                    <input type="password" name="password" placeholder="Enter confirm password"><br><br>
                    <p>Mobile number</p>
                    <input type="number" name="number" placeholder="Enter mobile no."><br><br>
                    <p>Email id</p>
                    <input type="email" name="email" placeholder="Enter your email id"><br><br>
                    <input type="submit" name="submit" value="Sign up">
        </form>
             </div>
             <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        </body>
        </html>