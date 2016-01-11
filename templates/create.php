<?php include('includes/header.php'); ?>	
<form role="form" method="post" action="create.php">
							<div class="form-group">
								<label>Invoice Number</label>
								<input type="text" class="form-control" name="invoice_number" placeholder="001">
							</div>
							<div class="form-group">
								<label>Date</label>
								<input type="date" class="form-control" name="create_date">
							</div>
							<div class="form-group">
								<label>Due</label>
								<input type="date" class="form-control" name="due">
							</div>
							<div class="form-group">
								<label>Payee</label>
								<input type="text" class="form-control" name="payee">
							</div>
							<div class="form-group">
								<label>Amount</label>
								<input type="text" class="form-control" name="amount" placeholder="$0.00">
							</div>
							<div class="form-group">
								<label>Description</label>
								<textarea id="body" rows="10" cols="80" class="form-control" name="description"></textarea>
							</div>
							<button name="do_create" type="submit" class="btn btn-default">Save</button>
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div id="sidebar">
					<div class="block">
						<h3>Login Form</h3>
						<form role="form">
						<div class="form-group">
							<label>Username</label>
							<input name="username" type="text" class="form-control" placeholder="Enter Username">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input name="password" type="password" class="form-control" placeholder="Enter Password">
						</div>			
						<button name="do_login" type="submit" class="btn btn-primary">Login</button> <a  class="btn btn-default" href="register.html"> Create Account</a>
					</form>
<?php include('includes/footer.php'); ?>	