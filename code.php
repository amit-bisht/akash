<?php
if(isset($_POST['submit'])){
     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "hospital";
     $conn = new mysqli($servername, $username, $password,$dbname);
     $checkboxes=array();

     $name=$_POST['name'];
     $prn=$_POST['prn'];
     $date=$_POST['date'];
     $bed_no=$_POST['bedno'];
     $diagnosis=$_POST['diagnosis'];
     $total_score=(int)$_POST['total'];

     if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
     if(!empty($_POST['choice'])) {    
          foreach($_POST['choice'] as $value){
               array_push($checkboxes,$value);
          }
          $selected_checkbox=implode("#",$checkboxes);
      }
     
     $sql = "INSERT INTO patient (name,prn,date,bed_no,diagnosis,selected_checkbox,total_score)
                VALUES ('$name','$prn','$date','$bed_no','$diagnosis','$selected_checkbox','$total_score')";

     if ($conn->query($sql) === TRUE) {
          echo "New record created successfully";
     }    else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
        
        $conn->close();
}

        ?>