<?php 

require('core/init.php'); 

$invoice = new Invoice;

$user = new User;

$search = $_POST['search'];

// var_dump($search);

if(isset($_POST['do_search'])) {
	var_dump($invoice->search($search));


	
}