<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Cek_model extends CI_Model{
	public $table = 'cbt_topik';
	
	function __construct(){
        parent::__construct();
    }
	
    
    function get_by_now(){
        $this->db->from($this->table)
        ->order_by('topik_id', 'DESC');
return $this->db->get();
    }

    function get_jawaban($soal){
        $this->db->from('cbt_jawaban')
        ->where('jawaban_soal_id', $soal)
        ->where('jawaban_benar', 1);
        return $this->db->get();
    }

    function get_jawaban_siswa($soal_id){
        $this->db->from('cbt_tes_soal')
        ->where('tessoal_soal_id', $soal_id);
        return $this->db->get();
    }

    function koreksi($tessoal_id){
        $this->db->from('cbt_tes_soal_jawaban')
        ->where('soaljawaban_tessoal_id', $tessoal_id)
        ->where('soaljawaban_selected', 1);
        return $this->db->get();
    }

    function update_nilai($tessoal_id){
        $data = array(
            'tessoal_nilai' => 1,
    );
    $this->db->where('tessoal_id', $tessoal_id);
    $this->db->update('cbt_tes_soal', $data);
    }

    function get_soal($topik){
        $this->db->from('cbt_soal')
        ->where('soal_topik_id', $topik);
        return $this->db->get();
    }
}