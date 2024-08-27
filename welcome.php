<center>
<h1>WELCOME</h1>
<table border="0">
	<tr>
		<th><a href="?link=1">HOME</a></th>
		<th><a href="?link=2">TEAMS</a></th>
		<th><a href="?link=3">TEAMS LIST</a></th>
		<th><a href="?link=4">MATCHES</a></th>
		<th><a href="?link=5">MATCHES LIST</a></th>
		<th><a href="?link=6">LOGOUT</a></th>
	</tr>
	
</table><br>
<?php
$a=$_POST['link'];
if ($a==1) {
	require"home.php";
}
 else if($a==2) {
	require"team.php";
}
 else if($a==3) {
	require"team_list.php";
}
else if($a==4) {
	require"match.php";
}
else if($a==5) {
	require"match_list.php";
}
       else if ($a==6) {
	require"logout.php";
}
     
 
?>
</center>