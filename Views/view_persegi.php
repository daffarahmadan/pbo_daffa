<?php
require('../Class/class_persegi.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculate</title>
</head>
<body>
    <form method="post">
        <label for="sisi" >sisi Persegi:</label>
        <input type="number" name="sisi" id="sisi" required><br>

        <label for="panjang" >panjang Persegi Panjang:</label>
        <input type="number" name="panjang" id="panjang" required><br>

        <label for="lebar" >lebar Persegi Panjang:</label>
        <input type="number" name="lebar" id="lebar" required><br>

        <label for="alas" >alas Segitiga:</label>
        <input type="number" name="alas" id="alas" required><br>

        <label for="tinggi" >tinggi Segitiga:</label>
        <input type="number" name="tinggi" id="tinggi" required><br>

        <input type="submit" name="calculate" value="calculate">
    </form>

    <?php


    if (isset($_POST['calculate'])) {
        $aritmatika = new aritmatika();

        $sisi = $_POST['sisi'];
        $panjang = $_POST['panjang'];
        $lebar = $_POST['lebar'];
        $alas = $_POST['alas'];
        $tinggi = $_POST['tinggi'];
    
        $Persegi = $aritmatika->Persegi($sisi);
        $Persegipanjang = $aritmatika->Persegipanjang($panjang, $lebar);
        $Segitiga = $aritmatika->Segitiga($alas, $tinggi);

        echo $Persegi;
        echo $Persegipanjang;
        echo $Segitiga;

    }
?>
</body>
</html>




