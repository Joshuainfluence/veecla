<?php
// require the header page, database connection from the dbh.php file
// and also we require the classes file and controller file in order to access the methods
require_once __DIR__ . "/../header.php";
require_once __DIR__ . "/../config/dbh.php";
require_once __DIR__ . "/../admin/product.classes.php";
require_once __DIR__ . "/../admin/productContr2.php";

// is_product is set to 0 as it added as default to the database
// here there are two methods from one controller class
// displayProducts2 method is to fetch out all product details from the database 
// displayProducts4 method is responsible for displaying newly added product, limit to 3
$is_product = 0;
$display = new ProductView($is_product);
$rows = $display->displayProducts2();
$data = $display->displayProducts4();
?>
<style>
    .search-form form {
        position: relative;
        z-index: 1;
        -webkit-box-flex: 0;
        -ms-flex: 0 0 calc(100% - 50px);
        flex: 0 0 calc(100% - 50px);
        max-width: calc(100% - 50px);
        width: calc(100% - 50px);
        margin-bottom: 2rem;
        margin-left: 2rem;
        margin-top: 3rem;
    }

    .search-form form .form1-control-search {
        width: 100%;
        /* background-color: #c2d4f8; */
        background-image: linear-gradient(grey, pink);
        height: 40px;
        font-size: 14px;
        padding: 10px 15px;
        padding-left: 42px;
        border: 0px solid blue;
        color: #747794;
        border-radius: 0.4rem;
    }

    .search-form form .form1-control-search:focus {
        outline: none;
    }

    .search-form .search-icon {
        background-color: transparent;
        position: absolute;
        top: 0;
        left: 1rem;
        width: 18px;
        height: 40px;
        border: 0;
        z-index: 100;
        color: #747794;
    }

    .search-form .search-icon:focus {
        outline: none;
    }

    .product_container {
        width: 20rem;
        /* background: #fff; */
        background-image: linear-gradient(grey, pink);
        display: flex;
        justify-content: center;
        /* align-items: center; */
        height: 33rem;
        border-radius: 5px;
    }

    .card {
        width: 18rem;
        background-image: linear-gradient(grey, pink);
    }

    .card-img-top {
        height: 17rem;
        margin-top: 1rem;
    }

    .cart-display {
        display: flex;
        justify-content: start;
    }

    .check {
        height: 2rem;
    }

    .card-text {
        height: 6rem;
    }

    .card-title {
        height: 1rem;
    }
 


    @media screen and (max-width: 1200px) {
        .buttons .button-cart {
            text-decoration: none;
            width: 120px;
            height: 35px;
            border: 1px solid grey;
            background-color: grey;
            color: white;
            font-size: 15px;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .button-cart:hover {
            color: #fff;
            background-color: #FF1694;
            border: 1px solid #FF1694;
            color: #000;
            transition: 0.5s ease-in;
        }

        .search-form form {
            position: relative;
            z-index: 1;
            -webkit-box-flex: 0;
            -ms-flex: 0 0 calc(100% - 50px);
            flex: 0 0 calc(100% - 50px);
            max-width: calc(100% - 50px);
            width: calc(100% - 50px);
            margin-bottom: 2rem;
            margin-top: 0rem;
        }

        .search-form form .form1-control-search {
            width: 100%;
            /* background-color: #c2d4f8; */
            background-image: linear-gradient(grey, pink);
            height: 40px;
            font-size: 14px;
            padding: 10px 15px;
            padding-left: 42px;
            border: 0px solid #c2d4f8;
            color: #747794;
            border-radius: 0.4rem;
        }

        .search-form form .form1-control-search:focus {
            outline: none;
        }

        .search-form .search-icon {
            background-color: transparent;
            position: absolute;
            top: 0;
            left: 1rem;
            width: 18px;
            height: 40px;
            border: 0;
            z-index: 100;
            color: #747794;
        }

        .search-form .search-icon:focus {
            outline: none;
        }

        .cart-display {
            display: flex;
            justify-content: center;
        }

        .fixed-text {
            width: 96%;
            margin-left: 2%;
            /* animation: fixed_text 5s; */
        }

        /* Add these styles to your existing styles */

       


        /* @keyframes fixed_text {
            0%{
                margin-left: 0%;
            }
            20%{
                margin-left: 20%;
            }
        } */
    }
</style>
<script src="../assets/sweetalert/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function() {
        $("#search").keyup(function() {
            var name = $("#search").val();
            $.post("suggestion.php", {
                suggestion: name
            }, function(data, status) {
                $("#suggestion").html(data)
            });
        })
    })
