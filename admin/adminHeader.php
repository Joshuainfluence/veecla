<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" type="image/x-icon" href="../img/logo5.png" />
    <link rel="stylesheet" href="../assets/bootstrap/bootstrap5.min.css">
    <link rel="stylesheet" href="../assets/font_awesome/css/font-awesome.css">
</head>

<body>
    <style>
        .position {
            position: fixed;
            /* z-index: 9999; */

        }

        a {
            color: white;
        }

        a:hover {
            color: pink;
        }
        .bg-default{
            background-color: #879095;
        }
        .bg-default-alt{
            background-color: #FF87CE;
        }
        .text-default{
            color: #FF87CE;
        }
        .btn-default{
            background-color: #FF87CE;
        }

        .btn-default:hover{
            background-color: #FF1694;
            color: #fff;
        }

        @media (max-width: 60rem) {
            .position {
                position: relative;
            }

            .posture {
                position: fixed;
                z-index: 9999;
            }

        }
    </style>
    <div class="container-fluid">
        <div class="row w-100">
            <div class="col-sm-12 col-md-12 col-lg-2 bg-dark">
                <div class="position col bg-dark mt-3">
                    <div class="column text-center">
                        <p class="text-light fw-bold fs-4"><i class="fa fa-grin-wink"></i> ADMIN</p>
                    </div>
                    <hr class="text-light">
                    <div class="column text-light">
                        <p class="text-light fw-bold fs-6"><i class="fa fa-dashboard" aria-hidden="true"></i> <a href="" class="text-decoration-none">Dashboard</a></p>
                        <hr class="text-light">
                        <p class="text-muted fw-bold fs-6">INTERFACE</p>
                        <p><i class="fa fa-cog" aria-hidden="true"></i> <a href="" class="text-decoration-none"> Webpages</a></p>
                        <p><i class="fa fa-bar-chart" aria-hidden="true"></i><a href="" class="text-decoration-none"> Admin Profile</a></p>
                        <p><a href="index.php" class="text-decoration-none"> Website Overview</a></p>
                        <p><a href="users.php" class="text-decoration-none"> View Users</a></p>

                        <p><a href="viewProducts.php" class="text-decoration-none">View Products</a></p>
                        <p><a href="addProducts.php" class="text-decoration-none">Add Products</a></p>
                        <p><a href="orderedProducts.php" class="text-decoration-none">Ordered Products</a></p>
                        <p><a href="addProducts.php" class="text-decoration-none">Payed Products</a></p>
                        <p><a href="commentView.php" class="text-decoration-none">Product Review</a></p>
                        <p><a href="addProducts.php" class="text-decoration-none">FAQS</a></p>
                        
                        <p><a href="../config/logout.php" ; class="text-decoration-none">Logout</a></p>
                    </div>
                </div>
            </div>