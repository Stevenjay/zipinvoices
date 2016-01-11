<?php
class Invoice {
	//Init DB Variable
	private $db;
	
	/*
	 *	Constructor
	 */
	 public function __construct(){
		$this->db = new Database;
	 }
	 
	 /*
	  *	Get All Invoices
	  */
	  public function getAllInvoices(){
		$this->db->query("SELECT invoices.*, users.username, users.logo FROM invoices
							INNER JOIN users
							ON invoices.user_id = users.id
							ORDER BY create_date DESC
							");
		//Assign Result Set
		$results = $this->db->resultset();
		
		return $results;
	  }
	  
	/*
	 * Get Invoices By Username
	 */
	public function getByUser($user_id){
		$this->db->query("SELECT invoices.*, categories.*, users.username, users.logo FROM invoices
						INNER JOIN users
						ON topics.user_id=users.id
						WHERE topics.user_id = :user_id
		");
		$this->db->bind(':user_id', $user_id);
	
		//Assign Result Set
		$results = $this->db->resultset();
	
		return $results;
	}

	/*
	 * Get  By ID
	 */
	public function getInvoice($id){
		$this->db->query("SELECT invoicess.*, users.username, users.name, users.logo FROM invoices
						INNER JOIN users
						ON topics.user_id = users.id
						WHERE topics.id = :id			
		");
		$this->db->bind(':id', $id);
		
		//Assign Row
		$row = $this->db->single();
		
		return $row;
	}
}