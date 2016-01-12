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

echo $name;

$id = htmlspecialchars($_GET["id"]);

echo $id;

$template->invoices = $invoice->getInvoice($id);

$unique = $invoice->getInvoice($id);

print_r($unique);
echo $unique->invoice_number;

//Display template
echo $template;