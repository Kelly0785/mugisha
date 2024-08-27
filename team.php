<body>
	<center>
		<form method="post" action="">
			<h2>Team name</h2>
			<input type="text" name="tnm" placeholder="Enter Team name"><br>
			<h2>year</h2>
			<input type="number" name="yr" placeholder="Enter year number"><br><br><br>
			<button type="submit" name="sv">save</button>
		<?php

      if (isset($_POST['sv'])) {
      	$a=$_POST['tnm'];
      	$b=$_POST['yr'];
      	if (empty($a)|| empty($b)) {
      		echo "please fill all fields";
      	}
      	else{
      		$con=new mysqli("localhost","root","","ferwafa");
      		$res=$con->query("INSERT INTO teams VALUES('','$a','$b')");
      		echo "databhas been inserted well";
      	}
      }
		?>
			
		</form>
	</center>
</body>