<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <base href="{$BASE_URL}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LINXBEER</title>
    <link rel="shortcut icon" href="images/logoPestaña.ico" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous"
        >
    <link rel="stylesheet" href="css/style.css"  type="text/css">
    {if $Context == 'contactUs'}
        <script src="js/captcha.js"></script>
        <script src="js/validaciones.js"></script>
    {/if}
</head>

<body>
    <!-- Inicio de navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <img src="images/logoNaranja.png" width="80" height="80" class="d-inline-block align-top" alt="">
        <a class="navbar-brand tituloNav"> LinxBeer </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto linksNav">
            {if !$Login}
                <li class="nav-item">
                    <a class="nav-link bg-dark" href="login">LOGIN</a>
                </li>
            {else}
                <li class="nav-item">
                    <a class="nav-link" href="home">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="products">PRODUCTOS</a>
                </li>
                {if $Admin == 1}
                    <li class="nav-item">
                        <a class="nav-link" href="usuarios">USUARIOS</a>
                    </li>
                {/if}   
                <li class="nav-item">
                    <a class="nav-link" href="contactUs">CONTACTO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link bg-dark" href="logout">LOGOUT</a>
                </li>
            {/if}
            </ul>
        </div>
    </nav>