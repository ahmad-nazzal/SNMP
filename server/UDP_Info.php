<?php
$ip = "127.0.0.1:161";

$a = snmp2_walk($ip, "public", ".1.3.6.1.2.1.7.5.1.1");
echo ("<br>");
$b = snmp2_walk($ip, "public", ".1.3.6.1.2.1.7.5.1.2");
echo ("<br><br>==== UDP ======><br>");
$i = 0;
echo "<table>";
echo "<tr> <td > Index </td><td> IP </td> <td > Port </td>  </tr>";
foreach ($a as $k => $val) {
  $data = explode(':', $a[$i])[1];
  echo "<tr> <td> $i </td><td> $data </td> <td> $b[$i] </td>  </tr>";
  $i++;
}
echo "</table>";
