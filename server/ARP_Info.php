<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

$ip = "127.0.0.1:161";
$a = snmp2_walk($ip, "public", ".1.3.6.1.2.1.4.22.1.2");
$b = snmp2_walk($ip, "public", ".1.3.6.1.2.1.4.22.1.3");
$c = snmp2_walk($ip, "public", ".1.3.6.1.2.1.4.22.1.4");
$i = 0;
$response = "";
foreach ($a as $k => $val) {
  $response .= "<tr>
    <td> $i </td>
    <td> $a[$i] </td>
    <td> $b[$i] </td>
    <td> $c[$i] </td>
  </tr>";
  $i++;
}
echo $response;
