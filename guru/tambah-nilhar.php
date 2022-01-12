<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../layout/header.php' ?>
</head>
<?php 
	include "../config/config.php";
    session_start();

    $query      = "SELECT * FROM nilai_harian WHERE noinduk_siswa = '".$_GET['id']."'";
    $db         = mysqli_query($connect,$query);


	// cek apakah yang mengakses halaman ini sudah login
    if (isset($_SESSION['user_logged'])) {
?>

<body>

    <div id="app">
        <?php include '../layout/sidebar.php' ?>

        <div id="main" class='layout-navbar'>
            <?php include '../layout/navbar.php' ?>

            <div id="main-content">
              <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Tambah Nilai Harian</h3>
                        </div>
                    </div>
                </div>
                <!-- Basic Vertical form layout section start -->
                <section id="basic-vertical-layouts">
                    <div class="row match-height">
                        <div class="col-md col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <!-- <form class="form form-vertical" action="../proses/create/tambah-tugas-proses.php" method="POST"> -->
                                        <form class="form form-vertical" action="proses-tambah.php" method="POST" enctype="multipart/form-data">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="tgl_ambil_nilai"><b>NIS</b></label>
                                                            <input type="text" id="tgl_ambil_nilai" class="form-control" 
                                                            name="noinduk_siswa" readonly value="<?php echo $_GET['id']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="tgl_ambil_nilai"><b>Tanggal Ambil</b></label>
                                                            <input type="date" id="tgl_ambil_nilai"
                                                            class="form-control" name="tgl_ambil_nilai" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 d-flex justify-content-end mt-5">
                                                        <button type="submit" class="btn btn-primary me-2 mb-1" 
                                                        name="tambah" value="tambah">Tambah</button>
                                                        <button type="button" class="btn btn-secondary me-2 mb-1" 
                                                        onclick="self.history.back()">Batal</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
              </div>
              <?php include '../layout/footer.php'?>
            </div>
        </div>
    </div>
    <script src="../assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    
    <!-- Include Choices JavaScript -->
    <script src="../assets/vendors/choices.js/choices.min.js"></script>

    <script src="../assets/js/main.js"></script>
</body>
</body>
</html>
<?php
} else {
    header('location: ../index.php');
}
?>