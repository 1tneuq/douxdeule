<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utilisateur extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Utilisateur_Model');
		if($this->uri->uri_string != "utilisateur/logout" && $this->session->has_userdata('utilisateur')){
			redirect("welcome");
		}
	}
	
	public function logout(){
		if($this->session->has_userdata('utilisateur')){
			$this->session->unset_userdata('utilisateur');
		}
		redirect("utilisateur/login");
	}
	
	public function login(){
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->helper('security');
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
		
		$rules = array(
			array(
				'field' => 'email',
				'label' => 'Email',
				'rules' => 'required|valid_email'
			),
			array(
				'field' => 'password',
				'label' => 'Mot de passe',
				'rules' => 'required'
			)
		);
		
		$this->form_validation->set_rules($rules);
		
		if($this->form_validation->run() == FALSE){	
			$this->load->view('login');
		}else{
			if($this->Utilisateur_Model->valid_login($this->input->post('email'), $this->input->post('password')) == FALSE){
				$error["error"] = '<div class="alert alert-danger" >Email ou Mot de passe incorrect</div>';
				$this->load->view('login',$error);
			}else{
				redirect('welcome/landing');
			}
		}	
	}
	
	public function register(){
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
		
		$rules = array(
			array(
				'field' => 'prenom',
				'label' => 'Prenom',
				'rules' => 'required|min_length[3]'
			),
			array(
				'field' => 'nom',
				'label' => 'Nom',
				'rules' => 'required|min_length[3]'
			),
			array(
				'field' => 'pseudo',
				'label' => 'Pseudo',
				'rules' => 'required|min_length[3]|is_unique[utilisateurs.pseudo]'
			),
			array(
				'field' => 'email',
				'label' => 'Email',
				'rules' => 'required|valid_email|is_unique[utilisateurs.email]'
			),
			array(
				'field' => 'password',
				'label' => 'Mot de passe',
				'rules' => 'required|min_length[6]'
			),
			array(
				'field' => 'password_retype',
				'label' => 'Mot de passe de confirmation',
				'rules' => 'required|matches[password]'
			)	
		);
		
		$this->form_validation->set_rules($rules);
		
		if($this->form_validation->run() == FALSE){
			$this->load->view('register');
		}else{
			$this->Utilisateur_Model->create();
			redirect('utilisateur/login');
		}
	}
}