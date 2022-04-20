<?php

session_start();

$con = mysqli_connect('localhost','blabla_admin1','Password1231231234124324');
mysqli_select_db($con, 'webswptt_register');
$name = $_POST['user'];
$pass = $_POST['password'];
$query = "select * from registertable where name = '$name' ";
$result = mysqli_query($con,$query);
$num = mysqli_num_rows($result);

if($num==1){
    echo "username taken.";
}

else{
    $reg="insert into registertable(name, password) values ('$name','$pass')";
    mysqli_query($con,$reg);
    echo "registered successfully";
    
}
?>