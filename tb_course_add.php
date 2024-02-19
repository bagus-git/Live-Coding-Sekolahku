<?php
require('koneksi.php');

// Saya juga asumsikan Anda mendapatkan nilai username dari sesi atau inputan lainnya.
// $username = $_SESSION['username']; // Sesuaikan dengan cara Anda mendapatkan username.

$log_s = mysqli_query($conn, "SELECT * FROM courses WHERE id='$username'"); // Menggunakan kolom 'id' untuk pencarian.
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
    <title>Edit Course</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="bg-warning">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Edit Courses</h3>
                                </div>
                                <div class="card-body">
                                    <form action="" method="POST">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="course" type="text" placeholder="Course" />
                                            <label for="inputusername">Course</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="mentor" type="text" placeholder="Mentor" />
                                            <label for="inputEmail">Mentor</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="title" type="text" placeholder="Title" />
                                            <label for="inputPassword">Title</label>
                                        </div>

                                        <!-- <a class="btn btn-primary" href="index.html">ADD</a> -->
                                        <input type="submit" value="Add Course" name="add" class="btn btn-primary btn-sm">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
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
require('koneksi.php');

if (isset($_POST['add'])) {
    $course = $_POST['course'];
    $mentor = $_POST['mentor'];
    $title = $_POST['title'];

    $result = mysqli_query($conn, "INSERT INTO courses(course, mentor, title) VALUES ('$course', '$mentor', '$title')");

    if ($result) {
        echo "<script>alert('Data berhasil ditambahkan. Data sudah masuk dalam laporan.');window.location='tb_course.php'</script>";
    } else {
        echo "<script>alert('Data gagal ditambahkan!');</script>";
    }
}
?>