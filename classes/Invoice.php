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
		$this->db->query("SELECT invoices.*, users.username, users.logo FROM invoices
						INNER JOIN users
						ON invoices.user_id=users.id
						WHERE invoices.user_id = :user_id
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
						ON invoice.user_id = users.id
						WHERE invoice.id = :id			
		");
		$this->db->bind(':id', $id);
		
		//Assign Row
		$row = $this->db->single();
		
		return $row;
	}

	public function create($data) {
		//Insert Query
		$this->db->query("INSERT INTO invoices ( invoice_number, user_id, create_date, due, payee, amount, description)
									VALUES (:invoice_number, :user_id, :create_date, :due, :payee, :amount, :description)");
		
		
		//Bind Values
		$this->db->bind(':invoice_number', $data['invoice_number']);
		$this->db->bind(':user_id', $data['user_id']);
		$this->db->bind(':create_date', $data['create_date']);
		$this->db->bind(':due', $data['due']);
		$this->db->bind(':payee', $data['payee']);
		$this->db->bind(':amount', $data['amount']);
		$this->db->bind(':description', $data['description']);
		
		//Execute
		if($this->db->execute()){
			return true;
		} else {
			return false;
		}
	}

}






























