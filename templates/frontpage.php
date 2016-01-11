<?php include('includes/header.php'); ?>		
	<ul id="invoices">
	<?php if($invoices) : ?>
		<?php foreach($invoices as $invoice) : ?>
		<li class="invoice">
			<div class="row">
				<div class="col-md-2">
					<img class="logo pull-left" src="images/logos/<?php echo $invoice->logo; ?>" />
				</div>
				<div class="col-md-10">
					<div class="topic-content pull-right">
						<h3><a href="invoice.php?id=<?php echo $invoice->id; ?>"><?php echo $invoice->invoice_number; ?></a></h3>
					</div>
				</div>
			</div>
		</li>
		<?php endforeach ; ?>
					
						</ul>
	<?php else : ?>
		<p>No Invoices To Display</p>
	<?php endif; ?>
<?php include('includes/footer.php'); ?>	
