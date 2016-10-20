<?php
   //Fetch the username from the database
   //The $login and $password I use here are examples. You should substitute this
   //query with one that matches your needs and variables.
   //On top of that I ASSUMED you are storing your passwords MD5 encrypted. If not,
   //simply remove the md5() function from below.
   require_once("config.php");
   $query = ("SELECT username FROM user WHERE username = '".$username."' AND password = '".$password."'");
   $result = mysql_query($sql);

   //Check if any row was returned. If so, fetch the name from that row
if (mysql_num_rows($sql) == 1) {
      $row = mysql_fetch_assoc_assoc($sql);
      $name = $row['name'];

      //Start your session
      session_start();
      //Store the name in the session
      $_SESSION['userlogin'] = $name;
   }
   else 
      echo "The combination of the login and password do not match" ;
?>