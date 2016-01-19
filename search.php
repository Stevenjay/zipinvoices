<?php 

require('core/init.php'); 

$invoice = new Invoice;

$user = new User;

$search = $_POST['search'];

// var_dump($search);

$searchIDs = $invoice->search($search);

// var_dump($searchIDs);

$first = ($searchIDs[0]['id']);

echo $first;

//Find a way to display the results 

//Get Template & Assign Vars
$template = new Template('templates/frontpage.php');

//Assign Vars
// $template->invoices = $invoice->getByUser( getUser()['user_id'] );



//Display template
echo $template;
