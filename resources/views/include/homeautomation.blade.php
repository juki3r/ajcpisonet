

<?php
    $host = "localhost";		         // host = localhost because database hosted on the same server where PHP files are hosted
    $dbname = "u539703395_ajcpisonet";              // Database name
    $username = "u539703395_juki3r";		// Database username
    $password = "Durt3211631!";	        // Database password


// Establish connection to MySQL database
$conn = new mysqli($host, $username, $password, $dbname);


// Check if connection established successfully
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

else { 
    echo "Connected to mysql database. "; 
    // $sql = "INSERT INTO automation (s1) VALUES (1)"; 
 


    // if ($conn->query($sql) === TRUE) {
    //     echo "Values inserted in MySQL database table.";
    // } else {
    //     echo "Error: " . $sql . "<br>" . $conn->error;
    // }
}

   
// Get date and time variables
    date_default_timezone_set('Asia/Kolkata');  // for other timezones, refer:- https://www.php.net/manual/en/timezones.asia.php
    $d = date("Y-m-d");
    $t = date("H:i:s");
    
// If values send by NodeMCU are not empty then insert into MySQL database table

  if(!empty($_POST['s1']))
    {
		$val = $_POST['s1'];
// Update your tablename here
	        $sql = "INSERT INTO automation (s1) VALUES (1)"; 
 


		if ($conn->query($sql) === TRUE) {
		    echo "Values inserted in MySQL database table.";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}


// Close MySQL connection
$conn->close();



?>
