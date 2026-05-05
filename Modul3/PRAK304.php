<!DOCTYPE html>
<html lang="en">
    <body>
        <?php
        $bintang = 0;

        if (isset($_POST['submit'])) {
             $bintang = (int) $_POST['bintang'];
        } elseif (isset($_POST['tambah'])) {
            $bintang = (int) $_POST['bintang'] + 1;
        } elseif (isset($_POST['kurang'])) {
            $bintang = (int) $_POST['bintang'] - 1;
            if ($bintang <= 0) {
                $bintang = 0;
            }
        }  
        ?>

        <?php
        if (!isset($_POST['submit']) && !isset($_POST['tambah']) && !isset($_POST['kurang'])) {
            ?>

        <form action="" method="post">
            Jumlah Bintang : <input type="number" name="bintang"><br>
            <button type="submit" name="submit">Submit</button>
        </form>

        <?php
        } else {
            ?>

            <form action="" method="post">
                Jumlah Bintang : <?php echo $bintang; ?><br>

        <?php
        for ($i = 0; $i < $bintang; $i++) { 
            echo "<img src='bintang.png' style='width: 40px;'>";
        }
        ?>

        <br>
        Jumlah Bintang : <input type="hidden" name="bintang" value="<?php echo $bintang; ?>"><br>
        <button type="submit" name="tambah">Tambah</button>
        <button type="submit" name="kurang">Kurang</button>
        </form>
        
        <?php
        }
        ?>

    </body>
</html> 