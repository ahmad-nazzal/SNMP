<?php
$ip = "127.0.0.1:161";
print("<br>-------(ARP)IPNetToMedia table-----------<br>");

$a = snmp2_walk($ip, "public", ".1.3.6.1.2.1.4.22.1.2");
echo ("<br>");
$b = snmp2_walk($ip, "public", ".1.3.6.1.2.1.4.22.1.3");
$c = snmp2_walk($ip, "public", ".1.3.6.1.2.1.4.22.1.4");
$aa = snmp2_walk($ip, "public", ".1.3.6.1.2.1.7.5.1.1");
echo ("=== here ======><br>");
print_r($aa);
echo ("<br><br>=== =ARP TABLE ======><br>");
$i = 0;
echo "<table>";
  echo "<tr>
    <td> Index </td>
    <td> Mac </td>
    <td> IP </td>
    <td> type </td>
  </tr>";
  foreach ($a as $k => $val) {
  echo "<tr>
    <td> $i </td>
    <td> $a[$i] </td>
    <td> $b[$i] </td>
    <td> $c[$i] </td>
  </tr>";
  $i++;
  }
  echo "</table>";
  ?>