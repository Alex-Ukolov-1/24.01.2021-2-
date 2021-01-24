<?php
Class wall
{
function bring()
{
$array = array(1, 2, 3, 4, 5);
for($i=0;$i<count($array);$i++)
{
	$dd=$dd.$array[$i];
}
echo $dd;
}
}
$we=new wall();
echo $we->bring();
?>