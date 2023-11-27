<?php
$ip = "127.0.0.1:161";

$local_address = snmp2_walk($ip, 'public', '1.3.6.1.2.1.6.13.1.2');
$local_port = snmp2_walk($ip, 'public', '1.3.6.1.2.1.6.13.1.3');
$remote_address = snmp2_walk($ip, 'public', '1.3.6.1.2.1.6.13.1.4');
$remote_port = snmp2_walk($ip, 'public', '1.3.6.1.2.1.6.13.1.5');
$state = snmp2_walk($ip, 'public', '1.3.6.1.2.1.6.13.1.1');

echo("<br><br>===== TCP TABLE ======><br>");
$i =0;
echo"<table>";
echo "<tr> <td > Index </td><td > Local Address </td> <td> Local Port </td><td> Remote Address </td><td> Remote Port </td><td> State </td>  </tr>";
foreach ($ip_address as $k=>$val) {
  $local_address_explode = explode(':', $local_address[$i])[1];
  $remote_address_explode = explode(':', $remote_address[$i])[1];

echo "<tr> <td> $i </td> <td> $local_address_explode </td> <td> $local_port[$i]</td> <td> $remote_address_explode </td> <td> $remote_port[$i] </td> <td> $state[$i] </td> </tr>";
	$i++;
}
echo"</table>";

?>