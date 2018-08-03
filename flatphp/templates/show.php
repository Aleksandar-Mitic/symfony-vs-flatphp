<?php $title = $post['post_title'] ?>

<?php ob_start() ?>
    <h1><?php echo $post['post_title'] ?></h1>

    <div class="date"><?php echo $post['created_at'] ?></div>
    <div class="body">
        <?php echo $post['post_content'] ?>
    </div>
<?php $content = ob_get_clean() ?>

<?php include 'layout.php' ?>