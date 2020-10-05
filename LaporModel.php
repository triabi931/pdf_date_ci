<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LaporModel extends CI_Model {
	public function view_by_date($date){
        $this->db->where('DATE(tanggal_b)', $date); // Tambahkan where tanggal nya
        
		return $this->db->get('kwit')->result();// Tampilkan data transaksi sesuai tanggal yang diinput oleh user pada filter
	}
    
	public function view_by_month($month, $year){
        $this->db->where('MONTH(tanggal_b)', $month); // Tambahkan where bulan
        $this->db->where('YEAR(tanggal_b)', $year); // Tambahkan where tahun
        
		return $this->db->get('kwit')->result(); // Tampilkan data transaksi sesuai bulan dan tahun yang diinput oleh user pada filter
	}
    
	public function view_by_year($year){
        $this->db->where('YEAR(tanggal_b)', $year); // Tambahkan where tahun
        
		return $this->db->get('kwit')->result(); // Tampilkan data transaksi sesuai tahun yang diinput oleh user pada filter
	}
    
	public function view_all(){
		return $this->db->get('kwit')->result(); // Tampilkan semua data transaksi
	}
    
    public function option_tahun(){
        $this->db->select('YEAR(tanggal_b) AS tahun'); // Ambil Tahun dari field tgl
        $this->db->from('kwit'); // select ke tabel transaksi
        $this->db->order_by('YEAR(tanggal_b)'); // Urutkan berdasarkan tahun secara Ascending (ASC)
        $this->db->group_by('YEAR(tanggal_b)'); // Group berdasarkan tahun pada field tgl
        
        return $this->db->get()->result(); // Ambil data pada tabel transaksi sesuai kondisi diatas
    }
}
