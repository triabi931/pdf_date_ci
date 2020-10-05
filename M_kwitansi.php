<?php
class M_kwitansi extends CI_Model{

	function kwitansi_list(){
		$hasil=$this->db->query("SELECT * FROM `kwit` ORDER BY `kwit`.`tanggal_b` DESC");
		return $hasil->result();
	}

	function simpan_kwitansi($nono,$cust,$terbi,$tangb,$tangc,$invo,$tulis,$creat){
		$hasil=$this->db->query("INSERT INTO kwit (no_nota,customer,terbilang,tanggal_b,tanggal_c,invoice,tertulis,creator)
		VALUES('$nono','$cust','$terbi','$tangb','$tangc','$invo','$tulis','$creat')");
		$tangb = date('Y-d-m');
		return $hasil;
	}
	

	function get_kwitansi_by_no($nono){
		$hsl=$this->db->query("SELECT *
									 
		 FROM kwit WHERE no_nota='$nono'");
		if($hsl->num_rows()>0){
			foreach ($hsl->result() as $data) {
				$hasil=array(
					'no_nota' => $data->no_nota,
					'customer' => $data->customer,
					'terbilang' => $data->terbilang,
					'tanggal_b' => $data->tanggal_b,
					'tanggal_c' => $data->tanggal_c,
					'invoice' => $data->invoice,
					'tertulis' => $data->tertulis,					
					'creator' => $data->creator,
					);
			}
		}
		return $hasil;
	}

	function update_kwitansi($nono,$cust,$terbi,$tangb,$tangc,$invo,$tulis,$creat) {
		$hasil=$this->db->query("UPDATE kwit SET customer='$cust',terbilang='$terbi',
		tanggal_b='$tangb',tanggal_c='$tangc',invoice='$invo',tertulis='$tulis',creator='$creat' WHERE no_nota='$nono'");
		return $hasil;
	}
 
	function cet_kwitansi($nono,$cust,$terbi,$tangb,$tangc,$invo,$tulis,$creat) {
		$hasil=$this->db->query("SELECT  kwit SET customer='$cust',terbilang='$terbi',
		tanggal_b='$tangb',tanggal_c='$tangc',invoice='$invo',tertulis='$tulis',creator='$creat' WHERE no_nota='$nono'");
		return $hasil;
	}
 
	
	function cetak_kwitansi($nono){
		$hasil=$this->db->query("SELECT * FROM kwit WHERE no_nota='$nono'");
		return $hasil;
	}

	public function view_row(){
		return $this->db->get('kwit')->result();
	  }
	

	function hapus_kwitansi($nono){
		$hasil=$this->db->query("DELETE FROM kwit WHERE no_nota='$nono'");
		return $hasil;
	}
	
}

