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
            popup.innerHTML = '<p>Thank you for your message! We will get back to you soon.</p><button id=\"closeButton\">Close</button>';
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
                background: rgba(255, 255, 255, 0.8); /* Glass-like background color with transparency */
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
