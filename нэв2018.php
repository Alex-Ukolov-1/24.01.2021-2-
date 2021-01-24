<?php
class sword
{
	function pain()
	{
		$arr=array(11,22,33,44,55);
		for($i=0;$i<count($arr);$i++)
		{
			$add=$add.$arr[$i].' ';
		}
		echo $add;
	}
	
	function dead($down)
	{
	for($i=0;$i<count($down);$i++)
		{
			$add=$add.($down[$i]/2).' '.'<br>';
		}
		echo $add;
	}
}
$retry=new sword();
$retry->pain();

echo '<br>';
$one=array(2,4,6,8,10);
$retry->dead($one);

$two=array("multi"=>array("home"=>array("dead"=>"lich")));
echo '<br>';
echo $two["multi"]["home"]["dead"];

echo '<br>';

$flowers=array(array("green","red"),
               array("blue","white"),
			   array("purple","black")
			   );
			   
echo $flowers[0][0].'<br>'.$flowers[0][1].'<br>'.$flowers[1][0].'<br>'.$flowers[1][1];
?>