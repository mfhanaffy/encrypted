<?php

// echo $_POST['DATA_E'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/encryptedM.css">
    <style>
  #BACK{
    width: 90px;
    height: 38px;
    border-radius: 53px;
    background-color: #256332;
    color: #ffffff;
    cursor: pointer;
  }
  #formBack{
    position: fixed;
    right: 20px;
    bottom: 20px;
  }
    </style>
</head>
<body>

    <form action="../showData/EncMessage.php"  method="POST">
    <div class="text">
        <h1>type your English message</h1>
        <h5>please add all data by English language do not add any number or any language </h5>
    </div>
    <div class="data">
        <input type="text" name="DATA_E" id="TextENG" >
        <input type="submit" name="SEND DATA" id="SUBENG" >
    </div>
    </form>  
</form>  
<form action="../CTD.php" id="formBack" method="POST">
<input type="submit" name="BACK" id="BACK" >
</form>  
    <script type="text/javascript" src="js/CheckENG.js"></script>  
</body>
</html> 