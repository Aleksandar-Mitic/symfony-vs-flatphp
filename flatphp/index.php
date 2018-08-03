<?php

$connection = new PDO("mysql:host=localhost;dbname=blog_flatphp", 'root', '');
$result = $connection->query('SELECT id, post_title FROM post');

?>

<!DOCTYPE html>
<html>
    <head>
        <title>List of Posts</title>
    </head>
    <body>
        <h1>List of Posts</h1>
        <ul>
            <?php while ($row = $result->fetch(PDO::FETCH_ASSOC)): ?>
            <li>
                <a href="<?php echo $_SERVER['REQUEST_URI'] ?>show.php?id=<?= $row['id'] ?>">
                    <?= $row['post_title'] ?>
                </a>
            </li>
            <?php endwhile ?>
        </ul>
    </body>
</html>

<?php
$connection = null;
?>