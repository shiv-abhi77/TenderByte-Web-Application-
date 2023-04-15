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
    <h1> Tender Applicants </h1>
    <br>
    <table class="table">
      <thead bgcolor="#ce7e00">
        <tr>
        <th>Tender Particular</th>
        <th>College Name</th>
        <th>Last Day and Date of Submission</th>
        <th>Tender details</th>
        <th>Best Applicants out of all</th>
        <tr>
      </thead>

      <tbody  bgcolor="#fff2cc">
        <?php
        error_reporting(0);
        $servername="localhost";
        $username="root";
        $password="";
        $database="dashbOP";

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
            <td><a href='https://iiitn.ac.in/images/Tender/125/TenderDocument.pdf' target='__blank'>Download Link</td>
            <td>Active</td>
          </tr>";
        }
        
        ?>
      </tbody>
    </table>
</body>
</html>