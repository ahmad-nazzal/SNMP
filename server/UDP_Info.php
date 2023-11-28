<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

$ip = "127.0.0.1:161";
$community = "public";
$a = snmp2_walk($ip, $community, ".1.3.6.1.2.1.7.5.1.1");
$b = snmp2_walk($ip, $community, ".1.3.6.1.2.1.7.5.1.2");
$i = 0;
$response = "";
foreach ($a as $k => $val) {
  $data = explode(':', $a[$i])[1];
  $response .= "<tr> <td> $i </td><td> $data </td> <td> $b[$i] </td>  </tr>";
  $i++;
}
echo $response;
