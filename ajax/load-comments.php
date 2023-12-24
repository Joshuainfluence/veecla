<?php

require_once __DIR__ . "/../config/dbh.php";

// require_once __DIR__ . "/classes.php";
class AjaxComments extends Dbh
{

    protected function ajaxCommentShow($product_id)
    {
        $commentNewCount = $_POST['commentNewCount'];
        $sql = "SELECT * FROM review WHERE product_id = ? LIMIT $commentNewCount";
        $result = $this->connection()->prepare($sql);
        if (!$result->execute([$product_id])) {
            $result = null;
            exit();
        }
        $details = $result->fetchAll(PDO::FETCH_ASSOC);
        return $details;
    }
}
require_once __DIR__ . "/controller.php";

$product_id = 32;
$comment = new AjaxCommentsContr($product_id);
$rows = $comment->ajaxViewComments($product_id);
?>

<?php
if (!empty($rows)) {
    foreach ($rows as $row) {
?>
        <b><?= $row['name'] ?></b>
        <br>
        <?= $row['comments'] ?>
        <br>
<?php
    }
} else {
    echo "There are no comments yet";
}
?>