</script>
<section>
    <div class="search-form pt-3 rtl-flex-d-row-r">
        <form action="#" method="">
            <input class="form1-control-search" type="search" id="search" placeholder="Search in Veecla">
            <button type="submit" class="search-icon"><i class="fa-solid fa fa-search"></i></button>
            <p id="suggestion" class="text-light fs-6"></p>
        </form>

        <div class="container-fluid">
            <div class="row">

                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <!-- <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="carousel active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div> -->

                    <div class="carousel-inner">


                        <div class="carousel-item active">
                            <div class="col d-flex">
                                <img src="../img/DSC_1705.jpg" class="d-block w-50 bg-dark" height="400px" alt="...">
                                <div class="write2 bg-dark">
                                    <h1>Veecla</h1>
                                    <h3>Realising True Beauty</h3>
                                    <!-- <h3>Lip Gloss</h3> -->
                                    <!-- <div class="buttons">
                                    <a href="" class="button-cart-alt2">Order</a>
                                    <a href="" class="button-cart-alt2">View</a>
                                </div> -->

                                </div>
                            </div>
                        </div>


                        <?php
                        // running a foreach loop to display the first three latest products added to cart
                        foreach ($data as $datas) :
                        ?>
                            <div class="col-12 carousel-item">
                                <div class="col d-flex">
                                    <img src="../admin/uploads/<?= $datas['product_image'] ?>" class="d-block w-50" height="400px" alt="...">
                                    <div class="write2">
                                        <h1>Newly Added Products</h1>
                                        <h3><?= $datas['product_name'] ?></h3>
                                        <div class="buttons">
                                            <!-- <a href="" class="button-cart-alt2">Order</a> -->
                                            <a href="products.php?id=<?= $datas['id'] ?>" class="button-cart">
                                                <i class="fa fa-cart-plus me-2"></i> Shop Now </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>


                    </div>


                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-12 fixed-text mb-2 d-flex justify-content-between fs-4 text-light">
                    <p>Top Products</p>
                    <p>View All <i class="fa fa-arrow-right"></i></p>
                </div>


                <?php
                // runninga a foreach loop to get all products information from the database
                foreach ($rows as $row) :
                ?>
                    <div class="col-sm-12 col-md-6 col-lg-3 d-flex mb-4 cart-display">
                        <div class="product_container">
                            <div class="card">
                                <img src="../admin/uploads/<?= $row['product_image'] ?>" class="card-img-top img-fluid" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $row['product_name'] ?></h5>
                                    <p class="card-text"><?= $row['product_description'] ?></p>
                                    <div class="check">
                                        <a href="products.php?id=<?= $row['id'] ?>" class="button-cart">View</a>
                                        <a href="../cart/cart.inc.php?id=<?= $row['id'] ?>" class="button-cart">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    


                <?php endforeach ?>




            </div>
        </div>




        <?php
        // including our foooter file
        require_once "../footer.php";
        ?>
</section>


<!-- Add the following script at the end of your HTML file, just before the closing </body> tag -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Get the elements to be animated
        var productContainers = document.querySelectorAll('.product_container');

        // Function to add the animate.css class
        function addAnimationClass(element) {
            element.classList.add('animate__animated', 'animate__fadeInUp');
        }

        // Trigger the animation for each product container when the page is loaded
        productContainers.forEach(function (container) {
            addAnimationClass(container);
        });
    });
</script>





</body>

</html>