<?php
try {
    require('controllers/PostController.php');
} catch (Exception $exception) {
    echo $exception;
}

$postId = htmlspecialchars($_GET["postId"]);
PostController::detail($postId);
