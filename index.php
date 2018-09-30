

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php 
         
        #Ini mesin fotokopi (step 1)
        function mesin_fotokopi($kertas,$jumlah_copy){
            $hasil_fotokopi = array();
            for($i=0;$i<$jumlah_copy;$i++){
                $hasil_fotokopi[$i] = $kertas;
            }
            #echo '<pre>';
            #print_r($hasil_fotokopi);
            return $hasil_fotokopi;
        }
        
        #ini mesin mewarnai (step 2)
        function mesin_pewarna($result_fotokopi){
            $hasil_pewarna = array();
            foreach($result_fotokopi as $bk){
                $hasil_pewarna[]='<div style="color:red">'.$bk.'</div>';
            }
            return $hasil_pewarna;
        }

        #ini setting parameter/inputan/argumen
        $kertas = "Selamat Datang di Codepolitan";
        $jumlah_copy = 3;

        #ini pemanggilan mesin
        $result_fotokopi = mesin_fotokopi($kertas,$jumlah_copy);
        $result_mewarnai = mesin_pewarna($result_fotokopi);

        #CETAK HASIL AKHIR
        foreach($result_mewarnai as $rm){
            echo $rm;
        }
       
    ?>
    <br>
    ============================== MANIPULASI STRING ============================
    <br>
    <?php 
        $kalimat = "Hitung banyak Karakter";
        echo strlen($kalimat).'<br>';

        $kalimat = "Alamat Pagarsih no 5";
        echo str_word_count($kalimat).'<br>';

        $kalimat = "Membalik Kata";
        echo strrev($kalimat).'<br>';

        $kalimat = "1822.22.-872.123";
        $hasil_replace_pertama = str_replace(".","",$kalimat);
        $hasil_replace_kedua = str_replace("-","",$hasil_replace_pertama);
        echo $hasil_replace_kedua.'<br>';

        $kalimat = "Depan|Belakang";
        $pecah = explode('|', $kalimat);
        echo $pecah[0].'<br>'; // Depan
        echo $pecah[1].'<br>'; // Belakang

        $kalimat = "Kalimat";
        echo substr($kalimat, 2, 3).'<br>';

        $nama = "siswo handoko";
        echo ucfirst($nama).'<br>';

        $nama = "siswo handoko";
        echo ucwords($nama).'<br>';

        $nama = "siswo handoko";
        echo strtoupper($nama).'<br>';

        $nama = "SISWO HANDOKO";
        echo strtolower($nama).'<br>';
    ?>
</body>
</html>