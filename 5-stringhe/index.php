<?php

    $stringa = "ciao";

    $stringa = $stringa . ' mondo!';  //concateniamo con il punto!

    $stringaEsplosa = explode(" ", $stringa);

    $stringaSostituita = str_replace('mondo', 'PIPPO', $stringa);

    echo $stringaSostituita . '<br>';

    echo "La stringa è lunga: " . strlen($stringaSostituita) . ' caratteri';


    echo '<pre>';
    var_dump($stringaEsplosa);
    echo '</pre>';



?>