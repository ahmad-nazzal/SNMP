fetch("http://127.0.0.1/snmp_project/server/UDP_info.php")
  .then((response) => response.text())
  .then((body) => {
    body = JSON.parse(body);
    let innerhtml = "";
    for (let index = 0; index < body.length; index++) {
      innerhtml +=
        "<tr> <td>" +
        body[index][0] +
        "</td> <td>" +
        body[index][1] +
        "</td> <td>" +
        body[index][2] +
        "</td> </tr>";
    }
    document.getElementById("udp-chlidren").innerHTML = innerhtml;
    fetch("http://127.0.0.1/snmp_project/server/System_Info.php")
      .then((response) => response.text())
      .then((body) => {
        body = JSON.parse(body);
        let innerhtml = `<tr> <td> &nbsp &nbsp &nbsp ${body[0]} </td> </tr>
   <tr> <td> &nbsp &nbsp &nbsp  ${body[1]} </td> </tr>
   <tr> <td> &nbsp &nbsp &nbsp  ${body[2]} </td> </tr>
   <tr> <td> &nbsp &nbsp &nbsp ${body[3]} </td> </tr>
   <tr> <td> &nbsp &nbsp &nbsp ${body[4]} </td> </tr>
   <tr> <td> &nbsp &nbsp &nbsp ${body[5]} </td> </tr>
`;
        document.getElementById("system_children").innerHTML = innerhtml;
        fetch("http://127.0.0.1/snmp_project/server/ARP_Info.php")
          .then((response) => response.text())
          .then((body) => {
            body = JSON.parse(body);
            let innerhtml = "";
            for (let index = 0; index < body.length; index++) {
              innerhtml +=
                "<tr> <td>" +
                body[index][0] +
                "</td> <td>" +
                body[index][1] +
                "</td> <td>" +
                body[index][2] +
                "</td> <td>" +
                body[index][3] +
                "</td> </tr>";
            }
            document.getElementById("arp_children").innerHTML = innerhtml;
            fetch("http://127.0.0.1/snmp_project/server/TCP_info.php")
              .then((response) => response.text())
              .then((body) => {
                body = JSON.parse(body);
                let innerhtml = "";
                for (let index = 0; index < body.length; index++) {
                  innerhtml +=
                    "<tr> <td>" +
                    body[index][0] +
                    "</td> <td>" +
                    body[index][1] +
                    "</td> <td>" +
                    body[index][2] +
                    "</td> <td>" +
                    body[index][3] +
                    "</td> <td>" +
                    body[index][4] +
                    "</td> <td>" +
                    body[index][5] +
                    "</td> </tr>";
                }
                document.getElementById("Tcp_children").innerHTML = innerhtml;
              });
          });
      });
  });
