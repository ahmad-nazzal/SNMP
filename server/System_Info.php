<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

$ip = "127.0.0.1:161";
$community = "public";
$var1 =  snmp2_get($ip, $community, ".1.3.6.1.2.1.1.1.0");
$var2 =  snmp2_get($ip, $community, ".1.3.6.1.2.1.1.2.0");
$var3 = snmp2_get($ip, $community, ".1.3.6.1.2.1.1.3.0");
$var4 = snmp2_get($ip, $community, ".1.3.6.1.2.1.1.4.0");
$var5 =  snmp2_get($ip, $community, ".1.3.6.1.2.1.1.5.0");
$var6 = snmp2_get($ip, $community, ".1.3.6.1.2.1.1.6.0");
$arr = array();
array_push($arr, $var1, $var2, $var3, $var4, $var5, $var6);
echo json_encode($arr);
