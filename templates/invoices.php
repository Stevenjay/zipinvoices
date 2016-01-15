<?php include('includes/header.php'); 

if(isset($_POST['do_pdf']))
{
	$content = (isset($_POST['invoice_number']) ? $_POST['invoice_number'] : null);

	if(empty($content))
	{
		$error = 'Please enter some content';
	} else {
		include_once('dompdf/dompdf_config.inc.php');

		$dompdf = new DOMPDF();
		$dompdf->load_html($content);
		$dompdf->render();
		$dompdf->stream('sample.pdf');
	}
}

?>	

<form role="form" method="post" action="update.php">
	<div class="form-group">
		<label>Invoice Number</label>
		<input type="text" class="form-control" name="invoice_number" value="<?=  $_SESSION['invoice_number']; ?>">
	</div>
	<div class="form-group">
		<label>Date</label>
		<input type="date" class="form-control" name="create_date" value="<?=  $_SESSION['create_date']; ?>">
	</div>
	<div class="form-group">
		<label>Due</label>
		<input type="date" class="form-control" name="due" value="<?=  $_SESSION['due']; ?>">
	</div>
	<div class="form-group">
		<label>Payee</label>
		<input type="text" class="form-control" name="payee" value="<?=  $_SESSION['payee']; ?>">
	</div>
	<div class="form-group">
		<label>Amount</label>
		<input type="text" class="form-control" name="amount" value="<?=  $_SESSION['amount']; ?>">
	</div>
	<div class="form-group">
		<label>Description</label>
		<textarea id="body" rows="10" cols="80" class="form-control" name="description" value=""><?=  $_SESSION['description']; ?></textarea>
	</div>
	<button name="do_update" type="submit" class="btn btn-success">Update</button>
	<button name="do_delete" type="submit" class="btn btn-danger">Delete</button>
	<button name="do_pdf" type="submit" class="btn btn-default">Convert to PDF</button>
</form>
				

<?php include('includes/footer.php'); ?>	