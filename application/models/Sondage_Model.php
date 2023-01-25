<?php

class Sondage_Model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function set_sondage(){
		$data = array(
			"titre" => $this->input->post("titre"),
			"lieu" => $this->input->post("lieu"),
			"note" => $this->input->post("note"),
			"date1" => $this->input->post("date1"),
			"date2" => $this->input->post("date2"),
			"invitation" => str_replace(".","",uniqid(uniqid("",true),"true")),
			"owner" => $this->session->userdata("utilisateur")["id"]
		);
		return $this->db->insert('sondage', $data);
	}

	public function get_sondage($key){
		$query = $this->db->query("SELECT pseudo, titre, lieu, note, date1, date2 FROM sondage JOIN utilisateurs ON sondage.owner=utilisateurs.id WHERE invitation=?", array($key));
		return $query->row_array();
	}
	public function get_sondages(){

		$query = $this->db->query("SELECT sondage.id id, pseudo, titre, lieu, note, date1, date2, invitation FROM sondage JOIN utilisateurs ON sondage.owner=utilisateurs.id WHERE sondage.owner=?", array($this->session->userdata("utilisateur")["id"]));
		$data = $query->result_array();
		return $data;
	}

	public function get_resultat($id){
		$query = $this->db->query("SELECT can,date1,date2  FROM sondage WHERE id=? && owner=?", array($id, $this->session->userdata("utilisateur")["id"]));
		return $query->row_array();
	}

	public function repond($key){
		$can = ($this->input->post("participe")==null)?0:1;
		$query = $this->db->query("UPDATE sondage SET member=member+1,can=can+?   WHERE invitation=?", array($can, $key));
		$this->db->query("INSERT INTO reponse(user_id, sondage_key) VALUE (?,?)", array($this->session->userdata("utilisateur")["id"], $key));
	}

	public function deja_repondu($key){
		$query = $this->db->query("SELECT * FROM reponse WHERE user_id=? AND sondage_key=?", array($this->session->userdata("utilisateur")["id"], $key));
		$data = $query->row_array();
		if($data == null){
			return false;
		}
		return true;
	}

	public function supprimer($id){
		$query = $this->db->query("UPDATE sondage SET invitation=null WHERE id=? AND owner=?", array($id,$this->session->userdata("utilisateur")["id"] ));
	}
}
