<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;500;600;700;800;900&family=Pacifico&family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Navigasi -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <i class='bx bx-library'></i>
                        </span>
                        <span class="tittle">Penilaian</span>
                    </a>
                </li>
                <li>
                    <a href="utama">
                        <span class="icon">
                            <i class='bx bx-home' ></i>
                        </span>
                        <span class="tittle">Home</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon">
                            <i class='bx bxs-dashboard' ></i>
                        </span>
                        <span class="tittle">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="login">
                        <span class="icon">
                            <i class='bx bx-log-out' ></i>
                        </span>
                        <span class="tittle">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
        
        <!-- Bagian atas -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <i class='bx bx-menu' ></i>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <i class='bx bx-search' ></i>
                    </label>
                </div>

                <div class="user">
                    <img src="assets/img/logo.jpg" alt="">
                </div>
            </div>
        </div>

        <!-- Bagian Data -->
        
        <div class="judul">
            <h1>Data Penilaian</h1>
            <p><a href="form">Tambah Data</a></p></div>
        <div class="table">

            <table>
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>NIM</th>
                        <th>No. KRS</th>
                        <th>Kode Matakuliah</th>
                        <th>Nilai UTS</th>
                        <th>Nilai Uas</th>
                        <th>Total Nilai</th>
                        <th>Nilai Absen</th>
                        <th>Nilai Tugas</th>
                        <th>Grade 1</th>
                        <th>Grade 2</th>
                        <th>Grade 3</th>
                        <th>Grade 4</th>
                        <th>Grade 5</th>
                        <th>Grade 6</th>
                        <th>Grade Akhir</th>
                        <th>Nilai Temu</th>
                        <th>Kelompok Praktek</th>
                        <th>Nilai Mutu</th>
                        <th>Total Pra HER</th>
                        <th>Graade Pra HER</th>
                        <th>Kelompok Praktek X</th>
                        <th>NIM X</th>
                        <th>Kode Lokal X</th>
                        <th>Aktif</th>
                        <th>Entri</th>
                        <th>Unggulan</th>
                        <th>Niali Her</th>
                        <th>Cek</th>
                        <th>Minat</th>
                        <th>Periode Dikti</th>
                        <th>Aksi</th>

                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>1.</td>
                        <td>Salsa Nur Aini</td>
                        <td>Salsa Nur Aini</td>
                        <td>Salsa Nur Aini</td>
                        <td>Salsa Nur Aini</td>
                        <td>Salsa Nur Aini</td>
                        <td>Salsa Nur Aini</td>
                        <td>Salsa Nur Aini</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <span class="Action-btn">
                                <a href="#">Edit</a>
                                <a href="#">Hapus</a>
                                <a href="#">Download</a>
                            </span>
                        </td>

                    </tr>
                </tbody>
            </table>
        </div>



    </div>

</body>