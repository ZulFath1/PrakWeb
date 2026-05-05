<!DOCTYPE html>
<html lang="en">
    <body>
        <form method="post">
            <input type="text" name="huruf">
            <button type="submit" name="submit" value="submit">Submit</button>
        </form>
    </body>

    <?php
    if (isset($_POST['submit'])) {
        $huruf = $_POST['huruf'];
        $panjang = strlen($huruf);
        echo "<h2>Input:</h2>";
        echo "<p>$huruf</p>";
        echo "<h2>Output:</h2>";
        for ($i = 0; $i < $panjang; $i++) {
            $karakter = $huruf[$i];
            echo strtoupper($karakter);
            echo str_repeat(strtolower($karakter), $panjang - 1);
        }
    }
    ?>
</html>