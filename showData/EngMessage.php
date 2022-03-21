<?php

$s  = $_POST['DATA_E'];

$s1  = str_replace(array("!" ), "a" , $s);
$s2  = str_replace(array("*" ), "b" , $s1);
$s3  = str_replace(array("." ), "c" , $s2);
$s4  = str_replace(array("," ), "d" , $s3);
$s5  = str_replace(array(":" ), "e" , $s4);
$s6  = str_replace(array(";" ), "f" , $s5);
$s7  = str_replace(array('"' ), 'g' , $s6);
$s8  = str_replace(array("'" ), "h" , $s7);
$s9  = str_replace(array("{" ), "i" , $s8);
$s10 = str_replace(array("}" ), "j" , $s9);
$s11 = str_replace(array("[" ), "k" , $s10);
$s12 = str_replace(array("]" ), "l" , $s11);
$s13 = str_replace(array("0" ), "m" , $s12);
$s14 = str_replace(array("1" ), "n" , $s13);
$s15 = str_replace(array("@" ), "o" , $s14);
$s16 = str_replace(array("#" ), "p" , $s15);
$s17 = str_replace(array("$" ), "q" , $s16);
$s18 = str_replace(array("+" ), "r" , $s17);
$s19 = str_replace(array("=" ), "s" , $s18);
$s20 = str_replace(array("_" ), "t" , $s19);
$s21 = str_replace(array("-" ), "u" , $s20);
$s22 = str_replace(array(")" ), "v" , $s21);
$s23 = str_replace(array("(" ), "w" , $s22);
$s24 = str_replace(array("^" ), "x" , $s23);
$s25 = str_replace(array("%" ), "y" , $s24);
$s26 = str_replace(array("&" ), "Z" , $s25);
$s27 = str_replace(array("`" ), " " , $s26);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
body{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    background-color: black;

}
#myVideo {
    position: fixed;
    right: 0;
    bottom: 0;
    width: 100%; 
    height: 100%;
  }
  
.content {
    position: fixed;
    bottom: 0;
    background: rgba(0, 0, 0, 0.5);
    color: #f1f1f1;
    width: 100%;
    padding: 20px;
    height: 200px;
  }
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
    <link rel="stylesheet" href="css/fast.css">
</head>
<body>
<video autoplay muted loop id="myVideo">
  <source src="../vedio/show.mp4" type="video/mp4">
</video>
<div class="content">
  <h1 id="demo">wait i type your message</h1>


</div>
<form action="../CTD.php" id="formBack" method="POST">
<input type="submit" name="BACK" id="BACK" >
</form> 
</body>

<script >
    const element = document.getElementById("demo");
setInterval(function() {
    
    element.innerHTML = "<span style='color:#256332'>your message is</span> " + "<?php echo $s27; ?>" ;
    element.style.cssText = "color:#fff"
}, 4000);
</script>
</html> 