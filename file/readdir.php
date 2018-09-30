<?php
$dir = "images";

// Open a directory, and read its contents
if (is_dir($dir)){ //cek apakah "images" adalah folder
  if ($dh = opendir($dir)){ //buka folder tsb
    while (($file = readdir($dh)) !== false){ //loop semua file yang di dalam folder "images"
        if($file != "." && $file != ".."){
            $teks = file_get_contents($dir.'/'.$file); //images/test copy.txt

            //print nama file beserta isinya
            echo "filename:" . $file . " " . $teks . "<br/>";
        }
    }

    //tutup folder
    closedir($dh);
  }
}
?>