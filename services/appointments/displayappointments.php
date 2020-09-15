
<?php
include'services/dbconnection.php'; // include database connect page

//select patient table's all details 
$sql="SELECT ap.id as id, ap.date as date, ap.description as description, c.name as customer_id, sm.firstname as staffmember_id, ap.time as time FROM appointments ap, customer c, staffmember sm where ap.customer_id=c.id and ap.staffmember_id=sm.id"; 
if(isset($_GET["searchName"])&& $_GET["searchName"]!=""){ // search patient name
    $sql.=" and firstname='" . $_GET["searchName"]."'";
}

$result=$conn->query($sql);
if($result->num_rows > 0){
    //output data of each row
   echo " <table border='0' class='tbl_appointments'cellspacing='0'>"
    ."<tr>"
    ."<th>Appointment Name</th>"
    ."<th>Customer</th>"
    ."<th>Staff member</th>"
    ."<th>Date</th>"
    ."<th>Time</th>"      
    ."<th></th>"      
    ."<th></th>"      
    ."</tr>";
    
while($row = $result->fetch_assoc()){
   echo "<tr><td>". $row["description"]."</td>"
           ."<td>".$row["customer_id"]."</td>"
           ."<td>".$row["staffmember_id"]."</td>"
           ."<td>".$row["date"]."</td>"
           ."<td>".$row["time"]."</td>"
            // update button for update detail
           ."<td><a class='btn_update' href='appointments.php?searchId=".$row["id"]."'>Change</a></td>" 
           // delete button for delete detail
           ."<td><a class='btn_delete' href='services/appointments/delete.php?id=".$row["id"]."'>Delete</a></td>" 
           . "</tr>";    
}
    echo "</table>";

}else{
    echo "0 result";  // if search details not have in database then pass this message 
}
    


$conn->close();
?>