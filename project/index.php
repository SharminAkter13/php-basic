<!-- header start -->
<?php
    include("include/header.php");
  ?>
<!-- header end -->
  <!-- NAVBAR start -->
  <?php
    include("include/nav.php");
  ?>
  <!-- NAVBAR end -->

  <!-- carousel start -->

  <section carousel>
    <!-- Carousel wrapper -->
    <div id="carouselVideoExample" class="carousel slide " data-bs-ride="carousel">
      <!-- Indicators -->
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselVideoExample" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselVideoExample" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselVideoExample" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>

      <!-- Inner -->
      <div class="carousel-inner">
        <!-- Single item -->
        <div class="carousel-item active " data-bs-interval="1500">
          <video class="img-fluid w-100" autoplay muted>
            <source src="images/video4.mp4" type="video/mp4" />
          </video>
          <div class="carousel-caption d-none d-md-block">
            <p>Sports Cars</p>
            <h5>
              START YOUR ENGINE
            </h5>
            <P>
              DISCOVER THE FERRARI LINE UP <a href="#"><i class="bi bi-chevron-compact-right bg-white"></i></a>
            </P>
          </div>
        </div>

        <!-- Single item -->
        <div class="carousel-item" data-bs-interval="1500">
          <video class="img-fluid w-100 " autoplay muted>
            <source src="images/dcinologo_whitebag (720p).mp4" type="video/mp4" />
          </video>
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </p>
          </div>
        </div>

        <!-- Single item -->
        <div class="carousel-item" data-bs-interval="1500">
          <video class="img-fluid w-100" autoplay muted>
            <source src="images/video6.mp4" type="video/mp4" />
          </video>
          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>
              Praesent commodo cursus magna, vel scelerisque nisl consectetur.
            </p>
          </div>
        </div>
      </div>
      <!-- Inner -->

      <!-- Controls -->
      <button class="carousel-control-prev" type="button" data-mdb-target="#carouselVideoExample" data-mdb-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-mdb-target="#carouselVideoExample" data-mdb-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- Carousel wrapper -->

  </section>

  <!-- text image slide -->
  <section class="text-img mt-lg-5 mb-lg-5">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active second-carousel" data-bs-interval="1000">
          <div class="carousel-item-content second-carousel-content">
            <div class="carousel-text second-carousel-text">
              <h3>A TOUGH DAY</h3>
              <p>Scuderia Ferrari HP had a difficult time of it in the Miami Grand Prix. Charles Leclerc and Lewis
                Hamilton came home seventh and eighth, having spent the entire race fighting in traffic in a train of
                cars all with DRS.
                <a href="#" class="nav-link fw-bold">READ MORE ></a>
              </p>

            </div>
            <img src="images/Racing through the 305.jpg" class="d-block w-50 carousel-image" alt="First Image">
          </div>
        </div>
        <div class="carousel-item second-carousel">
          <div class="carousel-item-content second-carousel-content" data-bs-interval="1000">
            <div class="carousel-text second-carousel-text">
              <h3>THE 499PS IN ACTION AT SPA</h3>
              <p>The opening two free practice sessions of the third round of the FIA World Endurance Championship 2025
                unfolded today on the historic Spa- Francorchamps circuit.
                <a href="#" class="nav-link fw-bold"> READ MORE ></a>
              </p>
            </div>
            <img src="images/Racing through the 305 (1).jpg" class="d-block w-50 carousel-image"
              alt="Second Image">
          </div>
        </div>
        <div class="carousel-item second-carousel">
          <div class="carousel-item-content second-carousel-content" data-bs-interval="1000">
            <div class="carousel-text second-carousel-text">
              <h3>F50 LEGACY TOUR 2025: A JOURNEY THROUGH</h3>
              <p>This is the third slide with its own unique text and call to action.30 years after the presentation of
                the
                F50, which took place on 9 March 1995
                at the Geneva Motor Show, the Maranello-based manufacturer is organising the F50 Legacy Tour 2025, an
                exclusive event celebrating the 30th anniversary of an authentic legend.
                <a href="#" class="nav-link fw-bold"> READ MORE ></a>
              </p>
            </div>
            <img src="images/slide31.jpg" class="d-block w-50 carousel-image" alt="Third Image">
          </div>
        </div>
        <div class="carousel-item second-carousel">
          <div class="carousel-item-content second-carousel-content" data-bs-interval="1000">
            <div class="carousel-text  second-carousel-text">
              <h3>BLOODLINES: SPECIAL-SERIES V8S</h3>
              <p>From Challenge Stradale to 488 Pista, Ferrari's special-series V8s join the dots between mid-engined
                sports cars and motorsport.

                <a href="#" class="nav-link fw-bold"> READ MORE ></a>
              </p>
            </div>
            <img src="images/slide4.jpg" class="d-block w-50 carousel-image" alt="Third Image">
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
      <div class="carousel-indicators second-carousel-indi mt-lg-5">
        <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="0" class="active "
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="3"
          aria-label="Slide 4"></button>
      </div>
  </section>
  <!-- text image slide -->

  <!-- image animate -->
  <section class="img-animation">


    <div class="grid-container-fluid w-100 img-content">
      <div class="grid-item ">
          <div class="image-with-text animate__animated animate__fadeInLeft">
              <img src="images/image1.jpg"  alt="Image 1" >
              <div class="text-overlay">
                <h5>Collection</h5>
                <p style="font-size: 20pt;">NEW ARRIVALS</p>
                <h5>Discover  <button class="circular-button btn btn-outline-light ms-lg-5">
                  <span class="arrow">  <img src="images/icon.png" alt=""></span>
              </button></h5>
              </div>
          </div>
      </div>
      <div class="grid-item ">
          <div class="image-with-text animate__animated animate__fadeInLeft">
              <img src="images/img8.avif" alt="Image 2">
              <div class="text-overlay">
                <h5>Magazine</h5>
                <p style="font-size: 20pt;">FERRARI COLLECTIBLES</p>
                <h5>Discover  <button class="circular-button btn btn-outline-light">
                      <span class="arrow">  <img src="images/icon.png"  alt=""></span>
                  </button></h5>
              </div>
          </div>
      </div>
      <div class="grid-item ">
          <div class="image-with-text animate__animated animate__fadeInLeft">
              <img src="images/img6.avif" alt="Image 3">
              <div class="text-overlay">
                <h5>Magazine</h5>
                <p style="font-size: 20pt;">FERRARI F80</p>
                    <h5>Discover <button class="circular-button btn btn-outline-light">
                      <span class="arrow">  <img src="images/icon.png"  alt=""></span>
                  </button></h5>
              </div>
          </div>
      </div>
      <div class="grid-item ">
          <div class="image-with-text animate__animated animate__fadeInLeft ">
              <img src="images/img2.avif" alt="Image 4">
              <div class="text-overlay">
                <h5>Ferrari Museums</h5>
                <p style="font-size: 20pt;">FERRARI SUPERCARS</p>
                    <h5>Discover  <button class="circular-button btn btn-outline-light">
                      <span class="arrow align-middle">  <img src="images/icon.png"  alt=""></span>
                  </button></h5>
              </div>
          </div>
      </div>
      <div class="grid-item ">
          <div class="image-with-text animate__animated animate__fadeInLeft">
              <img src="images/img1.avif" alt="Image 5">
              <div class="text-overlay">
                <h5>Ferrari Approved</h5>
                <p style="font-size: 20pt;">PRE-OWNED</p>
                    <h5>Discover  <button class="circular-button btn btn-outline-light">
                      <span class="arrow">  <img src="images/icon.png"  alt=""></span>
                  </button></h5>
              </div>
          </div>
      </div>
      <div class="grid-item ">
          <div class="image-with-text animate__animated animate__fadeInLeft">
              <img src="images/img3.avif" alt="Image 6">
              <div class="text-overlay">
                <h3>Sports Cars</h3>
                <p style="font-size: 20pt;">PAST-MODEL</p>
                    <h5>Discover  <button class="circular-button btn btn-outline-light">
                      <span class="arrow">  <img src="images/icon.png"  alt=""></span>
                  </button></h5>
              </div>
          </div>
      </div>
  </div>   
  </section>

  <!-- image animate -->

  <!-- newsletter -->
  <section class="newsletter" style="background-color: #333a3d;">
    <div class="bg-secondary py-5 text-center " style="background-color: #353738 !important;">
      <div class="container" >
        <h2 class="text-light mb-3">Newsletter</h2>
        <p class="text-light mb-4">Stay up to date with the latest news from the world of Ferrari.</p>
        <button class="btn btn-danger btn-lg">SUBSCRIBE</button>
      </div>
    </div>
  </section>
  <!-- newsletter -->


  <!-- FOOTER start -->

  <?php
    include("include/footer.php");
  ?>

  <!-- FOOTER end -->
  