<?php
    require_once ('./db.inc.php');
    ini_set("display_errors","on");
    $userName = $_POST['name'];
    $pwd = $_POST['password'];
    $pwd1=$_POST['password1'];
    $email = $_POST['mail'];
    if($pwd==$pwd1){
        $sql = "INSERT INTO `users`(`userName`,`pwd`,`email`) VALUES(?,?,?)";
        $arr = [
            $userName,
            $pwd,
            $email,
            ];
        $pdo_stmt = $pdo->prepare($sql);
        $pdo_stmt->execute($arr);
        if($pdo_stmt->rowCount() === 1) {
            // header("Refresh: 1; url= #popup1");
            echo "<script>history.go(-1);
                    
            let url = location.href.split('#');
            location.href = url[0] ;
           
                  </script> "; 
            // echo "會員註冊成功";
        } else {
            header("Refresh: 1; url=./J-index-c.php");
            // echo "會員註冊失敗";
        }
    } else {
        // echo '再次確認密碼與輸入的密碼不匹配';
        header("Refresh: 1; url=./J-index-c.php");
    }
//     $sql = "INSERT INTO `users`(`userName`,`pwd`,`email`) VALUES(?,?,?)";
//     $arr = [
//         $userName,
//         $pwd,
//         $email,
//     ];
//     $pdo_stmt = $pdo->prepare($sql);
//     $pdo_stmt->execute($arr);
//     if($pdo_stmt->rowCount() === 1) {
//      header("Refresh: 50; url=./signIn.php");
//         echo "新增成功";
// } else {
//     header("Refresh: 50; url=./signIn.php");
//     echo "新增失敗";
// }
// 

