<?php
session_start();;
require_once('./db.inc.php');

// 清空暫存的session
// unset($_SESSION['like']);
// exit();

// 先判斷session是否存在
if(!isset($_SESSION['like'])) {
    $_SESSION['like'] = [];
}


$sql = "SELECT `itemName`,`checkPrice`,`itemPic01`
        FROM `item_lists`
        WHERE `id` = ?";

$stmt = $pdo->prepare($sql);  

if(isset($_POST['likeId'])) {

$arrParam = [
   $_POST['likeId']
];
$stmt->execute($arrParam);

$likeArr = $stmt->fetchAll(PDO::FETCH_ASSOC)[0];
print_r($likeArr);

// 將值帶入session
$_SESSION['like'][(int)$_POST['likeId']] = [
    'itemName' => $likeArr['itemName'],
    'checkPrice' => $likeArr['checkPrice'],
    'itemPic01' => $likeArr['itemPic01'],
    'likeId' => $_POST['likeId']
];
}

echo json_encode($_SESSION['like'], JSON_UNESCAPED_UNICODE);


?>
<?php

?>