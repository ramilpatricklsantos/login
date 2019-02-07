<?php

session_start();



$username=$_POST['username'];
$password=$_POST['password'];
$type=$_POST['type'];


//IMAGE DETAILS
$filename = $_FILES['profile']['name'];
$filesize = $_FILES['profile']['size'];
$file_tmp_name = $_FILES['profile']['tmp_name'];
$filetype = pathinfo($filename, PATHINFO_EXTENSION);


//CHECKING AND VALIDATING
if ($filename != '' && $filesize > 0 && $filetype != '' && ($filetype == 'jpg' || $filetype == 'jpeg' || $filetype == 'gif' || $filetype == 'png')) {

//UPLOAD IMAGE
	$destination = '../assets/images/profile/' . $filename;
	move_uploaded_file($file_tmp_name, $destination);
	header('location:' . $destination);	
}else{

	$_SESSION['upload_eror'] = "invalid image";
	header('location: ../views/register.php');
}



//open file
$file_content = file_get_contents("../userlist.json");
//convert json to array
$user_list = json_decode($file_content, true);
//write to file
array_push($user_list, ['name'=>$username,'password'=>$password,'type'=>$type]);

/*var_dump($user_list);*/



//save file

//open
$file = fopen('../userlist.json', 'w');
///convert array to json
$userlist_json = json_encode($user_list, JSON_PRETTY_PRINT);
///write
fwrite($file, $userlist_json);
//close
fclose($file);


header('location: ../views/login.php');

?>