<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="node_modules/swiper/swiper-bundle.min.css" />

</head>

<body>
  <section class="projects" id="projects">
    <div class="container">
      <!-- Swiper -->
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
        
           <!-- system -->
          <div class="swiper-slide DataBase">
            <section>
              
              <!--for demo wrap-->
              <h1>SNMP DATA</h1>
              <h2>System information</h2>
              <div class="tbl-content">
                <table cellpadding="0" cellspacing="0" border="0">
                  <thead>
                    <tr>
                                        <?php
                    $ip = "127.0.0.1:161";
                    
                    $var1 =  snmp2_get($ip, "public", ".1.3.6.1.2.1.1.1.0");
                    $var2 =  snmp2_get($ip, "public", ".1.3.6.1.2.1.1.2.0") ;
                    $var3 = snmp2_get($ip, "public", ".1.3.6.1.2.1.1.3.0") ;
                    $var4 = snmp2_get($ip, "public", ".1.3.6.1.2.1.1.4.0") ;
                    $var5 =  snmp2_get($ip, "public", ".1.3.6.1.2.1.1.5.0");
                    $var6 = snmp2_get($ip, "public", ".1.3.6.1.2.1.1.6.0") ;
                    echo "<tr> <td> &nbsp &nbsp &nbsp $var1 </td> </tr>
                       <tr> <td> &nbsp &nbsp &nbsp  $var1 </td> </tr>
                       <tr> <td> &nbsp &nbsp &nbsp  $var2 </td> </tr>
                       <tr> <td> &nbsp &nbsp &nbsp  $var3 </td> </tr>
                       <tr> <td> &nbsp &nbsp &nbsp $var4 </td> </tr>
                       <tr> <td> &nbsp &nbsp &nbsp $var5 </td> </tr>
                       <tr> <td> &nbsp &nbsp &nbsp $var6 </td> </tr>
