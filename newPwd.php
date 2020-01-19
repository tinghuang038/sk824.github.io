<?php
session_start();
require_once ('./db.inc.php');
$userName=$_SESSION['userName'];
$oldpwd = $_POST['oldpassword']; //舊密碼
$newpwd = $_POST['newpassword'];//新密碼
$checkpwd = $_POST['assertpassword'];//確認新密碼
$stmt = "SELECT * FROM users WHERE userName='$userName'";
$data = $pdo->query($stmt)->fetch(PDO::FETCH_UNIQUE);
if ($oldpwd==$data[2]){
    if ($checkpwd==$newpwd ){
        $sql = "UPDATE users SET `pwd`=? WHERE `id`=$data[0]";
        $arr = [
            $checkpwd
            ];
        $pdo_stmt = $pdo->prepare($sql);
        $pdo_stmt->execute($arr);
        if($pdo_stmt->rowCount() === 1)
        {  echo require_once('./updateGood.php');
            echo '<meta http-equiv=REFRESH CONTENT=2;url=myData.php>';

        }else{echo '修改失敗!';
        }
    }else{
        echo '與新密碼不符合';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=myPasswordModify.php>';
    }
 }else{
     echo '密碼錯誤';
     echo '<meta http-equiv=REFRESH CONTENT=2;url=myPasswordModify.php>';
 }



