<?php
class InterestsManager {
	
	private $connection;
	private $user_id;
	
	function __construct($mysqli, $user_id_from_session){
		
		$this->connection = $mysqli;
		$this->user_id = $user_id_from_session;
		
		echo "Huvialade haldus käivitatud, kasutaja=".$this->user_id;
	}
	
	
	
}?>