<h1><u>TEAM_LIST</u></h1>
<form method="post" action="">
<table border="1px" width="400px" height='100px' cellpadding="2" cellspacing="0">
	<tr>
		<th>NO</th>
		<th>TEAM NAME</th>
		<th>YEAR</th>
		<th colspan="2">OPTION</th>
		<?php

       $con=new mysqli("localhost","root","","ferwafa");
       $res=$con->query("SELECT * FROM teams");
       $y=0;
       while ($row=$res->fetch_object()) {
       	$y++;
       	$row->tid;
       	echo "<tr>
         <td>".$y."</td>
         <td>".$row->tname."</td>
         <td>".$row->year."</td>
         <td><a href='?link=3&&delid=$tid'>Delete</a></td>
   <td><a href='?link=3&&upid=$tid'>Update/Edit</a></td>
         

       	</tr>";
       }
       if (isset($_GET['delid'])) {
       	$a=$_GET['delid'];
       	$res=$con->query("DELETE FROM teams WHERE tid='$a'");
       }
		?>
	</tr>
	</tr>
	</table>
</form>
