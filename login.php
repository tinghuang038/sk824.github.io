<?php
session_start(); 
require_once('./db.inc.php');

$output = [
    'success' => false,
    'msg' => '',
];

$userName = isset($_POST['userName']) ? $_POST['userName'] : '';
$stmt = $pdo->prepare("SELECT * FROM users WHERE userName=?");
$stmt->execute([$userName]); 
$user = $stmt->fetch();
if ($user) {
    $pwd = $_POST['pwd'];
    $stmt = $pdo->prepare("SELECT * FROM users WHERE pwd=?");
    $stmt->execute([$pwd]); 
    $users = $stmt->fetch();
    if($users){
        $_SESSION['userName']=$userName;
        $output['success'] = true;
        $output['userName']=$userName;

        
        
        // header("Refresh: 1; url=./myData.php");
        // header('refresh: 5;url=""')
        

    }else{
        $output['msg'] = '帳號密碼錯誤';
        // echo '帳號密碼錯誤';
        // header("Refresh: 1; url=./signIn.php");
    }
} else {
    $output['msg'] = '帳號錯誤';
    // echo  '帳號密碼錯誤';
    // header("Refresh: 1; url=./signIn.php");
} 
echo json_encode($output, JSON_UNESCAPED_UNICODE);
// 
