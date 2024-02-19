<?php

require('koneksi.php');

$id = $_GET['id'];

$result = mysqli_query($conn, "DELETE FROM users WHERE id='$id'");


header('Location: tb_users.php');
