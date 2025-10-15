<!DOCTYPE html>
<html>
<head>
    <title>Input Aman dan Validasi Email</title>
</head>
<body>
    <h2>Form Input Aman</h2>
    <form method="POST" action="">
        <label>Masukkan Teks:</label><br>
        <input type="text" name="input"><br><br>

        <label>Masukkan Email:</label><br>
        <input type="text" name="email"><br><br>

        <input type="submit" value="Kirim">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input = $_POST['input'];
        $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

        $email = $_POST['email'];

        echo "<h3>Hasil:</h3>";
        echo "<p>Input aman: $input</p>";

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<p>Email valid: $email</p>";
        } else {
            echo "<p style='color:red;'>Email tidak valid!</p>";
        }
    }
    ?>
</body>
</html>
