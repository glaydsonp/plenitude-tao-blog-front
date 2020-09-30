<?php
try {
    require('repositories/PostRepository.php');
} catch (Exception $exception) {
    echo $exception;
}


class PostController
{
    static public function detail($id)
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
        $post = $repository->detail($id);
        require __DIR__ . '/../views/PostDetailView.php';
    }
}
