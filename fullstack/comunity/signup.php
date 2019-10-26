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


$Cname=filter_input(INPUT_POST,'CommunityName');
$fname=filter_input(INPUT_POST,'firstname');
$lname=filter_input(INPUT_POST,'lastname');
$username=filter_input(INPUT_POST,'username');
$Pass=filter_input(INPUT_POST,'password');
$Conpass=filter_input(INPUT_POST,'confirmpassword');



if($Pass != $Conpass)
{
    printf("Sorry both the passwords are not same");
}
$sqlq="insert into signup values('$fname','$lname','$username','$Cname','$Pass');";
if(mysqli_query($con,$sqlq)==TRUE)
{
    $MS = "select * from gyaan where Cname='$Cname'";
    $response = mysqli_query($con,$MS);
    if(mysqli_num_rows($response)==0)
    {
        $sp = "delete from signup where fname='$fname' and lname='$lname' and username='$username' and password='$Pass'";
       if( mysqli_query($con,$sp)== TRUE)
       {
        header("Location:4041.html");
       }else{
           printf("funcl");
       }
      
    }else{
    header("Location:login.html");
    }
}else{
    printf("Could not insert the value");
    exit;
}


?>