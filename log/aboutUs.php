<?php
require_once "../header.php";
?>
<section>
    <div class="container-fluid">
        <!-- <style>
            img {
                width: 100%;
            }

            .row {
                width: 100%;
                animation: 5s joshua;
            }
            img:hover{
                margin-top: 0;
                
                /* transform: rotateX('360deg'); */
                transform: translateX(360);
            }
            @keyframes column {
                0%{
                    margin-top: 100%;
                }
            }

            @keyframes joshua {
                0% {
                    width: 10%;
                }

                20% {
                    width: 40%;
                }

                100% {
                    width: 100%;
                }
            }
        </style> -->

        <style>
            img {
                width: 100%;
                transition: transform 0.3s ease-in-out;
            }

            .animated-text {
                animation: flyIn 4s ease-in-out;
            }

            .row {
                width: 100%;
                opacity: 0; /* Initially hide the content */
                margin-left: 2%;
                width: 96%;
            }

            .row.show {
                animation: fadeIn 5s forwards;
            }

            img:hover {
                transform: rotate(10deg);
            }

            @keyframes fadeIn {
                to {
                    opacity: 1;
                }
            }
            @keyframes flyIn {
                0% {
                    transform: translateY(-100%);
                    opacity: 0;
                }
                100% {
                    transform: translateY(0);
                    opacity: 1;
                }
            }

        </style>
        <div class="row bg-light">
            <div class="col-lg-6">
                <img src="../img/watermark.png" class="img-fluid" alt="">
                <p>
                <h1 class="fw-bold text-center text-muted animated-text">About Us</h1>
                </p>
            </div>
            <div class="col-lg-6 mt-lg-5 text-dark fw-lighter bg-light fs-5 animated-text">
                At veecla, we thrive to empower individuals to embrace their unique beauty and express themselves confidently
                through our exceptional lip care, cosmetics, and fashion wear. We strive to provide high-quality products that
                not only enhance your natural features but also inspire creativity and self-expression.

                <p>
                    <br>
                    Ultimately, our mission is to be more than just a brand. We aspire to be a trusted companion, empowering
                    individuals to embrace their unique style, express themselves authentically, and feel confident in their own
                    skin. Join us on this exciting journey of self-discovery and let Veecla be your partner in unlocking your true
                    beauty potential.
                </p>


            </div>
        </div>
        <div class="row fs-1 text-center mt-5 bg-secondary animated-text">
            <p class="animated-text">
                Our goal is to provide a seamless and
                straightforward experience that you can trust,
                making your life easier and more enjoyable.
                We're committed to delivering on our
                promises and building lasting relationships
                with our customers.
            </p>
        </div>

        <div class="row bg-light mt-5">
            <div class="col-4">
                <img src="../img/aunty_vic.jpg" alt="">
            </div>
            <div class="col-4">
                <img src="../img/aunty_vic.jpg" alt="">
            </div>
            <div class="col-4">
                <img src="../img/aunty_vic.jpg" alt="">
            </div>
        </div>
        <div class="row bg-light">
            <div class="col-6">
                <img src="../img/DSC_1705.jpg" alt="">
            </div>
            <div class="col-6">
                <img src="../img/DSC_1705.jpg" alt="">
            </div>

        </div>
        <div class="row text-center bg-secondary fs-1 mt-5">
            <h1 class="fw-bold mb-3 animated-text"> Our values</h1>
            <p>

                It was important to us to build a value driven business. At Veecla,we believe in: Simplicity. Affordability. Authenticity. Quality. Transparency.
            </p>
        </div>
        <div class="row text-center bg-secondary fs-1 mt-5">
            <h1 class="fw-bold mb-3"> Our Products are;</h1>
            <p>

                Cruelty-Free
            </p>
        </div>
    </div>
    <?php
    require_once "../footer.php";
    ?>
</section>

<script>
    // Wait for the content to be fully loaded
    document.addEventListener("DOMContentLoaded", function () {
        // Get all elements with the class 'row'
        var rows = document.querySelectorAll('.row');

        // Loop through each row and add the 'show' class to trigger the animation
        rows.forEach(function (row) {
            row.classList.add('show');
        });
    });
</script>

</body>

</html>