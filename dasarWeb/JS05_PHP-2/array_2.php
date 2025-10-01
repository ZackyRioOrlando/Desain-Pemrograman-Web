<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Dosen</title>
</head>
<body>
    <?php
    $Dosen = [
        'nama' => 'Elok Nur Hamdana',
        'domisili' => 'Malang',
        'jenis_kelamin' => 'Perempuan'
    ];

    echo '<link rel="stylesheet" href="array_2.css">';
    echo '<h2>Data Dosen</h2>';
    echo '<table>';
    echo '<tr><th>Label</th><th>Informasi</th></tr>';

    foreach ($Dosen as $label => $info) {
        echo "<tr><td>" . ucfirst(str_replace('_', ' ', $label)) . "</td><td>$info</td></tr>";
    }
    echo '</table>';
    ?>
</body>
</html>