<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

$ip = "127.0.0.1:161";
$community = "public";
$local_address = snmp2_walk($ip, $community, '1.3.6.1.2.1.6.13.1.2');
$local_port = snmp2_walk($ip, $community, '1.3.6.1.2.1.6.13.1.3');
$remote_address = snmp2_walk($ip, $community, '1.3.6.1.2.1.6.13.1.4');
$remote_port = snmp2_walk($ip, $community, '1.3.6.1.2.1.6.13.1.5');
$state = snmp2_walk($ip, $community, '1.3.6.1.2.1.6.13.1.1');
$i = 0;
$matrixOfData = array();
foreach ($local_address as $k => $val) {
  $local_address_explode = explode(':', $local_address[$i])[1];
  $remote_address_explode = explode(':', $remote_address[$i])[1];
  $colData = array();
  array_push($colData, $i, $local_address_explode, $local_port[$i], $remote_address_explode, $remote_port[$i], $state[$i]);
  array_push($matrixOfData, $colData);
  $i++;
}
echo json_encode($matrixOfData);
