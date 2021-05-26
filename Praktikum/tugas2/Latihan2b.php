<?php
    $jawabanIsset = "Isset adalah = Tetap bernilai true meskipun user tidak mengisi form sama sekali. <br><br>";
    $jawabanEmpty = "Empty adalah = Akan menghasilkan nilai false jika sebuah variabel telah diisi dan bernilai true jika variabel belum diisi.";
    
    function soal($style){
        echo $GLOBALS['jawabanIsset'];
        echo $GLOBALS['jawabanEmpty'];
    }
    
    
    echo soal( 
        "font-family: Arial; font-size:28px; color:#8c782d; font-style:italic; font-weight: bold;"
    );

?>