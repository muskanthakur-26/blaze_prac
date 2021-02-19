<?php

$con =mysqli_connect('127.0.01','root','');

if(!$con)
{
    echo 'Not Connected to server'
}

if(!mysqli_select_db($con,'tutorial'))
{
    echo 'Database Not Selected';
}

$Name=$_POST['name'];
$Blood_Group=$_POST['group'];
$Blood_Bank=$_POST['banks'];
$Mobile_No=$_POST['mobile'];

$sql="INSERT INTO donor_prac (Name,  BLOOD GROUP,BLOOD BANK, MOBILE NUMBER ) VALUES ('$Name,$Blood_Group,$Blood_Bank,$Mobile_No')";

if(!mysqli_query($con,$sql))
{
    echo'not inserted';
}
else{
    echo('inserted');
}
header("refresh:2; url=blaze_donor_form.html");
?>