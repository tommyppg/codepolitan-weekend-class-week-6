<?php
    $file = fopen("test.txt","w"); //buka (menunjuk dengan pointer) file
    fwrite($file,"Hello World. Testing!"); //menulis ke dalam file
    fclose($file); //menutup (mengakhiri pointer) file
?>