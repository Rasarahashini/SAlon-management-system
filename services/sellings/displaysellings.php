
<?php
include'services/dbconnection.php'; // include database connect page

//select patient table's all details 
$sql="SELECT sp.id as id, sp.name as name, sp.quantity as quantity, sp.price as price, sm.firstname as staffmember_id FROM sold_products sp, staffmember sm where sp.staffmember_id=sm.id "; 
if(isset($_GET["searchName"])&& $_GET["searchName"]!=""){ // search patient name
    $sql.=" and firstname='" . $_GET["searchName"]."'";
}

$result=$conn->query($sql);
if($result->num_rows > 0){
    //output data of each row
   echo " <table border='0' class='tbl-sellings'cellspacing='0'>"
    ."<tr>"
    ."<th>Name</th>"
    ."<th>Quantity</th>"
    ."<th>Price</th>"
    ."<th>Staff member</th>"
    ."<th></th>"      
    ."</tr>";
    
while($row = $result->fetch_assoc()){
   echo "<tr><td>". $row["name"]. "</td>"
           ."<td>".$row["quantity"]."</td>"
           ."<td>".$row["price"]."</td>"
           ."<td>".$row["staffmember_id"]."</td>"
           // delete button for delete detail
           ."<td><a class='btn_delete' href='services/sellings/delete.php?id=".$row["id"]."'>Delete</a></td>" 
           . "</tr>";    
}
    echo "</table>";

}else{
    echo "0 result";  // if search details not have in database then pass this message 
}
    


$conn->close();
?>

    
    
