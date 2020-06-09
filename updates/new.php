<?php

include('config/db_connect.php');

if ($_POST) {
  $title = $_POST['title'];
  $vid = $_POST['vid'];
  $description = $_POST['description'];
  
  $query = "INSERT INTO  updates(title, vid, description) VALUES('$title', '$vid', '$description')";

  if (mysqli_query($conn, $query)) {
    header('Location: index.php');
  } else {
    echo "query error: " . mysqli_error($conn);
  }
}

?>

<!DOCTYPE html>
<html>
<head>

</head>
<body>
  <form action="new.php" method="POST">
    <input placeholder="Title" name="title">
    <input placeholder="Video ID" name="vid">
    <input placeholder="Description" name="description">
    <input type="submit">
  </form>
</body>
<html>