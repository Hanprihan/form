<!DOCTYPE html>
<html>
<head>
    <title>Form Perhitungan</title>
</head>
<body>

<h2>Form Perhitungan</h2>
<form method="post" action="">
    <label for="angka">Masukkan angka:</label><br>
    <input type="number" id="angka" name="angka" required><br><br>
    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $angka = intval($_POST['angka']);
    echo "<h3>Output:</h3>";
    for ($i = 1; $i <= $angka; $i++) {
        if ($i % 3 == 0) {
            echo "Objek tidak bergerak pada perhitungan ke-$i<br>";
        } else {
            echo "Perhitungan ke-$i<br>";
        }
    }
}
?>

</body>
</html>