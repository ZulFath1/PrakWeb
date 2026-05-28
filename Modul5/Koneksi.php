<?php
function koneksi()
{
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "perpustakaan";

    try{
        $conn = new PDO("mysql:host=$host;dbname=$database", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        return null;
    }
}
?>