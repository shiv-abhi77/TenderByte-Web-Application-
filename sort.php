<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tender applicants |  TenderByte</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body style="margin: 50px;">
    
    <h1> Best Tender for you : </h1>
    <br>
    <table class="table"  >
      <thead  bgcolor="#38761d">
        <tr>
            <th>Company Name</th>
            <th>Tender Name</th>
            <th>Email</th>
            <th>Company Id</th>
            <th>Company Pin</th>
            <th>Price</th>
            
            <th>Period of Work</th>
            <th>Distance</th>
            <th>Order Details</th>
        <tr>
      </thead>

      <tbody bgcolor="#83e135">
        <?php
        error_reporting(0);
        $servername="localhost";
        $username="root";
        $password="";
        $database="db_seller";

        $connection=new mysqli($servername,$username, $password,$database);
        
        if($connection->connect_error) {
            die("Connection failed: ".$connection->connect_error);
        }
        //read all data from database table
        $sql = "SELECT * FROM details ORDER BY Price , Estper, dist";
        $result = $connection->query($sql);

        if(!result) {
            die("Invalid query: ".$connection->error);
        }
        
        //read data of each row
        // $row = $result->fetch_assoc();
        //     echo "<tr>
        //     <td>".$row["Username"]."</td>
        //     <td>".$row["Email"]."</td>
        //     <td>".$row["ShopId"]."</td>
        //     <td>".$row["ShopPin"]."</td>
        //     <td>".$row["Price"]."</td>
        //     <td><a href='https://iiitn.ac.in/images/Tender/125/TenderDocument.pdf' target='__blank'>Download Link</td>
        // </tr>";
        $tenname=$_POST['tenname'];
        $_SESSION['tenname']=$tenname;
        while($row = $result->fetch_assoc()) {
          if($tenname==$row["tendername"]) {
          echo "<tr>
          <td>".$row["Username"]."</td>
          <td>".$row["tendername"]."</td>
          <td>".$row["Email"]."</td>
          <td>".$row["ShopId"]."</td>
          <td>".$row["ShopPin"]."</td>
          <td>".$row["Price"]."</td>
          <td>".$row["Estper"]."</td>
          <td>".$row["dist"]."</td>
          <td><a href='".$row["ndrive"]."' target='__blank'>Download Link</td>
      </tr>";
            break;
          }
      }

        
        
        
        ?>
      </tbody>
    </table>
    <h4>*For full list of applicants <a href='formtab.php' target="__blank">Click here</a></h4>
</body>
</html>