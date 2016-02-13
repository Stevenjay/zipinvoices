<?php require('core/init.php'); ?>

<?php
//Create Topics Object
$invoice = new Invoice;

$user = new User;

//Get user From URL
$user_id = isset($_GET['username']) ? $_GET['username'] : null;

//Get Template & Assign Vars
$template = new Template('templates/invoices.php');

$name = getUser()['username'];

$id = htmlspecialchars($_GET["id"]);

$template->invoices = $invoice->getInvoice($id);

$unique = $invoice->getInvoice($id);

$_SESSION['invoice_number'] = $unique->invoice_number;
$_SESSION['create_date'] = $unique->create_date;
$_SESSION['due'] = $unique->due;
$_SESSION['payee'] = $unique->payee;
$_SESSION['amount'] = $unique->amount;
$_SESSION['description'] = $unique->description;

//Setting the id of the invoice
$_SESSION['singleId'] = $id;

//Display template
echo $template;



