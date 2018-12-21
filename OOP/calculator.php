<?php
class calc{
	function tambah($a,$b){
		$c = $a+$b;
		return $c;
	}
	function kali($m,$n){
		$hasil = $m*$n;
		return $hasil;
	}
    function tabung($r,$t){
        $volume = pi()*pow($r,2)*$t;
        return $volume;

    }

	function terbilang($x){
        $ambil = array("", "Satu", "Dua", "Tiga", "Empat", "Lima", "Enam", "Tujuh", "Delapan", "Sembilan", "Sepuluh", "Sebelas");
        if ($x < 12)
            return " " . $ambil[$x];
        elseif ($x < 20)
            return $this->terbilang($x - 10) . " Belas";
        elseif ($x < 100)
            return $this->terbilang($x / 10) . " Puluh" . $this->terbilang($x % 10);
        elseif ($x < 200)
            return " Seratus" . $this->terbilang($x - 100);
        elseif ($x < 1000)
            return $this->terbilang($x / 100) . " Ratus" . $this->terbilang($x % 100);
        elseif ($x < 2000)
            return " Seribu" . $this->terbilang($x - 1000);
        elseif ($x < 1000000)
            return $this->terbilang($x / 1000) . " Ribu" . $this->terbilang($x % 1000);
        elseif ($x < 1000000000)
            return $this->terbilang($x / 1000000) . " Juta" . $this->terbilang($x % 1000000);
    }
}
?>