<!DOCTYPE html>
<html lang="en">
 <?php 
   $title="product-view";
   include 'header.php';
   include'navbar.php';
  ?>

<body>
<link href="assets/css/cart.css" rel="stylesheet">
<link href="assets/css/product.css" rel="stylesheet">
<!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up">We Take Care Of<br>Your Health</h2>
          <p data-aos="fade-up" data-aos-delay="100">We delivery faster with in a time ,we take care of your health</p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
          <h2 data-aos="fade-up"><?php echo $title;?><br>Page</h2>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="assets/img/banner.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container container-fluid" data-aos="fade-up">


  <div class="product ">
    <div class="col-lg-3 order-1 order-lg-2">
      <img class="img-fluid"src="assets/img/menu/liquid1.jpg">
    </div>
    <div class="product-details">
      <div class="product-title">syrup</div>
      <p class="product-description">Best syrup tpescribe by physicians</p>
    </div>
    <div class="product-price">195.25</div>
    
  </div>
      <button onclick="myCart()" class="wish-btn">go to cart</button>
<br>
        <div class="row gy-8">
          <div class="col-lg-7 position-relative about-img" style="background-image: url(assets/img/booking.jpg) ;     background-repeat: no-repeat;" data-aos="fade-up" data-aos-delay="150">
            <div class="call-us position-absolute">
              <h4>Book your Medicine</h4>
              <p>+1 5589 55488 55</p>
            </div>
          </div>
          <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                We are giving the best medicine in affordable price
              </p>
              <ul>
                <li><i class="bi bi-check2-all"></i> Quality Assurance</li>
                <li><i class="bi bi-check2-all"></i> Emergency Delivery</li>
                <li><i class="bi bi-check2-all"></i> 24 x 7 delivery with gently</li>
                <li><i class="bi bi-check2-all"></i> We are here in your door step in your village,town,city</li>
              </ul>
              <p>
                we are always there to help and support in emergency. 
              </p>

              <div class="position-relative mt-4">
                <img src="assets/img/hero1-img.png" class="img-fluid" alt="">
                <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

  


  </main><!-- End #main -->

  

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>
<?php include 'footer.php'?>
 <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
    function myCart(){
    window.open("cart.php");
    
  } 
  </script>
  <script>
     $(document).ready(function(){
      $('#BuyProduct').click(function(e){
        e.preventDefault();
        alert("Do you want to Buy?");
      });
     });
  </script>
</body>
</html>