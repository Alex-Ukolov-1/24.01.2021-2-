<?php
Class wall
{
	
function bring()
{
session_start();
echo '<img src="1.jpg', htmlspecialchars(urlencode($image)),'" width="200" />';

$num= (isset($_SESSION["num"]))? $_SESSION["num"] :0;
if($num==0) echo"вы вывели фотографию ";
$num++;
$_SESSION["num"]=$num;
echo "<br> фотография выведена $num раз";
}
}
$we=new wall();
echo $we->bring();
?>