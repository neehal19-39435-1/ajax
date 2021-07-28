<?php 
    session_start();

 

    $username = "";

 

    if(isset($_SESSION['username'])) 
    {
        $username = $_SESSION['username'];
    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>DATABASE</title>
</head>
<body>
<div style="background-color: pink;width: 100%; height: auto; text-align: center;">
<h1 style="color:white;text-align:center">Hello, <?php echo $username; ?></h1>
      <fieldset style="background-color: pink; text-align: center;" >
        
        <span style="color: red"><p></p></span>
        <span style="color: blue"></span><a href="SearchList.php">SEARCH USERS LIST</a>
        <br> <br>
        

    </fieldset>
</div>
</body>
</html>