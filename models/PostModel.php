<?php

class Post
{
    private $id, $author, $date, $content, $title, $excerpt, $status, $featured_image;

    public function __construct()
    {
        // try {
        //     include 'classes/Connection.php';
        //     $this->conexao = Connection::getInstancia($dbname, $host, $dbuser, $dbpassword);
        // } catch (Exception $e) {
        //     echo $e;
        // }
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($postId)
    {
        $this->id = $postId;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function setAuthor($authorId)
    {
        $this->author = $authorId;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getExcerpt()
    {
        return $this->excerpt;
    }

    public function setExcerpt($excerpt)
    {
        $this->excerpt = $excerpt;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getFeaturedImage()
    {
        return $this->featured_image;
    }

    public function setFeaturedImage($featured_image)
    {
        $this->featured_image = $featured_image;
    }
}
