<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<center>
		<form method="post" action="">
			User name<br><br>
			<input type="text" name="uname" placeholder="Enter your user name here"><br><br>
			Password<br><br>
			<input type="Password" name="p1" placeholder="Enter your Password here"><br><br>
			Confirmed password<br><br>
			<input type="Password" name="p2" placeholder="Enter your password here"><br><br>
			<button type="submit" name="sv">Save</button><br><br>
			<a href="index.php">Login</a>
			<?php
     if (isset($_POST['sv'])) {
     	$a=$_POST['uname'];
     	$b=$_POST['p1'];
     	$c=$_POST['p2'];
     }
     if (empty($a)|| empty($b)|| empty($c)) {
     	echo "Please fill all fields to continue";
     }
     elseif ($b!=$c) {
     	echo "Password not matching";
     }
     else{
     	$con=new mysqli("localhost","root","","ferwafa");
     	$res=$con->query("INSERT INTO users VALUES('','$a','$b')");
     	echo "Data has been inserted well";

     }

			?>
		</form>
	</center>

</body>
</html>