<?php
class KandideeriHaaleta extends CI_Model {
	function __construct() {
		parent::__construct();
	}
	public function registreeriKandidaat($id,$firstname,$lastname,$partei,$maakond, $person_id) {
		$query = "CALL Register_Candidate('$id','$firstname','$lastname','$partei','$maakond','$person_id')";
		$exec = $this->db->query($query);
		return;
	}
	
	public function checkIfVoted($email) {
		$query = "SELECT `users`.`hasVoted` AS voted FROM users WHERE `users`.`email` = '$email'";
		$exec = $this->db->query($query);
		
		foreach($exec->result() as $bool) {
			return $bool->voted;
		}
	}
	
	public function checkCandidates($id){
		$query = "SELECT id FROM kandidaadid WHERE id = '$id'";
		$exec = $this->db->query($query);
		return $exec->result();
	}
	
	public function markVoted($email) {
		$query = "CALL Mark_Voted('$email')";
		$exec = $this->db->query($query);
		return;
	}
	
	public function updateVoteCount($id){
		$query = "CALL UpdateVoteCount('$id')";
		$exec = $this->db->query($query);
		return;
	}
	
	public function checkCandidacy($email) {
		$query = "SELECT id from users WHERE email = '$email'";
		$exec = $this->db->query($query);

		$result = "";

		foreach ($exec->result() as $id) {

			$query2 = "SELECT id from kandidaadid WHERE `kandidaadid`.id = '$id->id'";
			$exec2 = $this->db->query($query2);
			
			foreach ($exec2->result() as $check) {
				foreach ($this->checkCandidates($check->id) as $id2){
					if ($id2->id == $id){
						return;
						}
				}
			}
			
			$result = $exec2->result();
		}
              return $result;
	}
	
	public function getInfo($email){
		$query = "SELECT `users`.`id` AS id,`users`.`firstname` AS firstname,`users`.`lastname` AS lastname, `users`.`hasVoted` AS voted, `users`.`person_id` AS person_id from users WHERE email = '$email'";
		$exec = $this->db->query($query);
		
		return $exec->result();
	}
}
?>