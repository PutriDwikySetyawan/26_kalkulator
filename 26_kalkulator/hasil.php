<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hasil perhitungan</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <form>
      <?php
         $angka1= $_GET['angka1'];
         $angka2= $_GET['angka2'];
         $operator= $_GET['operator'];
         $hasil = "Tidak valid!!";

         if ( $angka1 === null || $angka2 === null || $angka1 ==='' || $angka2 ===''){
            echo "<p style= 'color:red;'>error=input harus di isi!!</p>";
            echo '<a href="index.php"></a>';
            exit;
         }

         if ($operator == '+'){
            $hasil= $angka1 + $angka2;
         }else if ($operator == '-'){
            $hasil= $angka1 - $angka2;
         }else if ($operator == 'x'){
            $hasil= $angka1 * $angka2;
         }else if ($operator == ':'){
            if ($angka1 == 0){
               $hasil = " Tidak bisa dibagi 0 popok";
            }else if ($angka2 == 0){
               $hasil = " Tidak bisa dibagi 0 popok";
            }else {
               $hasil = $angka1 / $angka2;
            }
         }
         echo $angka1 . $operator . $angka2 . '='. $hasil;
      ?>
    <a href="index.php">kembali</a>
    <a type="button" onclick="return window.print();">cetak</a>
    </form>
</body>
</html>