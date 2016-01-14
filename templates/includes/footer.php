					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="sidebar">
					<div class="block">
						<h3>Login Form</h3>
						<?php if(isLoggedIn()) : ?>
							<div class="userdata">
							Welcome, <?php echo getUser()['username']; ?>
							<img class="logo pull-left" src="images/logos/<?php echo $user->logo; ?>" />
						</div>
						<br>
						<form role="form" method="post" action="logout.php">
							<input type="submit" name="do_logout" class="btn btn-primary" value="Logout" />
						</form>
						<?php else : ?>
						<form role="form" method="post" action="login.php">
						<div class="form-group">
							<label>Username</label>
							<input name="username" type="text" class="form-control" placeholder="Enter Username">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input name="password" type="password" class="form-control" placeholder="Enter Password">
						</div>			
						<button name="do_login" type="submit" class="btn btn-primary">Login</button> <a  class="btn btn-default" href="register.php"> Create Account</a>
						</form>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>