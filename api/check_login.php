<?php
session_start();
/* $account=$_POST['account'];
$password=$_POST['password']; */
$sql="SELECT count(*) FROM `account` WHERE `account`='{$_POST['account']}' && `password`='{$_POST['password']}'";
//echo $sql;
//SELECT * FROM `account` WHERE `account`='$_POST['account']' && `password`='$_POST['password']'
//  $dsn="mysql:host=localhost;charset=utf8;dbname=pri";
 $dsn="mysql:host=localhost;charset=utf8;dbname=s1100415";
 $pdo=new PDO($dsn,'s1100415','s1100415');
// $pdo=new PDO($dsn,'user','');

/* echo "<br>";
$result=$pdo->query($sql);
var_dump($result);
echo "<br>"; */
$result=$pdo->query($sql)->fetchColumn();

//
// if($result>0){

    $_SESSION['user']=$_POST['account'];
    header("location:../index.php");
    //header("location:../dashboard.php");
// }else{
//     header('location:../index.php?err=1');
// }

?>