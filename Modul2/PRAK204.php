<!DOCTYPE html>
<html>
    <body>

    <?php
    if (isset($_POST['konversi'])) {
        $nilai = $_POST['nilai'];
        $hasil = "";

        if ($nilai == 0) {
            $hasil = "Nol";
        } elseif ($nilai > 0 && $nilai < 10) {
            $hasil = "Satuan";
        } elseif ($nilai > 10 && $nilai < 20) {
            $hasil = "Belasan";
        } elseif ($nilai == 10 || ($nilai >= 20 && $nilai < 100)) {
            $hasil = "Puluhan";
        } elseif ($nilai >=100 && $nilai < 1000) {
            $hasil = "Ratusan";
        } else {
            $hasil = "Anda Menginput Melebihi Limit Bilangan";
        }
    }
    ?>

        <form method="post" action="">

            Nilai : <input type="text" name="nilai"><br>

            <button type="submit" name="konversi">Konversi</button><br>            

        </form>

        <?php
            if (isset($_POST['konversi'])) {
                echo "<h2>$hasil</h2>";
            }
            ?>
    </body>
</html>