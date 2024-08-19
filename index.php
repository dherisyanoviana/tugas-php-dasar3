<!DOCTYPE html>
<html>

<head>
    <title>Kategori Usia</title>
</head>

<body>

    <h1>Masukkan Usia Anda</h1>

    <form method="post">
        Usia: <input type="number" name="usia" required>
        <input type="submit" value="Kirim">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil nilai usia dari input pengguna
        $usia = intval($_POST['usia']); // Mengonversi input menjadi integer

        // Menentukan kategori usia berdasarkan nilai yang dimasukkan
        if ($usia >= 0 && $usia <= 12) {
            echo "<p>Kategori Usia: Anak-anak</p>";
        } else if ($usia >= 13 && $usia <= 17) {
            echo "<p>Kategori Usia: Remaja</p>";
        } else if ($usia >= 18 && $usia <= 59) {
            echo "<p>Kategori Usia: Dewasa</p>";
        } else if ($usia >= 60) {
            echo "<p>Kategori Usia: Lansia</p>";
        } else {
            echo "<p>Kategori Usia: Tidak Valid</p>";
        }
    }
    ?>

</body>

</html>