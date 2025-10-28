<?php
if (isset($_FILES['files'])) {
    $allowed = array("jpg", "jpeg", "png", "gif");
    $total = count($_FILES['files']['name']);

    for ($i = 0; $i < $total; $i++) {
        $name = $_FILES['files']['name'][$i];
        $tmp = $_FILES['files']['tmp_name'][$i];
        $ext = strtolower(pathinfo($name, PATHINFO_EXTENSION));

        if (in_array($ext, $allowed) && $_FILES['files']['size'][$i] <= 2097152) {
            move_uploaded_file($tmp, "images/" . $name);
            echo "$name berhasil diunggah.<br>";
        } else {
            echo "$name gagal diunggah.<br>";
        }
    }
}
?>
