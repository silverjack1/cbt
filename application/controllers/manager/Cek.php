<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* ZYA CBT
* Achmad Lutfi
* achmdlutfi@gmail.com
* achmadlutfi.wordpress.com
*/
class Cek extends Member_Controller {
    private $url = 'manager/cek';

    function __construct(){
		parent:: __construct();
        $this->load->model('Cek_model');

	}
    
    public function index($page=null, $id=null){
        $data['kode_menu'] = 'cek';
        $data['url'] = $this->url;
        $data["daftar"] = $this->Cek_model->get_by_now()->result_array();
        $data["jawaban"] = $this->Cek_model->get_jawaban(300)->row();
        $data["soal"] = $this->Cek_model->get_jawaban_siswa(300)->result();
        $this->template->display_admin('baru/cek', 'Perbaikan Jawaban', $data);
    }
    
    public function koreksi ($id_soal) {
        $jawaban = $this->Cek_model->get_jawaban($id_soal)->row();
        $soal = $this->Cek_model->get_jawaban_siswa($id_soal)->result();
        
        foreach ($soal as $s){
            $koreksi = $this->Cek_model->koreksi($s->tessoal_id)->result();
            foreach ($koreksi as $k){
                if ($k->soaljawaban_jawaban_id == $jawaban->jawaban_id ){
                    $this->Cek_model->update_nilai($s->tessoal_id);
                    echo "OK";
                }
            }
        }
    }
    public function soal(){
        $topik = $this->input->post('topik');
        $data['soal'] = $this->Cek_model->get_soal($topik)->result();
        $data['topik']=$topik;
        $this->load->view('baru/soal', $data);
    }

   
}