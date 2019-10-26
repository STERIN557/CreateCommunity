<?php
$db_user='root';
$db_pass='';
$db_name='CreateCommunity';
$db_host='localhost';

$conn=new mysqli($db_host,$db_user,$db_pass,$db_name);
if($conn->connect_errno)
{
    printf("Connection faliled to the database\n");

}else{
    printf("Connection Success");
}

$Cname = filter_input(INPUT_POST,"communityname");
$pass = filter_input(INPUT_POST,"password");
$username = filter_input(INPUT_POST,"username");


$sq = "select * from gyaan where Cname='$Cname'";
$sq1 = "select * from signup where PASSWORD ='$pass' and username='$username'";
// signup will have all the members username of the community and 
// gyaan will be having username of the creter of the community or admin of the community

$resp = mysqli_query($conn,$sq);
$resp1 = mysqli_query($conn,$sq1);

if(mysqli_num_rows($resp1)==0 || mysqli_num_rows($resp1)==0)
{
header("Location:404.html");
}else{
    
    header("Location:ComPage.html?Cname=".$Cname."&username=".$username);
}


?>