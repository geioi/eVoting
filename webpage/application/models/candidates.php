<?php
class candidates extends CI_Model {
	function __construct() {
		parent::__construct();
	}
	public function getData() {
		$query = "SELECT * FROM v_kandidaadid";
		$exec = $this->db->query($query);
		return $exec->result();
	}
	
	public function getTotalCandidates() {
		$result = $this->db->query("SELECT * FROM kandidaadid");
		return $result -> num_rows();
	}
	
	public function getParteid(){
		$query = "SELECT DISTINCT partei FROM kandidaadid";
		$exec = $this->db->query($query);
		return $exec->result();
	}
	
	public function getMaakonnad(){
		$query = "SELECT DISTINCT maakond FROM kandidaadid";
		$exec = $this->db->query($query);
		return $exec->result();
	}
	
	public function getByMaakond($maakond){
		$query = "SELECT * FROM v_kandidaadid WHERE maakond = '$maakond'";
		$exec = $this->db->query($query);
		return $exec->result_array();
	}
	
	public function getByPartei($partei) {
		$query = "SELECT * FROM v_kandidaadid WHERE partei = '$partei'";
		$exec = $this->db->query($query);
		return $exec->result_array();
	}
	
	public function getDataArray(){
		$query = "SELECT * FROM v_kandidaadid";
		$exec = $this->db->query($query);
		return $exec->result_array();
	}
}
?>