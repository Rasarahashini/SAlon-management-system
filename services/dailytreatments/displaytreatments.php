
<?php
include'services/dbconnection.php'; // include database connect page

//select patient table's all details 
$sql="SELECT dt.id as id, dt.description as description, dt.date as date, dt.price as price, tt.name as treatment_type_id, sm.firstname as staffmember_id, c.name as customer_id FROM treatment_type tt, daily_treatments dt, staffmember sm, customer c where dt.treatment_type_id= tt.id and dt.staffmember_id= sm.id and dt.customer_id=c.id "; 
if(isset($_GET["searchName"])&& $_GET["searchName"]!=""){ // search patient name
    $sql.=" and firstname='" . $_GET["searchName"]."'";
}

$result=$conn->query($sql);
if($result->num_rows > 0){
    //output data of each row
   echo " <table border='0' class='tbl-showtreatments'cellspacing='0'>"
    ."<tr>"
    ."<th>Treatment Type</th>"
    ."<th>Description</th>"
    ."<th>Staff member</th>"
    ."<th>Customer</th>"
    ."<th>Date</th>"
    ."<th>Price</th>"
    ."<th></th>"      
    ."<th></th>"      
    ."</tr>";
    
while($row = $result->fetch_assoc()){
   echo "<tr><td>". $row["treatment_type_id"]. "</td>"
           ."<td>".$row["description"]."</td>"
           ."<td>".$row["staffmember_id"]."</td>"
           ."<td>".$row["customer_id"]."</td>"
           ."<td>".$row["date"]."</td>"
           ."<td>".$row["price"]."</td>"
           // delete button for delete detail
           ."<td><a class='btn_delete' href='services/dailytreatments/delete.php?id=".$row["id"]."'>Delete</a></td>" 
           . "</tr>";    
}
    echo "</table>";

}else{
    echo "0 result";  // if search details not have in database then pass this message 
}
    


$conn->close();
?>

    
    
