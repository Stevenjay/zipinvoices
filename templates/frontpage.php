<?php include('includes/header.php'); ?>
		
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
		<h2>Get paid faster with online invoicing software </h2>
		{{-- <img src="/../templates/images/logo.jpg" alt="Zip Invoices"  height="300px"/> --}}
		<p>Improve cashflow and get paid quickly and easily when you send professional invoices. Zip Invoices allows you to quickly and create, save and search through your invoices, giving you more time to work on your business.</p>
	<?php endif; ?>	
<?php include('includes/footer.php'); ?>	
