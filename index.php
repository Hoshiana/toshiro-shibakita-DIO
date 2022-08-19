<html>

<head>
<title>PHP example</title>
</head>
<body>

<?php
ini_set("display_errors", 1);
header('Content-Type: text/html; charset=iso-8859-1');



echo 'Current Version of PHP: ' . phpversion() . '<br>';

$servername = "Insert here IP number of the Mysql server";
$username = "root";
$password = "Password123";
$database = "Insert the name of the database here";

// create connection


$link = new mysqli($servername, $username, $password, $database);

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$valor_rand1 =  rand(1, 999);
$valor_rand2 = strtoupper(substr(bin2hex(random_bytes(4)), 1));
$host_name = gethostname();


$query = "INSERT INTO dados (StudentsID, Name, Surname, Address, City, Host) VALUES ('$value_rand1' , '$value_rand2', '$value_rand2', '$value_rand2', '$value_rand2','$host_name')";


if ($link->query($query) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $link->error;
}

?>
</body>
</html>
