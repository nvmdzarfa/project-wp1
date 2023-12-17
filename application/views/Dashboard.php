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
                    <a href="master">
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
                    <form action="<?php echo base_url('search'); ?>" method="post">
                        <label>
                            <input type="text" name="search" placeholder="Search here" value="<?php echo set_value('search'); ?>">
                            <i class='bx bx-search' ></i>
                        </label>
                    </form>
                </div>

                <div class="user">
                    <img src="assets/img/logo.jpg" alt="">
                </div>
            </div>
        </div>

        <!-- Bagian Data -->
        
        <div class="judul">
            <h1>Data Penilaian</h1>
            <p><a href="tambah">Tambah Data</a></p></div>
        <div class="table">

            <table>
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>NIM</th>
                        <th>No. KRS</th>
                        <th>Kode Matakuliah</th>
                        <th>No. Ujian Her</th>
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
                        <th>Grade Pra HER</th>
                        <th>Kelompok Praktek X</th>
                        <th>NIM X</th>
                        <th>Kode Lokal X</th>
                        <th>Aktif</th>
                        <th>Entri</th>
                        <th>Unggulan</th>
                        <th>Nilai Her</th>
                        <th>Cek</th>
                        <th>Minat</th>
                        <th>Periode Dikti</th>
                        <th>Aksi</th>

                    </tr>
                </thead>
                <?php
                    $no = 1;
                    foreach($nilai as $n) {
                ?>
                <tbody>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $n->nim ?></td>
                        <td><?php echo $n->no_krs ?></td>
                        <td><?php echo $n->kode_mtk ?></td>
                        <td><?php echo $n->no_kpuh ?></td>
                        <td><?php echo $n->nilai_uts ?></td>
                        <td><?php echo $n->nilai_uas ?></td>
                        <td><?php echo $n->total_nilai ?></td>
                        <td><?php echo $n->nilai_absen ?></td>
                        <td><?php echo $n->nilai_tugas ?></td>
                        <td><?php echo $n->grade1 ?></td>
                        <td><?php echo $n->grade2 ?></td>
                        <td><?php echo $n->grade3 ?></td>
                        <td><?php echo $n->grade4 ?></td>
                        <td><?php echo $n->grade5 ?></td>
                        <td><?php echo $n->grade6 ?></td>
                        <td><?php echo $n->grade_akhir ?></td>
                        <td><?php echo $n->nilai_temu ?></td>
                        <td><?php echo $n->kel_praktek ?></td>
                        <td><?php echo $n->nilai_mutu ?></td>
                        <td><?php echo $n->total_pra_her ?></td>
                        <td><?php echo $n->grade_pra_her ?></td>
                        <td><?php echo $n->kel_praktek_x ?></td>
                        <td><?php echo $n->nim_x ?></td>
                        <td><?php echo $n->kode_lokal_x ?></td>
                        <td><?php echo $n->aktif ?></td>
                        <td><?php echo $n->entri ?></td>
                        <td><?php echo $n->unggulan ?></td>
                        <td><?php echo $n->nilai_her ?></td>
                        <td><?php echo $n->cek ?></td>
                        <td><?php echo $n->minat ?></td>
                        <td><?php echo $n->periode_dikti ?></td>
                        <td>
                            <span class="Action-btn">
                                 <?php echo anchor('master/edit/' . $n->nim, 'Edit'); ?> 
                                <?php echo anchor('master/hapus/' . $n->nim, 'Delete'); ?>
                                <a href="<?php echo site_url('master/download/'.$n->nim); ?>">Download</a>
                            </span>
                        </td>

                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>



    </div>

</body>