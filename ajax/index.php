<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
            var commentCount = 2;
            $("button").click(function() {
                commentCount = commentCount + 2;
                $("#comments").load("load-comments.php", {
                    commentNewCount: commentCount
                });
            })
        });
    </script>
    <style>
        body {
            background-color: gainsboro;
        }

        #comments {
            background-color: #fff;
            width: 300px;
            /* border: 1px solid red; */
            height: auto;
            color: #000;
        }

        button {
            width: 200px;
            height: 40px;
            background-color: #000;
            color: #fff;
            border-radius: 5px;
            margin-top: 2rem;
        }
    </style>
</head>

<body>
    <div id="comments">
        <?php
        require_once __DIR__ . "/../config/dbh.php";
        require_once __DIR__ . "/classes.php";
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


    </div>
    <button>Show more comments</button>
</body>

</html>