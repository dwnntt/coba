<?php
class segitiga{
	function setengah_segitiga($baris=7){
		$res = '';
		for($i=0;$i<=$baris;$i++){
			$res.= '<br> ' ;
			for($j=0;$j<$i;$j++){
				$res.= '* ';
			}			
		}
		return $res;
	}
}
?>