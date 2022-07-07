<?php
class koleksi_model
{
	private $db_host = 'localhost';
	private $db_user = 'root';
	private $db_pw = '';
	private $db_name = 'mt-shop';
	private $db;
	public function __construct()
	{
		try {
			$this->db = new mysqli($this->db_host, $this->db_user, $this->db_pw, $this->db_name);
		} catch (Exception $e) {
			echo "connection failed!. " . $e;
		}
	}
	public function getAllKoleksi()
	{
	}
}
