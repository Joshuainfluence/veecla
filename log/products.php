<?php
require_once __DIR__ . "/../header.php";
require_once __DIR__ . "/../config/dbh.php";
require_once __DIR__ . "/../public/view.classes.php";
require_once __DIR__ . "/../public/viewContr.php";

$id = $_GET['id'];
$details = new ViewContr($id);
$rows = $details->displayItem($id);

?>
<?php
foreach ($rows as $row) :
    $_SESSION['row_id'] = $row['id'];
    // $_SESSION['row_product_name'] = $row['product_name']
?>
    <section>
        <div class="container">
            <div class="row">

                <div class="col-sm-12 col-md-12 col-lg-4 d-flex">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="col-md-3 carousel-item active">
                                <div class="card" style="width: 100%;">
                                    <div class="w-100" style="height: 30rem;">
                                        <img src="../admin/uploads/<?= $row['product_image'] ?>" class="w-100 h-100" style="object-fit: cover;">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 carousel-item">
                                <div class="card" style="width: 100%;">
                                    <div class="w-100" style="height: 30rem;">
                                        <img src="../admin/uploads/<?= $row['related_image'] ?>" class="w-100 h-100" style="object-fit: cover;">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 carousel-item">
                                <div class="card" style="width: 100%;">
                                    <div class="w-100" style="height: 30rem;">
                                        <img src="../admin/uploads/<?= $row['applied_image'] ?>" class="w-100 h-100" style="object-fit: cover;">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 carousel-item">
                                <div class="card" style="width: 100%;">
                                    <div class="w-100" style="height: 30rem;">
                                        <img src="../img/e0ddf38f319cf121fdfb971cb2b8e1c3.jpg" class="w-100 h-100" style="object-fit: cover;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-8">
                    <h1 class="fw-bold fs-2"><?= $row['product_name'] ?></h1>
                    <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>
                    <h2 class="fw-bold fs-3">$<?= $row['product_price'] ?></h2>
                    <p>
                        <?= $row['product_description'] ?>
                    </p>
                    <div class="row d-flex mb-3">
                        <p class="text-dark fw-bold mb-0 mr-3 fs-5">Sizes:</p>
                        <form class="d-flex">
                            <div class="custom-control custom-radio custom-control-inline me-2">
                                <input type="radio" class="form-control-input" id="size-1" name="size">
                                <label class="custom-control-label" for="size-1">XS</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline me-2">
                                <input type="radio" class="custom-control-input" id="size-2" name="size">
                                <label class="custom-control-label" for="size-2">S</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline me-2">
                                <input type="radio" class="custom-control-input" id="size-3" name="size">
                                <label class="custom-control-label" for="size-3">M</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline me-2">
                                <input type="radio" class="custom-control-input" id="size-4" name="size">
                                <label class="custom-control-label" for="size-4">L</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline me-2">
                                <input type="radio" class="custom-control-input" id="size-5" name="size">
                                <label class="custom-control-label" for="size-5">XL</label>
                            </div>
                        </form>
                    </div>
                    <div class="row d-flex mb-3">
                        <p class="text-dark fw-bold mb-0 mr-3 fs-5">Colours:</p>
                        <form class="d-flex">
                            <div class="custom-control custom-radio custom-control-inline me-2">
                                <input type="radio" class="form-control-input" id="size-1" name="size">
                                <label class="custom-control-label" for="size-1">red</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline me-2">
                                <input type="radio" class="custom-control-input radio-outline-danger" id="size-2" name="size">
                                <label class="custom-control-label" for="size-2">white</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline me-2">
                                <input type="radio" class="custom-control-input" id="size-3" name="size">
                                <label class="custom-control-label" for="size-3">green</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline me-2">
                                <input type="radio" class="custom-control-input" id="size-4" name="size">
                                <label class="custom-control-label" for="size-4">blue</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline me-2">
                                <input type="radio" class="custom-control-input" id="size-5" name="size">
                                <label class="custom-control-label" for="size-5">yellow</label>
                            </div>
                        </form>
                    </div>
                    <div class="row">
                        <div class="buttons d-flex">
                            <a href="" class="button-cart-alt3">-</a>
                            <a href="" class="button-cart-alt3">1</a>
                            <a href="" class="button-cart-alt3">+</a>
                            <a href="../cart/cart.inc.php?id=<?= $row['id'] ?>" class="button-cart-alt3"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i> Add to cart</a>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="form-group d-flex">
                            <style>
                                .bg-default {
                                    background-color: #879095;
                                }

                                .bg-default-alt {
                                    background-color: #FF87CE;
                                }

                                .text-default {
                                    color: #FF87CE;
                                }

                                .btn-default {
                                    background-color: #FF87CE;
                                }

                                .btn-default:hover {
                                    background-color: #FF1694;
                                    color: #fff;
                                }
                            </style>
                            <h2 class="fs-6 mt-2">Share on:</h2>
                            <a href="" class="btn btn-default btn me-2"><i class="fa fa-facebook-official" aria-hidden="true"></i> </a>
                            <a href="" class="btn btn-default me-2"><i class="fa fa-twitter" aria-hidden="true"></i> </a>
                            <a href="" class="btn btn-default me-2"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            <a href="" class="btn btn-default me-2"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href="" class="btn btn-default me-2"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row mt-5">
                <div class="col">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Description</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Information</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Reviews</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"><?= $row['product_description'] ?></div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"><?= $row['product_info'] ?></div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="col-md-6">
                                <script src="../assets/sweetalert/jquery-3.6.4.min.js"></script>
                                <script>
                                    $(document).ready(function() {
                                        var commentCount = 2;
                                        $(".showComments").click(function() {
                                            commentCount = commentCount + 2;
                                            $("#comments").load("loadComments.php", {
                                                commentNewCount: commentCount
                                            });
                                        })
                                    });
                                </script>
                                <style>
                                    .showComments {
                                        width: 200px;
                                        height: 40px;
                                        background-color: #FF87CE;
                                        border: 1px solid #FF87CE;
                                        color: #000;
                                        border-radius: 5px;
                                        margin-top: 2rem;
                                        margin-bottom: 1rem;
                                    }

                                    .showComments:hover {
                                        background: #FF1694;
                                        border: 1px solid #FF1694;
                                        color: #fff;
                                        transition: 0.5s ease-out;
                                    }
                                </style>

                                <?php
                                // displaying comments with ajax
                                // the row_id was stored in a session so as to be used as the product_id in the loadComments.php file

                                require_once __DIR__ . '/../config/dbh.php';
                                require_once __DIR__ . "/classes.php";
                                require_once __DIR__ . "/review-controller.php";
                                $product_id = $row['id'];
                                $data = new DisplayReviewProduct($product_id);
                                $rowlly = $data->displayReviewProducts2($product_id);
                                ?>

                                <h4 class="mb-4 mt-2 fs-5 text-light">Review for "<?= $row['product_name'] ?>"</h4>

                                <div id="comments">

                                    <?php
                                    // running another loop to get the comments from the users in the database
                                    if (!empty($rowlly)) {
                                        foreach ($rowlly as $rowllly) {
                                    ?>
                                            <div class="media mb-4">

                                                <div class="media-body mb-3">
                                                    <img src="../includes/profileUploads/<?= $rowllly['profilePhoto'] ?>" alt="Image" class="img-fluid rounded-circle mr-3 mt-1" style="width: 40px; height:40px;">
                                                    <style>
                                                        span {
                                                            font-size: 12px;
                                                        }
                                                    </style>
                                                    <span class="fw-bold"> <?= ucfirst($rowllly['name']) ?> - <i><?= $rowllly['date_added'] ?></i></span>
                                                    <!-- <div class="text-warning mb-2">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-half-alt"></i>
        <i class="fa fa-star"></i>
    </div> -->
                                                    <p><?= ucfirst($rowllly['comments']) ?></p>
                                                </div>
                                                <style>
                                                    .reply {
                                                        margin-left: 2rem;

                                                    }
                                                </style>
                                                <div class="reply">
                                                    <img src="../img/logo5.png" alt="Image" class="img-fluid rounded-circle mr-3 mt-1" style="width: 60px;">
                                                    <span class="fw-bold">Veecla - <i>Unknown</i></span>
                                                    <p>We are looking into it</p>
                                                </div>
                                            </div>

                                        <?php
                                        }
                                        ?>


                                    <?php
                                    } else {
                                    ?>
                                        <p class="fw-bold fs-5">There are no comments!</p>
                                    <?php
                                    }
                                    ?>
                                </div>

                                <button class="showComments">
                                    Show more comments
                                </button>






                            </div>
                            <div class="col-md-6">
                                <h4 class="mb-4">Leave a review</h4>
                                <small>Your email address will not be published. Required fields are marked *</small>
                                <div class="d-flex my-3">
                                    <p class="mb-0 mr-2">Your Rating * :</p>
                                    <div class="text-primary">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                                <?php
                                require_once __DIR__ . "/../admin/admin.classes.php";
                                require_once __DIR__ . "/../admin/userProfileContr.php";
                                require_once __DIR__ . "/../config/session.php";
                                $userId = $_SESSION['id'];
                                $user_comment = new UserProfileContr($userId);
                                $user_comments = $user_comment->showUserProfile();
                                ?>
                                <script>
                                    $(document).ready(function() {
                                        $("form").submit(function() {
                                            // event.preventDefault();

                                            var name = $("#name").val();
                                            var email = $("#email").val();
                                            var profileImage = $("#photograph").val();
                                            var productId = $("#productId").val();
                                            var productImage = $("#productImage").val();
                                            var comments = $("#message").val();
                                            var submit = $("#reviewSubmit").val();

                                            $.post("postComment.php", {
                                                name: name,
                                                email: email,
                                                profileImage: profileImage,
                                                productId: productId,
                                                productImage: productImage,
                                                comments: comments,
                                                submit: submit
                                            }, function(response) {
                                                // Assuming your postComment.php returns a success message
                                                if (response === "success") {
                                                    // Redirect to products.php after successful submission
                                                    window.location.href = "products.php";
                                                } else {
                                                    // Handle errors or display a message as needed
                                                    $(".form-message").html("Error occurred. Please try again.");
                                                }
                                            });
                                        });
                                    });
                                </script>
                                <style>
                                    .form-success {
                                        color: green;
                                    }
                                </style>
                                <?php
                                foreach ($user_comments as $user) :
                                ?>

                                    <div id="review-form-container">
                                        <form action="postComment.php" method="POST">
                                            <div class="form-group">
                                                <label for="message">Your Review *</label>
                                                <textarea id="message" cols="30" rows="5" class="form1-control" name="text-comment" placeholder="Review what's on your mind"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <!-- <label for="name">Your Name *</label> -->
                                                <input type="hidden" id="name" name="username" value="<?= $user['username'] ?>">
                                            </div>
                                            <div class="form-group">
                                                <!-- <label for="email">Your Email *</label> -->
                                                <input type="hidden" id="email" name="email" value="<?= $user['email'] ?>">
                                            </div>
                                            <div class="form-group">
                                                <!-- <label for="email">Your Email *</label> -->
                                                <input type="hidden" id="photograph" name="photograph" value="<?= $user['profileImage'] ?>">
                                            </div>
                                            <div class="form-group">
                                                <input type="hidden" id="productId" name="id" value="<?= $row['id']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <input type="hidden" id="productImage" name="productImage" value="<?= $row['product_image']; ?>">
                                            </div>
                                            <div class="form-group mt-3">
                                                <!-- <input type="submit" value="" class="btn btn-outline-primary px-3"> -->
                                                <button type="submit" id="reviewSubmit" name="button_submit" class="btn btn-default"><i class="fa fa-paper-plane"></i> Review</button>
                                            </div>
                                            <p class="form-message"></p>
                                        </form>
                                    </div>

                                <?php
                                endforeach
                                ?>

                            </div>
                        </div>
                    </div>
                </div>
                <style>
                    .application {
                 
                        box-shadow: 5px 5px 5px 5px #ccc;
                        width: 100%;
                        
                        
                        display: flex;
                    }
                    .apl{
                        width: 50%;
                        height: 500px;
                        text-wrap:wrap;
                        display: flex;
                        align-items: center;
                    }

                    @media screen and (max-width:992px) {
                        .apl{
                            width: 100%;
                        }
                        .application{
                            flex-direction: column;
                        }
                    }
                </style>
                <div class="application fs-6 mt-5 bg-secondary">
                    <div class="apl text-start">
                        <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur cum repudiandae ipsum temporibus. Eligendi dolore, neque ex odio voluptate veritatis perspiciatis reprehenderit? Commodi pariatur sit qui exercitationem repudiandae in esse?
                        Magni nihil molestias, dolorum sequi beatae commodi quidem facere aspernatur laboriosam reiciendis numquam pariatur aut, praesentium non perferendis modi sit animi saepe! Explicabo laboriosam perspiciatis eum quod iusto dolorem totam.
                        Aliquam ea iusto commodi illo nesciunt magnam quia nostrum non delectus, eligendi excepturi repudiandae temporibus nobis accusantium aperiam 
                        </p>
                    </div>
                    <div class="apl">
                        <img src="../img/003.jpg" class="img-fluid" style="width:100%; height:500px;" alt="">
                    </div>

                </div>
            </div>
        </div>
        <?php
        require_once __DIR__ . "/../footer.php";
        ?>
    </section>



<?php endforeach ?>


</body>

</html>