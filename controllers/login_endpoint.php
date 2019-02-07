<!-- SUPERGLOBAL Variable -->

<?php
session_start();

	// username from user input
$username = $_POST ['username'];

	// password from user uinput
$password = $_POST ['password'];

	// mock date of user list
	/*$user_list = ['Peter' => '12345', 'Boybato' => 'cutiepie', 'Carmela' => 'caramel'];*/
/*	$user_list = [
				["name" => 'Peter', 'password' => '12345', "type" = > "admin"],
				["name" => 'boy_bato', 'password' => '1p:inkle', "type" = > "user"],
				["name" => 'carmela', 'password' => 'caramel', "type" = > "user"]
				];
*/


	$file_content = file_get_contents("../userlist.json");
	var_dump($file_content);
	echo "<hr>";
	$user_list = json_decode($file_content, true);
	var_dump($user_list);
	echo "<hr>";

	$exist_flag = false;


	

	foreach ($user_list as $details){
		// var_dump($details);
		// echo "<br><br>"
		if (strtolower ($details['name']) == strtolower ($username)&&$details['password']==$password){
				$_SESSION['user_info'] = $details;
				$exist_flag = true;
			}
		}


	// Redirect
	if ($exist_flag) {
		header('location: ../index.php');
	} else {
		header('location: ../views/login.php');
	}

?>