 <?php
    require_once __DIR__ . "/adminHeader.php";
    // for the display of the total units
    require_once __DIR__ . "/admin.classes.php";
    require_once __DIR__ . "/orderedProductContr.php";
    // for the display of the total users
    require_once __DIR__ . "/adminContr.php";
    // for the display of the total units
    $isProduct = 0;
    $value = new OrderProductsContr($isProduct);
    $rows = $value->UnitTotal();
    // for the display of the total users
    $is_admin = 0;
    $adminValue = new AdminContr($is_admin);
    $userRows = $adminValue->UserTotal();

    ?>

 <div class="col-sm-12 col-md-12 col-lg-10">
     <div class="row">
         <div class="col-sm-12 col-md-4 col-lg-4">
             <div class="bd-content ps-lg-4">
                 <div class="bd-callout bd-callout-info d-flex">
                     <i class="fa fa-bar-chart fa-4x me-2"></i>
                     <div class="col">
                         <h4>Sales Overview</h4>
                         <p>Products Ordered was about
                             <?php
                                $total = 0;
                                foreach ($rows as $row) {
                                    $total += $row['product_unit'];
                                }
                                ?>
                             <b> <?= $total ?> </b> units
                         </p>
                     </div>

                 </div>
             </div>
         </div>
         <div class="col-sm-12 col-md-4 col-lg-4">
             <div class="bd-content ps-lg-4">
                 <div class="bd-callout bd-callout-danger d-flex">
                     <i class="fa fa-shopping-cart fa-4x me-2"></i>
                     <div class="col">
                         <h4>Products Sold out</h4>
                         <p>We have about 15 products sold out</p>
                     </div>

                 </div>
             </div>
         </div>
         <div class="col-sm-12 col-md-4 col-lg-4">
             <div class="bd-content ps-lg-4">
                 <div class="bd-callout bd-callout-success d-flex">
                     <i class="fa fa-group me-2 fa-4x"></i>
                     <div class="col">
                         <h4>Registered Users</h4>
                         <p>Total Number of user registered are
                             <?php
                                echo "<b>" . count($userRows, COUNT_NORMAL) . "</b>";
                                ?>
                             <a href="users.php" class="text-decoration-none text-success">View all</a>
                         </p>

                     </div>

                 </div>
             </div>
         </div>
     </div>
     <div class="row">
         <div class="col-sm-12 col-md-4 col-lg-4">
             <div class="bd-content ps-lg-4">
                 <div class="bd-callout bd-callout-warning d-flex">
                     <i class="fa fa-cc-visa fa-4x me-2"></i>
                     <div class="col">
                         <h4>Products Paid</h4>
                         <p>Products Ordered was about 19 units</p>
                     </div>

                 </div>
             </div>
         </div>
         <div class="col-sm-12 col-md-4 col-lg-4">
             <div class="bd-content ps-lg-4">
                 <div class="bd-callout bd-callout-primary d-flex">
                    <i class="fa fa-taxi fa-4x me-2"></i>
                     <div class="col">
                         <h4>Products Deliv.</h4>
                         <p>We have about 15 products sold out</p>
                     </div>
                 </div>
             </div>
         </div>
         <div class="col-sm-12 col-md-4 col-lg-4">
             <div class="bd-content ps-lg-4">
                 <div class="bd-callout bd-callout-dark">
                     <h4>Highest Sold Products</h4>
                     <p>Total Number of user registered were <b>51</b></p>
                 </div>
             </div>
         </div>

     </div>
     <style>
         .graph {
             width: 99%;
             height: 500px;
             /* border: 2px solid green; */
             display: flex;
             transform: scaleY(-1);
         }

         .bars {
             width: 70px;
             height: 350px;
             border: 1px solid black;
             background-color: black;
             margin-right: 10px;
         }

         .bars:nth-child(2n) {
             height: 300px;
             border: 1px solid red;
             background-color: red;
         }

         .bars:nth-child(3n) {
             height: 200px;
             border: 1px solid peru;
             background-color: peru;
         }

         .bars:nth-child(4n) {
             height: 50px;
             border: 1px solid green;
             background-color: green;
         }

         .bars:nth-child(5n) {
             height: 470px;
             border: 1px solid grey;
             background-color: grey;
         }

         .bars:nth-child(6n) {
             height: 300px;
             border: 1px solid yellow;
             background-color: yellow;
         }

         .bars:nth-child(7n) {
             height: 100px;
             border: 1px solid purple;
             background-color: purple;
         }

         .vertical {
             width: 0.5%;
             height: 500px;
             border: 3px solid black;
             margin-right: 0.5%;
         }

         .contain {
             width: 100%;
             display: flex;
         }

         .horinzontal {
             width: 100%;
             margin-top: 0.5%;
             border: 3px solid black;
         }

         .preview {
             width: 100%;
             display: flex;

         }

         .colors {
             width: 150px;
             height: 50px;
             background-color: black;
             display: flex;
             justify-content: center;
             align-items: center;
             color: white;
         }

         .colors:nth-child(2n) {
             background-color: red;
         }

         .colors:nth-child(3n) {
             background-color: peru;
         }

         .colors:nth-child(4n) {
             background-color: green;
         }

         .colors:nth-child(5n) {
             background-color: grey;
         }

         .colors:nth-child(6n) {
             background-color: yellow;
         }

         .colors:nth-child(7n) {
             background-color: purple;
         }
     </style>
     <div class="row ps-2 mb-3">
         <div class="col-sm-12 col-md-4 col-lg-2 colors">
             <b>Distribution</b>
         </div>
         <div class="col-sm-12 col-md-4 col-lg-2 colors">
             <b>Distribution</b>
         </div>
         <div class="col-sm-12 col-md-4 col-lg-2 colors">
             <b>Distribution</b>
         </div>
         <div class="col-sm-12 col-md-4 col-lg-2 colors">
             <b>Distribution</b>
         </div>
         <div class="col-sm-12 col-md-4 col-lg-2 colors">
             <b>Distribution</b>
         </div>
         <div class="col-sm-12 col-md-4 col-lg-2 colors">
             <b>Distribution</b>
         </div>
         <div class="col-sm-12 col-md-4 col-lg-2 colors">
             <b>Distribution</b>
         </div>


     </div>
     <!-- <div class="preview">
         <div class="colors">

         </div>
         <p>Distribution</p>
     </div>
     <div class="preview">
         <div class="colors">

         </div>
         <p>Distribution</p>
     </div>
     <div class="preview">
         <div class="colors">

         </div>
         <p>Distribution</p>
     </div>
     <div class="preview">
         <div class="colors">

         </div>
         <p>Distribution</p>
     </div> -->

     <div class="contain">
         <div class="vertical">

         </div>
         <div class="graph">
             <div class="bars">

             </div>
             <div class="bars">

             </div>
             <div class="bars">

             </div>
             <div class="bars">

             </div>
             <div class="bars">

             </div>
             <div class="bars">

             </div>
             <div class="bars">

             </div>
         </div>
     </div>
     <div class="horinzontal">

     </div>
     <div class="row">
         <style>
             .pie {
                 width: 100%;
                 height: 600px;
                 /* border-radius: 500px; */
                 border: 0px solid blue;
                 z-index: 99999;
                 margin-left: 10%;
             }

             .first {
                 width: 250px;
                 height: 250px;
                 border: 3px solid red;
                 background-color: red;
                 border-radius: 500px 0px 0px 0px;
                 z-index: -1;
                 /* margin-left: -10px; */
                 /* border-radius: 100%; */
             }


             .second {
                 width: 250px;
                 height: 250px;
                 border: 3px solid green;
                 background-color: green;
                 border-radius: 0px 500px 0px 0px;
                 /* margin-left: -10px; */
                 /* border-radius: 100%; */
             }

             .third {
                 width: 250px;
                 height: 250px;
                 border: 3px solid yellow;
                 border-radius: 0px 0px 0px 250px;
                 background-color: yellow;
                 /* margin-left: -10px; */
                 /* border-radius: 100%; */
             }

             .fourth {
                 width: 250px;
                 height: 250px;
                 border: 3px solid black;
                 background-color: black;
                 border-radius: 0px 0px 500px 0px;
                 /* margin-left: -10px; */
                 /* border-radius: 100%; */
             }

             @media screen and (max-width:992px) {
                 .first {
                     width: 150px;
                     height: 150px;
                     border: 3px solid red;
                     background-color: red;
                     border-radius: 500px 0px 0px 0px;
                     z-index: -1;
                     /* margin-left: -10px; */
                     /* border-radius: 100%; */
                 }


                 .second {
                     width: 150px;
                     height: 150px;
                     border: 3px solid green;
                     background-color: green;
                     border-radius: 0px 500px 0px 0px;
                     /* margin-left: -10px; */
                     /* border-radius: 100%; */
                 }

                 .third {
                     width: 150px;
                     height: 150px;
                     border: 3px solid yellow;
                     border-radius: 0px 0px 0px 150px;
                     background-color: yellow;
                     /* margin-left: -10px; */
                     /* border-radius: 100%; */
                 }

                 .fourth {
                     width: 150px;
                     height: 150px;
                     border: 3px solid black;
                     background-color: black;
                     border-radius: 0px 0px 500px 0px;
                     /* margin-left: -10px; */
                     /* border-radius: 100%; */
                 }
             }
         </style>
         <div class="pie mt-3">
             <div class="row d-flex">
                 <div class="first"></div>
                 <div class="second"></div>
             </div>
             <div class="row d-flex">
                 <div class="third"></div>

                 <div class="fourth"></div>
             </div>
         </div>
     </div>
 </div>

 </body>

 </html>