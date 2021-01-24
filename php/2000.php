<?php
Class wall
{
function bring()
{
$a = 378;
$b = ''; 
    while ($a != 0) 
	{
        $b = ($a % 2) . $b;
        $a = (int)($a / 2);
    }
echo $b;
}
}
$we=new wall();
echo $we->bring();
?>