
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="Contact.css">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/logo.css" rel="stylesheet">
    <link href="../css/templatemo-style.css" rel="stylesheet">
    
</head>
<body>
    	<!-- Header -->
	<div class="tm-header">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-4 col-sm-3 tm-site-name-container">
					<a href="../index.php" class="tm-site-name">
						
						<p  id ="logo">Bahari</p>
					</a>
				</div>
				<div class="col-lg-6 col-md-8 col-sm-9">
					<div class="mobile-menu-icon">
						<div class="mobile-menu-icon-wrap">
							<span class="stick stick-1"></span>
							<span class="stick stick-2"></span>
							<span class="stick stick-3"></span>
							<span class="stick stick-4"></span>
						</div>
					</div>
					<nav class="tm-nav">
						<ul>
							<li><a id="one" href="../index.php" class="active">Home</a></li>
							<li><a class="upper_links" href="../about.html">About</a></li>
							<li><a class="upper_links" href="../tours.php">Our Tours</a></li>
							<li><a class="upper_links" href="../contact.html">Contact</a></li>
							<li><a href="../favourites.php" class="active"><i class="fa fa-heart "></i></a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div
    <section id="section-wrapper">
        <div class="box-wrapper"style="
        top: 100px" >
            <div class="info-wrap">
                <h2 class="info-title">Contact Information</h2>
                <h3 class="info-sub-title">Fill up the form and our Team will get back to you within 24 hours</h3>
                <ul class="info-details">
                    <li>
                        <i class="fas fa-phone-alt"></i>
                        <span>Phone:</span> <a href="tel:+ 256706484537">+256706484537</a>
                    </li>
                    <li>
                        <i class="fas fa-paper-plane"></i>
                        <span>Email:</span> <a href="mailto:info@bahari.dev">info@bahari.dev</a>
                    </li>
                    <li>
                        <i class="fas fa-globe"></i>
                        <span>Website:</span> <a href="#">bahariemperail.com</a>
                    </li>
                </ul>
                <ul class="social-icons">
                    <li><a href= "https://www.instagram.com/bahari_empire?igshid=YTQwZjQ0NmI0OA=="  ><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="https://api.whatsapp.com/send?phone=+256706484537&text=Hello+Team%2C%0A+++I+am+interested+to+know+more+about+the+Bahari Emperail+travel agency+Kindly+share+ with me+full+details+about+the+agency."><i class="fab fa-whatsapp"></i></a></li>
                </ul>
            </div>
            <div class="form-wrap">

               
                


                <form action="" method="post"  >
                    <h2 class="form-title">Send us a message</h2>
                    <div class="form-fields">
                        <div class="form-group">
                            <input type="text" id="fname" name="fname"  placeholder="First Name" required>
                        </div>
                        <div class="form-group">
                            <input type="text" id="lname" name="lname" placeholder="Last Name">
                        </div>
                        <div class="form-group">
                            <input type="email" id="email"name="email" placeholder="Mail"required>
                        </div>
                        <div class="form-group">
                            <input type="number" id="phone" name="phone" placeholder="Phone"required>
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="message" placeholder="How can we help you"required></textarea>
                        </div>
                    </div>
                    <input type="submit" value="Send Message" class="submit-button">
                </form>



                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Check if all necessary fields are set
                    if (
                        isset($_POST['fname']) && isset($_POST['email']) &&
                        !empty($_POST['fname']) && !empty($_POST['email'])
                    ) {
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
                
                        // Sanitize inputs to prevent SQL injection
                        $fname = mysqli_real_escape_string($conn, $_POST['fname']);
                        $lname = isset($_POST['lname']) ? mysqli_real_escape_string($conn, $_POST['lname']) : '';
                        $email = mysqli_real_escape_string($conn, $_POST['email']);
                        $phone = isset($_POST['phone']) ? mysqli_real_escape_string($conn, $_POST['phone']) : '';
                        $message = isset($_POST['message']) ? mysqli_real_escape_string($conn, $_POST['message']) : '';
                
                        // SQL query to insert data into the database
                        $sql = "INSERT INTO contactus (fname, lname, email, phone, message) 
                                VALUES ('$fname', '$lname', '$email', '$phone', '$message')";
                
                if ($conn->query($sql) === TRUE) {
                    // PHP code for successful submission
                  
                    echo "<script>
                        // Your popup code here
                        var popup = document.createElement('div');
                        popup.innerHTML = '<h1>Thank you for your message! We will get back to you soon.</h1><button id=\"closeButton\">Close</button>';
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
                   
                    
                }
                 else {
                            // PHP code for database error
                            echo "<p style='color: red;'>Error: " . $sql . "<br>" . $conn->error . "</p>";
                        }
                    } else {
                        echo "<script>
                                // JavaScript for displaying a popup
                                alert('Please provide valid information for required fields.');
                              </script>";
                    }
                } 
                ?>
                <!-- Add this div for the success message -->
<div id="successMessage" style="display: none;">
    <p>Thank you for your message! We will get back to you soon.</p>
</div>

            </div>
        </div>
    </section>
	  <script src="https://smtpjs.com/v3/smtp.js"></script>
     <script src="form.js"></script>
    
</body>
</html>