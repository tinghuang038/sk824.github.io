<?php

// sid // product id
// qty // quantity

session_start();
// unset($_SESSION['cart']);
// exit();

require_once("./db.inc.php");

if(!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

$sql = "SELECT `itemName`, `checkPrice` ,`itemPic01`,`itemSize`
        FROM `item_lists`
        WHERE `id` = ? ";
$stmt = $pdo->prepare($sql);
// if(!$stmt){
//     echo "<pre>";
//     print_r($pdo->errorInfo());
//     echo "</pre>";
//     exit();
// }


if(isset($_POST['id'])) {
    $id = (int)$_POST['id'];
    $qty = (int)$_POST['qty'];

    $arrParam = [
        $id
    ];
    $stmt->execute($arrParam);
    $arr = $stmt->fetchAll(PDO::FETCH_ASSOC)[0];

    if(!empty($qty)){
        // 加入或修改
        // TODO: 檢查有沒有這個產品

        $_SESSION['cart'][$id] = [
            "qty" => (int)$qty,
            "id" => (int)$id,
            "itemName" => $arr['itemName'],
            "checkPrice" => $arr["checkPrice"],
            "itemPic01" => $arr["itemPic01"],
            "itemSize" =>$arr["itemSize"]
        ];
    } else {
        // 刪除
        unset($_SESSION['cart'][$id]);
        // $_SESSION['cart'] = array_values($_SESSION['cart']);
    }
}

// 呈現購物車的狀態
echo json_encode($_SESSION['cart'], JSON_UNESCAPED_UNICODE);
