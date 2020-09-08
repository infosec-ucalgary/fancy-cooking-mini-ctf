<?php
$username = $_POST['uname'];
$password = $_POST['passw'];


$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "minictf";

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

if (mysqli_connect_error()){
	echo "Error:" . $conn->connect_error;
    echo "This was sad";
} else {
    $SELECT = "SELECT * FROM users WHERE username='" .$username ."' AND password='" .$password ."'";

    $stmt = $conn->prepare($SELECT);
    echo $conn->error;
    $stmt->execute();
    $stmt->store_result();
    $num_row = $stmt->num_rows;
    $stmt->fetch();
    $stmt->close();
  
      if( $num_row === 1 ) {
        header("Location: ./search.html");
      } else {
      header("Location: ./login.html");
      }

}

?>