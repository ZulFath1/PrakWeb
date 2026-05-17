<?php

$mahasiswa_satu = ["Nama"=>"Andi", "NIM"=>"2101001", "Nilai UTS"=>"87", "Nilai UAS"=>"65"];
$mahasiswa_dua = ["Nama"=>"Budi", "NIM"=>"2101002", "Nilai UTS"=>"76", "Nilai UAS"=>"79"];
$mahasiswa_tiga = ["Nama"=>"Tono", "NIM"=>"2101003", "Nilai UTS"=>"50", "Nilai UAS"=>"41"];
$mahasiswa_empat = ["Nama"=>"Jessica", "NIM"=>"2101004", "Nilai UTS"=>"60", "Nilai UAS"=>"75"];

$semua_mahasiswa = [$mahasiswa_satu, $mahasiswa_dua, $mahasiswa_tiga, $mahasiswa_empat];

function cekNilai($nilai_uts, $nilai_uas) {
    $nilai_akhir = ($nilai_uts * 0.4) + ($nilai_uas * 0.6);
    if ($nilai_akhir >= 80) {
        return "A";
    } elseif ($nilai_akhir >= 70) {
        return "B";
    } elseif ($nilai_akhir >= 60) {
        return "C";
    } elseif ($nilai_akhir >= 50) {
        return "D";
    } else {
        return "E";
    }
}

foreach ($semua_mahasiswa as $i => $mahasiswa) {
    $grade = cekNilai($mahasiswa["Nilai UTS"], $mahasiswa["Nilai UAS"]);
}
?>

<!DOCTYPE html>
<html lang="en">

    <body>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <?php foreach($semua_mahasiswa[0] as $key => $value) {echo "<th style='background-color: lightgray'>$key </th>";}?>
            </tr>
            <?php foreach($semua_mahasiswa as $mahasiswa) {echo "<tr>";
                foreach($mahasiswa as $key => $value) {echo "<td>$value</td>";}
                echo "</tr>";
            }
            ?>
        </table>
    </body>
</html>