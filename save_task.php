<?php
include('database/db.php');

if(isset($_POST['save_task'])) {
    $title = $POST['title'];
    $description = $POST['description'];
    $image = getimagesize($_FILES['image']['tmp_name']);
    if($image !== false) {
        $image = $_FILES['image']['tpm_name'];
        $img_content = addslashes(file_get_contents($image));
    } else {
        $img_content = "";
    }

    $query = "INSERT INTO task(title, description, image) VALUES ('$title', '$description', '$img_content')";
    $result = mysqli_query($conn, $query);

    if(!$result) {
        die("Query failed");
    }

    $_SESSION['message'] = 'Task Saved Successfully';
    $_SESSION['message_type'] = 'success';
    header('Location: index.php');
}
?>