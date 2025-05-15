<?php

include_once 'header.php';

?>

 <div class="mt-4">
      <h2>Create Post</h2>
      <p>This is your dashboard. Use the sidebar to navigate.</p>
    </div>

    <?php 
    if (isset($_GET['msg'])) { ?>

        <div class = "alert alert-warning" role="role">

                <?php echo $_GET['msg']; ?>
        </div>

        <?php
                }
        ?>

    <form action="actions/create_post_action.php" method="POST" enctype="multipart/form-data">
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-6 mx-auto">
        <div class="card">
          <div class="card-header bg-primary text-white text-center">
            <h4>Create Post</h4>
          </div>
          <div class="card-body">
            <!-- Title Field -->
            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" required>
            </div>

            <!-- Content Textarea -->
            <div class="mb-3">
              <label for="content" class="form-label">Content</label>
              <textarea class="form-control" id="content" name="content" rows="5" placeholder="Enter content" required></textarea>
            </div>

            <!-- Image Upload Field -->
            <div class="mb-3">
              <label for="image" class="form-label">Upload Image</label>
              <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary w-100">Submit</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>

<?php

  include_once 'footer.php';
?>