";
                    ?>
                      
                  </thead>
                </table>
              </div>
              <div class="tbl-content">
               
              </div>
            </section>
            <!-- <div class="details">fsadfsdf</div> -->
            <div class="swiper-scrollbar"></div>
          </div>

           <!-- UDP TABLE -->
           <div class="swiper-slide DataBase">
            <section>
              <?php $ip = "127.0.0.1:161";
              $a = snmp2_walk($ip, "public", ".1.3.6.1.2.1.7.5.1.1");
              $b = snmp2_walk($ip, "public", ".1.3.6.1.2.1.7.5.1.2");
              $i = 0;
              ?>
              <!--for demo wrap-->
              <h1>SNMP DATA</h1>
              <h2>UDP Table</h2>
              <div class="tbl-header">
                <table cellpadding="0" cellspacing="0" border="0">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>IP Address</th>
                      <th>PORT</th>
                    </tr>
                  </thead>
                </table>
              </div>
              <div class="tbl-content">
                <table cellpadding="0" cellspacing="0" border="0">
                  <tbody>
                    <?php
                    foreach ($a as $k => $val) {
                      $data = explode(':', $a[$i])[1];
                      echo "<tr>
            <td> $i </td>
            <td> $data </td>
            <td> $b[$i] </td>
          </tr>";
                      $i++;
                    }
                    ?>

                  </tbody>
                </table>
              </div>
            </section>
            <!-- <div class="details">fsadfsdf</div> -->
            <div class="swiper-scrollbar"></div>
          </div>
          
          <!-- ARP -->
          <div class="swiper-slide DataBase">
            <section>
              <?php $ip = "127.0.0.1:161";
              $a = snmp2_walk($ip, "public", ".1.3.6.1.2.1.4.22.1.2");
              $b = snmp2_walk($ip, "public", ".1.3.6.1.2.1.4.22.1.3");
              $c = snmp2_walk($ip, "public", ".1.3.6.1.2.1.4.22.1.4");
              $i = 0;
              ?>
              <!--for demo wrap-->
              <h1>SNMP DATA</h1>
              <h2>ARP Table</h2>
              <div class="tbl-header">
                <table cellpadding="0" cellspacing="0" border="0">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>MAC</th>
                      <th>IP</th>
                      <th>Type</th>
                    </tr>
                  </thead>
                </table>
              </div>
              <div class="tbl-content">
                <table cellpadding="0" cellspacing="0" border="0">
                  <tbody>
                    <?php
                    foreach ($a as $k => $val) {
                      echo "<tr>
                        <td> $i </td>
                        <td> $a[$i] </td>
                        <td> $b[$i] </td>
                        <td> $c[$i] </td>
                      </tr>";
                      $i++;
                      }
                    ?>

                  </tbody>
                </table>
              </div>
            </section>

            <!-- <div class="details">fsadfsdf</div> -->
            <div class="swiper-scrollbar"></div>
          </div>
          <!-- TCP TABLE -->
          <div class="swiper-slide DataBase">
            <section>
              <?php $ip = "127.0.0.1:161";
              
                $local_address = snmp2_walk($ip, 'public', '1.3.6.1.2.1.6.13.1.2');
                $local_port = snmp2_walk($ip, 'public', '1.3.6.1.2.1.6.13.1.3');
                $remote_address = snmp2_walk($ip, 'public', '1.3.6.1.2.1.6.13.1.4');
                $remote_port = snmp2_walk($ip, 'public', '1.3.6.1.2.1.6.13.1.5');
                $state = snmp2_walk($ip, 'public', '1.3.6.1.2.1.6.13.1.1');
                $i = 0;
              ?>
              <!--for demo wrap-->
              <h1>SNMP DATA</h1>
              <h2>TCP Table</h2>
              <div class="tbl-header">
                <table cellpadding="0" cellspacing="0" border="0">
                  <thead>
                    <tr>
                      <th>#</th>
                     <th > Local Address </th> <th> Local Port </th><th> Remote Address </th><th> Remote Port </th><th> State </th>  </tr>
                  
                  </thead>
                </table>
              </div>
              <div class="tbl-content">
                <table cellpadding="0" cellspacing="0" border="0">
                  <tbody>
                    <?php
                     foreach ($local_address as $k => $val) {
                      $local_address_explode = explode(':', $local_address[$i])[1];
                      $remote_address_explode = explode(':', $remote_address[$i])[1];
                    
                      echo "<tr> <td> $i </td> <td> $local_address_explode </td> <td> $local_port[$i]</td> <td> $remote_address_explode </td> <td> $remote_port[$i] </td> <td> $state[$i] </td> </tr>";
	                        $i++;
                        }
                    ?>
                  

                  </tbody>
                </table>
              </div>
            </section>

            <!-- <div class="details">fsadfsdf</div> -->
            <div class="swiper-scrollbar"></div>
          </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
      </div>
      <div class="append-buttons d-flex justify-content-center">
        <a href="#" class="slide-1">System Contents</a>
        <a href="#" class="slide-2">UDP Table</a>
        <a href="#" class="slide-3">ARP Table</a>
        <a href="#" class="slide-4">TCP Table</a>
        <!-- <a href="#" class="append-slide">Append Slide</a> -->
      </div>
    </div>
  </section>
  <!-- Swiper JS -->
  <script src="node_modules/swiper/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      cssMode: true,
      rewind: true,
      pagination: {
        el: ".swiper-scrollbar",
        el: ".swiper-pagination",
        type: "progressbar",
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });

    document
      .querySelector(".slide-1")
      .addEventListener("click", function(e) {
        e.preventDefault();
        swiper.slideTo(0, 0);
      });

    document
      .querySelector(".slide-2")
      .addEventListener("click", function(e) {
        e.preventDefault();
        swiper.slideTo(1, 0);
      });

    document
      .querySelector(".slide-3")
      .addEventListener("click", function(e) {
        e.preventDefault();
        swiper.slideTo(2, 0);
      });
    document
      .querySelector(".slide-4")
      .addEventListener("click", function(e) {
        e.preventDefault();
        swiper.slideTo(3, 0);
      });

    // document
    //   .querySelector(".prepend-2-slides")
    //   .addEventListener("click", function (e) {
    //     e.preventDefault();
    //     swiper.virtual.prependSlide([
    //       "Slide " + --prependNumber,
    //       "Slide " + --prependNumber,
    //     ]);
    //   });

    // document
    //   .querySelector(".append-slide")
    //   .addEventListener("click", function (e) {
    //     e.preventDefault();
    //     swiper.virtual.appendSlide("Slide " + ++appendNumber);
    //   });
  </script>
  <!-- follow me template -->
  <div class="made-with-love">
    Made
    by
    <a target="_blank" href="https://codepen.io/nikhil8krishnan">Ahmad Nazzal <i>♥</i> Farah Elhasan</a>
  </div>
</body>

</html>