<?php
$nilai=$_POST['nilai'];
class nilai{
	function terbilang($nilai){
        //if(isset($_POST['nilai'])){
        
        if(isset($_POST['konversi']))
        {
            $nilai = $_POST['nilai'];
            if ($nilai >= 90) {
                $huruf= "Nilai Anda A";  
            }elseif ($nilai >= 80) {
                 $huruf= "Nilai Anda B";
                                        
            }elseif ($nilai >= 70) {
                 $huruf= "Nilai Anda C";
                                      
            }elseif ($nilai >= 60) {
                 $huruf= "Nilai Anda D"; 
                                     
            }elseif ($nilai <= 50) {
                 $huruf= "Nilai Anda E"; 
                                     
            } else{
                 $huruf= "Maaf data yang anda masukkan salah!";                              
            }
            return $huruf;
        }
    }


}
?>