
<?php
include'services/dbconnection.php'; // include database connect page

//select patient table's all details 
$sql="SELECT * FROM customer where 1=1"; 
if(isset($_GET["searchName"])&& $_GET["searchName"]!=""){ // search patient name
    $sql.=" and firstname='" . $_GET["searchName"]."'";
}

$result=$conn->query($sql);
if($result->num_rows > 0){
    //output data of each row
   echo " <table border='0' class='tbl_customers'cellspacing='0'>"
    ."<tr>"
    ."<th>Name</th>"
    ."<th>Age</th>"
    ."<th>NIC</th>"
    ."<th>Contact</th>"
    ."<th></th>"      
    ."</tr>";
    
while($row = $result->fetch_assoc()){
   echo "<tr><td>". $row["name"]."</td>"
           ."<td>".$row["age"]."</td>"
           ."<td>".$row["nic"]."</td>"
           ."<td>".$row["contact"]."</td>"
           // delete button for delete detail
           ."<td><a class='btn_delete' href='services/customers/delete.php?id=".$row["id"]."'>Delete</a></td>" 
           . "</tr>";    
}
    echo "</table>";

}else{
    echo "0 result";  // if search details not have in database then pass this message 
}
    


$conn->close();
?>

    
    
