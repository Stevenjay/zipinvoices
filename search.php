<?php 

require('core/init.php'); 

$invoice = new Invoice;

$user = new User;

$searcher = getUser()['user_id'];

echo $searcher; 

$search = $_POST['search'];

// var_dump($search);

$searchIDs = $invoice->search($search);

var_dump($searchIDs);

$first = ($searchIDs[1]['id']);

echo $first;

// foreach ($searchIDs as $key)

//Find a way to display the results 

//Get Template & Assign Vars
$template = new Template('templates/frontpage.php');

//Assign Vars
// $template->invoices = $invoice->getByUser( getUser()['user_id'] );



//Display template
echo $template;
