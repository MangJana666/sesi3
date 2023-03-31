<?php
 $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

  echo "Umur dari Joe ". $age["Joe"]. " Tahun<br>";

  echo "<br>";
  echo "<hr>";

  foreach($age as $nama => $umur){
    echo "Umur dari ". $nama. " : ". "Adalah ". $umur. "<br>";
  }