<?php
$db_user='root';
$db_pass='';
$db_name='CreateCommunity';
$db_host='localhost';

$conn=new mysqli($db_host,$db_user,$db_pass,$db_name);
if($conn->connect_errno)
{
    printf("Connection faliled to the database\n");

}

$Cname = $_POST['Cname'];
echo "$Cname";


?>