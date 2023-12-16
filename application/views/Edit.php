<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Penilaian</title>
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
                    <a href="dashboard">
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

        <!-- Bagian Form -->
        <div class="judul-form">
            <h1>Edit Data Penilaian</h1>
        </div>
        <div class="form-data">
            <?php foreach ($nilai as $n) {?>
            <form action="<?php echo base_url() . 'master/update'; ?>" method="post">
                <table>
                    <tr>
                        <td>NIM</td>
                        <td> : <input type="hidden" name="nim" value="<?php echo $n->nim ?>" size="50"></td>
                    </tr>
                    <tr>
                    <tr>
                        <td>No. KRS</td>
                        <td> : <input type="text" name="no_krs" value="<?php echo $n->no_krs ?>" size="50"></td>
                    </tr>
                    <tr>
                        <td>Kode Matkul</td>
                        <td> : <input type="text" name="kode_mtk" value="<?php echo $n->kode_mtk ?>" size="50"></td>
                    </tr>
                    <tr>
                        <td>No. Ujian Her</td>
                        <td> : <input type="text" name="no_kpuh" value="<?php echo $n->no_kpuh ?>" size="50"></td>
                    </tr>
                    <tr>
                        <td>Nilai UTS</td>
                        <td> : <input type="number" name="nilai_uts" value="<?php echo $n->nilai_uts ?>" size="50"></td>
                    </tr>
                    <tr>
                        <td>Nilai UAS</td>
                        <td> : <input type="number" name="nilai_uas" value="<?php echo $n->nilai_uas ?>" size="50"></td>
                    </tr>
                    <tr>
                        <td>Total Nilai</td>
                        <td> : <input type="number" name="total_nilai" value="<?php echo $n->total_nilai ?>" size="50"></td>
                    </tr>
                    <tr>
                        <td>Nilai Absen</td>
                        <td> : <input type="number" name="nilai_absen" value="<?php echo $n->nilai_absen ?>" size="50"></td>
                    </tr>
                    <tr>
                        <td>Nilai Tugas</td>
                        <td> : <input type="number" name="nilai_tugas" value="<?php echo $n->nilai_tugas ?>" size="50"></td>
                    </tr>
                    <tr>
                    <tr>
                        <td>Grade 1</td>
                        <td> : <input type="number" name="grade1" value="<?php echo $n->grade1 ?>" size="50"></td>
                    </tr>
                    <tr>
                        <td>Grade 2</td>                  
                        <td> : <input type="number" name="grade2" value="<?php echo $n->grade2 ?>" size="50"></td>
                    </tr>
                    <tr>
                        <td>Grade 3</td>
                        <td> : <input type="number" name="grade3" value="<?php echo $n->grade3 ?>" size="50"></td>
                    </tr>
                    <tr>
                        <td>Grade 4</td>
                        <td> : <input type="number" name="grade4" value="<?php echo $n->grade4 ?>" size="50"></td>
                    </tr>
                    <tr>
                    <tr>
                        <td>Grade 5</td>
                        <td> : <input type="number" name="grade5" value="<?php echo $n->grade5 ?>" size="50"></td>
                    </tr>
                    <tr>
                        <td>Grade 6</td>
                        <td> : <input type="number" name="grade6" value="<?php echo $n->grade6 ?>" size="50"></td>
                    </tr>
                    <tr>
                        <td>Grade Akhir</td>
                        <td> : <input type="number" name="grade_akhir" value="<?php echo $n->grade_akhir ?>" size="50"></td>
                    </tr>
                    <tr>
                        <td>Nilai Temu</td>
                        <td> : <input type="number" name="nilai_temu" value="<?php echo $n->nilai_temu ?>" size="50"></td>
                    </tr>
                    <tr>
                        <td>Kelompok Praktek</td>
                        <td> : <input type="text" name="kel_praktek" value="<?php echo $n->kel_praktek ?>" size="50"></td>
                    </tr>
                    <tr>
                        <td>Nilai Mutu</td>
                        <td> : <input type="number" name="nilai_mutu" value="<?php echo $n->nilai_mutu ?>" size="50"></td>
                    </tr>
                    <tr>
                        <td>Total Pra HER</td>
                        <td> : <input type="number" name="total_pra_her" value="<?php echo $n->total_pra_her ?>" size="50"></td>
                    </tr>
                    <tr>
                        <td>Grade Pra HER</td>
                        <td> : <input type="number" name="grade_pra_her" value="<?php echo $n->grade_pra_her ?>" size="50"></td>
                    </tr>
                    <tr>
                    <tr>
                        <td>Kelompok Praktek X</td>
                        <td> : <input type="text" name="kel_praktek_x" value="<?php echo $n->kel_praktek_x ?>" size="50"></td>
                    </tr>
                    <tr>
                        <td>NIM X</td>
                        <td> : <input type="text" name="nim_x" value="<?php echo $n->nim_x ?>" size="50"></td>
                    </tr>
                    <tr>
                        <td>Kode Lokal X</td>
                        <td> : <input type="text" name="kode_lokal_x" value="<?php echo $n->kode_lokal_x ?>" size="50"></td>
                    </tr>
                    <tr>
                        <td>Aktif</td>
                        <td> : <input type="text" name="aktif" value="<?php echo $n->aktif ?>" size="50"></td>
                    </tr>
                    <tr>
                    <tr>
                        <td>Entri</td>
                        <td> : <input type="text" name="entri" value="<?php echo $n->entri ?>" size="50"></td>
                    </tr>
                    <tr>
                        <td>Unggulan</td>
                        <td> : <input type="number" name="unggulan" value="<?php echo $n->unggulan ?>" size="50"></td>
                    </tr>
                    <tr>
                        <td>Nilai HER</td>
                        <td> : <input type="number" name="nilai_her" value="<?php echo $n->nilai_her ?>" size="50"></td>
                    </tr>
                    <tr>
                        <td>Cek</td>
                        <td> : <input type="text" name="cek" value="<?php echo $n->cek ?>" size="50"></td>
                    </tr>
                    <tr>
                        <td>Minat</td>
                        <td> : <input type="text" name="minat" value="<?php echo $n->minat ?>" size="50"></td>
                    </tr>
                    <tr>
                        <td>Periode Dikti</td>
                        <td> : <input type="text" name="periode_dikti" value="<?php echo $n->periode_dikti ?>" size="50"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="Simpan"></td>
                    </tr>
                </table>
            </form>
            <?php } ?>
        </div>



    </div>


</body>