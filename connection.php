<?php 
$server="localhost";
$username="root";
$password="";
$db_name="users";

$conn=new mysqli($server,$username,$password,$db_name);

if($conn->connect_error){
    die("Connection failed".$conn->connect_error);
}
// else{
//     echo "Connected successfully<br>";
// }
?>