<?php
session_start();

$_SESSION['link']=[];
if (strpos ($_SERVER['PHP_SELF'], 'views/')){
    $_SESSION['link']['views']='./';
    $_SESSION['link']['controllers']='../';
    $_SESSION['link']['']='../';
    $_SESSION['link']['partials']='../';
  }else{
    $_SESSION['link']['views']='./views/';
    $_SESSION['link']['controllers']='./';
    $_SESSION['link']['partials']='./';
  }
?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Login</title>
	<!--  Custom Css -->
	
	<!-- Bootstrap CDN -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!-- Font Awesome CDN -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body>

<div class="wrapper"></div>


 