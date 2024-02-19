<?php
require('koneksi.php');
$log_s = mysqli_query($conn, "SELECT * FROM users WHERE id='$username' OR username='$username'");
$hasil = mysqli_fetch_array($log_s);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Add Users</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">ADD Users</h3>
                                </div>
                                <div class="card-body">
                                    <form action="" method="POST">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="username" type="text" placeholder="Username" />
                                            <label for="inputusername">Username</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="email" type="email" placeholder="name@example.com" />
                                            <label for="inputEmail">Email address</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="password" type="password" placeholder="Password" />
                                            <label for="inputPassword">Password</label>
                                        </div>

                                        <!-- <a class="btn btn-primary" href="index.html">ADD</a> -->
                                        <input type="submit" value="Add Users" name="add" class="btn btn-primary btn-sm">
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </main>
    </div>
    <div id="layoutAuthentication_footer">
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Sekolahku 2024</div>
                </div>
            </div>
        </footer>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>

<?php


if (isset($_POST['add'])) {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $result = mysqli_query($conn, "INSERT INTO users(id,username,email,password)
            VALUES ('$id', '$username', '$email', '$password')");

    if (!$tambahdata) {
        echo "<script>alert('Data Berhasil di Tambahkan.Data Sudah masuk dalam Laporan');window.location='tb_users.php'</script>";
    } else {
        echo "<script>alert('Data gagal di tambahkan!');history.go(-1);</script>";
    }
}

?>