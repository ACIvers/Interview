

<?php
/*
function addUser($username, $password, $first_name, $last_name, $mail, $role_id)
{
$con = new mysqli($host, $user, $pass, $db);
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 

$sql = "INSERT INTO user (username, password, first_name, last_name, mail, role_id)
VALUES ($username, $password, $first_name, $last_name, $mail, $role_id)";

if ($con->query($sql) === TRUE) {
    echo "User succesfully added";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close()*/








require("config.php");
function addUser($username, $password, $first_name, $last_name, $mail, $role_id)
{
$username = $_POST['username'];
$password = $_POST['password'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$mail = $_POST['mail'];
$role_id = $_POST['role_id'];
	$query = "INSERT INTO `user` (username, password, first_name, last_name, mail, role_id) VALUES ('$username', '$password', '$first_name', '$last_name', '$mail', '$role_id')";
	
	
$result = mysql_query($query);
        if($result){
            $msg = "User Created Successfully.";
        }
		else{ $msg = "nope.jpeg";
    }
}

?>