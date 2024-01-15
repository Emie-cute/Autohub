<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>AutoHub</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <!-- <link href="home/assets/img/favicon.png" rel="icon" /> -->
    <link href="home/assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Dosis:300,400,500,,600,700,700i|Lato:300,300i,400,400i,700,700i"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link
      href="home/assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="home/assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="home/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link
      href="home/assets/vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet"
    />
    <link href="home/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="home/assets/css/style.css" rel="stylesheet" />
    <script></script>
  </head>

  <body>
    <!-- ======= Header ======= -->
   @include('home.header')
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    @include('home.hero')
    <main id="main">

      <!-- ======= About Section ======= -->
      @include('home.about')
      <!-- End About Section -->

      <!-- ======= Counts Section ======= -->
      @include('home.count')
      <!-- End Counts Section -->

      <!-- ======= Clients Section ======= -->
      @include('home.client')
      <!-- End Clients Section -->

      <section id="portfolio" class="portfolio">
        <div class="container">
          <div class="section-title">
            <h2>CARS</h2>
            <p>
            AutoHub envisions a future where driving is not just a means of transportation but a source of joy and exhilaration. Our mission is to be the inspiration behind your car fantasies, bringing performance and luxury within reach of everyone.

            </p>
          </div>

          <!-- <div class="container">
            <div class="row">
             
              <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                  <img class="card-img-top"
                    <img src="${backendURL}/storage/${element.image1}" width="100%" height="225px">
                  />
                  <div class="card-body">
                    <h5 class="card-title">${element.make}$ {element.model_name}</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">${element.model_year}</h6>
                    <p class="card-text">${element.description}</p>
                  </div>
                  <div class="card-footer">
                    <button
                      class="btn btn-primary"
                    >
                      View Details
                    </button>
                    <button class="btn btn-secondary">Add to Cart</button>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
          <form id="form_search">
            <div class="row d-flex justify-content-center">
              <div class="col-sm-4 mb-1">
                <input
                  class="form-control"
                  type="text"
                  name="keyword"
                  placeholder="Look for Cars"
                />
              </div>
              <div class="col-sm-2 d-flex justify-content-center mb-1">
                <button class="btn btn-primary w-100" type="submit">
                  Search
                </button>
              </div>
            </div>
          </form>
          <div class="alert alert-success d-none" role="alert"></div>
          <div class="alert alert-danger d-none" role="alert"></div>
          <div class="container d-flex justify-content-center" id="get_data">
              <div class="spinner-border" role="status">
                <span class="visually-hidden">Loading...</span>
              </div>
              <b class="ms-2">Loading Data...</b>
          </div>
          </div>
          
          

          <!-- Pagination of All Data -->
          <div class="d-flex justify-content-center">
            <nav aria-label="Page navigation example">
              <ul class="pagination" id="get_pagination"></ul>
            </nav>
          </div>
        </div>
        </div>
      </section>

      <!-- End Portfolio Section -->

      <!-- ======= Testimonials Section ======= -->
      <section id="testimonials" class="testimonials">
        <div class="container position-relative">
          <div
            class="testimonials-slider swiper"
            data-aos="fade-up"
            data-aos-delay="100"
          >
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <img
                    src="home/assets/img/testimonials/testimonials-1.jpg"
                    class="testimonial-img"
                    alt=""
                  />
                  <h3>Saul Goodman</h3>
                  <h4>Ceo &amp; Company Man</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    GOOD
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
              <!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <img
                    src="home/assets/img/testimonials/testimonials-2.jpg"
                    class="testimonial-img"
                    alt=""
                  />
                  <h3>Sara Wilsson</h3>
                  <h4>Entrepreneur</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    NICE
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
              <!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <img
                    src="home/assets/img/testimonials/testimonials-3.jpg"
                    class="testimonial-img"
                    alt=""
                  />
                  <h3>Jena Karlis</h3>
                  <h4>Store Owner</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    FAST
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
              <!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <img
                    src="home/assets/img/testimonials/testimonials-4.jpg"
                    class="testimonial-img"
                    alt=""
                  />
                  <h3>Matt Brandon</h3>
                  <h4>Freelancer</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    GREAT
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
              <!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <img
                    src="home/assets/img/testimonials/testimonials-5.jpg"
                    class="testimonial-img"
                    alt=""
                  />
                  <h3>John Larson</h3>
                  <h4>Entrepreneur</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    QUICK
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
              <!-- End testimonial item -->
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </section>
      <!-- End Testimonials Section -->

      <!-- ======= Team Section ======= -->
      <section id="team" class="team section-bg">
        <div class="container">
          <div class="section-title">
            <h2>Team</h2>
            <p>
              Meet the dynamic individuals who form the heartbeat of this
              project. Our team is a diverse and talented group, each bringing a
              unique set of skills and experiences to the table.
            </p>
          </div>

          <div class="row justify-content-center">
            <!-- Added justify-content-center class -->
            <!-- Team Members -->
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <!-- Member 1 -->
              <div class="member">
                <div class="member-img">
                  <img
                    src="home/assets/img/team/team-1.jpg"
                    class="img-fluid"
                    alt=""
                  />
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>Russel Bryan Ruiz</h4>
                  <span>Front-end Developer</span>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <!-- Member 2 -->
              <div class="member">
                <div class="member-img">
                  <img
                    src="home/assets/img/team/team-2.jpg"
                    class="img-fluid"
                    alt=""
                  />
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>Jacqueline Omlang</h4>
                  <span>System Analyst</span>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <!-- Member 3 -->
              <div class="member">
                <div class="member-img">
                  <img
                    src="home/assets/img/team/team-3.jpg"
                    class="img-fluid"
                    alt=""
                  />
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>Peter Carmen</h4>
                  <span>Back-end Developer</span>
                </div>
              </div>
            </div>
            <!-- End Team Members -->
          </div>
        </div>
      </section>
      <!-- End Team Section -->

      <!-- ======= Gallery Section ======= -->
      <section id="gallery" class="gallery">
        <div class="container">
          <div class="section-title">
            <h2>Gallery</h2>
            <p>
              Explore automotive perfection at AutoHub! Our showroom showcases a
              curated selection of sample cars, each embodying the ideal fusion
              of design, performance, and cutting-edge technology. From
              sophisticated sedans to commanding SUVs, our commitment to
              excellence is evident. Immerse yourself in luxury and innovation,
              envisioning the unmatched driving experience that awaits. Whether
              you desire a sports car's thrill, an SUV's versatility, or a
              luxury sedan's refined comfort, AutoHub is your gateway to
              automotive excellence.
            </p>
          </div>

          <div class="row no-gutters">
            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a
                  href="home/assets/img/gallery/gallery-1.jpg"
                  class="galleery-lightbox"
                  data-gallery="gallery-item"
                >
                  <img
                    src="home/assets/img/gallery/gallery-1.jpg"
                    alt=""
                    class="img-fluid"
                  />
                </a>
              </div>
            </div>

            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a
                  href="home/assets/img/gallery/gallery-2.jpg"
                  class="galleery-lightbox"
                  data-gallery="gallery-item"
                >
                  <img
                    src="home/assets/img/gallery/gallery-2.jpg"
                    alt=""
                    class="img-fluid"
                  />
                </a>
              </div>
            </div>

            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a
                  href="home/assets/img/gallery/gallery-3.jpg"
                  class="galleery-lightbox"
                  data-gallery="gallery-item"
                >
                  <img
                    src="home/assets/img/gallery/gallery-3.jpg"
                    alt=""
                    class="img-fluid"
                  />
                </a>
              </div>
            </div>

            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a
                  href="home/assets/img/gallery/gallery-4.jpg"
                  class="galleery-lightbox"
                  data-gallery="gallery-item"
                >
                  <img
                    src="home/assets/img/gallery/gallery-4.jpg"
                    alt=""
                    class="img-fluid"
                  />
                </a>
              </div>
            </div>

            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a
                  href="home/assets/img/gallery/gallery-5.jpg"
                  class="galleery-lightbox"
                  data-gallery="gallery-item"
                >
                  <img
                    src="home/assets/img/gallery/gallery-5.jpg"
                    alt=""
                    class="img-fluid"
                  />
                </a>
              </div>
            </div>

            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a
                  href="home/assets/img/gallery/gallery-6.jpg"
                  class="galleery-lightbox"
                  data-gallery="gallery-item"
                >
                  <img
                    src="home/assets/img/gallery/gallery-6.jpg"
                    alt=""
                    class="img-fluid"
                  />
                </a>
              </div>
            </div>

            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a
                  href="home/assets/img/gallery/gallery-7.jpg"
                  class="galleery-lightbox"
                  data-gallery="gallery-item"
                >
                  <img
                    src="home/assets/img/gallery/gallery-7.jpg"
                    alt=""
                    class="img-fluid"
                  />
                </a>
              </div>
            </div>

            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a
                  href="home/assets/img/gallery/gallery-8.jpg"
                  class="galleery-lightbox"
                  data-gallery="gallery-item"
                >
                  <img
                    src="home/assets/img/gallery/gallery-8.jpg"
                    alt=""
                    class="img-fluid"
                  />
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Gallery Section -->

      <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact">
        <div class="container">
          <div class="section-title">
            <h2>Contact</h2>
            <p>
              We value your feedback and inquiries. Whether you have questions
              about our products, need assistance with an order, or simply want
              to share your thoughts, our dedicated team is here to help. Feel
              free to reach out to us through the contact details below, and
              we'll do our best to respond promptly. Your satisfaction is
              important to us, and we appreciate the opportunity to assist you.
              Thank you for choosing us, and we look forward to hearing from you
              soon!
            </p>
          </div>
          <div>
            <iframe
              style="border: 0; width: 100%; height: 270px"
              src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
              frameborder="0"
              allowfullscreen
            ></iframe>
          </div>
          <div class="container mt-5">
            <div class="row">
              <div class="col-lg-4 mb-4">
                <div class="info">
                  <div class="address">
                    <i class="bi bi-geo-alt"></i>
                    <h4>Location:</h4>
                    <p>Alba St, Bislig, Surigao del Sur</p>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 mb-4">
                <div class="info">
                  <div class="email">
                    <i class="bi bi-envelope"></i>
                    <h4>Email:</h4>
                    <p>Lessurziur@gmail.com</p>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 mb-4">
                <div class="info">
                  <div class="phone">
                    <i class="bi bi-phone"></i>
                    <h4>Call:</h4>
                    <p>+1 5589 55488 55s</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Contact Section -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="container py-4">
        <div class="copyright">
          &copy; Copyright <strong><span>AUTOHUB</span></strong
          >. All Rights Reserved
        </div>
        <div class="credits">
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
    </footer>
    <!-- End Footer -->

    <a
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <!-- Vendor JS Files -->
    <script src="home/assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="home/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="home/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="home/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="home/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="home/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="home/assets/js/main.js"></script>
    <script src="home/assets/js/auth/na.js"></script>
    <script type="module" src="home/assets/js/auth/logout.js" defer></script>
    <script type="module" src="home/assets/js/system/units.js" defer></script>

  </body>
</html>
