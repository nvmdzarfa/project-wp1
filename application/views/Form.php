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
                    <a href="">
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
            <h1>Tambah Data Baru</h1>
        </div>
        <div class="form-data">
            <form action="">
                <table>
                    <tr>
                        <td>NIM</td>
                        <td> : <input type="text" name="nim" size="50"></td>
                    </tr>
                    <tr>
                    <tr>
                        <td>No. KRS</td>
                        <td> : <input type="text" name="krs" size="50"></td>
                    </tr>
                    <tr>
                        <td>Kode Matkul</td>
                        <td> : <input type="text" name="kode" size="50"></td>
                    </tr>
                    <tr>
                        <td>Nilai UTS</td>
                        <td> : <input type="number" name="uts" size="50"></td>
                    </tr>
                    <tr>
                        <td>Nilai UAS</td>
                        <td> : <input type="number" name="uas" size="50"></td>
                    </tr>
                    <tr>
                    <tr>
                        <td>Grade 1</td>
                        <td> : 
                            <input type="radio" name="jeniskel" value="A"> A
                            <input type="radio" name="jeniskel" value="B"> B
                            <input type="radio" name="jeniskel" value="C"> C
                            <input type="radio" name="jeniskel" value="D"> D
                        </td>
                    </tr>
                    <tr>
                        <td>Grade 2</td>
                        <td> :                             
                            <input type="radio" name="jeniskel" value="A"> A
                            <input type="radio" name="jeniskel" value="B"> B
                            <input type="radio" name="jeniskel" value="C"> C
                            <input type="radio" name="jeniskel" value="D"> D
                    </tr>
                    <tr>
                        <td>Grade 3</td>
                        <td> :
                            <input type="radio" name="jeniskel" value="A"> A
                            <input type="radio" name="jeniskel" value="B"> B
                            <input type="radio" name="jeniskel" value="C"> C
                            <input type="radio" name="jeniskel" value="D"> D
                    </tr>
                    <tr>
                        <td>Grade 4</td>
                        <td> : 
                            <input type="radio" name="jeniskel" value="A"> A
                            <input type="radio" name="jeniskel" value="B"> B
                            <input type="radio" name="jeniskel" value="C"> C
                            <input type="radio" name="jeniskel" value="D"> D
                    </tr>
                    <tr>
                    <tr>
                        <td>Grade 5</td>
                        <td> : 
                            <input type="radio" name="jeniskel" value="A"> A
                            <input type="radio" name="jeniskel" value="B"> B
                            <input type="radio" name="jeniskel" value="C"> C
                            <input type="radio" name="jeniskel" value="D"> D
                    </tr>
                    <tr>
                        <td>Grade 6</td>
                        <td> :                             
                            <input type="radio" name="jeniskel" value="A"> A
                            <input type="radio" name="jeniskel" value="B"> B
                            <input type="radio" name="jeniskel" value="C"> C
                            <input type="radio" name="jeniskel" value="D"> D
                    </tr>
                    <tr>
                        <td>Grade Akhir</td>
                        <td> : 
                            <input type="radio" name="jeniskel" value="A"> A
                            <input type="radio" name="jeniskel" value="B"> B
                            <input type="radio" name="jeniskel" value="C"> C
                            <input type="radio" name="jeniskel" value="D"> D
                    </tr>
                    <tr>
                    <tr>
                        <td>Nilai Temu</td>
                        <td> : <input type="number" name="temu" size="50"></td>
                    </tr>
                    <tr>
                    <tr>
                        <td>Kelompok Praktek</td>
                        <td> : <input type="text" name="praktek" size="50"></td>
                    </tr>
                    <tr>
                        <td>Nilai Mutu</td>
                        <td> : <input type="number" name="mutu" size="50"></td>
                    </tr>
                    <tr>
                        <td>Total Pra HER</td>
                        <td> : <input type="number" name="toHER" size="50"></td>
                    </tr>
                    <tr>
                        <td>Grade Pra HER</td>
                        <td> : <input type="number" name="gHER" size="50"></td>
                    </tr>
                    <tr>
                    <tr>
                        <td>Kelompok Praktek X</td>
                        <td> : <input type="text" name="praX" size="50"></td>
                    </tr>
                    <tr>
                        <td>NIM X</td>
                        <td> : <input type="text" name="nimX" size="50"></td>
                    </tr>
                    <tr>
                        <td>Kode Lokal X</td>
                        <td> : <input type="text" name="lokalX" size="50"></td>
                    </tr>
                    <tr>
                        <td>Aktif</td>
                        <td> : <input type="text" name="aktif" size="50"></td>
                    </tr>
                    <tr>
                    <tr>
                        <td>Entri</td>
                        <td> : <input type="text" name="entri" size="50"></td>
                    </tr>
                    <tr>
                        <td>Unggulan</td>
                        <td> : <input type="number" name="unggulan" size="50"></td>
                    </tr>
                    <tr>
                        <td>Nilai HER</td>
                        <td> : <input type="number" name="gAkhir" size="50"></td>
                    </tr>
                    <tr>
                        <td>Cek</td>
                        <td> : <input type="text" name="cek" size="50"></td>
                    </tr>
                    <tr>
                        <td>Minat</td>
                        <td> : <input type="text" name="minat" size="50"></td>
                    </tr>
                    <tr>
                        <td>Periode Dikti</td>
                        <td> : <input type="text" name="dikti" size="50"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="Tambah" size="50"></td>
                    </tr>
                </table>
            </form>
        </div>



    </div>


</body>