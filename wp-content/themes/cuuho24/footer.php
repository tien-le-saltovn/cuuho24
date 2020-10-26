<footer class="footer section-padding">
      <div class="container">
        <div class="row">
          <div
            style="visibility: visible; animation-name: zoomIn;"
            class="col-sm-12 text-center wow zoomIn"
          >
            <div
              class="fb-page"
              data-href="https://www.facebook.com/24/7-2052671961707850/"
              data-tabs="timeline"
              data-width="300px"
              data-height="200px"
              data-small-header="false"
              data-adapt-container-width="true"
              data-hide-cover="false"
              data-show-facepile="true"
            >
              <blockquote
                cite="https://www.facebook.com/R2Y-2052671961707850/"
                class="fb-xfbml-parse-ignore"
              >
                <a href="https://www.facebook.com/R2Y-2052671961707850/">24/7</a>
              </blockquote>
            </div>
            <h3>CÔNG TY TNHH 24/7</h3>
            <div class="footer_social">
              <ul>
                <li>
                  <a
                    class="f_facebook"
                    href="https://www.facebook.com/R2Y-2052671961707850/"
                    ><i class="fa fa-facebook"></i
                  ></a>
                </li>
                <li>
                  <a class="f_twitter" href=""
                    ><i class="fa fa-twitter"></i
                  ></a>
                </li>
                <li>
                  <a class="f_google" href=""
                    ><i class="fa fa-google-plus"></i
                  ></a>
                </li>
                <li>
                  <a class="f_linkedin" href=""
                    ><i class="fa fa-linkedin"></i
                  ></a>
                </li>
              </ul>
            </div>
          </div>
          <!--- END COL -->
        </div>
        <!--- END ROW -->
      </div>
      <!--- END CONTAINER -->
    </footer>
    <div class="footer-bottom">
      <div class="container">
        <div
          style="visibility: visible; animation-name: zoomIn;"
          class="col-md-12 text-center wow zoomIn"
        >
          <div class="footer_copyright">
            <p>Địa Chỉ : </p>
            <p>Hotline: </p>
            <p>© Copyright, All Rights Reserved.</p>
          </div>
        </div>
      </div>
    </div>
    <script src="<?php bloginfo('template_directory') ?>/bundles/jquery.js"></script>

    <script src="<?php bloginfo('template_directory') ?>/bundles/bootstrap.js"></script>

    <script defer src="<?php bloginfo('template_directory') ?>/Scripts/Home/jquery.min.js"></script>
    <script async src="<?php bloginfo('template_directory') ?>/Scripts/Home/jquery.easing.min.js"></script>
    <script async src="<?php bloginfo('template_directory') ?>/Scripts/Home/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory') ?>/Scripts/Home/slick.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory') ?>/Scripts/Home/custom.js"></script>
    <script src="<?php bloginfo('template_directory') ?>/Scripts/Home/contactform/contactform.js"></script>

    <script defer src="<?php bloginfo('template_directory') ?>/Scripts/OwlCarousel/owl.carousel.min.js"></script>

    <script src="<?php bloginfo('template_directory') ?>/Scripts/Home/searchform/extention/choices.js"></script>
    <script>
      const choices = new Choices("[data-trigger]", {
        searchEnabled: false,
        itemSelectText: "",
      });
    </script>

    <script defer src="<?php bloginfo('template_directory') ?>/Scripts/Home/home.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script>
      $('#filter-manufactures-form :radio').change(function () {
        var serviceId = $("#filter-services-form :checked").val();
        if(!serviceId) {
          serviceId = "-1";
        }

        if ($(this).is(':checked')) {
          var id = $(this).val();
          //Load devices
          $.ajax({
            url : "<?php echo admin_url('admin-ajax.php'); ?>",
            type: 'POST',
            dataType: 'html',
            data: {
              action: 'showChild',
              slug: id
            },
          })
          .done(function(data) {
            $('#filter-devices-form').html(data);
          })
          .fail(function() {
            console.log("error");
          })
          .always(function() {
          });

          var value = $( "#searchdevices" ).val();
          //Load sản phẩm
            $.ajax({
              url : "<?php echo admin_url('admin-ajax.php'); ?>",
              type: 'POST',
              dataType: 'html',
              data: {
                action: 'showChildProduct',
                slugHSX: id,
                slugService: serviceId,
                slugProduct: "-1",
                dataSearch: value
              },
            })
            .done(function(data) {
              $('.filter-result').html(data);
            })
            .fail(function() {
              console.log("error");
            })
            .always(function() {
            });
        } else {
            console.log($(this).val() + ' is now unchecked');
        }

      });
      
      //load dịch vụ
      $('#filter-devices-form').on( "change",":radio", function() {
        var value = $( "#searchdevices" ).val();
        var idHSX = $("#filter-manufactures-form :checked").val();
        if(!idHSX) {
          idHSX = "-1";
        }
        var serviceId = $("#filter-services-form :checked").val();
        if(!serviceId) {
          serviceId = "-1";
        }
        if ($(this).is(':checked')) {
          var idProduct = $(this).val();
          $.ajax({
            url : "<?php echo admin_url('admin-ajax.php'); ?>",
            type: 'POST',
            dataType: 'html',
            data: {
              action: 'showChildProduct',
              slugHSX: idHSX,
              slugService: serviceId,
              slugProduct: idProduct,
              dataSearch: value
            },
          })
          .done(function(data) {
            $('.filter-result').html(data);
          })
          .fail(function() {
            console.log("error");
          })
          .always(function() {
          });
        }
      });

      //laod dịc vụ
      $('#filter-services-form').on( "change",":radio", function() {
        var value = $( "#searchdevices" ).val();
        var idHSX = $("#filter-manufactures-form :checked").val();
        if(!idHSX) {
          idHSX = "-1";
        }
        var idProduct = $("#filter-devices-form :checked").val();
        if(!idProduct) {
          idProduct = "-1";
        }
        if ($(this).is(':checked')) {
          var serviceId = $(this).val();
          $.ajax({
            url : "<?php echo admin_url('admin-ajax.php'); ?>",
            type: 'POST',
            dataType: 'html',
            data: {
              action: 'showChildProduct',
              slugHSX: idHSX,
              slugService: serviceId,
              slugProduct: idProduct,
              dataSearch: value
            },
          })
          .done(function(data) {
            $('.filter-result').html(data);
          })
          .fail(function() {
            console.log("error");
          })
          .always(function() {
          });

          //Load devices
          $.ajax({
            url : "<?php echo admin_url('admin-ajax.php'); ?>",
            type: 'POST',
            dataType: 'html',
            data: {
              action: 'showChild',
              slug: idHSX
            },
          })
          .done(function(data) {
            $('#filter-devices-form').html(data);
          })
          .fail(function() {
            console.log("error");
          })
          .always(function() {
          });
        }
      });

      document.addEventListener( 'wpcf7mailsent', function( event ) {
          location = "<?php bloginfo( 'url' ); ?>/?page_id=83";
      }, false );
       
      $("#contact-customer-link").click(function(){
        $("#contact-customer-form").addClass("contact-show");
        if (
          $("#contact-practitioner-form").hasClass( "contact-show" ) 
        ) {
          $("#contact-practitioner-form").removeClass("contact-show");
        }

        if (
          $("#contact-partner-form").hasClass( "contact-show" ) 
        ) {
          $("#contact-partner-form").removeClass("contact-show");
        }
      });

      $("#contact-partner-link").click(function(){
        $("#contact-practitioner-form").addClass("contact-show");
        if (
          $("#contact-customer-form").hasClass( "contact-show" ) 
        ) {
          $("#contact-customer-form").removeClass("contact-show");
        }

        if (
          $("#contact-partner-form").hasClass( "contact-show" ) 
        ) {
          $("#contact-partner-form").removeClass("contact-show");
        }
      });

      $("#contact-practitioner-link").click(function(){
        $("#contact-partner-form").addClass("contact-show");

        if (
          $("#contact-practitioner-form").hasClass( "contact-show" ) 
        ) {
          $("#contact-practitioner-form").removeClass("contact-show");
        }

        if (
          $("#contact-customer-form").hasClass( "contact-show" ) 
        ) {
          $("#contact-customer-form").removeClass("contact-show");
        }
      });
    </script>
  <?php wp_footer() ?>
  </body>
</html>