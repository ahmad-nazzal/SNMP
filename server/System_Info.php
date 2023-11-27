<?php
$ip = "127.0.0.1:161";

$var1 =  snmp2_get($ip, "public", ".1.3.6.1.2.1.1.1.0");
$var2 =  snmp2_get($ip, "public", ".1.3.6.1.2.1.1.2.0");
$var3 = snmp2_get($ip, "public", ".1.3.6.1.2.1.1.3.0");
$var4 = snmp2_get($ip, "public", ".1.3.6.1.2.1.1.4.0");
$var5 =  snmp2_get($ip, "public", ".1.3.6.1.2.1.1.5.0");
$var6 = snmp2_get($ip, "public", ".1.3.6.1.2.1.1.6.0");
echo "<tr> <td> &nbsp &nbsp &nbsp $var1 </td> </tr>
   <tr> <td> &nbsp &nbsp &nbsp  $var1 </td> </tr>
   <tr> <td> &nbsp &nbsp &nbsp  $var2 </td> </tr>
   <tr> <td> &nbsp &nbsp &nbsp  $var3 </td> </tr>
   <tr> <td> &nbsp &nbsp &nbsp $var4 </td> </tr>
   <tr> <td> &nbsp &nbsp &nbsp $var5 </td> </tr>
   <tr> <td> &nbsp &nbsp &nbsp $var6 </td> </tr>
";
