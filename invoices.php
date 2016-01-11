<?php require('core/init.php'); ?>

<?php
//Create Topics Object
$invoice = new Invoice;

//Get user From URL
$user_id = isset($_GET['user']) ? $_GET['user'] : null;

//Get Template & Assign Vars
$template = new Template('templates/invoices.php');

//Assign Template Variables
if(isset($category)){
	$template->topics = $invoice->getByCategory($category);
	$template->title = 'Posts In "'.$topic->getCategory($category)->name.'"';
}

//Check For User Filter
if(isset($user_id)){
	$template->invoices = $invoice->getByUser($user_id);
	//$template->title = 'Posts By "'.$user->getUser($user_id)->username.'"';
}


//Display template
echo $template;