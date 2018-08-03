<!DOCTYPE html>
<html>
    <head>
        <title>List of Posts</title>
    </head>
    <body>
        <h1>List of Posts</h1>
        <ul>
            <?php foreach ($posts as $post): ?>
            <li>
                <a href="<?php echo $_SERVER['REQUEST_URI'] ?>show.php?id=<?= $post['id'] ?>">
                    <?= $post['post_title'] ?>
                </a>
            </li>
            <?php endforeach ?>
        </ul>
    </body>
</html>