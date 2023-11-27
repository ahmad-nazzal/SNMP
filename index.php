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
          <div class="swiper-slide DataBase">
            <section>
              <?php $ip = "127.0.0.1:161";
              $a = snmp2_walk($ip, "public", ".1.3.6.1.2.1.7.5.1.1");
              $b = snmp2_walk($ip, "public", ".1.3.6.1.2.1.7.5.1.2");
              $i = 0;
              ?>
              <!--for demo wrap-->
              <h1>SNMP DATA</h1>
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
          <div class="swiper-slide DataBase">
            <section>
              <?php $ip = "127.0.0.1:161";
              $a = snmp2_walk($ip, "public", ".1.3.6.1.2.1.7.5.1.1");
              $b = snmp2_walk($ip, "public", ".1.3.6.1.2.1.7.5.1.2");
              $i = 0;
              ?>
              <!--for demo wrap-->
              <h1>SNMP DATA</h1>
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
          <div class="swiper-slide DataBase">
            <section>
              <?php $ip = "127.0.0.1:161";
              $a = snmp2_walk($ip, "public", ".1.3.6.1.2.1.7.5.1.1");
              $b = snmp2_walk($ip, "public", ".1.3.6.1.2.1.7.5.1.2");
              $i = 0;
              ?>
              <!--for demo wrap-->
              <h1>SNMP DATA</h1>
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
          <div class="swiper-slide DataBase">
            <section>
              <?php $ip = "127.0.0.1:161";
              $a = snmp2_walk($ip, "public", ".1.3.6.1.2.1.7.5.1.1");
              $b = snmp2_walk($ip, "public", ".1.3.6.1.2.1.7.5.1.2");
              $i = 0;
              ?>
              <!--for demo wrap-->
              <h1>SNMP DATA</h1>
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