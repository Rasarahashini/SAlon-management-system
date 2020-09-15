<?php
include'../dbconnection.php'; // include database connect page

//assign values to variables
$name = $_POST["name"];
$quantity = $_POST["quantity"];
$price = $_POST["price"];
$staffmember_id= $_POST["member"];

//check all fileds are filled
if( empty($name)|| empty($quantity) || empty($price) || empty($staffmember_id) ){
     die("You must fill in all of the fields!") ; 
}
// insert data for sold products table in database
if (isset($_POST["save"])) {

    $sql = "INSERT INTO sold_products VALUES (null, '" . $name . "', '" . $quantity . "', '" . $price . "', '" . $staffmember_id ."')";
    if ($conn->query($sql) === TRUE) {
        header("Location: ../../sellingrecords.php?msg=Savedsoldrecord"); // pass success message
    } else {
        die("There was a problem, please try again!") ; // pass meaningfull message
    }
} else {
    die("There was a problem, please try again!") ;; // pass meaningfull message
}
$conn->close();


