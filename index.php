<?php

try {
    require('controllers/HomeController.php');
} catch (Exception $exception) {
    echo $exception;
}

HomeController::index();
