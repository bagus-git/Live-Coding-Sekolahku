<?php

require('koneksi.php');

$id = $_GET['id'];

$result = mysqli_query($conn, "DELETE FROM courses WHERE id='$id'");


header('Location: tb_course.php');
