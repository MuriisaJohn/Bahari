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
            echo "<script>alert('Message submitted successfully')</script>";
            // Redirect to the success page after showing the alert
            header("Location: contact.html");
           

            $conn->close(); // Close connection after successful submission
            exit(); // Exit to prevent further execution
        } else {
            // PHP code for database error
            echo "<p style='color: red;'>Error: " . $sql . "<br>" . $conn->error . "</p>";
        }
    } else {
        echo "<script>
                // JavaScript for displaying a popup
                alert('Please provide valid information for required fields.');
              </script>";
    }
} else {
   
    echo "<script>
    // JavaScript for displaying a popup
    alert('Invalid request.');
  </script>";

}
?>
