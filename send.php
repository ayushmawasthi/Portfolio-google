
<?php
  
  $servername = "fdb19.awardspace.net";
  $username = "2613362_ayush";
  $password = "Ayush@123";
  $dbname = "2613362_ayush";
  
  $name=$_REQUEST['name'];
  $email=$_REQUEST['email'];
  $mess=$_REQUEST['message'];
    
  // Create connection
  $conn = new mysqli($servername, 
      $username, $password, $dbname);
    
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " 
          . $conn->connect_error);
  }
    
  $sqlquery = "INSERT INTO contact (name,email,message) VALUES ('".$name."','".$email."','".$mess."')";
//  $sql="INSERT INTO Patient(Pat_Name,Pat_Phone,Pat_Password) VALUES ('".$name."','".$phone."','".$pass."')";
    
  if ($conn->query($sqlquery) === TRUE) {
      echo "record inserted successfully";
  } else {
      echo "Error: " . $sqlquery . "<br>" . $conn->error;
  }

  ?>
<script type="text/javascript">
        window.location.href = 'http://ayush.dx.am';
</script>