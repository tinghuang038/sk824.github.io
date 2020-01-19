<?php
session_start(); 
require_once('./db.inc.php');
$userName = $_SESSION['userName'];
$Name = $_POST['name'];
$address = $_POST['address'];
$email=$_POST['email'];
$phone_number = $_POST['phone_number'];
$stmt = "SELECT * FROM users WHERE userName='$userName'";
$data = $pdo->query($stmt)->fetch(PDO::FETCH_UNIQUE);
$sql = "UPDATE users SET `name`=?, `address`=?, `email`=?,`phone_number`=? WHERE `id`=$data[0]";
$arr = [
    $Name,
    $address,
    $email,
    $phone_number,
    ];
$pdo_stmt = $pdo->prepare($sql);
$pdo_stmt->execute($arr);
if($pdo_stmt->rowCount() === 1)
{
    echo require_once('./updateGood.php');
    echo '<meta http-equiv=REFRESH CONTENT=1;url=myData.php>';
}else{
    echo '修改失敗!';
    echo '<meta http-equiv=REFRESH CONTENT=0;url=myDataModify.php>';
}