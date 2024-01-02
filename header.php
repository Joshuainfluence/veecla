<?php
require_once __DIR__ . "/config/session.php";
require_once __DIR__ . "/config/dbh.php";

// this the count the quantity of products ordered the current user
require_once __DIR__ . "/cart/cart.classes.php";
require_once __DIR__ . "/cart/cart-checkContr.php";
$userId = $_SESSION['id'];
$display = new CartCheckContr($userId);
$rows = $display->cartChecker($userId);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/bootstrap/bootstrap5.min.css">
    <link rel="icon" type="image/x-icon" href="../img/logo5.png" />
    <script src="../assets/bootstrap/bootstrap.js"></script>
    <script src="../assets/nav.js" defer></script>
    <link rel="stylesheet" href="../assets/home.css">
    <link rel="stylesheet" href="../assets/media_query.css">
    <link rel="stylesheet" href="../assets/nav.css">
    <link rel="stylesheet" href="../assets/font_awesome/css/font-awesome.css">
    <link rel="stylesheet" href="../assets/loader.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <!-- <link rel="stylesheet" href="../assets/font_awesome/css/all.css"> -->
</head>

<!-- all headers might be required from php -->
<header class="first-head">
    <nav class="first-nav">
        <div class="content">


            <div class="logo">
                <img src="../img/logo2.png" class="img-logo" alt="">
            </div>
            <div class="logo-mobile">
                <img src="../img/logo2-copy.png" class="img-mobile-logo" alt="">
            </div>
            <style>
                .buttons-tin {
                    display: flex;
                    justify-content: end;
                }
            </style>

            <div class="buttons-tin">
                <a href="../cart/checkout.php" class="cart-img"><i class="fa fa-cart-plus fa-2x"></i>
                    <span class="position-relative top-0 start-60 translate-middle badge rounded-circle bg-success">
                        <?= count($rows, COUNT_NORMAL) ?>
                        <span class="visually-hidden">unread messages</span>
                    </span>
                </a>

                <button class="mobile-nav-toggle" aria-expanded="false" aria-controls=".links"></button>
            </div>

            <div class="links">
                <ul class="content-list flex ff" id="content-list" data-visible="false">
                    <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                    <li><a href="#"><i class="fa fa-bell"></i> Notifications</a></li>
                    <li><a href="#">Categories</a>
                        <ul class="drop-menu">
                            <li>
                                <a href="">Lip Gloss</a>
                            </li>
                            <li>
                                <a href="">Lip Tint</a>
                            </li>
                            <li>
                                <a href="">Lip Treatment</a>
                            </li>
                            <li>
                                <a href="">Glozzy Tint</a>
                            </li>
                           
                        </ul>
                    </li>
                    <li class="carty">
                        <a href="../cart/checkout.php"><i class="fa fa-cart-plus fa-2x"></i>
                            <span class="position-relative top-0 start-60 translate-middle badge rounded-circle bg-success">
                                <?= count($rows, COUNT_NORMAL) ?>
                                <span class="visually-hidden">unread messages</span>
                            </span>
                        </a>
                    </li>
                    <li><a href="aboutUs.php">About us</a></li>


                    <form action="">
                        <div class="profile">
                            <?php
                            if (isset($_SESSION['id'])) {
                            ?>
                                <!-- we will have to make sure all pages needing this header page, will be in the same folder as the profile file, so that it will be error free during referencing or linking -->
                                <a href="profile.php">
                                    <h3> <?php echo ucfirst($_SESSION['username']) ?></h3>
                                </a>
                                <!-- the logout button in this header was required in all pages  and the pages are located in a folder. 
                            So basically to access reference the logout we have to leave the folder to the config folder and then access the logout file.
                            -->
                                <a href="../config/logout.php" class="button-sign">Logout <i class="fa fa-sign-in"></i></a>
                            <?php
                            } else {
                            ?>
                                <a href="">
                                    <h3>Account</h3>
                                </a>
                                <a href="../inc/login.php" class="button-sign">Signin <i class="fa fa-sign-in"></i></a>
                            <?php
                            }
                            ?>

                        </div>
                    </form>
                </ul>

            </div>
        </div>
    </nav>
</header>

<body>
    <div class="loader-wrapper">
        <img src="../img/loader.gif" alt="Loading..." class="loader">
    </div>