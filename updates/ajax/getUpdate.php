<?php 

include('../config/db_connect.php');

$id = intval($_GET['id']);

$query = "SELECT * FROM updates WHERE id= '".$id."' ";
$result = mysqli_query($conn, $query);
$update = mysqli_fetch_assoc($result);

echo "<iframe width='560' height='315' src='https://www.youtube.com/embed/" . $update['vid'] . "' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
echo "<h3>" . $update['title'] . "</h3>";
echo "<div>" . $update['description'] . "</div>";

?>
