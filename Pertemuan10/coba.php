<?php
$mahasiswa = ["Novita", "2110803011", "Sistem Informasi", "nnovita2512@gmial.com"];
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>Array</title>
</head>
<body>
    
</body>
</html>
    <h1>Daftar mahasiswa</h1>
    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li><?php echo $mhs ?></li>
        <?php endforeach; ?>
    </ul>
<body>
    


</html>