<?php

class FeaturedImageRepository
{
    public static function detail($connection, $id)
    {
        $query = $connection->prepare('SELECT p.guid FROM `wp_posts` as p INNER JOIN `wp_postmeta` as me ON me.meta_value = p.ID WHERE me.meta_key = "_thumbnail_id" and me.post_id = ?');
        $query->bindValue(1, $id);
        $query->execute() or die(print_r($query->errorInfo(), true));

        try {
            $featuredImageUrl = $query->fetch(PDO::FETCH_ASSOC);
            return $featuredImageUrl["guid"];
        } catch (Exception $e) {
            echo $e;
        }
    }
}
