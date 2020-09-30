<?php
try {
    require('repositories/PostRepository.php');
} catch (Exception $exception) {
    echo $exception;
}


class HomeController
{
    static public function index()
    {
        try {
            require('classes/Connection.php');
            require('configs/database.php');
            require('models/PostModel.php');
            $connection = Connection::getInstancia($database_name, $database_host, $database_user, $database_password);
        } catch (Exception $e) {
            echo $e;
        }
        $repository = new PostRepository($connection);
        $posts = $repository->index();
        require __DIR__ . '/../views/HomeView.php';
    }

    static public function show($id)
    {
        PostRepository::detail($id);
    }
}
