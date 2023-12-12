<?php
    defined("BASEPATH") or exit ("No direct script access allowed");

    class Master extends CI_Controller {
        public function login() {
            if($this->input->post('login')) {
                $username = $this->input->post('username');
                $password = $this->input->post('password');

                $user = $this->MasterModel->validateUser($username, $password);

                if($user) {
                // Store user data in session or perform any other actions
                    redirect('dashboard');
                } else {
                    echo "Invalid username and password";
                }
            } else {
                $this->load->view('login');
            }
        }

        private function validateCredentials($username, $password) {
            return($username === 'admin' && $password === 'admin');
        }
    
        public function register() {
            $this->load->library('form_validation');
    
            // Set validation rules
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if ($this->form_validation->run() == false) {
                $this->load->view('register');
            } else {
                $data = array(
                    'username' => $this->input->post('username'),
                    'email' => $this->input->post('email'),
                    'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT)
                );

                $this->load->model('MasterModel');

                if ($this->MasterModel->registerUser($data)) {
                    echo '<script>alert("Registrasi Sukses! Sekarang kamu bisa login."); window.location.href = "' . site_url('master/login') . '";</script>';
                } else {
                    echo '<script>alert("Registrasi gagal! Silakan Coba lagi.");</script>';
                }
            }
        }

        public function utama() {
            $this->load->view('utama');
        }

        public function dashboard() {
            $data['nilai'] = $this->MasterModel->tampilData()->result();
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
            $where = array('nim' => $nim);
            $data['nilai'] = $this->MasterModel->editData($where, 'nilai')->result();
            $this->load->view('form', $data);
        }

        public function update() {
            $nim = $this->input-post('nim');
            $no_krs = $this->input-post('no_krs');
            $kode_mtk = $this->input-post('kode_mtk');
            $no_kpuh = $this->input-post('no_kpuh');
            $nilai_uts = $this->input-post('nilai_uts');
            $nilai_uas = $this->input-post('nilai_uas');
            $total_nilai = $this->input-post('total_nilai');
            $nilai_absen = $this->input-post('nilai_absen');
            $nilai_tugas = $this->input-post('nilai_tugas');
            $grade1 = $this->input-post('grade1');
            $grade2 = $this->input-post('grade2');
            $grade3 = $this->input-post('grade3');
            $grade4 = $this->input-post('grade4');
            $grade5 = $this->input-post('grade5');
            $grade6 = $this->input-post('grade6');
            $grade_akhir = $this->input-post('grade_akhir');
            $nilai_temu = $this->input-post('nilai_temu');
            $kel_praktek = $this->input-post('kel_prakter');
            $nilai_mutu = $this->input-post('nilai_mutu');
            $total_pra_her = $this->input-post('total_pra_her');
            $grade_pra_her = $this->input-post('grade_pra_her');
            $kel_praktek_x = $this->input-post('kel_praktek_x');
            $nim_x = $this->input-post('nim_x');
            $kode_lokal_x = $this->input-post('kode_lokal_x');
            $aktif = $this->input-post('aktif');
            $entri = $this->input-post('entri');
            $unggulan = $this->input-post('unggulan');
            $nilai_her = $this->input-post('nilai_her');
            $cek = $this->input-post('cek');
            $minat = $this->input-post('minat');
            $periode_dikti = $this->input-post('periode_dikti');

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
            redirect('master/dashboard');
        }

        public function hapus($id) {
            $where = array('nim' => $id);
            $this->MasterModel->hapusData($where, 'nilai');
            redirect('master/dashboard');
        }

    }
    
?>