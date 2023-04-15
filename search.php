<!DOCTYPE html>
<html>
<head>
	<title>Search Bar using PHP</title>
	<style>
		input[type="text"] {
            /* border: none; */
            border-radius: 15px;
            background-repeat: no-repeat;
            background-size: 25px 25px;
            background-position: 10px;
            background-image: url(search.svg);
            background-color: #f7f8fa;
            height: 35px;
            width: 155px;
            font-size: 16px;
            padding-left: 45px;
        }
		table, th, td {
  border: 1px solid black;
 
}
       

	</style>
</head>
<body>
<center>
<form method="post">
<br><br><label>Search any tender</label>
<input type="text" name="search"><br><br>
<input type="submit" name="submit" class="a">
	
</form>
</center>
</body>
</html>
<?php

$con = new PDO("mysql:host=localhost;dbname=dashbip",'root','');

if (isset($_POST["submit"])) {
	$str = $_POST["search"];
	$sth = $con->prepare("SELECT * FROM `dashdet` WHERE tendername = '$str'");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth->execute();

	if($row = $sth->fetch())
	{
		?>
		<br><br><br>
		<h3>here's your search result</h3>
		<table  style="width:400px">
			<tr style="height:40px"><h2>
				<th>Tender Name</th>
				<th>Last Date</th>
				<th>Info</th>
				<th>Apply</th></h2>
			</tr>
			<tr style="height:40px"><h2><center>
				<td><?php echo $row->tendername; ?></td>
				<td><?php echo $row->ldate;?></td>
				<td><a href="https://drive.google.com/drive/u/0/folders/1uLC7dVyxLdJr4EUgqUhkp9H0UIXTKiwv">info</a></td>
				<td><a href="form.html">Apply</a></td></center>
			</h2>
			</tr>

		</table>
<?php 
	}
		
		
		else{
			echo "<br><br><h2>This Tender Does not exist!!</h2>";
		}


}

?>








