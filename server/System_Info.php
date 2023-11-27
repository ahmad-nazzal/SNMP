<?php
$ip = "127.0.0.1:161";

echo (" ======= System information ======= <br>");

print snmp2_get($ip, "public", ".1.3.6.1.2.1.1.1.0") . "<br>";
print snmp2_get($ip, "public", ".1.3.6.1.2.1.1.2.0") . "<br>";
print snmp2_get($ip, "public", ".1.3.6.1.2.1.1.3.0") . "<br>";
print snmp2_get($ip, "public", ".1.3.6.1.2.1.1.4.0") . "<br>";
print snmp2_get($ip, "public", ".1.3.6.1.2.1.1.5.0") . "<br>";
print snmp2_get($ip, "public", ".1.3.6.1.2.1.1.6.0") . "<br>";
?>