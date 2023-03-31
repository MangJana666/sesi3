<?php

    $mhs = array(
        array("NAMA"=>"Boboiboy","ID"=>"1234","KOTA"=>"Durian Runtuh"),
        array("NAMA"=>"Spongebob","ID"=>"3224","KOTA"=>"Bikini Bottom"),
        array("NAMA"=>"Satyo","ID"=>"8787","KOTA"=>"Jangkahan"),
        array("NAMA"=>"Adnyo","ID"=>"9999","KOTA"=>"Probolinggo Kauh"),
    );

    // echo $mhs[1]["NAMA"];
    // echo "<hr>";
    // print_r($mhs);
    // echo "<hr>";

    // foreach ($mhs as $dta){

    //     foreach($dta as $lb => $inval){
    //         echo $lb. " : ". $inval. "<br>";
    //     }
    //     echo "<br>";
    // }
    // echo "<hr>";

    header("Content-type: application/json");
    echo json_encode($mhs);
    