<?php
$jari=$_POST['jari'];
class bola{

	function luas($jari){
		$luas= 4*pi() * pow($jari,2);
		return $luas;
	}
	function volume($jari){
		$volume = 4/3 * pi()* pow($jari,3);
		return $volume;
	}
}
?>