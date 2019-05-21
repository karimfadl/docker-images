<?php
$host1 = "perconac-service";
$host2 = "perconad1-service";
$host3 = "perconad2-service";
$host4 = "perconad3-service";
$host5 = "perconad4-service";
$host6 = "perconad5-service";
$user  = "root";
$password =  "password";
$database1 = "perconac";
$database2 = "perconad1";
$database3 = "perconad2";
$database4 = "perconad3";
$database5 = "perconad4";
$database6 = "perconad5";


$dbh1 = new mysqli($host1, $user, $password, $database1);
if($dbh1->connect_errno > 0){
    die('Unable to connect to database' . $dbh1->connect_error);
}else{
    echo "Database DB is connected.";
}
 
$dbh2 = new mysqli($host2, $user, $password, $database2);
if($dbh2->connect_errno > 0){
    die('Unable to connect to database' . $dbh2->connect_error);
}else{
    echo "Database DB is connected.";
}

$dbh3 = new mysqli($host3, $user, $password, $database3);
if($dbh3->connect_errno > 0){
    die('Unable to connect to database' . $dbh3->connect_error);
}else{
    echo "Database DB is connected.";
}

$dbh4 = new mysqli($host4, $user, $password, $database4);
if($dbh4->connect_errno > 0){
    die('Unable to connect to database' . $dbh4->connect_error);
}else{
    echo "Database DB is connected.";
}

$dbh5 = new mysqli($host5, $user, $password, $database5);
if($dbh5->connect_errno > 0){
    die('Unable to connect to database' . $dbh5->connect_error);
}else{
    echo "Database DB is connected.";
}

$dbh6 = new mysqli($host6, $user, $password, $database6);
if($dbh6->connect_errno > 0){
    die('Unable to connect to database' . $dbh6->connect_error);
}else{
    echo "Database DB is connected.";
}
?>
