<?php include('includes/header.php'); 


?>	



<form role="form" method="post" action="create.php">
	<div class="form-group">
		<label>Invoice Number</label>
		<input type="text" class="form-control" name="invoice_number" value="">
	</div>
	<div class="form-group">
		<label>Date</label>
		<input type="date" class="form-control" name="create_date" value="">
	</div>
	<div class="form-group">
		<label>Due</label>
		<input type="date" class="form-control" name="due" value="">
	</div>
	<div class="form-group">
		<label>Payee</label>
		<input type="text" class="form-control" name="payee" value="">
	</div>
	<div class="form-group">
		<label>Amount</label>
		<input type="text" class="form-control" name="amount" value="">
	</div>
	<div class="form-group">
		<label>Description</label>
		<textarea id="body" rows="10" cols="80" class="form-control" name="description" value=""></textarea>
	</div>
	<button name="do_create" type="submit" class="btn btn-default">Save</button>
</form>
				

<?php include('includes/footer.php'); ?>	