<?php
$sysContact = $_REQUEST['sysContact'];
$sysName = $_REQUEST['sysName'];
$sysLocation = $_REQUEST['sysLocation'];

$ip = "127.0.0.1:161";
$community = 'network2';  //ana hek smetha - 7ader

if (!empty($sysContact)) {
  snmp2_set($ip, $community, '.1.3.6.1.2.1.1.4.0', 's', $sysContact);
}
if (!empty($sysName)) {
  snmp2_set($ip, $community, '.1.3.6.1.2.1.1.5.0', 's', $sysName);
}
if (!empty($sysLocation)) {
  snmp2_set($ip, $community, '.1.3.6.1.2.1.1.6.0', 's', $sysLocation);
}
echo "<script> 
  document.location.href = '../index.html'
  </script>";
