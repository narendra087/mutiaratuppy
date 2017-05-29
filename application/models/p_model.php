<?php

class P_model extends CI_Model {

	public function getData() {
		$data = $this->db->get('user');
		return $data->result_array();
	}

	function readCat(){
		$this->db->select('nama_kategori');
		$this->db->from('list_kategori');
		$query = $this->db->get();
		$a = $query->result_array();
		$return = array();

		foreach ($a as $key) {
			$return[$key['nama_kategori']] =$this->readByCat($key['nama_kategori']);
		}
		return $return;
	}

	function getCat(){
		$this->db->select('nama_kategori');
		$this->db->from('list_kategori');
		$query = $this->db->get();

		return $query->result_array();
	}

	function readByCat($i){
		$this->db->select('nama');
		$this->db->where('kategori', $i);
		$this->db->from('inventory');
		$query = $this->db->get();

		return $query->result_array();
	}


	public function getBarang($where="") {
		$barang = $this->db->query('SELECT * FROM inventory ' . $where);
		return $barang->result_array();
	}

	public function getPict(){
		$pic = $this->db->query("SELECT 'nama', 'harga', 'stock', 'gambar' FROM inventory WHERE 1");
		return $pic->result_array();
	}

	public function login_authen($username, $password) {
		$this->db->select('*');
		$this->db->where('uname', $username);
		$this->db->where('pass', $password);
		$this->db->from('user'); 
 
		$query = $this->db->get(); 
 
		if ($query->num_rows() == 1) {
		  return true; 
		} else {
		  return false;
		}
	}

	public function authen_user($username) {
		$this->db->select('authentication');
		$this->db->where('uname', $username);  
		$this->db->from('user');  
		$query = $this->db->get();  
		return $query->result_array(); 
	}

	public function wrong_password($username, $value) {
		$this->db->set('authentication', $value);  
		$this->db->where("uname", $username);  
		$this->db->update('user'); 
	}

	public function insertBarang($tblname, $data){
		$ins = $this->db->insert($tblname, $data);
		return $ins;
	}

	public function deleteBarang($tabelName, $where){
		$del = $this->db->delete($tabelName, $where);
		return $del;
	}

	public function updateBarang($tabelName, $data, $where){
		$upd = $this->db->update($tabelName, $data, $where);
		return $upd;
	}

	// public function ambil_barang($num, $offset){
	// 	$this->db->order_by('nama', 'ASC');
	// 	$barang = $this->db->get('inventory', $num, $offset);
	// 	return $barang->result();
	// }
}
