<?php include('includes/header.php'); ?>	
<ul id="invoices">
	<?php if($invoices) : ?>
		<?php foreach($invoices as $invoice) : ?>
		<li class="invoice">
			<div class="row">
				<div class="col-md-2">
					<img class="logo pull-left" src="images/logo/<?php echo $invoice->logo; ?>" />
				</div>
				<div class="col-md-10">
					<div class="topic-content pull-right">
						<h3><?php echo $invoice->invoicenumber; ?></h3>
						<div class="invoice-info">
							<a href="invoices.php?user=<?php echo urlFormat($invoice->user_id); ?>"><?php echo $invoice->username; ?></a> >> 
							<?php echo formatDate($topic->create_date); ?>
						</div>
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