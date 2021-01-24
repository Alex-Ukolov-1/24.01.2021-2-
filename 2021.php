<?php
class sword
{
	private $x;
	private $y;
	
	public function __construct($x=30,$y=200)
	{
		$this->x=$x;
		$this->y=$y;
	}
	
	public function getx()
	{
		return $this->x;
	}
	
	public function gety()
	{
		return $this->y;
	}
}


class shield extends sword
{
	public function write()
	{
		echo "проверка умений";
	}
	
}



$obj=new sword();
echo $obj->getx()." ".$obj->gety();
echo "<br>";

$obj2=new shield();
echo $obj2->getx().' '.$obj2->gety().' '.$obj2->write().' ';

?>