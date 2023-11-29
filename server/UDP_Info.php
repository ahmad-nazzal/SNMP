<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

$ip = "127.0.0.1:161";
$community = "public";
$a = snmp2_walk($ip, $community, ".1.3.6.1.2.1.7.5.1.1");
$b = snmp2_walk($ip, $community, ".1.3.6.1.2.1.7.5.1.2");
$i = 0;
$matrixOfData = array();
foreach ($a as $k => $val) {
  $data = explode(':', $a[$i])[1];
  $colData = array();
  array_push($colData, $i, $data, $b[$i]);
  array_push($matrixOfData, $colData);
  $i++;
}
echo json_encode($matrixOfData);
