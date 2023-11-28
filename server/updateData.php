<?php
$sysContact= $_POST['sysContact'];
$sysName= $_POST['sysName'];
$sysLocation= $_POST['sysLocation'];

$ip = "127.0.0.1:161";
$community = 'network2';  //ana hek smetha
//snmp2_set($ip, "publicAll", '.1.3.6.1.2.1.1.6', 's', '0 1 2 3 4');
// '.1.3.6.1.2.1.1.6' or '.1.3.6.1.2.1.1.6.0'
// ❤️مش عارف مين الصح جربي الجهتين احلى شريكة وردة الوردات


// sysContact
if(!empty($sysContact)){
snmp2_set($ip, $community, '.1.3.6.1.2.1.1.4.0', 's', $sysContact);
}
//sysName
if(!empty($sysName)){
snmp2_set($ip, $community,'.1.3.6.1.2.1.1.5.0' , 's', $sysName);
}
//sysLocation
if(!empty($sysLocation)){
snmp2_set($ip, $community,'.1.3.6.1.2.1.1.6.0' , 's', $sysLocation);
}
echo "<script> 
  document.location.href = '../index.html'
  </script>";

?>
