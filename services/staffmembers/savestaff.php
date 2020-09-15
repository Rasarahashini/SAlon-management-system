<?php
include'../dbconnection.php'; // include database connect page

//assign values to variables
$firstname = $_POST["fname"];
$lastname = $_POST["lname"];
$age = $_POST["age"];
$nic = $_POST["nic"];
$contact = $_POST["contact"];
$address = $_POST["address"];
$cv = $_POST["cv"];

//check all fileds are filled
if( empty($firstname)|| empty($lastname) || empty($age) || empty($nic) || empty($contact) || empty($address) || empty($cv)){
     die("You must fill in all of the fields!") ; 
}
// insert data for appoinment table in database
if (isset($_POST["save"])) {

    $sql = "INSERT INTO staffmember VALUES (null, '" . $firstname . "', '" . $lastname . "', '" . $age . "', '" . $nic . "', '" . $contact . "', '" . $address . "', '" . $cv . "')";
    if ($conn->query($sql) === TRUE) {
        header("Location: ../../staffmembers.php?msg=SavedStaffmember"); // pass success message
    } else {
        die("There was a problem, please try again!") ; // pass meaningfull message
    }
} else {
    die("There was a problem, please try again!") ;; // pass meaningfull message
}
$conn->close();


