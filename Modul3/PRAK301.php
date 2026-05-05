<!DOCTYPE html>
<html lang="en">
    <head>
        <style>
            .ganjil {
                color: red;
            }
             .genap {
                color: green;
            }
        </style>
    </head>
    <body>
        <form method="post">
            Jumlah Peserta: <input type="text" name="peserta"><br>
            <button type="submit" name="cetak">Cetak</button>
        </form>

        <?php
            if (isset($_POST['cetak'])) {
                $peserta = $_POST['peserta'];
                while ($peserta > 0) {  
                    if ($peserta % 2 == 0) {
                        echo "<p class='genap'>Peserta $peserta</p>";
                    } else {
                        echo "<p class='ganjil'>Peserta $peserta</p>";
                    }
                    $peserta--;
                }
                
            }
        ?>
    </body>
</html>