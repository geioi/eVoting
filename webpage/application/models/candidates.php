<?php
class candidates extends CI_Model {
	function __construct() {
		parent::__construct();
	}
	public function getData() {
		$query = "SELECT `kandidaadid`.`firstName`,`kandidaadid`.`lastName`,`kandidaadid`.`maakond`,`kandidaadid`.`partei` FROM `kandidaadid`";
		$exec = $this->db->query($query);
		return $exec->result();
	}
	
	public function getTotalCandidates() {
		$result = $this->db->query("SELECT * FROM kandidaadid");
		return $result -> num_rows();
	}

}
?>