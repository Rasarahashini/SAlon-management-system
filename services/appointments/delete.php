<?php

include'../dbConnection.php';   // include database connect page

$id=$_GET["id"]; //get ID to delete details 
$sql= "DELETE FROM appointments WHERE id=".$id; //delete detail from databse by Id

if ($conn->query($sql)=== TRUE){
    header ("Location:../../appointments.php?msg=DeleteSucess"); //pass seccess message 
}else{
   die("There was a problem, please try again!") ; // pass meaningfull message
}
$conn->close();



