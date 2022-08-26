<?php
include "footer.php";
?>
<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Pencak Silat</title>
<link rel="icon" href="assets/img/logobubs.jpg" type="image/jpg" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
</script>
<link rel="stylesheet" href="../assets/css/style.css">

<body id="beranda">
    <!-- navbar -->
    <header>
        <nav class="navbar navbar-expand-lg navbar fixed-top" style="background-color: #e3f2fd;  padding: 9px 10px;">
            <div class="logo">
                <div class="logo_flex">
                    <img src="../assets/img/logo.png" width="90" height="90" alt="Logo" /><br />
                </div>
            </div>
            <div class="container-fluid" id="container">
                <a href="../include/beranda.php">SMK BIMA UTOMO BS</a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse pe-5 me-5" id="navbarNav">
                    <ul class="navbar-nav ms-auto" style=" padding-right: 26px; font-size: larger;">
                        <li class="nav-item">
                            <a class="nav-link text-black" aria-current="page" href="../include/beranda.php">Beranda</a>
                        </li>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-black" href="#ekstrakurikuler">Ekstrakurikuler</a>
                            <ul class="list-links">
                                <li><a href="../ekstrakurikuler/pencak-silat.php">Pencak Silat</a></li>
                                <li><a href="../ekstrakurikuler/seni-tari.php">Seni Tari</a></li>
                                <li><a href="../ekstrakurikuler/rohis.php">Rohani Islam</a></li>
                                <li><a href="../ekstrakurikuler/pramuka.php">Pramuka</a></li>
                            </ul>
                        <li class="nav-item">
                            <a class="nav-link text-black" href="#kompetensikeahlian">Kompetensi Keahlian</a>
                            <ul class="list-links">
                                <li><a href="../jurusan/Rekayasa Perangkat Lunak.php">RPL</a></li>
                                <li><a href="../jurusan/Teknik Kendaraan Ringan.php">TKR</a></li>
                                <li><a href="../jurusan/Teknk Komputer dan Jaringan.php">TKJ</a></li>
                                <li><a href="../jurusan/Teknik Bisnis Sepeda Motor.php">TBSM</a></li>
                            </ul>
                        <li class="nav-item">
                            <a class="nav-link text-black" href="../include/beranda.php#peta">Peta</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- end navbar -->
    <main>
        <section class="banner">
            <div class="text">
                <h1 class="text-black" style="font-size: 64px; font-family:Arial, Helvetica, sans-serif; top:100%">
                    Pencak
                    Silat</h1>
            </div>
            <div class="background-eks" style="background-image:url(../assets/img/bg.jpg);background-repeat:no-repeat;">
                <div class="content">
                    <img class="logo-eks" src="../assets/img/Merpati_Putih-removebg-preview-modified.png" alt="">
                </div>
        </section>
    </main>
</body>

</html>