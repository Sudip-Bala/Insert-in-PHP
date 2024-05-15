<?php
$conn = new mysqli('localhost', 'root', '', 'sms');
if($conn){
   $sql = "INSERT INTO class VALUES(Null, 'Six')";
  if ($conn->query($sql)){
    echo "Inserted";
  }
}else{
    echo "Connection Failed";
}
?>