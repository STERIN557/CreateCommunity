<?php

$db_host='localhost';
$db_name="CreateCommunity";
$db_user='root';
$db_pass='';


$con = new mysqli($db_host,$db_user,$db_pass,$db_name);
if($con->connect_errno)
{
    printf("Connection Unsuccessful\n");
}


$Cname=filter_input(INPUT_POST,'Communityname');
$fname=filter_input(INPUT_POST,'FirstName');
$lname=filter_input(INPUT_POST,'LastName');
$Auser=filter_input(INPUT_POST,'Admin_User_Name');
$email=filter_input(INPUT_POST,'email');
$Pass=filter_input(INPUT_POST,'AdminPassword');
$Conpass=filter_input(INPUT_POST,'ConfirmPassword');


if($Pass != $Conpass)
{
    printf("Sorry both the passwords are not same");
}
$sqlq = "insert into gyaan values('$Cname','$Auser','$fname','$lname','$email','$Pass');";
if(mysqli_query($con,$sqlq)==TRUE)
{
    printf("inserted\n");
    header('Location:login.html');
}else{
    printf("Could not insert the value");
}


?>