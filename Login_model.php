<?php
class Login_model extends CI_Model{
	//cek nip dan password admin			
	function auth_admin($username,$password){
		$query=$this->db->query("SELECT * FROM admin WHERE nip='$username' AND pass=MD5('$password') LIMIT 1");
		return $query;
	}

	//cek nim dan password user
	function auth_user($username,$password){
		$query=$this->db->query("SELECT * FROM user WHERE nim='$username' AND pass=MD5('$password') LIMIT 1");
		return $query;
	}

}
