<?php
class candidates extends CI_Model {
	function __construct() {
		parent::__construct();
	}
	public function getData() {
		$query = "SELECT * FROM kandidaadid";
		$exec = $this->db->query($query);
		return $exec->result();
	}
	
	public function getTotalCandidates() {
		$mysqli = new mysqli("localhost", "root", "", "evoting");
		$query = "SELECT COUNT(*) from kandidaadid";
		$result = $mysqli->query($query);
		$row = $result->fetch_array(MYSQLI_NUM);
		return $row[0];
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
	
	public function getGender(){
		$query = "SELECT DISTINCT gender FROM v_candgender";
		$exec = $this->db->query($query);
		return $exec->result();
	}
	
	public function getByMaakond($maakond){
		$query = "SELECT * FROM kandidaadid WHERE maakond = '$maakond'";
		$exec = $this->db->query($query);
		return $exec->result_array();
	}
	
	public function getByPartei($partei) {
		$query = "SELECT * FROM kandidaadid WHERE partei = '$partei'";
		$exec = $this->db->query($query);
		return $exec->result_array();
	}
	
	public function getByGender($gender) {
		$query = "SELECT * FROM v_candgender WHERE gender = '$gender'";
		$exec = $this->db->query($query);
		return $exec->result_array();
	}
	
	public function getDataArray(){
		$query = "SELECT * FROM kandidaadid";
		$exec = $this->db->query($query);
		return $exec->result_array();
	}
	
	public function getLastCandidateData() {
		$mysqli = new mysqli("localhost", "root", "", "evoting");
		$query = "SELECT id,firstName,lastName,partei,maakond FROM kandidaadid ORDER BY id DESC LIMIT 1";
		$result = $mysqli->query($query);
		$row = $result->fetch_array(MYSQLI_NUM);
		return $row;
	}
	
	public function getCandidatesByGender($gender) {
		$query = "SELECT * FROM v_candidategender WHERE gender ='.'$gender";
		$exec = $this->db->query($query);
		return $exec->result_array();
	}
	
}
?>