<!DOCTYPE html>
<html lang="en">
    <body>
        <form method="post" action="">
            Panjang<input type="text" name="panjang" value="<?= isset($_POST['panjang']) ? $_POST['panjang'] : '' ?>"><br>
            Lebar<input type="text"  name="lebar" value="<?= isset($_POST['lebar']) ? $_POST['lebar'] : '' ?>"><br>
            Nilai<input type="text" name="nilai" value="<?= isset($_POST['nilai']) ? $_POST['nilai'] : '' ?>"><br>
            <button name="cetak">Cetak</button>
        </form>
    </body>

</html>

<?php 
if (isset($_POST['cetak'])) {
    $panjang = $_POST['panjang'];
    $lebar = $_POST['lebar'];
    $nilai = $_POST['nilai'];

    $total = $panjang * $lebar;
    $arraynumber = explode(" ", $nilai);
    $isi = array_chunk($arraynumber, $lebar);

    if ($total != count($arraynumber)) {
        echo "Panjang nilai tidak sesuai dengan ukuran matriks";
        } else {
            echo "<table border='1.5' cellpadding='10' cellspacing='0'>";
            foreach ($isi as $row) {
                echo "<tr>";
                foreach ($row as $cell) {
                    echo "<td>$cell</td>";
                }
                echo "</tr>";
            } 
        }
    }

?>