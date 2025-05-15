<?php

include_once 'header.php';
include_once 'actions/conn.php';
$result = $conn->query("SELECT * FROM posts where id = " . $_GET['id']);

?>

<!-- Main Content -->

<!-- Page Content -->

<div class="mt-4">

    <h2>Welcome, Admin</h2>

    <div class="container mt-4">
        <div class="row">

            <!-- Repeat this card for each post dynamically -->
          <?php
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
?>
    <div class="container my-5">
        <!-- Back Button -->
        <!-- <a href="all_post.php" class="btn btn-secondary mb-4">&larr; Back</a> -->

        <div class="single-post">
            <!-- Centered Image -->
            <img src="uploads/<?php echo $row['image']; ?>" width="200px" class="img-fluid mb-4 d-block mx-auto" alt="Post Image">

            <h1 class="mb-3"><?php echo $row['title']; ?></h1>

            <p class="text-muted mb-4">Posted on <?php echo date("F j, Y", strtotime($row['create_at'])); ?></p>

            <div class="post-content">
                <p><?php echo nl2br($row['content']); ?></p>
            </div>
        </div>
        <a href="all_post.php" class="btn btn-secondary mb-4">&larr; Back</a>
    </div>
<?php
}
?>





        </div>

    </div>


</div>

<?php

include_once 'footer.php';
?>