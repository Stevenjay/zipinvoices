<?php 
class User{
	//Init DB Variable
	private $db;
	
	/*
	 *	Constructor
	 */
	 public function __construct(){
		$this->db = new Database;
	 }
	 
	/*
	 * Register User
	 */
	public function register($data){
			//Insert Query
			$this->db->query('INSERT INTO users (name, email, logo, username, password) 
											VALUES (:name, :email, :logo, :username, :password)');
			//Bind Values
			$this->db->bind(':name', $data['name']);
			$this->db->bind(':email', $data['email']);
			$this->db->bind(':logo', $data['logo']);
			$this->db->bind(':username', $data['username']);
			$this->db->bind(':password', $data['password']);
			
			//Execute
			if($this->db->execute()){
				return true;
			} else {
				return false;
			}
			//echo $this->db->lastInsertId();
	}
	
	/*
	 * Upload User Logo
	 */
	public function uploadLogo(){
		$allowedExts = array("gif", "jpeg", "jpg", "png");
		$temp = explode(".", $_FILES["logo"]["name"]);
		$extension = end($temp);
		if ((($_FILES["logo"]["type"] == "image/gif")
				|| ($_FILES["logo"]["type"] == "image/jpeg")
				|| ($_FILES["logo"]["type"] == "image/jpg")
				|| ($_FILES["logo"]["type"] == "image/pjpeg")
				|| ($_FILES["logo"]["type"] == "image/x-png")
				|| ($_FILES["logo"]["type"] == "image/png"))
				&& ($_FILES["logo"]["size"] < 100000)
				&& in_array($extension, $allowedExts)) {
			if ($_FILES["logo"]["error"] > 0) {
				redirect('register.php', $_FILES["logo"]["error"], 'error');
			} else {
				if (file_exists("images/logos/" . $_FILES["logo"]["name"])) {
					redirect('register.php', 'File already exists', 'error');
				} else {
					move_uploaded_file($_FILES["logo"]["tmp_name"],
					"images/logos/" . $_FILES["logo"]["name"]);
					
					return true;
				}
			}
		} else {
			redirect('register.php', 'Invalid File Type!', 'error');
		}
	}
	
	/*
	 * User Login
	 */
	public function login($username, $password){
		$this->db->query("SELECT * FROM users
									WHERE username = :username
									AND password = :password			
		");
		
		//Bind Values
		$this->db->bind(':username', $username);
		$this->db->bind(':password', $password);
		
		$row = $this->db->single();

		//Check Rows
		if($this->db->rowCount() > 0){
			$this->setUserData($row);
			return true;
		} else {
			return false;
		}
	}
	
	/*
	 * Set User Data
	 */
	private function setUserData($row){
		$_SESSION['is_logged_in'] = true;
		$_SESSION['user_id'] = $row->id;
		$_SESSION['username'] = $row->username;
		$_SESSION['name'] = $row->name;
	}
	
	/*
	 * User Logout
	*/
	public function logout(){
		unset($_SESSION['is_logged_in']);
		unset($_SESSION['user_id']);
		unset($_SESSION['username']);
		unset($_SESSION['name']);
		return true;
	}


}