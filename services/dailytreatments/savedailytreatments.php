<?php

include'../dbconnection.php'; // include database connect page

//assign values to variables
$description = $_POST["description"];
$date = $_POST["date"];
$price = $_POST["price"];
$treatment_type_id = $_POST["type"];
$staffmember_id = $_POST["member"];
$customer_id = $_POST["customer"];

//check all fileds are filled
if( empty($description)|| empty($date) || empty($price) || empty($treatment_type_id) || empty($staffmember_id) || empty($customer_id)){
     die("You must fill in all of the fields!") ; 
}
// insert data for appoinment table in database
if (isset($_POST["save"])) {

    $sql = "INSERT INTO daily_treatments VALUES (null, '" . $description . "', '" . $date . "', '" . $price . "', '" . $treatment_type_id . "','" . $staffmember_id . "', '" . $customer_id . "')";
    if ($conn->query($sql) === TRUE) {
        header("Location: ../../dailytreatments.php?msg=Savedtreatment"); // pass success message
    } else {
        die("There was a problem, please try again!") ; // pass meaningfull message
    }
} else {
    die("There was a problem, please try again!") ;; // pass meaningfull message
}
$conn->close();


