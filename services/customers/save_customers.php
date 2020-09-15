<?php
include'../dbconnection.php'; // include database connect page

//assign values to variables
$name = $_POST["name"];
$age = $_POST["age"];
$nic = $_POST["nic"];
$contact = $_POST["contact"];

//check all fileds are filled
if( empty($name) || empty($age) || empty($nic) || empty($contact) ){
     die("You must fill in all of the fields!") ; 
}
// insert data for customer table in database
if (isset($_POST["save"])) {

    $sql = "INSERT INTO customer VALUES (null, '" . $name . "', '" . $age . "', '" . $nic . "', '" . $contact . "')";
    if ($conn->query($sql) === TRUE) {
        header("Location: ../../customers.php?msg=Savedcustomer"); // pass success message
    } else {
        die("There was a problem, please try again!") ; // pass meaningfull message
    }
} else {
    die("There was a problem, please try again!") ;; // pass meaningfull message
}
$conn->close();


