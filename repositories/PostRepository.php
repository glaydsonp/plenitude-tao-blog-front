<?php

class PostRepository
{
    private $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function index()
    {
        require('repositories/FeaturedImageRepository.php');
        $query = $this->connection->prepare('SELECT ID, post_author, post_date, post_content, post_title, post_excerpt FROM `wp_posts` WHERE post_status = "publish" AND post_excerpt IS NOT NULL');
        $query->execute() or die(print_r($query->errorInfo(), true));

        $postCollection = array();

        foreach ($query->fetchAll(PDO::FETCH_ASSOC) as $databaseRow) {
            $post = new Post();
            $post->setId($databaseRow["ID"]);
            $post->setAuthor($databaseRow["post_author"]);
            $post->setDate($databaseRow["post_date"]);
            $post->setContent($databaseRow["post_content"]);
            $post->setTitle($databaseRow["post_title"]);
            $post->setExcerpt($databaseRow["post_excerpt"]);
            $post->setFeaturedImage(FeaturedImageRepository::detail($this->connection, $post->getId()));

            array_push($postCollection, $post);
        }

        return $postCollection;
    }

    static public function detail($id)
    {
        $post = "isso é apenas um post com id: " . $id;
        echo $post;
        // return $post;
    }
}
