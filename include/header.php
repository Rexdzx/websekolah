<?php
?>
<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>SMK BIMA UTOMO BS</title>
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
                <a href="beranda.php">SMK BIMA UTOMO BS</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse pe-5 me-5" id="navbarNav">
                    <ul class="navbar-nav ms-auto" style=" padding-right: 26px; font-size: larger;">
                        <li class="nav-item">
                            <a class="nav-link text-black" aria-current="page" href="#beranda">Beranda</a>
                        </li>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-black" href="#ekstrakurikuler">Ekstrakurikuler</a>
                            <ul class="list-links">
                                <li><a href="akademik/pencaksilat.php">Pencak Silat</a></li>
                                <li><a href="akademik/rohis.php">Rohani Islam</a></li>
                                <li><a href="akademik/tari.php">Tari</a></li>
                                <li><a href="akademik/pramuka.php">Pramuka</a></li>
                            </ul>
                        <li class="nav-item">
                            <a class="nav-link text-black" href="#kompetensikeahlian">Kompetensi Keahlian</a>
                            <ul class="list-links">
                                <li><a href="akademik/silabus.php">RRL</a></li>
                                <li><a href="akademik/kalender.php">TKR</a></li>
                                <li><a href="akademik/artikel.php">TKJ</a></li>
                                <li><a href="akademik/berita.php">TBSM</a></li>
                            </ul>
                        <li class="nav-item">
                            <a class="nav-link text-black" href="#peta">Peta</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- end navbar -->