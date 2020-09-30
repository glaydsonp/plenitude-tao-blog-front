<style>
    img {
        max-width: 90vw;
    }
</style>
<!-- Uma página sempre deve começar fechando a tag head e abrindo a tag body -->
</head>

<body>
    <?php
    require __DIR__ . '/../components/header.php';

    // Título da página
    $pageContents = ob_get_contents();
    ob_end_clean();
    echo str_replace('<!--TITLE-->', "Blog Plenitude Tao - A sabedoria do Tao", $pageContents);

    foreach ($posts as $post) :
    ?>
        <p>
            <a href=<?php echo "/post.php?postId=" . $post->getId(); ?>>
                <?php echo $post->getTitle(); ?>
            </a>
        </p>
        <img src=<?php echo '"' . $post->getFeaturedImage() . '"'; ?>alt="Featured">
    <?php
    endforeach;

    require __DIR__ . '/../components/footer.php';
    ?>