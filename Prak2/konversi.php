<!DOCTYPE html>
<html>
<head>
	<title>Konversi Nilai</title>
</head>
<body>
<h3> Konversi Nilai Mata Kuliah</h3>
<?php
$nilai=$_POST['nilai'];
class nilai{
	function terbilang($nilai){   
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
<form action="konversi.php" method="post">
Masukkan Nilai : <input type="text" name="nilai" value="<?php echo "$nilai" ?>"><br><br>
<input type="submit" name="konversi" value="Hitung">
</form>
<?php
$hitung = new nilai();
$konversi_nilai = $hitung-> terbilang($nilai);
echo "Hasil Konversi Nilai : ".$konversi_nilai."<br>";
?>
</body>
</html>