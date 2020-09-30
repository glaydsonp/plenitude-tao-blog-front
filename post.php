<?php
try {
    require('controllers/HomeController.php');
} catch (Exception $exception) {
    echo $exception;
}

$postId = htmlspecialchars($_GET["postId"]);
HomeController::show($postId);
