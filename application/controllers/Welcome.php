<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if(!$this->session->has_userdata('utilisateur')) redirect('utilisateur/login');
		$this->load->model('sondage_Model');
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function index()
	{
		$data['utilisateur'] = $this->session->userdata('utilisateur');
		$this->load->view('template/header', $data);
		$this->load->view('accueil', $data);
		$this->load->view('template/footer', $data);
	}

	public function landing()
	{
		$data['utilisateur'] = $this->session->userdata('utilisateur');
		$this->load->view('landing', $data);
	}

	public function sondage(){
		$this->load->helper('form');
		$this->load->library('form_validation');
		$data = [
			"utilisateur" => $this->session->userdata('utilisateur')
		];

		$this->form_validation->set_rules('titre', 'Titre', 'required');
		$this->form_validation->set_rules('lieu', 'Lieu', 'required');
		$this->form_validation->set_rules('note', 'Note', 'required');
		$this->form_validation->set_rules('date1', 'Date1', 'required');
		$this->form_validation->set_rules('date2', 'Date2', 'required');

		if ($this->form_validation->run() === FALSE){
			$this->load->view('template/header', $data);
			$this->load->view('Sondage', $data);
			$this->load->view('template/footer', $data);
		}else{
			$this->sondage_Model->set_sondage();
			$this->load->view('template/header', $data);
			$this->load->view('accueil', $data);
			$this->load->view('template/footer', $data);
		}

	}

	public function participe(){
		$this->load->helper('form');
		$this->load->library('form_validation');
		$data = [
			"utilisateur" => $this->session->userdata('utilisateur')
		];

		$this->form_validation->set_rules('clef', 'Clé', 'required');

		if ($this->form_validation->run() === FALSE){
			$this->load->view('template/header', $data);
			$this->load->view('participer', $data);
			$this->load->view('template/footer', $data);
		}else{
			$this->reponse($this->input->post("clef"));
		}
	}

	public function reponse($key){
		$this->load->helper('form');
		$this->load->library('form_validation');
		//if($this->sondage_Model->deja_repondu($key)){
		//	redirect("welcome");
		//} Cette methode pose des problemes


		$data = [
			"sondage" => $this->sondage_Model->get_sondage($key),
			"key" => $key,
			"utilisateur" => $this->session->userdata('utilisateur')
		];

		$this->form_validation->set_rules('error', 'Error','required');
		$this->form_validation->set_rules('participe', 'Y participer ?');

		if ($this->form_validation->run() === FALSE){
			$this->load->view('template/header', $data);
			$this->load->view('reponse', $data);
			$this->load->view('template/footer', $data);
		}else{
			$this->sondage_Model->repond($key);
			redirect("welcome");
		}

	}

	public function liste(){
		$data = [
			"utilisateur" => $this->session->userdata('utilisateur'),
			"data" => $this->sondage_Model->get_sondages()
		];

		$this->load->view('template/header', $data);
		$this->load->view('liste', $data);
		$this->load->view('template/footer', $data);
	}

	public function resultat($id){
		$data = [
			"utilisateur" => $this->session->userdata('utilisateur'),
			"data" => $this->sondage_Model->get_resultat($id)
		];

		$this->load->view('template/header', $data);
		$this->load->view('resultats', $data);
		$this->load->view('template/footer', $data);
	}

	public function supprimer($id){
		$this->sondage_Model->supprimer($id);
		redirect("welcome/liste");
	}

}
