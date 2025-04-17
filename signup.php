<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
// Database connection
$conn = mysqli_connect("localhost", "root", "", "data");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

/*if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect the data
    $username = $_POST['username'];
    $plainPassword = $_POST['pswd'];
    $password = password_hash($plainPassword, PASSWORD_DEFAULT);
    $cpassword = password_hash($_POST['cpswd'], PASSWORD_DEFAULT);
	

    // Check if data is received properly
   // echo "Username: " . $username . "<br>";
   // echo "Password: " . $plainPassword . "<br>";  // Display the plain password for debugging purposes

    // Insert data into the database
    $query = "INSERT INTO registration(username, password,) VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $query);

    // Check if the prepare statement was successful
    if ($stmt) {
        // Bind parameters
        mysqli_stmt_bind_param($stmt, 'ss', $username, $password);

        // Execute the statement
        $result = mysqli_stmt_execute($stmt);

        if ($result) {
            echo "Registration successful";
        } else {
            echo "Error executing statement: " . mysqli_error($conn);
        }
        
        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        echo "Error preparing statement: " . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);*/

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect the data
    $username = $_POST['username'];
    $plainPassword = $_POST['pswd'];
    $password = password_hash($plainPassword, PASSWORD_DEFAULT);
    $cpassword = password_hash($_POST['cpswd'], PASSWORD_DEFAULT);
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    // Insert data into the database
    $query = "INSERT INTO registration(username, password, confirmpassword, email, address, phone) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $query);

    // Check if the prepare statement was successful
    if ($stmt) {
        // Bind parameters
        mysqli_stmt_bind_param($stmt, 'ssssss', $username, $password, $cpassword, $email, $address, $phone);

        // Execute the statement
        $result = mysqli_stmt_execute($stmt);

        if ($result) {
            //echo "Registration successful";
		//header("Location: login1.html");
		echo "<script>alert('registered successfully'); window.location.href = 'login1.html'</script>";
 //header("Location: login.html");
        } else {
            echo "Error executing statement: " . mysqli_error($conn);
        }
        
        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        echo "Error preparing statement: " . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
?>

