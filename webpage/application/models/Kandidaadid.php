<?php
class Kandimodel extends CI_Model {
	
	function __construct() {
		parent::__construct();
	}
	public function getData() {
		$this->db->select("firstName,lastName,partei,maakond");
		$this->db->from("kandidaadid");
		$query = $this->db->get();
		return $query->result();
	}
	public function getKandidaadid() {
		$query = "SELECT `kandidaadid`.`id` as Number,CONCAT(`Isik`.`eesnimi`,' ',`Isik`.`perenimi`) as Nimi,`Erakond`.`nimi` as Erakond,`Piirkond`.`nimi` as Piirkond,`Kandidaat`.`loosung` as Loosung FROM `Kandidaat` INNER JOIN `Erakond` ON `Kandidaat`.`fk_erakond` = `Erakond`.`id` INNER JOIN `Piirkond` ON `Kandidaat`.`fk_piirkond` = `Piirkond`.`id` INNER JOIN `Isik` ON `Kandidaat`.`fk_nimi` = `Isik`.`id`";
		$exec = $this->db->query($query);
		return $exec->result();
	}
    public function getErakonnad() {
 		$query = "SELECT `Erakond`.`id` as Id,`Erakond`.`nimi` as Erakond FROM `Erakond`";
		$exec = $this->db->query($query);
		return $exec->result();           
    }
    public function getPiirkonnad() {
 		$query = "SELECT `Piirkond`.`id` as Id,`Piirkond`.`nimi` as Piirkond FROM `Piirkond`";
		$exec = $this->db->query($query);
		return $exec->result();           
    }
	public function getVotes() {
		$query = "SELECT `Kandidaat`.`id`,COUNT(`Isik`.`valik`) as Haali FROM `Kandidaat`,`Isik` WHERE `Kandidaat`.`id` = `Isik`.`valik` GROUP BY `Kandidaat`.`id`";
		$exec = $this->db->query($query);
		return $exec->result();
	}
	public function getKandidaatByUserID($userID) {
		$query = "SELECT `Kandidaat`.`id` FROM `Kandidaat` WHERE `Kandidaat`.`fk_nimi` = $userID";
		$exec = $this->db->query($query);
		return $exec->result();
	}
	public function getKandidaatById($id) {
		$query = "SELECT `Kandidaat`.`id` as Number,CONCAT(`Isik`.`eesnimi`,' ',`Isik`.`perenimi`) as Nimi,`Erakond`.`nimi` as Erakond,`Piirkond`.`nimi` as Piirkond FROM `Kandidaat` INNER JOIN `Erakond` ON `Kandidaat`.`fk_erakond` = `Erakond`.`id` INNER JOIN `Piirkond` ON `Kandidaat`.`fk_piirkond` = `Piirkond`.`id` INNER JOIN `Isik` ON `Kandidaat`.`fk_nimi` = `Isik`.`id` WHERE `Kandidaat`.`id`=$id";
		$exec = $this->db->query($query);
		return $exec->result();
	}
}
?>