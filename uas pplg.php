<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi Pilih Minuman</title>
</head>
<body>
    <h1>Aplikasi Pilih Minuman</h1>

    <?php
    // Array daftar minuman
    $daftarMinuman = array(
        "Air Mineral",
        "Kopi",
        "Teh",
        "Jus Jeruk",
        "Soda",
        "Es Teh Manis",
        "Es Campur"
    );
    
    // Menampilkan daftar minuman
    echo "<h2>Silakan pilih minuman:</h2>";
    echo "<ul>";
    foreach ($daftarMinuman as $minuman) {
        echo "<li>" . $minuman . "</li>";
    }
    echo "</ul>";

    // Memilih minuman
    if (isset($_POST['minuman'])) {
        $minumanPilihan = $_POST['minuman'];

        // Memeriksa apakah minuman tersedia
        if (in_array($minumanPilihan, $daftarMinuman)) {
            echo "<h3>Anda memilih: " . $minumanPilihan . "</h3>";
            echo "<p>Selamat menikmati minuman Anda!</p>";
        } else {
            echo "<p>Minuman yang Anda pilih tidak tersedia.</p>";
        }
    }
    ?>

    <h2>Pilih Minuman</h2>
    <form method="post" action="">
        <label for="minuman">Minuman:</label>
        <select name="minuman">
            <?php
            foreach ($daftarMinuman as $minuman) {
                echo "<option value='" . $minuman . "'>" . $minuman . "</option>";
            }
            ?>
        </select>
        <input type="submit" value="Pilih">
    </form>
</body>
</html>