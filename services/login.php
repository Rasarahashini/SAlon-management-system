<?php
include'./dbConnection.php'; // include database connect page

//assign values to variables
$username = $_POST['username'];
$password = $_POST['password']; 

//select users table details in database to check login with typed data 
$sql = "SELECT username, id, password FROM admin WHERE username='$username'"; 
$result = $conn->query($sql);
if ($result->num_rows != 0) {
    if ($row = $result->fetch_assoc()) {
        //check usernames and password
        if($row['password']==$password){
        }else{
        header("Location: ../index.php?msg=Invalid"); // pass invalid message
        }
    }
}else{
    header("Location: ../index.php?msg=Invalid"); // pass invalid message
}
?>
