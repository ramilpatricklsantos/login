
	<!-- NAV.PHP -->
	<?php
	include('../partials/nav.php');
	include('../partials/header.php');
	?>

	<div class="container-fluid col-4 justify-content">

		<h1>Account Registration</h1>

		<hr>

		<form action="../controllers/register_endpoint.php" method="POST" enctype="multipart/form-data">
			<div class="form-group ">
				<label>Profile Picture</label>
				<input type="file" name="profile" class="form-control" aria-describedby="usernameHelp" placeholder="Enter Username">
			</div>
			<div class="form-group">
				<label>Username</label>
				<input type="username" name="username" class="form-control" id="exampleInputUsername" aria-describedby="usernameHelp" placeholder="Enter Username">
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
			</div>
			<div class="form-group">
				<label>User Type</label>
				<select class="form-control" name="type">
					<option value=""></option>
					<option value="admin">Administrator</option>
					<option value="user">User</option>
				</select>
			</div>
			<button type="submit" class="btn btn-primary">Register</button>
		</form>
	</div>

	<?php
	include('../partials/footer.php')
	?>