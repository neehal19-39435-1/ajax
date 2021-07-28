<?php
include 'userJs.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>welcome</title>
</head>
<body>


	<?php
/*$usernameErr =  $username ="";
$flag = false;
if ($_SERVER["REQUEST_METHOD"] == "POST")
 {  
    if (empty($_GET['username'])) 
    {  
        $usernameErr = " Field can't be empty";
        $flag = True;
    } 
    if(!$flag) 
    {
     $username = input_data($_POST["username"]);
    }
    }
     function input_data($data) 
     {  
     $data = trim($data);  
     $data = stripslashes($data);  
     $data = htmlspecialchars($data);  
     return $data;  
    }*/
    ?>

<h2 align="center">Search User List</h2>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" name="userlist" onsubmit="fetch()">
   
   <label for="username">Enter Username:</label>
   <input type="text" name="username" align="center">
   <!--<span style="color: red"><?php echo $usernameErr; ?> </span>-->
   <input type="submit" name="submit" value="Search" align="center">
  
  
	
</form>
<br>
<table>
<tr>
<th>Id</th> 

<th>Username</th>

<th>First Name</th>

<th>Last Name</th>

</tr>
<tr>
<td><?php if(!empty($user["id"]))
{echo $user["id"];} else { echo "";} ?> </td>
<td><?php if(!empty($user["username"]))
{echo $user["username"];} else { echo "";} ?> </td>
<td><?php if(!empty($user["fname"]))
{echo $user["fname"];} else { echo "";} ?> </td>
<td><?php if(!empty($user["lname"]))
{echo $user["lname"];} else { echo "";} ?> </td>
</tr>

<script >

function fetch() {
var xhttp=new XMLHttpRequest();
xhttp.onload = function() 
{
if(this.status === 200) 
{ 
document.getElementById("id").innerHTML = JSON.parse(this.responseText).id;
document.getElementById("username").innerHTML = JSON.parse(this.responseText).username;
document.getElementById("fname").innerHTML = JSON.parse(this.responseText).fname;
document.getElementById("lname").innerHTML = JSON.parse(this.responseText).lname;
}
}
xhttp.open("POST", "userJs.php");
xhttp.send();
}


</script>


</body>
</html>