<?php 
require_once __DIR__. "/adminHeader.php";
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
            <table class="table table-responsive table-bordered border-light">
                <thead>
                    <tr>
                        <th scope="row">S/N</th>

                        <th scope="row">Product name</th>
                        <th scope="row">Product Price</th>
                        <th scope="row">Quantity</th>
                        <th scope="row">Date Added</th>
                        <th scope="row">User's ID</th>
                        <th scope="row">Photo</th>
                        <th scope="row">Expected Delivery</th>

                    </tr>
                </thead>
                <tbody>
                    <?php

                    require_once __DIR__ . "/../config/dbh.php";
                    require_once __DIR__ . "/admin.classes.php";
                    require_once __DIR__ . "/orderedProductContr.php";


                    // $sql = "SELECT * FROM users";
                    // $stmt = $this->connection()->prepare($sql);
                    // $stmt->execute();
                    $is_product = 1;
                    $admin = new OrderProductsContr($is_product);
                    $rows = $admin->OrderedProducts2($is_product);
                    // var_dump($row);
                    foreach ($rows as $row) :
                    ?>
                        <tr>
                            <td><?= $row['id'] ?></td>
                            <td><?= $row['product_name'] ?></td>
                            <td>$<?= $row['product_price'] ?></td>
                            <td><?= $row['product_quantity'] ?></td>
                            <td><?= $row['date_added'] ?></td>
                            <td><?= $row['users_id'] ?></td>
                            <td><img src="../admin//uploads/<?= $row['product_image'] ?>" style="width:120px; height:120px;" alt=""></td>
                            


                            
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
                        text: 'User has been deleted successfully'
                    })
                }
            </script>
        </div>
    </div>
</div>

</body>

</html>