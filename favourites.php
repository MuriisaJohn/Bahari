<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bahari</title>

    <link
      href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700"
      rel="stylesheet"
      type="text/css"
    />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
    <link href="css/flexslider.css" rel="stylesheet" />
    <link href="css/templatemo-style.css" rel="stylesheet" />
    <link href="css/scrollToTop.css" rel="stylesheet" />
    <!--Link to footer.css-->
    <link href="css/footer.css" rel="stylesheet" />

    <link href="css/logo.css" rel="stylesheet" />
    <link href="css/Homenavbar.css" rel="stylesheet" />
    <!-- Favicons -->
    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="./favicon/apple-touch-icon.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="./favicon/favicon-32x32.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="./favicon/favicon-16x16.png"
    />
    <link rel="manifest" href="./favicon/site.webmanifest" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- Icon -->
    <script
      src="https://kit.fontawesome.com/e9cf5a296c.js"
      crossorigin="anonymous"
    ></script>
  </head>

  <body class="tm-gray-bg">
    <!-- Scroll to Top Button -->
    <div class="scroll-up-btn">
      <i class="fa fa-angle-up"></i>
    </div>

 <!-- Header -->
 <div class="tm-header">
  		<div class="container">
  			<div class="row">
  				<div class="col-lg-6 col-md-4 col-sm-3 tm-site-name-container">
  					<a href="index.php" class="tm-site-name">
						<p  id ="logo">Bahari</p>
					</a>	
  				</div>
	  			<div class="col-lg-6 col-md-8 col-sm-9">
	  				<div class="mobile-menu-icon" id="mobile-menu-icon">
							<div class="mobile-menu-icon-wrap">
								<span class="stick stick-1"></span>
								<span class="stick stick-2"></span>
								<span class="stick stick-3"></span>
								<span class="stick stick-4"></span>
							</div>
		        </div>
	  				<nav class="tm-nav">
						<ul>
							<li><a class="upper_links" href="index.php">Home</a></li>
							<li><a id="one" href="about.html" class="active">About</a></li>
							<li><a class="upper_links" href="tours.php">Our Tours</a></li>
							<li><a class="upper_links" href="contact.html">Contact</a></li>
							<li><a href="favourites.php" class="active"><i class="fa fa-heart "></i></a></li>
						</ul>
					</nav>
	  			</div>
  			</div>
  		</div>
  	</div>

    <!-- Banner -->
    <section class="tm-banner">
      <!-- Flexslider -->
      <div class="flexslider flexslider-banner">
        <ul class="slides">
          <li>
            <div class="tm-banner-inner">
              <h1 class="tm-banner-title">
                Find <span class="tm-yellow-text">The Best</span> Place
              </h1>
              <p class="tm-banner-subtitle">For Your Holidays</p>
              <a href="#visit" class="tm-banner-link">Learn More</a>
            </div>
            <img src="img/banner-1.jpg" alt="Image" />
          </li>
          <li>
            <div class="tm-banner-inner">
              <h1 class="tm-banner-title">
                Walk <span class="tm-yellow-text"> through </span> dream
              </h1>
              <p class="tm-banner-subtitle">Wonderful Destinations</p>

              <a href="#popular" class="tm-banner-link">Learn More</a>
            </div>
            <img src="img/banner-2.jpg" alt="Image" />
          </li>
          <li>
            <div class="tm-banner-inner">
              <h1 class="tm-banner-title">
                Ride <span class="tm-yellow-text"> your </span> journey
              </h1>
              <p class="tm-banner-subtitle">Enjoy the nature</p>

              <a href="#visit" class="tm-banner-link">Learn More</a>
            </div>
            <img src="img/banner-3.jpg" alt="Image" />
          </li>
        </ul>
      </div>
    </section>

    <!-- gray bg -->
    <section class="container tm-home-section-1" id="more">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6">
          <!-- Nav tabs -->
          <div class="tm-home-box-1">
            <ul
              class="nav nav-tabs tm-white-bg"
              role="tablist"
              id="hotelCarTabs"
            >
              <li role="presentation" class="active">
                <a href="#hotel" aria-controls="hotel" role="tab" data-toggle="tab">Destinations</a>
					    </li>
					    <li role="presentation">
					    <!--	<a href="#car" aria-controls="car" role="tab" data-toggle="tab">Car Rental</a> -->
					    </li>
					</ul>

					<!-- Tab panes -->


          <?php
          // Establish a database connection (replace 'your_db_host', 'your_db_user', 'your_db_password', and 'your_db_name' with your actual database credentials)
          $servername = "localhost";
          $username = "root";
          $password = ""; // Assuming no password is required
          $dbname = "swiss_collection";
          
          // Create connection
          $conn = new mysqli($servername, $username, $password, $dbname);
          
          // Check connection
          if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
          }
          
          // Handle form submission
          if (isset($_POST['submit'])) {
              // Retrieve form data
              $place = $_POST['place'];
              $checkinDate = $_POST['checkin_date'];
              $email = $_POST['email'];
              $name = $_POST['name'];
          
              // Insert data into the database
              $sql = "INSERT INTO bookings (place, checkin_date, email, name) VALUES ('$place', '$checkinDate', '$email', '$name')";
           
              if ($conn->query($sql) === TRUE) {
                  // PHP code for successful submission
                
                  echo "<script>
                      // Your popup code here
                      var popup = document.createElement('div');
                      popup.innerHTML = '<h1>Booking placed sucessfully! We will get back to you soon.</h1><button id=\"closeButton\">OK!!</button>';
                      popup.classList.add('glass-popup'); // Add the glass-popup class
                      document.body.appendChild(popup);
                  
                      // Add event listener to close the popup when the close button is clicked
                      document.getElementById('closeButton').addEventListener('click', function() {
                          document.body.removeChild(popup);
                      });
                  </script>
                  
                  <style>
                      /* Add this style to your HTML or CSS */
                      .glass-popup {
                          background: rgba(255, 255, 255, 0.2); /* Glass-like background color with transparency */
                          border-radius: 10px;
                          box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Soft shadow effect */
                          padding: 70px;
                          position: fixed;
                          top: 50%;
                          left: 50%;
                          transform: translate(-50%, -50%);
                          z-index: 9999; /* Ensure the popup is above other elements */
                          backdrop-filter: blur(8px); /* Apply blur effect to the background */
                      }
                      /* Style for the close button */
          #closeButton {
          background-color: #007BFF; /* Button background color */
          color: #fff; /* Button text color */
          border: none;
          padding: 10px 15px;
          border-radius: 5px;
          cursor: pointer;
          margin-top: 10px;
          transition: background-color 0.3s;
          }
          
          #closeButton:hover {
          background-color: #0056b3; /* Hover color */
          }
                  </style>";
                 
                  
              } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
              }
          }
          
          // Close the database connection
          $conn->close();
          ?>
          

					<div class="tab-content">
					    <div role="tabpanel" class="tab-pane fade in active tm-white-bg" id="hotel">
					    	<div class="tm-search-box effect2">
								<form action="" method="post" class="hotel-search-form">
									<div class="tm-form-inner">
										
										<div class="form-group">
							            	 <select class="form-control" name="place">
							            	 	<option value="">-- Select places -- </option>
							            	 	<option value="shangrila">Asia</option>
												<option value="chatrium">Africa</option>
												<option value="fourseasons">Europe</option>
												<option value="hilton">Austrial</option>
												<option value="hilton">North America</option>
												<option value="hilton">South America</option>
											</select>
							          	</div>
							          	<div class="form-group">
							                <div class='input-group date' id='datetimepicker1'>
							                    <input type='text' class="form-control" placeholder="Check-in Date" name="checkin_date"required />
							                    <span class="input-group-addon">
							                        <span class="fa fa-calendar"></span>
							                    </span>
							                </div>
							            </div>
							          
										<div class="form-group margin-bottom-0">
											<input type='email' class="form-control" placeholder="email" name="email"required />
							            </div>
							            <div class="form-group margin-bottom-0">
											<input type='text' class="form-control" placeholder="name" name="name"required />
							            </div>
										
									</div>
						            <div class="tm-yellow-gradient-bg text-center">
						            	<button type="submit" name="submit" class="tm-yellow-btn">Book Now</button>
						            </div>
								</form>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane fade tm-white-bg" id="car">
                <div class="tm-search-box effect2">
                  <form action="#" method="post" class="hotel-search-form">
                    <div class="tm-form-inner">
                      <div class="form-group">
                        <select class="form-control">
                          <option value="">-- Select Model --</option>
                          <option value="shangrila">BMW</option>
                          <option value="chatrium">Mercedes-Benz</option>
                          <option value="fourseasons">Toyota</option>
                          <option value="hilton">Honda</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <div class="input-group date-time" id="datetimepicker3">
                          <input
                            type="text"
                            class="form-control"
                            placeholder="Pickup Date"
                          />
                          <span class="input-group-addon">
                            <span class="fa fa-calendar"></span>
                          </span>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="input-group date-time" id="datetimepicker4">
                          <input
                            type="text"
                            class="form-control"
                            placeholder="Return Date"
                          />
                          <span class="input-group-addon">
                            <span class="fa fa-calendar"></span>
                          </span>
                        </div>
                      </div>
                      <div class="form-group">
                        <select class="form-control">
                          <option value="">-- Options --</option>
                          <option value="">Child Seat</option>
                          <option value="">GPS Navigator</option>
                          <option value="">Insurance</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group tm-yellow-gradient-bg text-center">
                      <button type="submit" name="submit" class="tm-yellow-btn">
                        Check Now
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-6">
          <div class="tm-home-box-1 tm-home-box-1-2 tm-home-box-1-center">
            <img src="img/index-01.jpg" alt="image" class="img-responsive" />
            <a href="#">
              <div class="tm-green-gradient-bg tm-city-price-container">
                <span>Ethiopia</span>
                <span>$500</span>
              </div>
            </a>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
          <div class="tm-home-box-1 tm-home-box-1-2 tm-home-box-1-right">
            <img src="img/index-02.jpg" alt="image" class="img-responsive" />
            <a href="#">
              <div class="tm-red-gradient-bg tm-city-price-container">
                <span>Tanzania</span>
                <span>$200</span>
              </div>
            </a>
          </div>
        </div>
      </div>

      <div class="section-margin-top" id="visit">
        <div class="row">
          <div class="tm-section-header">
            <div class="col-lg-3 col-md-3 col-sm-3">
              <hr />
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <h2 class="tm-section-title">YOUR FAVOURITE PLACES</h2>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <hr />
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
            <div class="tm-home-box-2">
              <img src="img/index-03.jpg" alt="image" class="img-responsive" />
              <h3>Goa beach</h3>
              <p class="tm-date">28 March 2022</p>
              <div class="tm-home-box-2-container">
                <a
                  onclick="addPlace(this)"
                  data-name="Goa beach"
                  data-src="img/index-03.jpg"
                  class="tm-home-box-2-link"
                  ><i class="fa fa-heart tm-home-box-2-icon border-right"></i
                ></a>
                <a href="contact/contact.php" class="tm-home-box-2-link"
                  ><span class="tm-home-box-2-description">Travel</span></a
                >
                <a href="contact/contact.php" class="tm-home-box-2-link"
                  ><i class="fa fa-edit tm-home-box-2-icon border-left"></i
                ></a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
            <div class="tm-home-box-2">
              <img src="img/index-04.jpg" alt="image" class="img-responsive" />
              <h3>Thar desert</h3>
              <p class="tm-date">3 april 2022</p>
              <div class="tm-home-box-2-container">
                <a
                  onclick="addPlace(this)"
                  data-name="Rajasthan desert"
                  data-src="img/index-04.jpg"
                  class="tm-home-box-2-link"
                  ><i class="fa fa-heart tm-home-box-2-icon border-right"></i
                ></a>
                <a href="contact/contact.php" class="tm-home-box-2-link"
                  ><span class="tm-home-box-2-description">Travel</span></a
                >
                <a href="contact/contact.php" class="tm-home-box-2-link"
                  ><i class="fa fa-edit tm-home-box-2-icon border-left"></i
                ></a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
            <div class="tm-home-box-2">
              <img src="img/index-05.jpg" alt="image" class="img-responsive" />
              <h3>Konkan railway journey</h3>
              <p class="tm-date">24 March 2016</p>
              <div class="tm-home-box-2-container">
                <a
                  onclick="addPlace(this)"
                  data-name="Konkan railway journey"
                  data-src="img/index-05.jpg"
                  class="tm-home-box-2-link"
                  ><i class="fa fa-heart tm-home-box-2-icon border-right"></i
                ></a>
                <a href="contact/contact.php" class="tm-home-box-2-link"
                  ><span class="tm-home-box-2-description">Travel</span></a
                >
                <a href="contact/contact.php" class="tm-home-box-2-link"
                  ><i class="fa fa-edit tm-home-box-2-icon border-left"></i
                ></a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
            <div class="tm-home-box-2 tm-home-box-2-right">
              <img src="img/index-06.jpg" alt="image" class="img-responsive" />
              <h3>Tirthan Valley</h3>
              <p class="tm-date">13 june 2016</p>
              <div class="tm-home-box-2-container">
                <a
                  onclick="addPlace(this)"
                  data-name="Assam jungles"
                  data-src="img/index-06.jpg"
                  class="tm-home-box-2-link"
                  ><i
                    class="fa fa-heart tm-home-box-2-icon border-right heart-btn"
                  ></i
                ></a>
                <a href="contact/contact.php" class="tm-home-box-2-link"
                  ><span class="tm-home-box-2-description">Travel</span></a
                >
                <a href="contact/contact.php" class="tm-home-box-2-link"
                  ><i class="fa fa-edit tm-home-box-2-icon border-left"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <p class="home-description">
             Bahari is the travelling website which will guide you through
              out your travelling journey
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- footer -->
    <footer>        
        <div class = "pages">
            <div class="menu-items">
                <a href = "index.php"><span class= "decor">Home</span></a>
                <a href = "about.html"><span class= "decor">About</span></a>
                <a href = "tours.php"><span class= "decor">Our Tours</span></a>
                <a href = "contact.html"><span class= "decor">Contact</span></a>
            </div>
        </div>
        <div class= "logo_bot">
           <!-- <img src = "img/sht.png"> --> 
			<h3>Subscribe our Newsletter</h3>
			<div class="newsletter">
				<input type="text"name="newsletter"value="" placeholder="Enter your email">
				<button type="submit" name="submit">Submit </button>
			</div>
			<div class="bottom-footer">
				<p id = "customer">Customer satisfaction is our first priority</p><br>
				<p>Copyrights &copy <span id="copyrightYear">2023</span> Bahari | </p>
			</div>
        </div>
        
        <div class = "follow">
            <h4>Follow Us</h4>
            <div class="follow-social">
			<a href= "https://www.instagram.com/bahari_empire?igshid=YTQwZjQ0NmI0OA=="  ><i class="fab fa-instagram"></i></a></li>
              <a href="#"><i class="fab fa-twitter"></i></a></li>
              <a href="https://api.whatsapp.com/send?phone=+256706484537&text=Hello+Team%2C%0A+++I+am+interested+to+know+more+about+the+Bahari Emperail+travel agency+Kindly+share+ with me+full+details+about+the+agency."><i class="fab fa-whatsapp"></i></a></li>
                </div>
                
        </div>
    </footer>
    <!-- footer -->
  <!-- footer -->

	<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>      		<!-- jQuery -->
	<script type="text/javascript" src="js/scrollToTop.js"></script>					<!-- Scroll To Top -->
  	<script type="text/javascript" src="js/moment.js"></script>							<!-- moment.js -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>					<!-- bootstrap js -->
	<script type="text/javascript" src="js/bootstrap-datetimepicker.min.js"></script>	<!-- bootstrap date time picker js, http://eonasdan.github.io/bootstrap-datetimepicker/ -->
	<script type="text/javascript" src="js/date-check.js"></script>					<!-- bootstrap js -->

	<script src="js/rellax.min.js"></script>
	<script src="js/arz-main.js"></script>



	<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>

	<script type="text/javascript" src="js/templatemo-script.js"></script> <!-- Templatemo Script -->
	<script type="text/javascript" src="js/update-copyrightYear.js"></script> <!--Updating the copyright year-->
	<script>
      $(function () {
        // https://css-tricks.com/snippets/jquery/smooth-scrolling/
        $("a[href*=#]:not([href=#])").click(function () {
          if (
            location.pathname.replace(/^\//, "") ==
              this.pathname.replace(/^\//, "") &&
            location.hostname == this.hostname
          ) {
            var target = $(this.hash);
            target = target.length
              ? target
              : $("[name=" + this.hash.slice(1) + "]");
            if (target.length) {
              $("html,body").animate(
                {
                  scrollTop: target.offset().top,
                },
                1000
              );
              return false;
            }
          }
        });
      });
      $(window).load(function () {
        // Flexsliders
        $(".flexslider.flexslider-banner").flexslider({
          controlNav: false,
        });
        $(".flexslider").flexslider({
          animation: "slide",
          directionNav: false,
          slideshow: false,
        });
      });
    </script>
    <script type="text/javascript" src="./js/onscrollReveal.js"></script>

    <!-- footer -->

    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
    <!-- jQuery -->
    <script type="text/javascript" src="js/scrollToTop.js"></script>
    <!-- Scroll To Top -->
    <script type="text/javascript" src="js/moment.js"></script>
    <!-- moment.js -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- bootstrap js -->
    <script
      type="text/javascript"
      src="js/bootstrap-datetimepicker.min.js"
    ></script>
    <!-- bootstrap date time picker js, http://eonasdan.github.io/bootstrap-datetimepicker/ -->
    <script type="text/javascript" src="js/jquery.flexslider-min.js"></script>

    <script type="text/javascript" src="js/templatemo-script.js"></script>
    <!-- Templatemo Script -->
    <script>
   document.addEventListener('DOMContentLoaded', function () {
    var mobileMenuIcon = document.getElementById('mobile-menu-icon');
    var tmNav = document.querySelector('.tm-nav');

    mobileMenuIcon.addEventListener('click', function () {
        mobileMenuIcon.classList.toggle('show');
        tmNav.classList.toggle('show');
    });
});

</script>

    <script>
      // HTML document is loaded. DOM is ready.
      $(function () {
        $("#hotelCarTabs a").click(function (e) {
          e.preventDefault();
          $(this).tab("show");
        });

        $(".date").datetimepicker({
          format: "MM/DD/YYYY",
        });
        $(".date-time").datetimepicker();

        // https://css-tricks.com/snippets/jquery/smooth-scrolling/
        $("a[href*=#]:not([href=#])").click(function () {
          if (
            location.pathname.replace(/^\//, "") ==
              this.pathname.replace(/^\//, "") &&
            location.hostname == this.hostname
          ) {
            var target = $(this.hash);
            target = target.length
              ? target
              : $("[name=" + this.hash.slice(1) + "]");
            if (target.length) {
              $("html,body").animate(
                {
                  scrollTop: target.offset().top,
                },
                1000
              );
              return false;
            }
          }
        });
      });

      // Load Flexslider when everything is loaded.
      $(window).load(function () {
        //	For images only
        $(".flexslider").flexslider({
          controlNav: false,
        });
      });

      //favourites
      let places = [];
      if (localStorage.getItem("places")) {
        places = JSON.parse(localStorage.getItem("places"));

        let favBox = document.getElementById("fav-box");
        let box = "";

        places.forEach((place) => {
          box += `<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12 mb3">
					<div class="tm-home-box-2 ">
						<img src="${place.placeSrc}" alt="image" class="img-responsive">
						<h3>${place.placeName}</h3>
						<p class="tm-date">28 March 2022</p>
						<div class="tm-home-box-2-container">
							<a href="#" class="tm-home-box-2-link"><i class="fa fa-heart tm-home-box-2-icon border-right"></i></a>
							<a href="#" class="tm-home-box-2-link"><span class="tm-home-box-2-description">Travel</span></a>
							<a href="#" class="tm-home-box-2-link"><i class="fa fa-edit tm-home-box-2-icon border-left"></i></a>
						</div>
					</div>
				</div>`;
        });
        favBox.innerHTML = box;
      }
    </script>
  </body>
</html>
