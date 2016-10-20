<?php
   //Start your session
   session_start();
   //Read your session (if it is set)
   if (isset($_SESSION['userlogin']))
      echo $_SESSION['userlogin'];

function currentUser(){
	/*require_once("config.php");
 
$sql = "SELECT first_name FROM user ";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
     output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
        echo  $row["first_name"].  "<br>";
    }
} else {
    echo "Stranger";
}

mysqli_close($con);
*/
if (isset($_SESSION['userlogin']))
      echo $_SESSION['userlogin'];

}
?>