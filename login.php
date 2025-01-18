<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <!--Google icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet">
    <style>
        
    body{
        height: 100vh;
        width: 100;
        background-image: url(images/BACKGROUND.png);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: auto;
        background-attachment: fixed;

    }

    .login-box{
        max-width: 1000px;
        float: none;
        margin: 250x center;
        background: #ecb0c7;
        padding:  100px 100px 50px 100px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        position: relative;
        width: 400px;
        font-size: 14px;
        border-radius: 5px;


    }
    .container{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100%;
        width: 100%;
    }
    h1 .material-icons {
    
    font-size: 6rem;
    }
    .user-icon{
        background: #E91E63;
        border-radius: 50%;
        width: 100px;
        height: 100px;
        display: flex;
        justify-content: center;
        align-items: center;
        position: absolute;
        top: -50px;
    }

    .form-group{
        margin-bottom: 20px;
        display: file;
        flex-direction: column;
        width: 100%;
    }

    input[type="text"], input[type="password"].form-control{
        font-size: 16px;
        outline: none;
        border: none;
        width: calc(100% - 6px);
        border: 1px solid #ccc;
        padding: 16px;
        border-radius: 2px;
        transition: all 0.3s ease;

    }

    .login{
        width: 100%;
    }
    input[type="text"].form-control:hover, input[type="password"].form-control:hover{
        border: 2px solid #d8bbd0
    }

    input[type="text"].form-control:focus,input[type="password"].form-control:focus{
        border: 2px solid #f06292;
    }
    input[type="text"].form-control:active,input[type="password"].form-control:active{
        border: 2px solid #f06292;
    }
    label{
        display: flex;
        align-items: center;
        cursor: pointer;
    }

    label input[type="checkbox"]{
        width: 23px;
        height: 12px;
        margin-right: 5px;
        cursor: pointer;
    }

    button{
        outline: none;
        background: #e91e63;
        color: #fff;
        padding: 16px;
        display: block;
        width: 100%;
        border: none;
        text-transform: uppercase;
        font-size: 16px;
        cursor: pointer;
        transition: all 0.3 ease;

    }

    button:hover{
        box-shadow: 5px 5px 5px #ccc;
    }

    a{
        color: #42a5f5;
    }

    </style>
</head>
<body>
  
   
    <div class="container">
        <div class="login-box">
        <div class ="user-icon">
            <i class="far fa-user"></i>
            <h1><span class="material-icons md-dark">person</span></h1>

        </div>
        
        <form action="register.php" class="login" method="post">
             
                <div class="form-group">
                    <input type="text"placeholder="Username" name="Name" id="Name" class="form-control" required>
                </div>

                <div class="form-group">
                    <input type="password" placeholder="Password" name="Password" id="Password" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="rememberme">    
                        <input type="checkbox" name="remember me" id="rememberme">
                        Remember Password
                    </label> 
                </div>
                <div class="form-group">
                <button class="full-btn">Login</button>
                </div>
        </form>
        </div>
    </div>
</body>
</html>