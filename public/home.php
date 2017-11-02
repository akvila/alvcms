<?php include_once 'header.php'; ?>


<?php while($row = $post->fetch()): ?>
    <div class="post_box">
        <?php echo '<div>'; ?>
        <?php echo '<h1><a href="viewpost.php?id=' . $row['id'] . '">' . $row['title'] . '</a></h1>'; ?>
        <?php echo '<p>Posted on ' . date('jS M Y H:i:s', strtotime($row['date'])) . '</p>'; ?>
        <?php echo '<p>' . $row['text'] . '</p>'; ?>
        <?php echo '<p>' . $row['id_author'] . '</p>'; ?>
        <?php echo '<p><a href="viewpost.php?id=' . $row['id'] . '">Read More</a></p>'; ?>              
        <?php echo '</div>'; ?>
    </div>
<?php endwhile; ?>


<?php include_once 'footer.php'; ?>
