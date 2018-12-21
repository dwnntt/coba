<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

    <?php 
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
        }
    ?>
    <h2> Konversi Nilai</h2>
    <form action="latihan2.php" method="post" accept-charset="utf-8">
        <input type="text" placeholder="Masukkan Nilai" name="nilai" value="<?php if (isset($nilai)) echo $nilai ?>">
        <input type="submit" value="Hitung" name="konversi">
        <input type="text" name="huruf" value="<?php if (isset($huruf)) echo $huruf ?>">
    </form>
</body>
</html>