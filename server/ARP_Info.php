<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

$ip = "127.0.0.1:161";
$community = "public";
$a = snmp2_walk($ip, $community, ".1.3.6.1.2.1.4.22.1.2");
$b = snmp2_walk($ip, $community, ".1.3.6.1.2.1.4.22.1.3");
$c = snmp2_walk($ip, $community, ".1.3.6.1.2.1.4.22.1.4");
$i = 0;
$matrixOfData = array();
foreach ($a as $k => $val) {
  $colData = array();
  array_push($colData, $i, $a[$i], $b[$i], $c[$i]);
  array_push($matrixOfData, $colData);
  $i++;
}
echo json_encode($matrixOfData);
