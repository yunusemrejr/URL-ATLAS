<?php

session_start();

$con = mysqli_connect('localhost','adminName','password123');
mysqli_select_db($con, 'register');
$name = $_POST['user'];
$pass = $_POST['password'];
$query = "select * from userTable where name = '$name' ";
$result = mysqli_query($con,$query);
$num = mysqli_num_rows($result);

if($num==1){
    echo "username already taken.";
}

else{
    $register="insert into registertable(name, password) values ('$name','$pass')";
    mysqli_query($con,$register);
    echo "registered successfully";
    
}
?>
