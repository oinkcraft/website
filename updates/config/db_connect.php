<?php

$conn = mysqli_connect('localhost', 'mattfan00', 'spacelf14', 'testingDB');

if (!$conn) {
  echo 'Connection error: '. mysqli_connect_error();
}

?>