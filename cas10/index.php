<?php

function izdracunajDostavu($city)
{
    $dostava = [
        "Subotica" => 220,
        "Pancevo" => 10,
        "Sarajevo" => 292,
        "Split" => 799
    ];

    $cenaDostave = [
        "1" => 200,
        "2" => 350,
        "3" => 500,
    ];

    foreach ($dostava as $grad => $razdaljina){
        if ($razdaljina<=100) return $cenaDostave['1']=200;
        if ($razdaljina<=200) return $cenaDostave['2']=200;
        if ($razdaljina<=100) return $cenaDostave['1']=200;
    }

    if ($city == "Subotica") {
        return "Rastojanje Beograd - " . $city . "je" . $dostava['Subotica'] ."km, dostava je " . $cenaDostave['1'] ;
    }


}
