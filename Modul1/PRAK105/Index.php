<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>PRAK105</title>
    <style>
        table {
            border: 1px solid black;
            border-spacing: 2px;
        }
        th {
            background-color: red;
            font-size: 24px;
            font-weight: bold;
            border: 1px solid black;
            padding: 15px; 
        }
        td {
            border: 1px solid black;
            padding: 4px;
            text-align: left;
        }
    </style>
</head>
<body>

    <?php
    $smartphones = [
        "S22" => "Samsung Galaxy S22",
        "S22P" => "Samsung Galaxy S22+",
        "A03" => "Samsung Galaxy A03",
        "XC5" => "Samsung Galaxy Xcover 5"
    ];
    ?>

    <table>
        <tr>
            <th>Daftar Smartphone Samsung</th>
        </tr>
        
        <?php
        foreach ($smartphones as $kunci => $nilai) {
            echo "<tr>";
            echo "<td>" . $nilai . "</td>";
            echo "</tr>";
        }
        ?>
    </table>

</body>
</html>