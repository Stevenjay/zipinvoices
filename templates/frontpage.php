<?php include('includes/header.php'); ?>
<?php var_dump($invoices); ?>		
	<ul id="invoices">
	<?php if(isLoggedIn()) : ?>
	<?php if($invoices) : ?>
		<?php foreach($invoices as $invoice) : ?>
		<li class="invoice">
			<div class="row">
				<div class="col-md-10">
					<div class="topic-content pull-right">
						<h3>Invoice Number: <a href="invoices.php?id=<?php echo $invoice->id; ?>"><?php echo $invoice->invoice_number; ?></a></h3>
						Due Date: <?php echo $invoice->due; ?><br>
						Payee: <?php echo $invoice->payee; ?><br>
						Amount: <?php echo $invoice->amount; ?><br>
						Description: <?php echo $invoice->description; ?><br>
					</div>
				</div>
			</div>
		</li>
		<?php endforeach ; ?>
					
						</ul>
	<?php else : ?>
		<p>No Invoices To Display</p>
	<?php endif; ?>
	<?php else : ?>
		<p>Log in to view invoices</p>
	<?php endif; ?>	
<?php include('includes/footer.php'); ?>	
