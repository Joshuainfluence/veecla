<?php
// session is required because the product id was stored in a session in the previous file
require_once __DIR__ . "/../config/dbh.php";
require_once __DIR__ . "/../config/session.php";

// this class is overwriting the one in classes.php file
class AjaxDisplayComments extends Dbh
{
    protected function displayReviewProduct($product_id)
    {
        $commentNewCount = $_POST['commentNewCount'];
        $sql = "SELECT * FROM review WHERE product_id = ? LIMIT $commentNewCount";
        $stmt = $this->connection()->prepare($sql);
        if (!$stmt->execute([$product_id])) {
            $stmt = null;
            exit();
        }
        $details = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $details;
    }
}

// require_once __DIR__. "/classes.php";
require_once __DIR__ . "/review-controller.php";

$product_id = $_SESSION['row_id'];
$data = new DisplayReviewProduct($product_id);
$rowlly = $data->displayReviewProducts2($product_id);
?>




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
        
    } else {
        ?>
        <p class="fw-bold fs-5">There are no comments!</p>
    <?php
    }
    ?>
</div>