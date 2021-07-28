<?php
include 'dbInsert.php';

if(!empty($_POST['search']) or !empty($_POST["username"]))
{
    $users =getUsers($_POST['username']);
	for($i = 0; $i < count($users); $i++)
{
	 $user["id"] = $users[$i]["id"];
	 $user["username"] = $users[$i]["username"];
	 $user["fname"] = $users[$i]["fname"];
	 $user["lname"] = $users[$i]["lname"];
}

  json_encode($user);
}
else
{
   echo"";
}



  
?>