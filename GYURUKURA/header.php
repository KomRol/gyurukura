<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>



    <!-- bootstrap eleje -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!-- Bootstrap vége -->

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <!-- stylesheet vége -->
</head>

<body>

    <div class="container">

        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
             <img src="pngegg.png" style="float:right; margin:0px 0px 0px 0px; cursor:pointer; cursor:hand; border:0" width="60" height="60" alt="J. R. R. Tolkien"  /> 
                    <a class="navbar-brand" href="index.php">Lord Of The Rings</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                        <span><img src="sauron.png" style="float:right; margin:0px 0px 0px 0px; cursor:pointer; cursor:hand; border:0" width="40" height="40" alt="J. R. R. Tolkien" /></span>
                    </button>
                    <div class="offcanvas bg-dark text-white offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Login System</h5>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="Filmek.php">Filmek</a>
                                </li>
                                <?php

                                if (!isset($_SESSION['user'])) {

                                    echo '<li class="nav-item" style="text-align: left;">
                                <a class="nav-link" href="register_form.php">Registration</a>
                            </li>';
                                }
                                ?>

                            </ul>

                            <?php
                            if (isset($_SESSION['user'])) {
                                echo '<form action="controllers/logoutController.php" method="POST">
                                <button class="btn btn-danger form-control" type="submit" name="submit" id="submit">Logout</button>
                                      </form>';
                            } else {
                                echo '<form class="" action="controllers/loginController.php" method="POST">
                            <input class="form-control" type="text" name="username" id="username" placeholder="username" required>
                            <input class="form-control" type="password" name="password" id="password" placeholder="password" required>
                            <button class="btn btn-success form-control" type="submit" name="submit" id="submit">Login</button>
                        </form>';
                            }



                            ?>







                        </div>
                    </div>
            </div>
        </nav>
        <!-- HEADER VÉGE -->