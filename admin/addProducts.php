<?php
require_once __DIR__ . "/adminHeader.php";
?>
<div class="col-sm-12 col-md-12 col-lg-10 mt-5">
    <h4>Add products to cart</h4>
    <div class="card">
        <form action="product.inc.php" method="POST" enctype="multipart/form-data">
            <div class="form-group mt-2">
                <label for="product_name">
                    <h5>Product name</h5>
                </label>
                <input type="text" name="product_name" id="product_name" class="form-control" placeholder="Enter Product name">
            </div>
            <div class="form-group mt-2">
                <label for="product_description">
                    <h5>Product Description</h5>
                </label>
                <input type="text" name="product_description" id="product_description" class="form-control " placeholder="Enter Product description">
            </div>
            <div class="form-group mt-2">
                <label for="product_price">
                    <h5>Product Price</h5>
                </label>
                <input type="number" name="product_price" id="product_price" class="form-control " placeholder="Enter Product price">
            </div>
            <div class="form-group mt-2">
                <label for="product_unit">
                    <h5>Product Unit</h5>
                </label>
                <input type="text" name="product_unit" id="product_unit" class="form-control " placeholder="Enter Product unit">
            </div>
            <div class="form-group mt-2">
                <label for="product_info">
                    <h5>Product Information</h5>
                </label>
                <textarea type="text" name="product_info" cols="30" rows="10" id="product_info" class="form-control " placeholder="Enter Product description"></textarea>
            </div>
            <div class="form-group mt-2">
                <label for="product_image">
                    <h5>Product Image</h5>
                </label>
                <input type="file" name="product_image" id="product_image" class="form-control ">
            </div>
            <div class="form-group mt-2">
                <label for="related_image">
                    <h5>Related Image</h5>
                </label>
                <input type="file" name="related_image" id="related_image" class="form-control ">
            </div>
            <div class="form-group mt-2">
                <label for="applied_image">
                    <h5>Image on Apllication</h5>
                </label>
                <input type="file" name="applied_image" id="applied_image" class="form-control ">
            </div>
            <div class="form-group mt-2">
                <input type="submit" name="submit" value="Add" class="btn btn-primary">
            </div>

        </form>
    </div>
</div>
</body>

</html>