	<!-- NAV.PHP -->
	<?php
	include('../partials/nav.php');
	include('../partials/header.php');
	?>

	

	<div class="container-fluid col-4 justify-content">

		<h1 class="text-center mt-4">User List</h1>
		<div class="container">
			<table class="table table-striped table-bordered">
				<thead class="thead-dark">
					<tr>
						<th>Username</th>
						<th>Type</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$file_content = file_get_contents("../userlist.json");
					$user_list = json_decode($file_content, true);

					foreach($user_list as $details){
						echo "<tr>
						<td>" . strtoLower($details['name']) . "</td>
						<td>" . ucfirst($details['type']) . "</td>
						</tr>";
					}
					?>
				</tbody>
			</table>
		</div>
	</div>



	
<?php
  include('../partials/footer.php')
  ?>