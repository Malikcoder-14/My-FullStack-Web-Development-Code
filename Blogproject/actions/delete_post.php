<?php

include_once "conn.php";

$id = $_GET["id"];  

$post = $conn->query("SELECT * FROM posts where id = $id")->fetch_assoc();

// print_r($post);

if ($post['image']) {

    unlink("../uploads/". $post['image']);
}

$conn->query("DELETE FROM posts where id = $id");
header("Location: ../all_post.php?error=post deleted successfully");
exit();



    
?>