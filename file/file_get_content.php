<?php
    //mengakses file dan mengubahnya menjadi string
    $teks = file_get_contents("test.txt");
?>

<!DOCTYPE html>
<html>
    <title>Latihan File Get Contents</title>
</head>
<body>
    <!-- print teks -->
    <p><?php echo $teks; ?></p>
</body>
</html>