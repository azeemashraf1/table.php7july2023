<?php

 $serverAddress = 'localhost';
  $userName = 'root';
  $password = '';
  $dataBaseName = 'students';

  $con = new mysqli($serverAddress,$userName,$password,$dataBaseName);
$sql= "SELECT * FROM `ammar`"; 
$result= $con->query($sql);

if($result-> num_rows >0){

 while($row= $result->fetch_assoc()){
 	echo $row['email'];
 	echo $row['age'];
 	echo $row['name'];
 	echo $row['address'];
 	echo $row['password'];
 	echo $row['gender'];
 	echo $row['phone_no'];
    echo '<br>';
 }

}else{
	echo 'No data available';
}

?>