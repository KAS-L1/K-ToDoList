<?php 

// Database connection parameters
$sName = "localhost";  // Server name, typically 'localhost' for local development
$uName = "root";       // Username for MySQL database, 'root' is default for XAMPP/MAMP
$pass = "";            // Password for MySQL database, typically empty for local development
$db_name = "to_do_list"; // Name of the database you want to connect to

try {
    // Create a new PDO instance to connect to the MySQL database
    // The DSN (Data Source Name) specifies the database type (mysql), host (server name), and database name
    $conn = new PDO("mysql:host=$sName;dbname=$db_name", $uName, $pass);
    
    // Set an attribute on the database handle to throw exceptions for errors
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // If the connection is successful, you could uncomment the following line to confirm
    // echo "Connected"; 
}
catch(PDOException $e) {
    // If there is an error during the connection, catch the exception and display an error message
    echo "Connection failed: " . $e->getMessage();
}
