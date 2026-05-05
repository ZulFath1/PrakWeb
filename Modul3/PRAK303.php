<!DOCTYPE html>
<html lang="en">
    <body>
        <form method="post">
            Batas Bawah : <input type="number" name="batas_bawah"><br>
            Batas Atas : <input type="number" name="batas_atas"><br>
            <button type="submit" name="cetak">Cetak</button>
        </form>

        <?php

        if (isset($_POST['cetak'])) {
            $batas_bawah = $_POST['batas_bawah'];
            $batas_atas = $_POST['batas_atas'];
            $gambar = "bintang.png";

            do{
                if (($batas_bawah + 7) % 5 == 0) {
                    echo "<img src='$gambar' style='width: 20px;'>";
                } else {
                    echo "$batas_bawah "; 
                }
                $batas_bawah++;
            } while ($batas_bawah <= $batas_atas);
        }
        ?>

        
    </body>
</html>