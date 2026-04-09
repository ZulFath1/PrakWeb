<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>PRAK104</title>
    <style>
        table {
            border: 1px solid black;
            border-spacing: 2px;
        }
        th, td {
            border: 1px solid black;
            padding: 4px;
            text-align: left;
        }
        th {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php
    $smartphones = [
        "Samsung Galaxy S22",
        "Samsung Galaxy S22+",
        "Samsung Galaxy A03",
        "Samsung Galaxy Xcover 5"
    ];
    ?>
    <table>
        <tr>
            <th>Daftar Smartphone Samsung</th>
        </tr>
        
        <?php
        foreach ($smartphones as $phone) {
            echo "<tr>";
            echo "<td>" . $phone . "</td>";
            echo "</tr>";
        }
        ?>
    </table>

</body>
</html>