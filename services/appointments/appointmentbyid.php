<?php

include'services/dbconnection.php'; // include database connect page

$sql = "";
$description = "";
$customer_id = "";
$staffmember_id = "";
$date = "";
$time = "";

//search Patient by Id
if (isset($_GET["searchId"])) {
    $sql .= "SELECT * FROM appointments where id=" . $_GET["searchId"];
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        //output data of each row
        if ($row = $result->fetch_assoc()) {
            $description = $row["description"];
            $date = $row["date"];
            $time = $row["time"];
            
        }
    } else {
        echo "0 result"; // if search details not have pass this message 
    }
    $conn->close();
}
?>
