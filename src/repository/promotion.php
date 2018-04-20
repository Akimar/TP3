<?php

namespace repository;

use service\BDD;

class Promotion
{
	public static function  getAllPromotions()
	{
		$db = new BDD();
		return $db->query('SELECT * FROM promotion ORDER BY intitule');
	}

}


?>