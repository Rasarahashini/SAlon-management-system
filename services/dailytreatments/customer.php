<?php
include'services/dbconnection.php';

$sql="SELECT * FROM customer where 1=1";
if(isset($_GET["searchName"])&& $_GET["searchName"]!=""){
    $sql.=" and name='" . $_GET["searchName"]."'";
}

$result=$conn->query($sql);
if($result->num_rows > 0){
    //output data of each row
   echo " <select class='treatedcustomer' name='customer'>";
    
    while($row = $result->fetch_assoc()){
       echo "<option value='". $row["id"]. "'>". $row["name"]. "</option>";    
    }
    echo "</select>";
}else{
    echo "0 result";
}
$conn->close();
?>
