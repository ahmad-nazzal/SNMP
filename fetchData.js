fetch("http://127.0.0.1/snmp_project/server/UDP_info.php")
  .then((response) => response.text()) // send response body to next then chain
  .then((body) => (document.getElementById("udp-chlidren").innerHTML = body)); // you can use response body here

fetch("http://127.0.0.1/snmp_project/server/System_Info.php")
  .then((response) => response.text())
  .then(
    (body) => (document.getElementById("system_children").innerHTML = body)
  );
fetch("http://127.0.0.1/snmp_project/server/ARP_Info.php")
  .then((response) => response.text())
  .then((body) => (document.getElementById("arp_children").innerHTML = body));
fetch("http://127.0.0.1/snmp_project/server/TCP_info.php")
  .then((response) => response.text())
  .then((body) => (document.getElementById("Tcp_children").innerHTML = body));

async function fetchData(url) {
  let response = await fetch(url);
  let body = await response.text();
  document.getElementById("Tcp_children").innerHTML = body;
}
// fetchData("http://127.0.0.1/snmp_project/server/UDP_info.php");
