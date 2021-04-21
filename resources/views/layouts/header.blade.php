<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CinemApp</title>
        <link rel="stylesheet" href="{{ asset ('/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset ('/css/glider.css') }}">
        <script src="/js/transi.js"></script> 
        <script src="https://kit.fontawesome.com/c7b6f56569.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@700&display=swap" rel="stylesheet"> 
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&family=Rubik:wght@700&display=swap" rel="stylesheet"> 
    </head>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light"> 
            <div class="header content">
                <div class="container-fluid">
                    <a href="/">
                        <img class="logo" src="/img/logo.jpg" witdh="150px" height="112px">
                    </a>
                </div>
                <div class="menu">
                    <a class="item" href="/">
                        <p>CINEM<b>APP</b></p>
                    </a>
                    @guest
                    <a id="login" class="item" href="/login">
                        <p>LOGIN</p>
                    </a>
                    <a id="signup" class="item" href="/signup">
                        <p>SIGNUP</p>
                    </a>
                    @endguest
                    @auth
                    <a id="account" class="item" href="/account">
                    <p>ACCOUNT</p>
                    </a>
                    <a id="logout" class="item" href="/logout">
                        <p>LOGOUT</p>
                    </a>
                    @endauth
                </div>
            </div>
        </nav>
    </header>
