<?php
$p=$_POST['panjang'];
$l=$_POST['lebar'];
$t=$_POST['tinggi'];
class balok{

	function luas($p,$l,$t){
		$luas= 2 *(($p*$l) + ($p*$t) + ($l * $t));
		return $luas;
	}
	function volume($p,$l,$t){
		$volume = $p * $l * $t;
		return $volume;
	}
}


?>