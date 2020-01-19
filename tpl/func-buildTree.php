<?php
//建立種類列表
function buildTree($pdo, $parentId = 0, $categoryParentId = 0){
    $sql = "SELECT `categoryId`, `categoryName`, `categoryParentId`
            FROM `category_list` 
            WHERE `categoryParentId` = ?";
    $stmt = $pdo->prepare($sql);
    $arrParam = [$parentId];
    $stmt->execute($arrParam);

    if($stmt->rowCount() > 0) {
        echo '<ul class="white-bg-cata no-bb-line items-cata>';
        $arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
    //     for($i = 0; $i < count($arr); $i++) {

    //         $variable = $arr[$i]['categoryParentId'];
    //         switch ($variable) {
    //             case '0':
    //                 echo '<li class="white-bg-cata no-bb-line items-cata-seletitle04 ">';
    //                 echo "<a class='g3 items-cata-tilte' href='./itemList.php?categoryId={$arr[$i]['categoryId']}'>
    //                 {$arr[$i]['categoryName']}
    //                 </a>";
    //                 buildTree($pdo, $arr[$i]['categoryId']);
    //                 echo "</li>";
    //                 break;
    //             case '1, 2, 7, 12,':
    //                 echo '<li class="white-bg-cata-detail">';
    //                 echo "<a href='./itemList.php?categoryId={$arr[$i]['categoryId']}'>
    //                 {$arr[$i]['categoryName']}
    //                 </a>";
    //                 buildTree($pdo, $arr[$i]['categoryId']);
    //                 echo "</li>";
    //                 break;
    //             default:
    //             echo '<li class="white-bg-cata no-bb-line items-cata-seletitle04 ">';
    //             echo "<a class='g3 items-cata-tilte' href='./itemList.php?categoryId={$arr[$i]['categoryId']}'>
    //             {$arr[$i]['categoryName']}
    //             </a>";
    //             buildTree($pdo, $arr[$i]['categoryId']);
    //             echo "</li>";
    //                 break;
    //         }
    //         echo '<li class="white-bg-cata no-bb-line items-cata-seletitle04 ">';
    //         echo "<a class='g3 items-cata-tilte' href='./itemList.php?categoryId={$arr[$i]['categoryId']}'>
    //         {$arr[$i]['categoryName']}
    //         </a>";
    //         buildTree($pdo, $arr[$i]['categoryId']);
    //         echo "</li>";



    //     }
    //     echo "</ul>";
    // }
    // }