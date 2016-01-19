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
							ORDER BY create_date ASC
							");
		//Assign Result Set
		$results = $this->db->resultset();
		
		return $results;
	  }
	  
	/*
	 * Get Invoices By Username
	 */
	public function getByUser($id){

		echo $id;

		$this->db->query("SELECT invoices.* FROM invoices
						-- INNER JOIN users
						-- ON invoices.user_id=users.id
						WHERE invoices.user_id = :id 
		");
		$this->db->bind(':id', $id);
	
		//Assign Result Set
		$results = $this->db->resultset();
	
		return $results;

		}

	/*
	 * Get Invoice By ID - Return the invoice with the corrosponding ID
	 */
	public function getInvoice($id){
		$this->db->query("SELECT * FROM invoices
						WHERE invoices.id = :id			
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


	public function update($updated) {
		
		var_dump($updated);
		
		//Insert Query
		$this->db->query("UPDATE invoices SET invoice_number=:invoice_number, create_date=:create_date, due = :due, payee = :payee, amount = :amount, description = :description  
								WHERE id = :id
									");
		
		
		//Bind Values
		$this->db->bind(':id', $_SESSION['singleId']);
		$this->db->bind(':invoice_number', $updated['invoice_number']);
		$this->db->bind(':create_date', $updated['create_date']);
		$this->db->bind(':due', $updated['due']);
		$this->db->bind(':payee', $updated['payee']);
		$this->db->bind(':amount', $updated['amount']);
		$this->db->bind(':description', $updated['description']);
		
		//Execute
		if($this->db->execute()){
			return true;
		} else {
			return false;
		}
	}

	public function delete($updated) {
		echo "here";

		$this->db->query("DELETE FROM invoices WHERE id = :id

			");
		$this->db->bind(':id', $_SESSION['singleId']);

		//Execute
		if($this->db->execute()){
			return true;
		} else {
			return false;
		}
	}

	public function search($search) {

		echo $search;

		$this->db->query("SELECT id FROM invoices WHERE user_id = :userID AND payee LIKE '%$search%'

			");
		$this->db->bind(':userID', getUser()['user_id']);

		$results = $this->db->resultsArray();
		
		return $results;
}

}






























