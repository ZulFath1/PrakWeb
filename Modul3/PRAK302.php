<!DOCTYPE html>
<html lang="en">
    <body>
        <form method="post">
            Tinggi : <input type="number" name="tinggi"><br>
            Alamat Gambar : <input type="url" name="link"><br>
            <button type="submit" name="cetak">Cetak</button>
        </form>

        <?php
        if (isset($_POST['cetak'])) {
            $tinggi = $_POST['tinggi'];
            $link = $_POST['link'];

            $i = 0;
            while ($i < $tinggi) {

                $j = 0;
                while ($j < $i) {
                    echo "<img src='$link' style='width: 20px; opacity: 0;'>";
                    $j++;
                }

                $k = 0;
                while ($k < $tinggi - $i) {
                    echo "<img src='$link' style='width: 20px;'>";
                    $k++;
                }

                echo "<br>";

                $i++;
            }
        }
        ?>
    </body>
</html>