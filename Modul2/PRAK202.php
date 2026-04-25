<!DOCTYPE html>
<html>

    <style>
        .error {
            color: red;
        }
    </style>

    <body>
        <?php
        $pesan_nama = '';
        $pesan_nim = '';
        $pesan_jk = '';
        $nama = '';
        $nim = '';
        $jk = '';

        if (isset($_POST['submit'])){

            if (empty($_POST['nama'])) {
                $pesan_nama = 'Nama tidak boleh kosong';
            } else {
                $nama = $_POST['nama'];
            }

            if (empty($_POST['nim'])) {
                $pesan_nim = 'NIM tidak boleh kosong';
            } else {
                $nim = $_POST['nim'];
            }

            if (empty($_POST['jk'])) {
                $pesan_jk = 'Jenis Kelamin tidak boleh kosong';
            } else {
                $jk = $_POST['jk'];
            }
        
        }
        ?>

        <form method="post" action="">
            Nama : <input type="text" name="nama" value="<?= $nama?>">
            <span class="error"><?= $pesan_nama ?></span><br>
            
            NIM : <input type="text" name="nim" value="<?= $nim?>">
            <span class="error"><?= $pesan_nim ?></span><br>

            Jenis Kelamin : <span class="error"><?= $pesan_jk ?></span><br>
            <input type="radio" name="jk" value="Laki-laki" <?php if ($jk == 'Laki-laki') echo 'checked' ?>> Laki-laki<br>
            <input type="radio" name="jk" value="Perempuan" <?php if ($jk == 'Perempuan') echo 'checked' ?>> Perempuan<br>
            
            <button type="submit" name="submit">Submit</button>

        </form>

        <?php
        if (isset($_POST['submit']) && empty($pesan_nama) && empty($pesan_nim) && empty($pesan_jk)) {
            echo "$nama <br>";
            echo "$nim <br>";
            echo "$jk <br>";
        }
        ?>

    </body>

</html>