<?php

include'services/dbconnection.php'; // include database connect page

$sql = "";
$firstname = "";
$lastname = "";
$age = "";
$nic = "";
$contact = "";
$address = "";
$cv = "";

//search Patient by Id
if (isset($_GET["searchId"])) {
    $sql .= "SELECT * FROM staffmember where id=" . $_GET["searchId"];
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        //output data of each row
        if ($row = $result->fetch_assoc()) {
            $firstname = $_POST["fname"];
            $lastname = $_POST["lname"];
            $age = $_POST["age"];
            $nic = $_POST["nic"];
            $contact = $_POST["contact"];
            $address = $_POST["address"];
            $cv = $_POST["cv"];
        }
    } else {
        echo "0 result"; // if search details not have pass this message 
    }
    $conn->close();
}
?>
