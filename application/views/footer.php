<!DOCTYPE html>
<html lang="en">
  <style>
    .mu-footer-top{
      background-color: #3bb570;

    }
    .mu-footer-top hr{
      color: #343a40 !important;


    }
    .mu-footer-bottom{
      background-color: #2e955b!important;
    }

    #map {
        width: 100%;
        height: 200px;
        background-color: grey;
    }

    @media (max-width: 768px) {
      .mu-single-footer{
        width: 100%;
      }
    }

  </style>
  <body>
    <footer id="mu-footer">
      <div class="mu-footer-top">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-6">
              <div class="mu-single-footer">
                <h3 style="margin-bottom: 15px; color:white !important;">PERGUNAS</h3>
                <p style="font-size:12px;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus. </p>
                <hr style="background-color:white !important;">
                <h3 style="margin-bottom: 15px; color:white !important;">CONTACT INFORMATION</h3>
                <p style="font-size:12px; margin-bottom:5px !important; "><span class="fa fa-home"></span> Jalan Cempaka Baru Timur No.1 RT 15 RW 06 Kemayoran, Jakarta Pusat, DKI Jakarta 10640</p>
                <hr style="background-color:white !important;margin-top:0px !important;margin-bottom:5px !important; ">
                <p style="font-size:12px; margin-bottom:5px !important; "><span class="fa fa-phone"></span> (021)4211834</p>
                <hr style="background-color:white !important;margin-top:0px !important; margin-bottom:5px !important;">
                <p style="font-size:12px; margin-bottom:5px !important; "><span class="fa fa-envelope"></span> pergunas@gmail.com</p>
                <hr style="background-color:white !important;margin-top:0px !important; margin-bottom:5px !important;">
              </div>
            </div>
            <div class="col-12 col-md-6">
              <h3 style="margin-bottom: 15px;font-size:18px; color:white !important;">PETA</h3>
              <!--The div element for the map -->
              <div id="map"></div>


              <script>
                // Initialize and add the map
                function initMap() {
                  // The location of Uluru
                  var uluru = {lat: -6.169580, lng: 106.862316};
                  // The map, centered at Uluru
                  var map = new google.maps.Map(
                      document.getElementById('map'), {zoom: 18, center: uluru});
                  // The marker, positioned at Uluru
                  var marker = new google.maps.Marker({position: uluru, map: map});
                }
              </script>
              <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB-84UI_etvHdodKhqyMfY2z9F8XgBv1oY&callback=initMap">
              </script>
            </div>
                <!-- <div class="mu-social-media">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a class="mu-twitter" href="#"><i class="fa fa-twitter"></i></a>
                  <a class="mu-pinterest" href="#"><i class="fa fa-pinterest-p"></i></a>
                  <a class="mu-google-plus" href="#"><i class="fa fa-google-plus"></i></a>
                  <a class="mu-youtube" href="#"><i class="fa fa-youtube"></i></a>
                </div> -->
          </div>
        </div>
      </div>
      <div class="mu-footer-bottom">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="mu-footer-bottom-area">
                <p class="mu-copy-right">&copy; Copyright <a rel="nofollow" href="http://markups.io">markups.io</a>. All right reserved.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
