<?php 

require('core/init.php'); 

$invoice = new Invoice;

$user = new User;

$searcher = getUser()['user_id'];

$search = $_POST['search'];

$searchIDs = $invoice->search($search);

foreach ($searchIDs as $key) {
	foreach($key as $var=>$info) {
		// echo $info; "<br/>";

		$invoices = $invoice->getInvoice($info);
	}
}

//Get Template & Assign Vars
$template = new Template('templates/frontpage.php');

$template->invoices = $invoice->search($search);

//Display template
echo $template;
