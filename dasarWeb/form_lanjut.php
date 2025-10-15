<!DOCTYPE html>
<html>
<head>
    <title>Contoh Form dengan PHP</title>
</head>
<body>
    <form action="proses_lanjut.php" method="POST">
        <label for="buah">Pilih Buah:</label>
        <select name="buah" id="buah">
            <option value="apel">Apel</option>
            <option value="pisang">Pisang</option>
            <option value="jeruk">Jeruk</option>
        </select>
        <br><br>

        <label>Pilih Warna Favorit:</label><br>
        <input type="radio" name="warna" value="merah"> Merah<br>
        <input type="radio" name="warna" value="biru"> Biru<br>
        <input type="radio" name="warna" value="hijau"> Hijau<br>
        <br>

        <label>Pilih Jenis Kelamin:</label><br>
        <input type="radio" name="gender" value="laki-laki"> Laki-Laki<br>
        <input type="radio" name="gender" value="perempuan"> Perempuan<br>
        <br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>