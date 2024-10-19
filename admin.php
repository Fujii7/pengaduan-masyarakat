<?php 
session_start();
if ($_SESSION["level"] != "admin") {
    echo "<script>alert('Maaf Anda Bukan Pada Sesi admin'); window.location.assign('../index2.php'); </script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Aplikasi Pelapor Pengaduan Masyarakat</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css">

    <!-- Custom CSS to match masyarakat.php -->
    <style>
        body {
            background-color: #f0f0f0;
        }

        .navbar-nav {
            background-color: #4e73df;
        }

        .navbar-nav .nav-item .nav-link {
            color: white;
            font-weight: bold;
        }

        .navbar-nav .nav-item .nav-link:hover {
            background-color: #2e59d9;
            color: white;
        }

        .topbar {
            background-color: #f8f9fc;
        }

        .topbar h1 {
            color: #4e73df;
            font-weight: bold;
        }

        .sidebar-heading {
            color: #d1d3e2;
            font-weight: bold;
        }

        .nav-item.active .nav-link {
            background-color: #2e59d9;
            color: white;
        }

        .content-wrapper {
            padding: 20px;
            background-color: white;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        footer.sticky-footer {
            background-color: #f8f9fc;
            padding: 10px;
        }

        footer.sticky-footer .copyright {
            color: #858796;
        }

        /* Custom button style */
        .btn-primary {
            background-color: #4e73df;
            border-color: #4e73df;
        }

        .btn-primary:hover {
            background-color: #2e59d9;
            border-color: #2e59d9;
        }

        /* Scroll to top button style */
        .scroll-to-top {
            background-color: #4e73df;
        }

        .scroll-to-top:hover {
            background-color: #2e59d9;
        }
    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-th-large"></i>
                </div>
                <div class="sidebar-brand-text mx-3">APPM</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="petugas.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Verifikasi Pengaduan -->
            <li class="nav-item">
                <a class="nav-link" href="?url=verifikasi_pengaduan">
                    <i class="fas fa-fw fa-edit"></i>
                    <span>Tanggapi Laporan</span>
                </a>
            </li>

            <!-- Nav Item - Lihat Tanggapan -->
            <li class="nav-item">
                <a class="nav-link" href="?url=lihat-tanggapan">
                    <i class="fas fa-fw fa-search"></i>
                    <span>Lihat Tanggapan</span>
                </a>
            </li>

            <!-- Nav Item - Generate Laporan -->
            <li class="nav-item">
                <a class="nav-link" href="?url=generate">
                    <i class="fas fa-fw fa-file-alt"></i>
                    <span>Generate Laporan</span>
                </a>
            </li>

            <!-- Nav Item - Logout -->
            <li class="nav-item">
                <a class="nav-link" href="#" onclick="openLogoutModal(event)">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <h1>Aplikasi Pelaporan Pengaduan Masyarakat</h1>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h4 mb-4 text-gray-800"><?php include 'halaman.php'; ?></h1>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Aplikasi Pelaporan Pengaduan Masyarakat &copy 2024</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" onclick="closeLogoutModal()">Cancel</button>
                    <button class="btn btn-primary" type="button" onclick="confirmLogout()">Logout</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Custom script to handle logout -->
    <script>
        function openLogoutModal(event) {
            event.preventDefault();
            $('#logoutModal').modal('show');
        }

        function closeLogoutModal() {
            $('#logoutModal').modal('hide');
        }

        function confirmLogout() {
            window.location.assign("logout.php");
        }
    </script>

</body>

</html>
