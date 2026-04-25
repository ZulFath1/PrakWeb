<!DOCTYPE html>
<html>
<body>
    <?php
    if (isset($_POST['konversi'])) {
        $nilai = $_POST['nilai'];
        $SuhuPertama = $_POST['SuhuPertama'];
        $SuhuKedua = $_POST['SuhuKedua'];
        $hasiltxt = "";

        if ($SuhuPertama == 'C1' && $SuhuKedua == 'F2') {
            $hasil = ($nilai * 9/5) + 32;
            $hasiltxt = "Hasil Konversi : $hasil &deg;F";
        } elseif ($SuhuPertama == 'C1' && $SuhuKedua == 'R2') {
            $hasil = $nilai * 4/5;
            $hasiltxt = "Hasil Konversi : $hasil &deg;R";
        } elseif ($SuhuPertama == 'C1' && $SuhuKedua == 'K2') {
            $hasil = $nilai + 273.15;
            $hasiltxt = "Hasil Konversi : $hasil K";
        } elseif ($SuhuPertama == 'C1' && $SuhuKedua == 'C2') {
            $hasil = $nilai;
            $hasiltxt = "Hasil Konversi : $hasil &deg;C";
        } elseif ($SuhuPertama == 'F1' && $SuhuKedua == 'C2') {
            $hasil = ($nilai - 32) * 5/9;
            $hasiltxt = "Hasil Konversi : $hasil &deg;C";
        } elseif ($SuhuPertama == 'F1' && $SuhuKedua == 'R2') {
            $hasil = ($nilai - 32) * 4/9;
            $hasiltxt = "Hasil Konversi : $hasil &deg;R";
        } elseif ($SuhuPertama == 'F1' && $SuhuKedua == 'K2') {
            $hasil = ($nilai - 32) * 5/9 + 273.15;
            $hasiltxt = "Hasil Konversi : $hasil K";
        } elseif ($SuhuPertama == 'F1' && $SuhuKedua == 'F2') {
            $hasil = $nilai;
            $hasiltxt = "Hasil Konversi : $hasil &deg;F";
        } elseif ($SuhuPertama == 'R1' && $SuhuKedua == 'C2') {
            $hasil = $nilai * 5/4;
            $hasiltxt = "Hasil Konversi : $hasil &deg;C";
        } elseif ($SuhuPertama == 'R1' && $SuhuKedua == 'F2') {
            $hasil = ($nilai * 9/4) + 32;
            $hasiltxt = "Hasil Konversi : $hasil &deg;F";
        } elseif ($SuhuPertama == 'R1' && $SuhuKedua == 'K2') {
            $hasil = ($nilai * 5/4) + 273.15;
            $hasiltxt = "Hasil Konversi : $hasil K";
        } elseif ($SuhuPertama == 'R1' && $SuhuKedua == 'R2') {
            $hasil = $nilai;
            $hasiltxt = "Hasil Konversi : $hasil &deg;R";
        } elseif ($SuhuPertama == 'K1' && $SuhuKedua == 'C2') {
            $hasil = $nilai - 273.15;
            $hasiltxt = "Hasil Konversi : $hasil &deg;C";
        } elseif ($SuhuPertama == 'K1' && $SuhuKedua == 'F2') {
            $hasil = ($nilai - 273.15) * 9/5 + 32;
            $hasiltxt = "Hasil Konversi : $hasil &deg;F";
        } elseif ($SuhuPertama == 'K1' && $SuhuKedua == 'R2') {
            $hasil = ($nilai - 273.15) * 4/5;
            $hasiltxt = "Hasil Konversi : $hasil &deg;R";
        } elseif ($SuhuPertama == 'K1' && $SuhuKedua == 'K2') {
            $hasil = $nilai;
            $hasiltxt = "Hasil Konversi : $hasil K";
        }
    }
    ?>   

    <form method="post" action="">

        Nilai : <input type="text" name="nilai"><br>
        Dari : <br>

        <input type="radio" name="SuhuPertama" value="C1" <?php if ($SuhuPertama == 'C1') echo 'checked'; ?> > Celsius<br>
        <input type="radio" name="SuhuPertama" value="F1" <?php if ($SuhuPertama == 'F1') echo 'checked'; ?> > Fahrenheit<br>
        <input type="radio" name="SuhuPertama" value="R1" <?php if ($SuhuPertama == 'R1') echo 'checked'; ?> > Reamur<br>
        <input type="radio" name="SuhuPertama" value="K1" <?php if ($SuhuPertama == 'K1') echo 'checked'; ?> > Kelvin<br>

        Ke : <br>
        <input type="radio" name="SuhuKedua" value="C2" <?php if ($SuhuKedua == 'C2') echo 'checked'; ?> > Celsius<br>
        <input type="radio" name="SuhuKedua" value="F2" <?php if ($SuhuKedua == 'F2') echo 'checked'; ?> > Fahrenheit<br>
        <input type="radio" name="SuhuKedua" value="R2" <?php if ($SuhuKedua == 'R2') echo 'checked'; ?> > Reamur<br>
        <input type="radio" name="SuhuKedua" value="K2" <?php if ($SuhuKedua == 'K2') echo 'checked'; ?> > Kelvin<br>
        
        <button type="submit" name="konversi">Konversi</button><br>

        <?php
        if (isset($_POST['konversi'])) {
            echo "<h2>$hasiltxt</h2>";
        }
        ?>

    </form>
    
     
</body>
</html>