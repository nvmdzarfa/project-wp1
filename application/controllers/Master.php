<?php
    defined("BASEPATH") or exit ("No direct script access allowed");

    class Master extends CI_Controller {
        public function login() {
            if($this->input->post('login')) {
                $username = $this->input->post('username');
                $password = $this->input->post('password');

                if($this->validateCredentials($username, $password)) {
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
            $this->load->view('register');
        }

        public function utama() {
            $this->load->view('utama');
        }

        public function dashboard() {
            $this->load->view('dashboard');
        }
        
        public function form() {
            $this->load->view('form');
        }
    }
    
?>