<?php

class Utilisateur_Model extends CI_Model {
	
	public function __construct()
	{
		$this->load->database();
	}
	
	public function create(){
		$this->load->helper('security');
		
		$data = array(
			'prenom' => $this->input->post('prenom'),
			'nom' => $this->input->post('nom'),
			'pseudo' => $this->input->post('pseudo'),
			'email' => $this->input->post('email'),
			'password' => do_hash($this->input->post('password')),
			'ip' => $this->input->server('REMOTE_ADDR')
		);
		
		return $this->db->insert('utilisateurs', $data);
	}
	
	public function valid_login($email, $password){
		$data = $this->findOneByEmail($email);
		if($data == null || $data['password'] != do_hash($this->input->post('password'))) return FALSE;
		$this->session->set_userdata('utilisateur', $data);
		return TRUE;
	}
	
	public function findOneByEmail($email){
		$query = $this->db->get_where("utilisateurs", array('email' => $email));
		$data = $query->result_array();
		if(count($data) == 0){
			return null;
		}
		return $data[0];
	}
	
}