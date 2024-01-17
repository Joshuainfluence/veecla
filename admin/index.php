 <?php
    require_once __DIR__ . "/adminHeader.php";
    ?>

 <div class="col-sm-12 col-md-12 col-lg-10">
     <div class="row">
         <div class="col-sm-12 col-md-4 col-lg-4">
             <div class="bd-content ps-lg-4">
                 <div class="bd-callout bd-callout-info">
                     <img src="" alt="">
                     <h4>Sales Overview</h4>
                     <p>Products Ordered was about 19 units</p>

                 </div>
             </div>
         </div>
         <div class="col-sm-12 col-md-4 col-lg-4">
             <div class="bd-content ps-lg-4">
                 <div class="bd-callout bd-callout-danger">
                     <h4>Products Sold out</h4>
                     <p>We have about 15 products sold out</p>

                 </div>
             </div>
         </div>
         <div class="col-sm-12 col-md-4 col-lg-4">
             <div class="bd-content ps-lg-4">
                 <div class="bd-callout bd-callout-success">
                     <h4>Registered Users</h4>
                     <p>Total Number of user registered were <b>51</b></p>
                     <a href="" class="btn btn-primary">View all</a>
                 </div>
             </div>
         </div>
     </div>
     <div class="row">
         <div class="col-sm-12 col-md-4 col-lg-4">
             <div class="bd-content ps-lg-4">
                 <div class="bd-callout bd-callout-warning">
                     <h4>Products Paid</h4>
                     <p>Products Ordered was about 19 units</p>

                 </div>
             </div>
         </div>
         <div class="col-sm-12 col-md-4 col-lg-4">
             <div class="bd-content ps-lg-4">
                 <div class="bd-callout bd-callout-primary">
                     <h4>Produts Delivered</h4>
                     <p>We have about 15 products sold out</p>
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
         .colors:nth-child(2n){
            background-color: red;
         }
         .colors:nth-child(3n){
            background-color: peru;
         }
         .colors:nth-child(4n){
            background-color: green;
         }
         .colors:nth-child(5n){
            background-color: grey;
         }
         .colors:nth-child(6n){
            background-color: yellow;
         }
         .colors:nth-child(7n){
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
 </div>

 </body>

 </html>