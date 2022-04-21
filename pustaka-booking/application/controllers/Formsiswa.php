<?php 
    class Formsiswa extends CI_Controller {
        public function index() {
            $this->load->view('view_form_siswa');
        }

        public function cetak() {
            $this->form_validation->set_rules('nama', 'nama siswa', 'required|min_length[3]', [
                'required' => 'nama siswa Harus Diisi!',
                'min_length' => 'nama siswa Tidak Terdaftar!'
            ]);

            $this->form_validation->set_rules('NIS', 'NIS', 'required|min_length[3]', [
                'required' => "NIS Harus Diisi!",
                'min_length' => "NIS Tidak Terdaftar!"
            ]);

            $this->form_validation->set_rules('kelas', 'kelas', 'required|min_length[3]', [
                'required' => "Kelas Harus Diisi!",
                'min_length' => "Kelas Tidak Terdaftar!"
            ]);

            $this->form_validation->set_rules('tanggal', 'tanggal lahir', 'required|min_length[3]', [
                'required' => "Tanggal Lahir Harus Diisi!",
                'min_length' => "Tanggal lahir Tidak Sesuai!"
            ]);

            $this->form_validation->set_rules('tempat', 'tempat lahir', 'required|min_length[3]', [
                'required' => "Tempat Lahir Harus Diisi!",
                'min_length' => "Tempat Lahir Tidak Sesuai!"
            ]);

            $this->form_validation->set_rules('alamat', 'alamat', 'required|min_length[3]', [
                'required' => "Alamat Harus Diisi!",
                'min_length' => "Alamat Tidak Sesuai!"
            ]);

            $this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin', 'required|min_length[3]', [
                'required' => "Jenis Kelamin Harus Diisi!",
                'min_length' => "Jenis Kelamin Terlalu pendek!"
            ]);

            if ($this->form_validation->run () == FALSE) {
                $this->load->view('view_form_siswa');
            }
            else {
                    $nama= $this->input->post('nama', TRUE);
                    $NIS= $this->input->post('NIS', TRUE);
                    $kelas =  $this->input->post('kelas', TRUE);
                    $tanggal =  $this->input->post('tanggal', TRUE);
                    $tempat =  $this->input->post('tempat', TRUE);
                    $alamat =  $this->input->post('alamat', TRUE);
                    $jenis_kelamin =  $this->input->post('jenis_kelamin', TRUE);
                    $agama =  $this->input->post('agama', TRUE);
                $siswa = [
                    'nama' => $nama,
                    'NIS'=> $NIS,
                    'kelas'=> $kelas,
                    'tanggal' => $tanggal,
                    'tempat' => $tempat,
                    'alamat' => $alamat,
                    'jenis_kelamin' => $jenis_kelamin,
                    'agama' => $agama

                ];

                $this->load->view('view_data_siswa', $siswa);
            }
        }
    }
?>