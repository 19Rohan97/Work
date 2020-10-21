<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="description" content="This is an automobile service venture. We have services ranging from car wash to bike services, and also provide branded oils for various automobiles." />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap and Fontawesome CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" />

  <!-- Swiper CSS -->

  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

  <!-- Custom CSS -->

  <link rel="stylesheet" href="./CSS/index.css" />

  <title>Home | Oil Rig</title>
</head>

<body>
  <!-------------------- Back-to-Top Button -------------------->
  <button id="back-to-top-btn"><i class="fas fa-angle-double-up"></i></button>

  <!-------------------- ALL PRODUCTS -------------------->

  <div class="all-products-btn">
    <a href="allproducts.php"><i class="fas fa-chevron-circle-right mr-2"></i>all products</a>
  </div>
  <div class="all-products-btn-mobile">
    <a href="allproducts.php">P</a>
    <a href="allproducts.php">R</a>
    <a href="allproducts.php">O</a>
    <a href="allproducts.php">D</a>
    <a href="allproducts.php">U</a>
    <a href="allproducts.php">C</a>
    <a href="allproducts.php">T</a>
    <a href="allproducts.php">S</a>
  </div>

  <!-------------------- NAVIGATION -------------------->

  <nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand mt-2" href="index.php"><img src="oil rig watermark6.png" alt="OILRIG" /></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation" style="border: 2px solid white">
      <span class="navbar-toggler-icon" style="color: white"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
        <a class="nav-link" href="about.php">About</a>
        <a class="nav-link" href="services.php">Services</a>
        <a class="nav-link" href="contact.php">Contact Us</a>
        <a class="nav-link" href="./BRANDS/LIQUIMOLY/Liquimoly_main_page.php">LIQUI MOLY</a>
        <a class="nav-link" href="./BRANDS/MEGUIN/meguin_products.php">Méguin</a>
        <!-- <a class="nav-link" href="./Coming Soon/index.php">Valvoline</a> -->
        <a class="nav-link" href="./BRANDS/VESRAH/vesrah_products.php">Vesrah</a>
      </div>
      <div class="sign-in-1">
        <a href="authentication/login.php">Login/Register</a>
      </div>
    </div>
    <div class="sign-in-2">
      <a href="authentication/login.php"><i class="fas fa-user-circle"></i></a>
    </div>
  </nav>

  <!-------------------- BANNER-AD -------------------->

  <a href="allproducts.php">
    <div class="banner">
      <div class="big-text">
        <div class="typewriter">
          Free Delivery within 10km!! <span>Shop Now</span>
        </div>
      </div>
    </div>
  </a>
  <!-------------------- MAIN-CAROUSEL -------------------->

  <div class="container-fluid">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" style="width: 100%">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://images.wallpaperscraft.com/image/motorbike_black_yamaha_r6_74416_1280x720.jpg" class="d-block w-100" alt="..." />
        </div>
        <div class="carousel-item">
          <img src="https://images.wallpaperscraft.com/image/bobber_xv_1600_motorcycle_style_bike_101018_1280x720.jpg" class="d-block w-100" alt="..." />
        </div>
        <div class="carousel-item">
          <img src="https://images.wallpaperscraft.com/image/bobber_vintage_motorcycle_red_101052_1280x720.jpg" class="d-block w-100" alt="..." />
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <br />

  <!-- Product Listings -->

  <h1 class="slide-heading text-center text-white" style="text-transform: uppercase; margin-top: 70px">
    Products
  </h1>
  <hr class="mb-5" style="border: 1px solid #5cb85c; width: 20%; margin-left: 39%" />
  <!-- Liquimoly listings -->
  <section class="product-listing">
    <div class="container">
      <div class="product-info">
        <div class="product-image text-center">
          <a href="./BRANDS/LIQUIMOLY/Liquimoly_products.html"><img class="img-fluid" src="./images/Liquimoly_Images/Street Race/10W40.jpg" alt="Product" /></a>
        </div>
        <div class="products-description font-weight-normal text-white text-center">
          <p class="mt-3">
            LiquiMoly 10W-40 <br />
            Street-Race Pack
          </p>
          <p style="color: #5cb85c">Price : ₹999</p>
          <button type="submit" class="btn" data-amount="999">
            Buy Now
          </button>
        </div>
      </div>

      <!--  -->

      <div class="product-info">
        <div class="product-image text-center">
          <a href="./allproducts.php"><img class="img-fluid" src="./images/Liquimoly_Images/Street Race/10W60.jpg" alt="Product" /></a>
        </div>
        <div class="products-description font-weight-normal text-white text-center">
          <p class="mt-3">
            LiquiMoly 10W-60 <br />
            Street-Race Pack
          </p>
          <p style="color: #5cb85c">Price : ₹1599</p>
          <button type="submit" class="btn" data-amount="1599">
            Buy Now
          </button>
        </div>
      </div>

      <!--  -->

      <div class="product-info">
        <div class="product-image text-center">
          <a href="./allproducts.php"><img class="img-fluid" src="./images/Liquimoly_Images/Street/10W30.jpg" alt="Product" /></a>
        </div>
        <div class="products-description font-weight-normal text-white text-center">
          <p class="mt-3">
            LiquiMoly 10W-30 <br />
            Street Pack
          </p>
          <p style="color: #5cb85c">Price : ₹917</p>
          <button type="submit" class="btn" data-amount="917">
            Buy Now
          </button>
        </div>
      </div>
    </div>
    <div class="view-more text-center my-5">
      <a href="./allproducts.php" class="btn bg-success">View More</a>
    </div>
  </section>



  <!-- Meguin listings -->
  <section class="product-listing">
    <div class="container">

      <!--  -->

      <div class="product-info">
        <div class="product-image text-center">
          <a href="./allproducts.php"><img class="img-fluid" src="./images/Meguin_Images/15W40(1L).jpg" alt="Product" /></a>
        </div>
        <div class="products-description font-weight-normal text-white text-center">
          <p class="mt-3">Meguin 15W-40</p>
          <p style="color: #5cb85c">Price : ₹450</p>
          <button type="submit" class="btn" data-amount="450">
            Buy Now
          </button>
        </div>
      </div>
      <!--  -->

      <div class="product-info">
        <div class="product-image text-center">
          <a href="./allproducts.php"><img class="img-fluid" src="./images/Meguin_Images/5W30-Compatible.jpg" alt="Product" /></a>
        </div>
        <div class="products-description font-weight-normal text-white text-center">
          <p class="mt-3">Meguin 5W-30 Compatible</p>
          <p style="color: #5cb85c">Price : ₹6500</p>
          <button type="submit" class="btn" data-amount="6500">
            Buy Now
          </button>
        </div>
      </div>

      <!--  -->

      <div class="product-info">
        <div class="product-image text-center">
          <a href="./allproducts.php"><img class="img-fluid" src="./images/Meguin_Images/ATF-Smooth.jpg" alt="Product" /></a>
        </div>
        <div class="products-description font-weight-normal text-white text-center">
          <p class="mt-3">Meguin CVT ATF Oil</p>
          <p style="color: #5cb85c">Price : ₹1450</p>
          <button type="submit" class="btn" data-amount="1450">
            Buy Now
          </button>
        </div>
      </div>
    </div>
    <div class="view-more text-center my-5">
      <a href="./allproducts.php" class="btn bg-success">View More</a>
    </div>
  </section>



  <!-- Swiper2 -->
  <!-- <section class="section-3 mb-5">
    <div class="swiper-container-1">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div>
            <a href="./allproducts.php"><img class="img-fluid" src="./images/Meguin_Images/15W40(1L).jpg" alt="Product" /></a>
          </div>
          <div class="products-description font-weight-normal text-white">
            <p class="mt-3">Meguin 15W-40</p>
            <p style="color: #5cb85c">Price : ₹450</p>
            <button type="submit" class="btn" data-amount="450">
              Buy Now
            </button>
          </div>
        </div>
        <div class="swiper-slide">
          <div>
            <a href="./allproducts.php"><img class="img-fluid" src="./images/Meguin_Images/5W30-Compatible.jpg" alt="Product" /></a>
          </div>
          <div class="products-description font-weight-normal text-white">
            <p class="mt-3">Meguin 5W-30 Compatible</p>
            <p style="color: #5cb85c">Price : ₹6500</p>
            <button type="submit" class="btn" data-amount="6500">
              Buy Now
            </button>
          </div>
        </div>

        <div class="swiper-slide">
          <div>
            <a href="./allproducts.php"><img class="img-fluid" src="./images/Meguin_Images/ATF-Smooth.jpg" alt="Product" /></a>
          </div>
          <div class="products-description font-weight-normal text-white">
            <p class="mt-3">Meguin ATF-Smooth</p>
            <p style="color: #5cb85c">Price : ₹1770</p>
            <button type="submit" class="btn" data-amount="1770">
              Buy Now
            </button>
          </div>
        </div>
        <div class="swiper-slide">
          <div>
            <a href="./allproducts.php"><img class="img-fluid" src="./images/Meguin_Images/CVT-ATF-Oil.jpg" alt="Product" /></a>
          </div>
          <div class="products-description font-weight-normal text-white">
            <p class="mt-3">Meguin CVT ATF Oil</p>
            <p style="color: #5cb85c">Price : ₹1450</p>
            <button type="submit" class="btn" data-amount="1450">
              Buy Now
            </button>
          </div>
        </div>
        <div class="swiper-slide">
          <div>
            <a href="./allproducts.php"><img class="img-fluid" src="./images/Meguin_Images/10W40(1L).jpg" alt="Product" /></a>
          </div>
          <div class="products-description font-weight-normal text-white">
            <p class="mt-3">Meguin 10W-40</p>
            <p style="color: #5cb85c">Price : ₹520</p>
            <button type="submit" class="btn" data-amount="520">
              Buy Now
            </button>
          </div>
        </div>
        <div class="swiper-slide last-img">
          <div>
            <a href="./allproducts.php"><img class="img-fluid" src="./images/viewmore.png" alt="Product" /></a>
          </div>
        </div>
      </div>
    </div>
  </section> -->

  <!-------------------- IMAGE-SLIDER -------------------->

  <!-- Swiper -->
  <section class="section-1">
    <div class="swiper-container container border-top border-bottom">
      <div class="swiper-wrapper">
        <div class="swiper-slide" style="
              background-image: url(./images/Home_Images/Collections/grid-image-1.png);
            "></div>
        <div class="swiper-slide" style="
              background-image: url(./images/Home_Images/Collections/grid-image-2.png);
            "></div>
        <div class="swiper-slide" style="
              background-image: url(./images/Home_Images/Collections/grid-image-3.png);
            "></div>
        <div class="swiper-slide" style="
              background-image: url(./images/Home_Images/Collections/grid-image-4.png);
            "></div>
        <div class="swiper-slide" style="
              background-image: url(./images/Home_Images/Collections/grid-image-5.png);
            "></div>
        <div class="swiper-slide" style="
              background-image: url(./images/Home_Images/Collections/grid-image-6.png);
            "></div>
        <div class="swiper-slide" style="
              background-image: url(./images/Home_Images/Collections/grid-image-7.png);
            "></div>
        <div class="swiper-slide" style="
              background-image: url(./images/Home_Images/Collections/grid-image-8.png);
            "></div>
        <div class="swiper-slide" style="
              background-image: url(./images/Home_Images/Collections/grid-image-9.png);
            "></div>
      </div>
      <!-- Add Pagination -->
      <!-- <div class="swiper-pagination"></div> -->
    </div>
  </section>

  <!-------------------- TESTIMONIALS -------------------->

  <div class="container mb-5" style="border: 1px solid transparent; height: 100vh">
    <section id="testim" class="testim">
      <h1 class="text-center text-white">What our Clients say</h1>
      <hr style="border: 1px solid #5cb85c; width: 50%; margin-left: 25%" />
      <!--         <div class="testim-cover"> -->
      <div class="wrap">
        <span id="right-arrow" class="arrow right fa fa-chevron-right"></span>
        <span id="left-arrow" class="arrow left fa fa-chevron-left"></span>
        <ul id="testim-dots" class="dots">
          <li class="dot active"></li>
          <li class="dot"></li>
          <li class="dot"></li>
          <li class="dot"></li>
          <li class="dot"></li>
        </ul>
        <div id="testim-content" class="cont">
          <div class="active">
            <div class="img">
              <img src="./images/Home_Images/Tesimonials/thomas.jpeg" alt="Customer" />
            </div>
            <h2>Thomas Thomas</h2>
            <p>
              Life is good when you have people you can trust to do good work
              and treat you fairly. Honest & dependable, that's what OILRIG is
              to us! They have taken great care of our vehicles with utmost
              care. When I hear friends talk about their bike troubles, I
              always recommend the mechanics at OILRIG with confidence.
            </p>
          </div>

          <div>
            <div class="img">
              <img src="./images/Home_Images/Tesimonials/tom.jpeg" alt="Customer" />
            </div>
            <h2>Tom Boban</h2>
            <p>
              I've been taking my vehicle to OILRIG for a couple of months and
              have always had a good experience. Customer service is excellent
              and they live by the golden rule. Can't recommend them enough!
            </p>
          </div>

          <div>
            <div class="img">
              <img src="./images/Home_Images/Tesimonials/anandu.jpg" alt="Customer" />
            </div>
            <h2>Anandu Somaraj</h2>
            <p>
              I wanted to take a moment to write a "Thank-you" for all the
              times your company has demonstrated it's willingness to do
              things the "right way", and in a manner that keeps the
              consideration of the customer in mind. It is a pleasure to do
              business when you feel as though the people you are conducting
              business are looking out for your vehicle and your best
              interest.
            </p>
          </div>

          <div>
            <div class="img">
              <img src="./images/Home_Images/Tesimonials/rohan.jpg" alt="Customer" />
            </div>
            <h2>Rohan T George</h2>
            <p>
              We come to OILRIG Auto Service for the honest, dependable and
              timely service they provide. We have been coming to OILRIG over
              the last six months and plan to continue far into the future!
            </p>
          </div>

          <div>
            <div class="img">
              <img src="./images/Home_Images/Tesimonials/haneef.jpg" alt="Customer" />
            </div>
            <h2>Haneef Nizar</h2>
            <p>
              Very ethical and reliable shop. They have done work for family
              members as well as myself and it has always been a great
              experience. Could not be happier. As always I have found their
              work on my bike timely, well done and at a reasonable cost. I
              won't go anywhere else.
            </p>
          </div>
        </div>
      </div>
      <!--         </div> -->
    </section>
  </div>

  <!-- Whatsapp -->
  <div class="elfsight-app-2790cfb4-9363-4cb0-bbb8-537ceafb1013"></div>

  <!-------------------- FOOTER -------------------->

  <footer class="page-footer">
    <div class="container" style="margin-bottom: 0">
      <div class="row py-4 d-flex align-items-centrer">
        <div class="col-md-12 text-center">
          <a href="https://www.facebook.com/Oilrig-105567687849132/"><i class="fab fa-facebook-f text-white mr-4" style="font-size: 25px"></i></a>
          <a href="https://twitter.com/oilrig14"><i class="fab fa-twitter text-white mr-4" style="font-size: 25px"></i></a>
          <a href="https://wa.me/message/2JJGJ6XEUDOOO1"><i class="fab fa-whatsapp text-white mr-4" style="font-size: 25px"></i></a>
          <a href="https://www.instagram.com/invites/contact/?i=632784z14bgu&utm_content=88wafpt"><i class="fab fa-instagram text-white mr-4" style="font-size: 25px"></i></a>
          <a href="https://www.linkedin.com/in/oilrig-services-2451a41b7/"><i class="fab fa-linkedin-in text-white" style="font-size: 25px"></i></a>
        </div>
      </div>
    </div>

    <div class="container text-center text-md-left mt-2">
      <div class="row">
        <div class="col-md-12 mx-auto mb-4 text-center">
          <div class="col-md-12 text-center">
            <h6 class="text-uppercase font-weight-bold text-white" style="font-size: 16px">
              Contact
            </h6>
            <hr class="bg-success mb-2 mt-0 d-inline-block mx-auto" style="width: 75px; height: 2px" />
          </div>

          <div class="footer-contact-information">
            <a class="text-white" href="https://goo.gl/maps/pZgDWrwxeMx8UHEm8" style="font-size: 16px"><i class="fas fa-home mr-3"></i>Nalanchira, Trivandrum</a>
            <a class="text-white" href="mailto:Oilrigtrivandrum@gmail.com" style="font-size: 16px"><i class="far fa-envelope mr-3"></i>Oilrigtrivandrum@gmail.com</a>
            <a class="text-white" href="tel:917736086277" style="font-size: 16px"><i class="fas fa-phone mr-3"></i>+91-773-608-6277</a>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-copyright text-center py-0 pb-1 text-white" style="font-size: 16px">
      <p>
        &copy; Copyright
        <a href="#" style="text-decoration: none; color: darkgrey">oilrig.in</a>
      </p>
      <p>
        <a href="privacy.html" style="color: white">Privacy Policy</a>
      </p>
      <p>Designed by RTR Web Designs</p>
    </div>
  </footer>

  <script src="https://apps.elfsight.com/p/platform.js" defer></script>
  <!-- Optional JavaScript -->
  <script src="./JS/main.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="./JS/jquery.hislide.js"></script>
  <script>
    $(".slide").hiSlide();
  </script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <script>
    var swiper = new Swiper(".swiper-container", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
      loop: true,
      autoplay: {
        delay: 1500,
        disableOnInteration: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
    });
  </script>

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/1744f3f671.js"></script>

  <!--integrating razorpay-->
  <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
  <script>
    $("body").on("click", ".btn", function(e) {
      var totalAmount = $(this).attr("data-amount");
      var product_id = $(this).attr("data-id");
      var contact_number = $("#contact").attr("value");
      var options = {
        key: "rzp_live_05zUSmlG9ctsMg",
        amount: totalAmount * 100, // 2000 paise = INR 20
        name: "BUY NOW ",
        description: "proceed to buy",
        currency: "INR",
        image: "logo.jpg",
        /*"handler": function(response) {
          $.ajax({
            url: 'razorPaySuccess.php',
            type: 'post',
            data: {
              razorpay_payment_id: response.razorpay_payment_id,
              totalAmount: totalAmount,
              product_id: product_id,
            },
            success: function(msg) {

              //    window.location.href = 'thankyou.php';
            }
          });

        },*/

        theme: {
          color: "#ec1313",
        },
      };
      var rzp1 = new Razorpay(options);
      rzp1.open();
      e.preventDefault();
    });
  </script>
  <!--razorpay integration ends here-->
</body>

</html>