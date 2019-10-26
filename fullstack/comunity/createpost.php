<?php
$post = $_POST["post"];
$comment = $_POST["comment"];



$db_user='root';
$db_pass='';
$db_name='CreateCommunity';
$db_host='localhost';

$conn=new mysqli($db_host,$db_user,$db_pass,$db_name);
if($conn->connect_errno)
{
    printf("Connection faliled to the database\n");

}

$create  =  "insert into comments values('$post','$comment');";
if(mysqli_query($conn,$create))
{
    printf("Posted");
}
else{
    printf("failed");
}

?>