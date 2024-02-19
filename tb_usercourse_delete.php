<?php

require('koneksi.php');

$id_user = $_GET['id_user'];

$result = mysqli_query($conn, "DELETE FROM usercourse WHERE id_user='$id_user'");


header('Location: tb_useercourse.php');
