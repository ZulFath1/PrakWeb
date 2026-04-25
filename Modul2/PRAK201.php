<!DOCTYPE html>
<html>

    <body>
        <form method="post" action="">
            Nama : 1 <input type="text" name="nama1" required><br>
            Nama : 2 <input type="text" name="nama2" required><br>
            Nama : 3 <input type="text" name="nama3" required><br>
            <button type="submit" name="Urut">Urutkan</button>
        </form>
            
        <?php

        if (isset($_POST['Urut'])) {
            $nama1 = $_POST['nama1'];
            $nama2 = $_POST['nama2'];
            $nama3 = $_POST['nama3'];

            if ($nama1 < $nama2 && $nama1 < $nama3) {
                if ($nama2 < $nama3) {
                    echo "$nama1<br>$nama2<br>$nama3";
                } else {
                    echo "$nama1<br>$nama3<br>$nama2";
                }
            } elseif ($nama2 < $nama1 && $nama2 < $nama3) {
                if ($nama1 < $nama3) {
                    echo "$nama2<br>$nama1<br>$nama3";
                } else {
                    echo "$nama2<br>$nama3<br>$nama1";
                }
            } else {
                if ($nama1 < $nama2) {
                    echo "$nama3<br>$nama1<br>$nama2";
                } else {
                    echo "$nama3<br>$nama2<br>$nama1";
                }
            }
        }
                    
        ?>

    </body>
</html>