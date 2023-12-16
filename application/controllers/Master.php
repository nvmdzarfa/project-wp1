<?php
    defined("BASEPATH") or exit ("No direct script access allowed");

    class Master extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->library('form_validation');
        }

        public function login() {
            $this->form_validation->set_rules('username', 'Username', 'trim|required');
            $this->form_validation->set_rules('password', 'Password', 'trim|required');

            if($this->form_validation->run() == false) {
                $this->load->view('login');
            } else {
                $this->_login();
            }
        }
        
        private function _login() {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $user = $this->db->get_where('account', ['username' => $username])->row_array();

            if($user) {
                if(password_verify($password, $user['password'])) {
                    $data = [
                        'username' => $user['username']
                    ];
                    $this->session->set_userdata($data);
                    redirect('dashboard');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password salah!</div>');
                    redirect('login');
                }
            }
        }

        public function logout() {
            $this->session->unset_userdata('username');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil logout!</div>');
            redirect('login');
        }

        private function validateCredentials($username, $password) {
            $this->load->model('MasterModel');

            $user = $this->MasterModel->getUserByUsername($username);

            if($user && password_verify($password, $user->password)) {
                return true; // valid
            }

            return false; // tidak valid
        }
    
        public function register() {
            $this->load->library('form_validation');
    
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
                    echo '<script>alert("Registrasi Sukses! Sekarang kamu bisa login."); window.location.href = "' . site_url('login') . '";</script>';
                } else {
                    echo '<script>alert("Registrasi gagal! Silakan Coba lagi.");</script>';
                }
            }
        }

        public function utama() {
            $this->load->view('utama');
        }

        public function dashboard() {
            $search = $this->input->get('search');
            $this->load->model('MasterModel');
            $data['nilai'] = $this->MasterModel->tampilData($search)->result();
            // var_dump($data['nilai']);
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

        // public function download() {
        //     $data = $this->db->get('nilai')->result();

        //     $file = fopen('php://output', 'w');

        //     $header = array("")
        // }

    }
    
?>