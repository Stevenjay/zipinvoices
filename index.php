<?php require('core/init.php'); ?>

<?php
//Create Topic Object
$invoice = new Invoice;

//Create User Object
$user = new User;


//Get Template & Assign Vars
$template = new Template('templates/frontpage.php');

//Assign Vars
$template->invoices = $invoice->getAllInvoices();

//Display template
echo $template;