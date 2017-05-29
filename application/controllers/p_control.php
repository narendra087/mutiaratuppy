<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class P_control extends CI_Controller {

	public function index(){
		$barang = $this->p_model->getBarang();
		$data['nama'] = $this->p_model->readCat();
		$data['kategori'] = $this->p_model->getCat();
		$pic = $this->p_model->getPict();
		$data['query'] = $this->db->get('inventory');
		$this->load->view('topnavbar', $data, array('barang'=>$barang));
		$data['query'] = $this->db->get('inventory');
		$this->load->view('body', $data);
		$this->load->view('footer', $data, array('barang'=>$barang));
	}

	function admin(){
		$this->load->model('p_model');
		$data['err_message'] = "";
		$this->load->view('p_login', $data);

	}

	public function login() {
		$username = $this->input->post('uname');
		$password = $this->input->post('pass');
		$isLogin = $this->p_model->login_authen($username, $password); 

		$i = $this->p_model->authen_user($username);	

 		if ($isLogin == true) {
 			$data_session = array(
 				'nama' => $username,
 				'status' => 'login'
 				);
 			$this->session->set_userdata($data_session);
 		  	$this->home();
 		 	} else {  
 				$data['err_message'] = "Username or Password is Wrong";   
 				$this->load->view('p_login', $data);	
 			}
 		  	
	}

	public function home() {
		$this->load->library('pagination');
		$config['query_string_segment'] = 'start';
 
		$config['full_tag_open'] = '<div class="pagination">';
		$config['full_tag_close'] = '</div>';
	 
		$config['first_link'] = 'First';
		$config['first_tag_open'] = '';
		$config['first_tag_close'] = '';
	 
		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '';
		$config['last_tag_close'] = '<';
	 
		$config['next_link'] = 'Next';
		$config['next_tag_open'] = '';
		$config['next_tag_close'] = '';
	 
		$config['prev_link'] = 'Prev';
		$config['prev_tag_open'] = '';
		$config['prev_tag_close'] = '';
	 
		$config['cur_tag_open'] = '<a>';
		$config['cur_tag_close'] = '</a>';
	 
		$config['num_tag_open'] = '';
		$config['num_tag_close'] = '';
		$config['base_url'] = base_url().'p_control/home/';
		$config['per_page'] = 5;
		$config['num_links'] = 5;
		$config['total_rows'] = $this->db->get('inventory')->num_rows();

		$this->pagination->initialize($config);
		$data['query'] = $this->db->get('inventory', $config['per_page'], $this->uri->segment(3));
		$this->load->view('adminhome', $data);
	}

	public function logout() {
		$this->session->sess_destroy();
		$data['err_message'] = "";
		$this->load->view('p_login', $data);
	}

	public function insert(){
		$id = $_POST['id'];
		$nama = $_POST['nama'];
		$harga = $_POST['harga'];
		$stock = $_POST['stock'];
		$search = $this->input->post('kategori');
		$kategori = $_POST['kategori'];
		$details = $_POST['details'];
		$barang_insert = array(
			'id' => $id,	
			'nama' => $nama,
			'harga' => $harga,
			'stock' => $stock,
			'kategori' => $kategori,
			'details' => $details,
		);
		$ins = $this->p_model->insertBarang('inventory', $barang_insert);
		if ($ins >= 1) {
			redirect('p_control/home');
		} else {
			echo "Gagal";
		}
	}

	public function delete($id){
		$del = $this->p_model->deleteBarang('inventory', array('id' => $id));
		if ($del >= 1) {
			redirect('p_control/home');
		} else {
			echo "Gagal";
		}
	}

	public function upload($id){
		$brng = $this->p_model->getBarang("where id = '$id'");
		$data = array(
			"id" => $brng[0]['id'],
			"nama" => $brng[0]['nama'],
			"harga" => $brng[0]['harga'],
			"stock" => $brng[0]['stock'],
			"kategori" => $brng[0]['kategori'],
			"details" => $brng[0]['details'],
			"gambar" => $brng[0]['gambar'],
			"gambar2" => $brng[0]['gambar2'],
			"gambar3" => $brng[0]['gambar3'],
			);
		$this->load->view('upload', $data);
	}

	public function do_upload(){
		if (isset($_POST['upload'])) {	
			$filepath = "assets/uploads/".$_POST['id'];
			$type = explode('.', $_FILES["gambar"]["name"]);
			$type = $type[count($type)-1];
			$url = $filepath.".".$type;
				in_array($type, array("jpg", "png", "gif", "jpeg"));
				is_uploaded_file($_FILES["gambar"]["tmp_name"]);
				move_uploaded_file($_FILES["gambar"]["tmp_name"], $url);

			if (isset($_POST['upload'])) {	
			$filepath = "assets/uploads/".$_POST['id']."_2";
			$type = explode('.', $_FILES["gambar2"]["name"]);
			$type = $type[count($type)-1];
			$url = $filepath.".".$type;
				in_array($type, array("jpg", "png", "gif", "jpeg"));
				is_uploaded_file($_FILES["gambar2"]["tmp_name"]);
				move_uploaded_file($_FILES["gambar2"]["tmp_name"], $url);

			if (isset($_POST['upload'])) {	
			$filepath = "assets/uploads/".$_POST['id']."_3";
			$type = explode('.', $_FILES["gambar3"]["name"]);
			$type = $type[count($type)-1];
			$url = $filepath.".".$type;
				in_array($type, array("jpg", "png", "gif", "jpeg"));
				is_uploaded_file($_FILES["gambar3"]["tmp_name"]);
				move_uploaded_file($_FILES["gambar3"]["tmp_name"], $url);

			$id = $_POST['id'];
			$image = $_POST['id'].'.'.$type;
			$image2 = $_POST['id'].'_2.'.$type;
			$image3 = $_POST['id'].'_3.'.$type;

			$barang_update = array('gambar' => $image, 'gambar2' => $image2, 'gambar3' => $image3);

			$where = array('id' => $id);
			$upd = $this->p_model->updateBarang('inventory', $barang_update, $where);

		}
	}
}
		
		redirect('p_control/home');
	}

	


	public function update($id){
		$brng = $this->p_model->getBarang("where id = '$id'");
		$data = array(
			"id" => $brng[0]['id'],
			"nama" => $brng[0]['nama'],
			"harga" => $brng[0]['harga'],
			"stock" => $brng[0]['stock'],
			"kategori" => $brng[0]['kategori'],
			"details" => $brng[0]['details'],
			);
		$this->load->view('edit', $data);
	}

	public function edit(){
		$id = $_POST['id'];
		$nama = $_POST['nama'];
		$harga = $_POST['harga'];
		$stock = $_POST['stock'];
		$kategori = $_POST['kategori'];
		$details = $_POST['details'];
		$barang_update = array(	
			'id' => $id,
			'nama' => $nama,
			'harga' => $harga,
			'stock' => $stock,
			'kategori' => $kategori,
			'details' => $details
		);
		$where = array('id' => $id);
		$upd = $this->p_model->updateBarang('inventory', $barang_update, $where);
		if ($upd >= 1) {
			redirect('p_control/home');
		} else {
			echo "Gagal";
		}
	}

	public function email(){
		$subs = $_POST['subs'];

		$this->load->library('email');

		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'ssl://smtp.gmail.com';
		$config['smtp_port'] = '465';
		$config['smtp_timeout'] = '7';
		$config['smtp_user'] = 'tuppymutiara@gmail.com';
		$config['smtp_pass'] = 'mutiara9';
		$config['charset'] = 'utf-8';
		$config['newline'] = "\r\n";
		$config['mailtype'] = 'html';
		$config['validation'] = TRUE;
		$this->email->initialize($config); 



		$this->email->from('tuppymutiara@gmail.com', 'Mutiara Tuppy Store');
		$this->email->to($subs);
		$this->email->subject('[Mutiara Tuppy Store] Become a Tupperware Addict!');
		$this->email->message(
			'Hello, <br>
			thanks for the subscribe. <br>
			Wait for new product from our website <br>
			<br>
			Please give feedback to us by replying to this message. <br>
			We will reply in less than 2x24 hours. <br>
			<br>
			TTD,<br>
			Mutiara Tuppy Store');
		$this->email->send();

		redirect('/');
	}

	public function message(){
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$subj = $_POST['subj'];
		$pesan = $_POST['pesan'];

		$this->load->library('email');

		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'ssl://smtp.gmail.com';
		$config['smtp_port'] = '465';
		$config['smtp_timeout'] = '7';
		$config['smtp_user'] = 'tuppymutiara@gmail.com';
		$config['smtp_pass'] = 'mutiara9';
		$config['charset'] = 'utf-8';
		$config['newline'] = "\r\n";
		$config['mailtype'] = 'html';
		$config['validation'] = TRUE;
		$this->email->initialize($config); 



		$this->email->from('tuppymutiara@gmail.com', 'Customer Message');
		$this->email->to('tuppymutiara@gmail.com');
		$this->email->subject('[Mutiara Tuppy Store] Message from '.$fname);
		$this->email->message(
			'Firstname : '.$fname.' <br>
			 Lastname : '.$lname.'<br>
			 Email : '.$email.'<br>
			 Subject : '.$subj.'<br>
			 <br>
			 Message : '.$pesan
			);
		$this->email->send();

		redirect('/');
	}

}
