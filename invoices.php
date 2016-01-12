<?php require('core/init.php'); ?>

<?php
//Create Topics Object
$invoice = new Invoice;

//Get user From URL
$user_id = isset($_GET['user']) ? $_GET['user'] : null;

//Get Template & Assign Vars
$template = new Template('templates/invoices.php');


//Check For User Filter
if(isset($user_id)){
	$template->invoices = $invoice->getByUser($user_id);
	//$template->title = 'Posts By "'.$user->getUser($user_id)->username.'"';
}

$name = getUser()['username'];

echo $name;

//Display template
echo $template;