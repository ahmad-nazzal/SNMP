<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SNMP</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="node_modules/swiper/swiper-bundle.min.css" />
  <script src="fetchData.js" defer></script>
</head>

<body>
  <section class="projects" id="projects">
    <div class="container">
      <h1>SNMP DATA</h1>
      <!-- Swiper -->
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">

          <!-- system -->
          <div class="swiper-slide DataBase">
            <section>

              <!--for demo wrap-->

              <h2>System information</h2>
              <div class="tbl-content">
                <table cellpadding="0" cellspacing="0" border="0">
                  <thead id="system_children">
                    <!-- we add chilren here by js -->
                  </thead>
                </table>
              </div>
            </section>
            <!-- <div class="details">fsadfsdf</div> -->
            <div class="swiper-scrollbar"></div>
          </div>

          <!-- UDP TABLE -->
          <div class="swiper-slide DataBase">
            <section>
              <!--for demo wrap-->

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
                  <tbody id="udp-chlidren">
                    <!-- we add children here by java script -->

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
              <!--for demo wrap-->

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
                  <tbody id="arp_children">


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
              <!--for demo wrap-->

              <h2>TCP Table</h2>
              <div class="tbl-header">
                <table cellpadding="0" cellspacing="0" border="0">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th> Local Address </th>
                      <th> Local Port </th>
                      <th> Remote Address </th>
                      <th> Remote Port </th>
                      <th> State </th>
                    </tr>

                  </thead>
                </table>
              </div>
              <div class="tbl-content">
                <table cellpadding="0" cellspacing="0" border="0">
                  <tbody id="Tcp_children">



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