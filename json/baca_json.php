<?php
    //baca file json ke dalam string
    $json = file_get_contents("orang.json");

    //decode json menjadi array php
    $data_orang = json_decode($json, true);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Latihan Baca JSON</title>
    <style>
        .gambar_kecil{
            width: 100px;
        }
    </style>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Umur</th>
                <th>Tanggal</th>
                <th>Gambar</th>
            </tr>
        </thead>
        <tbody>
            <?php
                //loop data orang
                foreach($data_orang as $orang){
                    echo "<tr>";
                        echo "<td>".$orang["nama"]."</td>";
                        echo "<td>".$orang["umur"]."</td>";
                        echo "<td>".$orang["tanggal"]."</td>";
                        echo "<td><img class='gambar_kecil' src='".$orang["gambar"]."'></td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>