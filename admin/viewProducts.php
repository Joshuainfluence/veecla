<?php

require_once __DIR__ . "/adminHeader.php";
?>
<div class="col-sm-12 col-md-12 col-lg-10 ">
    <div class="col-12 mb-3 d-flex mt-3">
        <input type="search" name="" id="" class="form-control" placeholder="Search for...">
        <button class="btn btn-dark"><i class="fa fa-search" aria-hidden="true"></i></button>
    </div>
    <div class="col-12 text-muted fw-bold mb-2">
        joshuajulius2030@gmail.com <img src="../img/IMG-20230409-WA0055.jpg" class="img-fluid rounded-circle" width="30" alt="">
    </div>
    <h6>User details</h6>
    <div class="card table-responsive">
        <!-- <div class="card-header w-100">
                        user details
                    </div> -->
        <div class="card-body">


            <!-- modal -->
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-default mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Add Products
            </button>


            <!-- Modal Dialog for adding products/from for adding products-->

            <br>
            <table class="table table-responsive table-bordered border-light" style="background-color:#fff;">
                <thead>
                    <tr>

                        <th scope="row">S/N</th>

                        <th scope="row">Name</th>
                        <th scope="row">Description</th>
                        <th scope="row">Price</th>
                        <th scope="row">Unit</th>
                        <th scope="row" style="width:400px;">Information on product</th>
                        <th scope="row">Delete</th>
                        <th scope="row">Edit</th>
                        <th scope="row">Photo</th>
                        <th scope="row">Related Image</th>
                        <th scope="row">Applied</th>

                    </tr>
                </thead>
                <tbody>
                    <!-- some codes from the codes.txt file will be displayed here -->
                    <?php






                    // $sql = "SELECT * FROM users";
                    // $stmt = $this->connection()->prepare($sql);
                    // $stmt->execute();
                    // $is_admin = 0;

                    // displaying the products from the database
                    require_once __DIR__ . "/../config/dbh.php";
                    require_once __DIR__ . "/product.classes.php";
                    require_once __DIR__ . "/productContr2.php";
                    $is_product = 0;
                    $display = new ProductView($is_product);
                    $rows = $display->displayProducts2();
                    // var_dump($row);
                    // $sql = "SELECT * FROM products";
                    // $stmt = $this->connect()->prepare($sql);
                    // $stmt->execute();
                    // $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    foreach ($rows as $row) :
                    ?>
                        <tr>

                            <td><?= $row['id'] ?></td>
                            <td><?= $row['product_name'] ?></td>
                            <td><button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#productDescription">View <i class="fa fa-eye"></i</button></td>
                            <div class="modal fade" id="productDescription" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Product Description</h5>
                                            <button type="button" class="btn-close btn btn-danger" data-bs-dismiss="modal" aria-label="Close">></button>
                                        </div>

                                        <div class="modal-body">
                                            <?= $row['product_description'] ?>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                            <!-- <button type="submit" name="submit" class="btn btn-primary">Add Product</button> -->
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <td>$<?= $row['product_price'] ?></td>
                            <td><?= $row['product_unit'] ?></td>
                            <td class="info"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">View <i class="fa fa-eye"></i></button></td>
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Product Information</h5>
                                            <button type="button" class="btn-close btn btn-danger" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>

                                        <div class="modal-body">
                                            <?= $row['product_info'] ?>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                            <!-- <button type="submit" name="submit" class="btn btn-primary">Add Product</button> -->
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <td><a href="delete.inc.php?id=<?= $row['id']; ?>" class="btn-del btn btn-danger">Delete</a></td>
                            <td><a href="edit_product.php?id=<?= $row['id']; ?> m=1" class="btn-del btn btn-warning">Edit</a></td>
                            <td><img style="width:150px; height:150px;" src="uploads/<?= $row['product_image'] ?>" alt=""></td>
                            <td><img style="width:150px; height:150px;" src="uploads/<?= $row['related_image'] ?>" alt=""></td>
                            <td><img style="width:150px; height:150px;" src="uploads/<?= $row['applied_image'] ?>" alt=""></td>
                        </tr>
                    <?php endforeach ?>

                </tbody>
            </table>


            <?php if (isset($_GET['m'])) : ?>
                <div class="flash-data" data-flashdata="<?= $_GET['m']; ?>"></div>
            <?php endif ?>
            <script src="../assets/sweetalert/jquery-3.6.4.min.js"></script>
            <script src="../assets/sweetalert/sweetalert2.all.min.js"></script>
            <script>
                $('.btn-del').on('click', function(e) {
                    e.preventDefault();
                    const href = $(this).attr('href')

                    Swal.fire({
                        title: 'Are you sure?',
                        text: 'Record will be deleted',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Delete Record',
                    }).then((result) => {
                        if (result.value) {
                            document.location.href = href;
                        }

                    })
                })
                const flashdata = $('.flash-data').data('flashdata')
                if (flashdata) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Record Deleted',
                        text: 'Product has been deleted successfully'

                    })

                }
            </script>
            <script src="../assets/bootstrap/bootstrap.js"></script>
        </div>
    </div>
</div>

</body>

</html>