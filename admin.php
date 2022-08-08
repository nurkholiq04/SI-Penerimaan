<?php
session_start();
include "config/__config_url.php";
include "config/__config_database.php";

if ($_SESSION['status_login'] != true) {
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penerimaan Anggota Baru</title>
    <link rel='shortcut icon' href='img/berkas/lpba.png'>
    <link rel="stylesheet" href="./assets/app/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/icons/css/font-awesome.min.css">
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
</head>

<body>

    <div class="wrapper">
        <nav class="navbar navbar-expand-md navbar-light bg-light py-1">
            <div class="container-fluid">
                <button class="btn btn-default" id="btn-slider" type="button">
                    <i class="fa fa-bars fa-lg" aria-hidden="true"></i>
                </button>
                <a class="navbar-brand me-auto text-info" href="#">Penerimaan<span class="text-primary">Anggota</span></a>
                <ul class="nav ms-auto">
                    <li class="nav-item dropstart">

                    </li>

                </ul>
            </div>
        </nav>

        <div class="slider" id="sliders">
            <div class="slider-head">
                <div class="d-block pt-4 pb-3 px-3">
                    <img src="img/berkas/lpba.png" alt="user" class="slider-img-user mb-2">
                    <p class="fw-bold mb-0 lh-1 text-white">Penerimaan Anggota</p>
                    <small class="text-white">Lembaga Pengembangan Bahasa Arab</small>
                </div>
            </div>
            <div class="slider-body px-1">
                <nav class="nav flex-column">
                    <hr class="soft my-1 bg-white">
                    <hr class="soft my-1 bg-white">
                    <a class="nav-link px-3 active" <?php echo !isset($_GET['target']) || empty($_GET['target']) ? "active" : ""; ?> href="<?php echo base_url(); ?>">
                        <i class="fa fa-home fa-lg box-icon" aria-hidden="true"></i>Dashboard
                    </a>
                    <hr class="soft my-1 bg-white">
                    <hr class="soft my-1 bg-white">
                    <a class="nav-link px-3" <?php echo isset($_GET['target']) && $_GET['target'] == 'calon' ? "active" : ""; ?> href="<?php echo base_url(); ?>admin.php?target=calon">
                        <i class="fa-solid fa-id-badge box-icon" aria-hidden="true"></i> Calon Anggota
                    </a>
                    <a class="nav-link px-3" <?php echo isset($_GET['target']) && $_GET['target'] == 'hasil' ? "active" : ""; ?> href="<?php echo base_url(); ?>admin.php?target=istikharah">
                        <i class="fa-solid fa-square-poll-vertical box-icon" aria-hidden="true"></i>Hasil Kelulusan
                    </a>
                    <a class="nav-link px-3" <?php echo isset($_GET['target']) && $_GET['target'] == 'berkas' ? "active" : ""; ?> href="<?php echo base_url(); ?>admin.php?target=berkas">
                        <i class="fa-solid fa-envelope-open-text box-icon" aria-hidden="true"></i>Berkas
                    </a>
                    <hr class="soft my-1 bg-white">
                    <hr class="soft my-1 bg-white">
                    <a class="nav-link px-3" href="<?php echo base_url(); ?>logout.php">
                        <i class="fa fa-sign-out fa-lg box-icon" aria-hidden="true"></i>LogOut
                    </a>
                </nav>
            </div>
        </div>


        <div class="clearfix">&nbsp;</div>
        <div class="container">
            <?php include_once "content.php"; ?>
        </div>

        <div class="slider-background" id="sliders-background"></div>
        <script src="./dist/js/jquery.js"></script>
        <script src="./assets/app/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


        <script src="./dist/js/index.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
        <script src="https://kit.fontawesome.com/4af1d56044.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>

        <script>
            $(document).ready(function() {
                $('.table').DataTable({
                        dom: 'Bfrtip',
                        buttons: [
                            'copy', 'csv', 'excel', 'pdf', 'print'
                        ]
                    }

                );
            });
        </script>

</body>

</html>