<?php require('core/init.php'); 

//Create Invoice Object
$invoice = new Invoice;

if(isset($_POST['do_create'])) {
	//Create validator object
	$validate = new Validator;

	//create data array
	$data = array();
	$data['invoice_number'] = $_POST['invoice_number'];
	$data['user_id'] = getUser()['user_id'];
	$data['create_date'] = $_POST['create_date'];
	$data['due'] = $_POST['due'];
	$data['payee'] = $_POST['payee'];
	$data['amount'] = $_POST['amount'];
	$data['description'] = $_POST['description'];

	//Required Fields
	$field_array = array('invoice_number', 'create_date', 'due', 'payee', 'amount');

	if($validate->isRequired($field_array)) {
		if($invoice->create($data)) {
			redirect('index.php', 'Your topic has been posted', 'Success');
		} else {
			redirect('invoice.php?id='.$invoice_id, 'Something has gone wrong', 'error');
		}
	} else {
		redirect('create.php', 'Please fill in the required fields', 'error');
	}
}

//Get Template & Assign Vars
$template = new Template('templates/create.php');

//Display template
echo $template;