<footer id="footer">
    <div class="container">
      <span class="copyright" style="float: left;">
        &copy; Copyright <strong><span>Studio Rhizome</span></strong>.
      </span>
      <span class="copyright" style="float: right;">
               <i class="icon-font icofont-instagram"></i>
                    <i class="icon-font icofont-facebook"></i>
                    <i class="icon-font icofont-linkedin"></i>
                    <i class="icon-font icofont-twitter"></i>
            </span>

    </div>
  </footer>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/js/swiper.min.js"></script>

  <!-- Template Main JS File -->
<!--    <script src="assets/js/testimonial.js"></script>-->
  <script src="assets/js/main.js"></script>
<script>
  var galleryThumbs = new Swiper('.gallery-thumbs', {
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: '2',
    // coverflowEffect: {
    //   rotate: 50,
    //   stretch: 0,
    //   depth: 100,
    //   modifier: 1,
    //   slideShadows : true,
    // },

    coverflowEffect: {
      rotate: 0,
      stretch: 0,
      depth: 50,
      modifier: 6,
      slideShadows : false,
    },

  });


  var galleryTop = new Swiper('.swiper-container.testimonial', {
    speed: 400,
    spaceBetween: 50,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    direction: 'vertical',
    pagination: {
      clickable: true,
      el: '.swiper-pagination',
      type: 'bullets',
    },
    thumbs: {
      swiper: galleryThumbs
    }
  });

</script>
