<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="logo15.png" type="image/x-icon">
    <title>TenderByte</title>
    <link href="style.css" type="text/css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
        .main {
            justify-content: space-between;
            margin: 5px 5px 2px;
            font-family: sans-serif;
        }

        .form {
            margin-left: 35%;
            width: 30%;
            height: 660px;
            box-sizing: border-box;
            background-color: white;
            text-align: center;
            box-shadow: 1px 1px 2px grey;
            border-radius: 10px;
            margin-bottom: 25px;
            padding-top: 10px;
        }

        .form h2 {
            text-align: center;
        }

        input {
            width: 85%;
            margin-bottom: 15px;
            height: 35px;
            background-color: rgb(255, 255, 255);
            border: none;
            padding-left: 8px;
            border: solid rgb(209, 205, 205) 1px;
            border-radius: 5px;
        }

        .a {
            color: white;
            background-color: #0870d1;
            border: none;
            border-radius: 40px;
            cursor: pointer;
            width: 85%;
            height: 50px;
            font-size: 17px;
        }

        .a1,
        .a2,
        .a3 {
            border-radius: 40px;
            cursor: pointer;
            width: 85%;
            background-repeat: no-repeat;
            background-position: 15px;
            position: left;
            height: 50px;
            font-size: 17px;
        }

        .a1 {
            border: none;
            color: white;
            background-color: #000000;
            background-image: url("https://cdn.freebiesupply.com/logos/large/2x/apple-1-logo-black-and-white.png");
            background-size: 25px;
        }

        .a2 {
            border: none;
            color: white;
            background-color: #3c5a96;
            background-image: url("https://seeklogo.com/images/F/facebook-circle-logo-866E22DBE0-seeklogo.com.png");
            background-size: 35px;
        }

        .a3 {
            color: grey;
            background-color: white;
            background-image: url("https://www.freepnglogos.com/uploads/google-logo-png/google-logo-png-google-icon-logo-png-transparent-svg-vector-bie-supply-14.png");
            border: 5px solid grey I !important;
            background-size: 25px;
        }


        a:hover {
            color: rgb(105, 100, 179);
            background-color: transparent;
        }

        a:link {
            color: rgb(0, 0, 0);
            background-color: transparent;
            text-decoration: none;
        }

        a:visited {
            color: rgb(0, 0, 0);
            background-color: transparent;
            text-decoration: none;
        }

        body {
            height: 100%;
            width: 100%;
            padding: 0;
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f7f8fa;
        }

        header {
            display: flex;
            justify-content: space-between;
            position: fixed;
            background-color:  rgb(255, 255, 255);
            width: 100%;
            height: 80px;
            top: 0;
            box-shadow: 0 0 2px grey;
            z-index:99;
        }

        header a img {
            float: left;
            margin-top: 2%;
            margin-right: 2%;
        }

        .nav__links {
            list-style: none;
            padding: 20px 10px 10px 30px;
            font-size: 16px;
            width: 60%;
            margin-left: 2%;
        }

        .nav__links li {
            display: inline-block;
            padding: 0px 10px;
        }

        .nav__links li a {
            transition: all 0.3s ease 0s;
            text-decoration: none;
            color: black;
        }

        .nav__links li a:hover {
            color: #0870d1;
        }

        li.dropdown {
            display: inline-block;
        }

        .arrow {
            float: right;
            margin-top: -19px;
            margin-left: 5px;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            min-width: 120px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
            background-color: white;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown-content a:hover {
            background-color: #0870d1;
            color: white !important;
        }

        .login {
            padding: 0px 25px 10px 25px;
            margin-top: 18px;
            width: 32%;
        }

        .login li {
            display: inline-block;
            padding: 0px 8px;
        }

        input[type="text"] {
            border: none;
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

        .login li .want-border {
            box-sizing: border-box;
            border: 2px solid black;
            border-radius: 20px;
            padding: 5px 15px;
        }

        .login li a {
            text-decoration: none;
            color: black;
            font-weight: 600;
        }

        .login li a:hover {
            color: #0870d1;
        }

        .beta:link {
            background-color: #91c4f2;
            font-size: 12px;
            font-weight: 600;
            padding: 3px;
            border-radius: 3px;
        }

        .beta:hover {
            color: black !important;
        }

        .col:hover {
            text-decoration: underline;
        }

        .col:visited {
            color: #2a9df4;
        }
    </style>
</head>

<body>
    <header>
        <div class="nav__links">
            <a href="index.html">
                <img src="logo1.jpeg"
                    width="100px" height="35px" style="margin-top: 0px;" />
            </a>
            <ul>
                <li class="dropdown">
                    <a class="dropbtn" href="Galleries.html"><b>Services </b> <img class="arrow" src="down arrow.jpeg"
                            width="18px" height="20px"></a>
                    <div class="dropdown-content">
                        <a href="Popular.html">Local Tenders</a>
                        <a href="Fresh.html">National Tenders</a>
                        <a href="Echoice.html">Eprocurment Solution</a>
                        <a href="Galleries.html"> Tendering Solution</a>
                    </div>
                </li>
                
                <li><a href="#"> <b>Digital Certificate</b> </a></li>
                <li><a href="#"> <b>Contact Us</b></a></li>
                <li><a href="about.html"> <b>About Us</b></a></li>
            </ul>
        </div>

        <ul class="login">
            <a href="search.php"><button type="submit" value="Search">Search Tender</button></a>
            <li><a href="Login.html"> Log in </a></li>
            <li><a href="email.html" class="want-border"> Sign Up </a></li>
        </ul>
    </header>

    <br><br><br><br><br>
    <div class="middle" >
		<div style="background-image:url('back.jpg');">
		<p>
			<br> <br>
				TenderByte <br>
			<font size="5px"> We Care 4 Ur Time </font>
		</p> 
		</div>
	</div>
	
	<div class="bottom">
		<div>
			<table border="0">
				<tr>
					<td width="700px"><br>
						<h1 style="background: #c8c0d5;
	display: flex;
	align-items: center;
	justify-content: center;
	height: 100%;
	color: rgba(172, 106, 172, 1);
	font-family: 'Righteous', cursive;
	font-size: 2rem;"><font> HELLO FOLKS!! </font></h1> <br> 

					<font color="#000" size="5px"> We Have Tender Options for You! </font> <br> <br>

<br>
  <u><h1><font color="#fa0707"> RECENT TENDERS OPEN FOR APPLYING -</font></h1></u>
<br><br>
<font size="6px" color="pink"> 
                        <div class="panel-heading" style="background-color:#307a86; color:#ffffff; text-align:center">Active Tenders</div>
                    </font>
            <table style="margin-top:20px">
                <div >
                    
                    
                    <center>
                    <div class="main">
                        <div></div>
                    </div>
                </center>
                <center>
                <div class="container">
                    <div class="panel panel-primary">
                        
                        <div class="panel-body">
                        <table class="table">
      <thead bgcolor="#ce7e00">
        <tr>
        <th>Tender Particular</th>
        <th>College Name</th>
        <th>Last Date of Submission</th>
        <th>Tender details</th>
        <th>Apply</th>
        <tr>
      </thead>

      <tbody  bgcolor="#fff2cc" >
        <?php
        error_reporting(0);
        $servername="localhost";
        $username="root";
        $password="";
        $database="dashbip";

        $connection=new mysqli($servername,$username, $password,$database);

        if($connection->connect_error) {
            die("Connection failed: ".$connection->connect_error);
        }
        //read all data from database table
        $sql = "SELECT * FROM dashdet ORDER BY ldate";
        $result = $connection->query($sql);

        if(!result) {
            die("Invalid query: ".$connection->error);
        }

         
        //read data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>
            <td>".$row["tendername"]."</td>
            <td>".$row["collegename"]."</td>
            <td>".$row["ldate"]."</td>
            <td><a href='".$row["tdetails"]."' target='__blank'>Download Link</a></td>
            <td><a href='form.html' target='__blank'>Click here</a></td>
          </tr>";
        }
        
        ?>
      </tbody>
    </table>
		</div>
	</div>
	<br>
	
	
	
	<div class="nav_down">
		<div>
		 &copy; TenderByte 
		</div>
	</div>
</body>

</html>