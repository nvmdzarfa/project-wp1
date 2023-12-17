<?php
    defined("BASEPATH") or exit ("No direct script access allowed");

    class Master extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->library('form_validation', 'session');
            if(!empty($_SESSION['username'])) {
                redirect('dashboard');
            }
        }

        public function index() {
            $this->load->view('utama');
        }

        public function logout() {
            $data = ['username'];
            $this->session->unset_userdata($data);
            redirect('login');
        }

        public function dashboard() {
            $search = $this->input->get('search');
            $this->load->model('MasterModel');
            $data['nilai'] = $this->MasterModel->tampilData($search)->result();
            $this->load->view('dashboard', $data);
        }
        
        public function tambah() {
            $this->load->view('form');
        }

        public function tambah_aksi() {
            $nim = $this->input->post('nim');
            $no_krs = $this->input->post('no_krs');
            $kode_mtk = $this->input->post('kode_mtk');
            $no_kpuh = $this->input->post('no_kpuh');
            $nilai_uts = $this->input->post('nilai_uts');
            $nilai_uas = $this->input->post('nilai_uas');
            $total_nilai = $this->input->post('total_nilai');
            $nilai_absen = $this->input->post('nilai_absen');
            $nilai_tugas = $this->input->post('nilai_tugas');
            $grade1 = $this->input->post('grade1');
            $grade2 = $this->input->post('grade2');
            $grade3 = $this->input->post('grade3');
            $grade4 = $this->input->post('grade4');
            $grade5 = $this->input->post('grade5');
            $grade6 = $this->input->post('grade6');
            $grade_akhir = $this->input->post('grade_akhir');
            $nilai_temu = $this->input->post('nilai_temu');
            $kel_praktek = $this->input->post('kel_praktek');
            $nilai_mutu = $this->input->post('nilai_mutu');
            $total_pra_her = $this->input->post('total_pra_her');
            $grade_pra_her = $this->input->post('grade_pra_her');
            $kel_praktek_x = $this->input->post('kel_praktek_x');
            $nim_x = $this->input->post('nim_x');
            $kode_lokal_x = $this->input->post('kode_lokal_x');
            $aktif = $this->input->post('aktif');
            $entri = $this->input->post('entri');
            $unggulan = $this->input->post('unggulan');
            $nilai_her = $this->input->post('nilai_her');
            $cek = $this->input->post('cek');
            $minat = $this->input->post('minat');
            $periode_dikti = $this->input->post('periode_dikti');

            $data = array(
                'nim' => $nim,
                'no_krs' => $no_krs,
                'kode_mtk' => $kode_mtk,
                'no_kpuh' => $no_kpuh,
                'nilai_uts' => $nilai_uts,
                'nilai_uas' => $nilai_uas,
                'total_nilai' => $total_nilai,
                'nilai_absen' => $nilai_absen,
                'nilai_tugas' => $nilai_tugas,
                'grade1' => $grade1,
                'grade2' => $grade2,
                'grade3' => $grade3,
                'grade4' => $grade4,
                'grade5' => $grade5,
                'grade6' => $grade6,
                'grade_akhir' => $grade_akhir,
                'nilai_temu' => $nilai_temu,
                'kel_praktek' => $kel_praktek,
                'nilai_mutu' => $nilai_mutu,
                'total_pra_her' => $total_pra_her,
                'grade_pra_her' => $grade_pra_her,
                'kel_praktek_x' => $kel_praktek_x,
                'nim_x' => $nim_x,
                'kode_lokal_x' => $kode_lokal_x,
                'aktif' => $aktif,
                'entri' => $entri,
                'unggulan' => $unggulan,
                'nilai_her' => $nilai_her,
                'cek' => $cek,
                'minat' => $minat,
                'periode_dikti' => $periode_dikti
            );

            $this->MasterModel->simpanNilai($data);
            redirect('master/dashboard');
        }

        public function edit($id) {
            $where = array('nim' => $id);
            $data['nilai'] = $this->MasterModel->editData($where, 'nilai')->result();
            $this->load->view('edit', $data);
        }

        public function update() {
            try {
                $nim = $this->input->post('nim');
                $no_krs = $this->input->post('no_krs');
                $kode_mtk = $this->input->post('kode_mtk');
                $no_kpuh = $this->input->post('no_kpuh');
                $nilai_uts = $this->input->post('nilai_uts');
                $nilai_uas = $this->input->post('nilai_uas');
                $total_nilai = $this->input->post('total_nilai');
                $nilai_absen = $this->input->post('nilai_absen');
                $nilai_tugas = $this->input->post('nilai_tugas');
                $grade1 = $this->input->post('grade1');
                $grade2 = $this->input->post('grade2');
                $grade3 = $this->input->post('grade3');
                $grade4 = $this->input->post('grade4');
                $grade5 = $this->input->post('grade5');
                $grade6 = $this->input->post('grade6');
                $grade_akhir = $this->input->post('grade_akhir');
                $nilai_temu = $this->input->post('nilai_temu');
                $kel_praktek = $this->input->post('kel_praktek');
                $nilai_mutu = $this->input->post('nilai_mutu');
                $total_pra_her = $this->input->post('total_pra_her');
                $grade_pra_her = $this->input->post('grade_pra_her');
                $kel_praktek_x = $this->input->post('kel_praktek_x');
                $nim_x = $this->input->post('nim_x');
                $kode_lokal_x = $this->input->post('kode_lokal_x');
                $aktif = $this->input->post('aktif');
                $entri = $this->input->post('entri');
                $unggulan = $this->input->post('unggulan');
                $nilai_her = $this->input->post('nilai_her');
                $cek = $this->input->post('cek');
                $minat = $this->input->post('minat');
                $periode_dikti = $this->input->post('periode_dikti');
    
                $data = array(
                    'nim' => $nim,
                    'no_krs' => $no_krs,
                    'kode_mtk' => $kode_mtk,
                    'no_kpuh' => $no_kpuh,
                    'nilai_uts' => $nilai_uts,
                    'nilai_uas' => $nilai_uas,
                    'total_nilai' => $total_nilai,
                    'nilai_absen' => $nilai_absen,
                    'nilai_tugas' => $nilai_tugas,
                    'grade1' => $grade1,
                    'grade2' => $grade2,
                    'grade3' => $grade3,
                    'grade4' => $grade4,
                    'grade5' => $grade5,
                    'grade6' => $grade6,
                    'grade_akhir' => $grade_akhir,
                    'nilai_temu' => $nilai_temu,
                    'kel_praktek' => $kel_praktek,
                    'nilai_mutu' => $nilai_mutu,
                    'total_pra_her' => $total_pra_her,
                    'grade_pra_her' => $grade_pra_her,
                    'kel_praktek_x' => $kel_praktek_x,
                    'nim_x' => $nim_x,
                    'kode_lokal_x' => $kode_lokal_x,
                    'aktif' => $aktif,
                    'entri' => $entri,
                    'unggulan' => $unggulan,
                    'nilai_her' => $nilai_her,
                    'cek' => $cek,
                    'minat' => $minat,
                    'periode_dikti' => $periode_dikti
                );
    
                $where = array(
                    'nim' => $nim
                );
    
                $this->MasterModel->updateNilai($where, $data, 'nilai');
                redirect('dashboard');
            } catch (Exception $e) {
                echo 'Error: '. $e->getMessage();
            }
        }

        public function hapus($id) {
            $where = array('nim' => $id);
            $this->MasterModel->hapusData($where, 'nilai');
            redirect('master/dashboard');
        }

        public function search() {
            $this->load->model('MasterModel');

            $keyword = $this->input->post('search');
            $data['nilai'] = $this->MasterModel->get_search_results($keyword);

            $this->load->view('search', $data);
        }

        public function download($nim) {
            $data['nilai'] = $this->db->get_where('nilai', ['nim' => $nim])->result();
            $nilai = $data['nilai'];
            $file = fopen('php://output', 'w');

            $header = array(
                'NIM', 
                'No KRS',
                'Kode MTK',
                'No. Ujian Her', 
                'Nilai UTS', 
                'Nilai UAS', 
                'Total Nilai', 
                'Nilai Absen', 
                'Nilai Tugas', 
                'Grade 1', 
                'Grade 2', 
                'Grade 3', 
                'Grade 4', 
                'Grade 5', 
                'Grade 6', 
                'Grade Akhir', 
                'Nilai Temu', 
                'Kelompok Praktek', 
                'Nilai Mutu', 
                'Total Pra HER', 
                'Grade Pra HER', 
                'Kelompok Praktek X', 
                'NIM X', 
                'Kode Lokal X', 
                'Aktif', 
                'Entri', 
                'Unggulan', 
                'Nilai Her', 
                'Cek', 
                'Minat', 
                'Periode Dikti'
            );
            fputcsv($file, $header);

            foreach ($nilai as $row) {
                $newRow = array(
                    $row->nim,
                    $row->no_krs,
                    $row->kode_mtk,
                    $row->no_kpuh,
                    $row->nilai_uts,
                    $row->nilai_uas,
                    $row->total_nilai,
                    $row->nilai_absen,
                    $row->nilai_tugas,
                    $row->grade1,
                    $row->grade2,
                    $row->grade3,
                    $row->grade4,
                    $row->grade5,
                    $row->grade6,
                    $row->grade_akhir,
                    $row->nilai_temu,
                    $row->kel_praktek,
                    $row->nilai_mutu,
                    $row->total_pra_her,
                    $row->grade_pra_her,
                    $row->kel_praktek_x,
                    $row->nim_x,
                    $row->kode_lokal_x,
                    $row->aktif,
                    $row->entri,
                    $row->unggulan,
                    $row->nilai_her,
                    $row->cek,
                    $row->minat,
                    $row->periode_dikti
                );
                fputcsv($file, $newRow);
            }

            $nama_file = 'Rekap Nilai.csv';

            header("Content-type: application/csv");
            header("Content-Disposition: attachment; filename=".$nama_file);

            fclose($file);
        }   

    }
    
?>