<?php

$cars = array("Volvol","BMW", "Toyota", "Gallardo");

$jmldata = count($cars);
echo "Jumlah Data ", $jmldata . "<br>";
for($i=0;$i<$jmldata;$i++){
echo "<br>Kendaraan ". $cars[$i];
}

echo "<hr>";
echo "<ul class=\"mobil\">";
foreach($cars as $dta){
    echo "<li>Kendaraan ". $dta. "</li>";
}
echo "<ul>";