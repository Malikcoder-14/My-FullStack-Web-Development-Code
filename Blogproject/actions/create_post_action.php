<?php

// echo"<pre>";

// print_r($_POST); 

// print_r($_FILES);

include_once 'conn.php';

$msg = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $title = $conn->real_escape_string($_POST['title']);
    $content = $conn->real_escape_string($_POST['content']);

    $image_name = "";

    if($_FILES )



}

?>