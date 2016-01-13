<?php require('core/init.php'); 

//Create Invoice Object
$invoice = new Invoice;

if(isset($_POST['do_delete'])) {
	$updated = array();
	$updated['id'] = $_SESSION['singleId'];
	$updated['invoice_number'] = $_POST['invoice_number'];
	$updated['user_id'] = getUser()['user_id'];
	$updated['create_date'] = $_POST['create_date'];
	$updated['due'] = $_POST['due'];
	$updated['payee'] = $_POST['payee'];
	$updated['amount'] = $_POST['amount'];
	$updated['description'] = $_POST['description'];
		
	$invoice->delete($updated);
	}

if(isset($_POST['do_update'])) {
	//Create validator object
	$validate = new Validator;

	//create data array
	$updated = array();
	$updated['id'] = $_SESSION['singleId'];
	$updated['invoice_number'] = $_POST['invoice_number'];
	$updated['user_id'] = getUser()['user_id'];
	$updated['create_date'] = $_POST['create_date'];
	$updated['due'] = $_POST['due'];
	$updated['payee'] = $_POST['payee'];
	$updated['amount'] = $_POST['amount'];
	$updated['description'] = $_POST['description'];

	//Required Fields
	$field_array = array('invoice_number', 'create_date', 'due', 'payee', 'amount');

	if($validate->isRequired($field_array)) {
		if($invoice->update($updated)) {
			redirect('index.php', 'Your invoice has been updated', 'Success');
		} else {
			redirect('invoice.php?id='.$invoice_id, 'Something has gone wrong', 'error');
		}
	} else {
		redirect('create.php', 'Please fill in the required fields', 'error');
	}
}

//Get Template & Assign Vars
$template = new Template('templates/invoices.php');

//Display template
echo $template;