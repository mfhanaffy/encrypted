<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    </style>
    <link rel="stylesheet" href="css/fast.css">
</head>
<body>
<video autoplay muted loop id="myVideo">
  <source src="vedio/fast.mp4" type="video/mp4">
</video>
<div class="content">
  <h1>wait</h1>

</div>
</body>
</html> 
<?php

// search about (how i can add paremeter in header )

if ($_SERVER['REQUEST_METHOD'] == 'POST') {


	if ($_POST['DATA_TYPE'] == 'English') {
		$dire = __dir__  . '\encryptedEngM.php';
    header('REFRESH:3;url=PageTypeMass/encryptedEngM.php');
}else{

    		$dire = __dir__  . '\encryptedEncM.php';
    header('REFRESH:3;url=PageTypeMass/encryptedEncM.php');
}	
}else{
	header('REFRESH:.1;url=CTD.php');
}


