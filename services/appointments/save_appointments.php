<?php
include'../dbconnection.php'; // include database connect page

//assign values to variables
$date = $_POST["date"];
$date = $_POST["date"];
$description = $_POST["description"];
$customer_id = $_POST["customer"];
$staffmember_id = $_POST["member"];
$time = $_POST["time"];

//check all fileds are filled
if( empty($date)|| empty($description) || empty($customer_id) || empty($staffmember_id) || empty($time) ){
     die("You must fill in all of the fields!") ; 
}
// insert data for appoinment table in database
if (isset($_POST["save"])) {

    $sql = "INSERT INTO appointments VALUES (null, '" . $date . "', '" . $description . "', '" . $customer_id . "', '" .$staffmember_id . "', '" . $time . "')";
    if ($conn->query($sql) === TRUE) {
        header("Location: ../../appointments.php?msg=SavedAppointment"); // pass success message
    } else {
        die("There was a problem, please try again!") ; // pass meaningfull message
    }
// update details 
}else{
    $sql = "UPDATE appointments SET date=" . $date . ", description='" . $description . "', customer=" . $customer_id . ", member=" . $staffmember_id . ", time='" . $time . "' WHERE id=".$id;

  if ($conn->query($sql) === TRUE) {
     header("Location: ../../appointments.php?msg=UpdateSucess"); // pass success message
   } else {
     die("There was a problem, please try again!") ;
  }
}
$conn->close();


