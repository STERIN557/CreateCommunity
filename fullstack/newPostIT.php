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



$sq1 = "select * from signup";

if(mysqli_query($conn,$sq1))
{
//    printf("done\n");
}else{
    echo"not done\n";
}
$d = mysqli_query($conn,$sq1);

$dbdata = array();

while($row1=mysqli_fetch_array($d)){

    $dbdata[]=$row1;
}

echo json_encode($dbdata);
?>