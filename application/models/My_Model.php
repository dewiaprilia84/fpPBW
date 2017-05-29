<?php  

class My_Model extends CI_Model {

	function get_barang($kode_barang){
		$this->db->where('kode_barang', $kode_barang);
		return $this->db->get('barang')->row();
	}

	function addData($data) {
		$this->db->insert('barang', $data);
	}

	function login_authenuser($email, $password){
		//$this->db->select('*'); query builder
		$sql ="select * from user where email= '$email' and password = '$password'";
		$query = $this->db->query($sql);

		if($query->num_rows()==1){
			return true;
		}
		else{
			return false;
		}
	}

	function authen_admin($username){
		$sql = "select authentication from admin where username='$username'";
		$query = $this->db->query($sql);

		if($query->num_rows()==1){
			return $query->result_array();
		}
		else{
			return false;
		}
	}

	/*function ReadUser($username){
		$data=$this->db->select('*');
		$this->db->where('username', $username);
		$this->db->from('admin');
		return $this->db->get()->result_array();
	}*/

	/*function wrong_password($email,$value){	
		$sql = "update user set authentication = '$value' where email = '$email';" ;
		$query = $this->db->query($sql);
	}*/

	function hapus($item){
		$this->db->where_in('kode_barang', $item);//where_in karena pengembalian kode-barang itu integer sedangkan kita menyimpannya sebagai array di item
		$this->db->delete('barang');
	}

	public function insert ($tablename,$where){
		$res = $this->db->insert($tablename,$where);
		return $res;
	}
}

?>