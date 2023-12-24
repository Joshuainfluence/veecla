<?php

require_once __DIR__ . "/adminHeader.php";

?>

<div class="col-sm-12 col-md-12 col-lg-10 ">
    <div class="col-12 mb-3 d-flex mt-3">
        <input type="search" name="" id="" class="form-control" placeholder="Search for...">
        <button class="btn btn-dark"><i class="fa fa-search" aria-hidden="true"></i></button>
    </div>
    <div class="col-12 text-muted fw-bold mb-2">
        joshuajulius2030@gmail.com <img src="../img/logo2.png" class="img-fluid rounded-circle" width="30" alt="">
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
                        <th scope="row">username</th>

                        <th scope="row">Email</th>
                        <th scope="row">Comment</th>
                        <th scope="row">Date Posted</th>
                        <th scope="row">Product id</th>
                        <th scope="row">Profile Photo</th>
                        <th scope="row">Product Photo</th>

                        <th scope="row">Delete</th>
                        <th scope="row">Reply</th>


                    </tr>
                </thead>
                <tbody>
                    <?php

                    require_once __DIR__ . "/../config/dbh.php";
                    require_once __DIR__ . "/admin.classes.php";
                    require_once __DIR__ . "/rcContr.php";


                    // $sql = "SELECT * FROM users";
                    // $stmt = $this->connection()->prepare($sql);
                    // $stmt->execute();
                    $is_admin = 0;
                    $admin = new RcContr($is_admin);
                    $rows = $admin->reviewCommentPost();
                    // var_dump($row);
                    foreach ($rows as $row) :
                    ?>
                        <tr>
                            <td><?= $row['id'] ?></td>
                            <td><?= $row['name'] ?></td>
                            <td><?= $row['email'] ?></td>
                            <td><?= $row['comments'] ?></td>
                            <td><?= $row['date_added'] ?></td>



                            <td><?= $row['product_id'] ?></td>
                            <td><img style="width:120px; height:120px;" src="../includes/profileUploads/<?= $row['profilePhoto']; ?>" alt=""></td>

                            <td><img style="width:120px; height:120px;" src="uploads/<?= $row['productImage']; ?>" alt=""></td>
                            <td><a href="deleteUser.inc.php?id=<?= $row['id']; ?>" class="btn-del btn btn-danger">Delete</a></td>
                            <td><a href="<?php echo $_SERVER['PHP_SELF']?>?id=<?= $row['id']; ?>" type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">Reply</a> </td>
                            
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Veecla Administration</h5>
                                            <button type="button" class="btn-close btn btn-danger" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form action="#" method="POST">
                                            <div class="modal-body">
                                                <p>Replying to <?= $row['id'] ?> : <i><?= $row['comments'] ?></i></p>
                                                <p></p>
                                                <textarea name="product_info" id="" cols="30" rows="10" class="form-control mt-2" placeholder="Replying to <?= $row['name']?>"></textarea>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" name="submit" class="btn btn-primary">Reply</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            
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
</div>
</div>
<script src="../assets/bootstrap/bootstrap.js"></script>
</body>

</html>