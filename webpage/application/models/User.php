<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Model{
	function __construct() {
	}
	
	public function checkUser($data = array()) {
		//$result = $this->db->query("SELECT COUNT(*) as total FROM `fbusers` WHERE `oauth_uid` = ".$data['oauth_uid']);
		$result = $this->db->query("SELECT * FROM `fbusers` WHERE `oauth_uid` = ".$data['oauth_uid']);
		$rows = $result -> num_rows();	
		
		if($rows > 0){
			$update = "UPDATE `fbusers` SET `modified` = NOW() WHERE `oauth_uid` = ".$data['oauth_uid'];
			$exec = $this->db->query($update);
		}else {
			$insert = "INSERT INTO `fbusers`( `oauth_uid`, `first_name`, `last_name`, `email`, `gender`, `locale`, `picture_url`, `created`, `modified`) VALUES ( ".$data['oauth_uid'].", '".$data['first_name']."', '".$data['last_name']."', '".$data['email']."','".$data['gender']."', '".$data['locale']."', '".$data['picture_url']."', NOW(), NOW())";
			$exec = $this->db->query($insert);
		}
		
		$userID = $this->db->query("SELECT `id` FROM `fbusers` WHERE `oauth_uid` = ".$data['oauth_uid']);
		return $userID;
	}
	
}
