<?php
if(isset($_POST['submit'])){
     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "hospital";
     $conn = new mysqli($servername, $username, $password,$dbname);

     $name=$_POST['name'];
     $prn=$_POST['prn'];
     $date=$_POST['date'];
     $bed_no=$_POST['bedno'];
     $diagnosis=$_POST['diagnosis'];
     $total_score=(int)$_POST['total'];

     if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
     
     $sql = "INSERT INTO patient (name,prn,date,bed_no,diagnosis,total_score)
                VALUES ('$name','$prn','$date','$bed_no','$diagnosis','$total_score')";

     if ($conn->query($sql) === TRUE) {
          echo "New record created successfully";
     }    else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
        
        $conn->close();
}
        ?>