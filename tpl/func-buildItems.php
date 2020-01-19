<?php
require_once('../db.inc.php')
?>

<!-- 1 -->
<?php

    $sql = "SELECT `itemName`,`checkPrice`,`itemPic01`
        FROM `item_lists`
        WHERE `categoryId`= ?";
    $stmt = $pdo->prepare($sql);
    $arr = [
        $_GET['cate']
    ];
    $stmt->execute($arr);

    $arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
    for( $i = 0 ; $i<3 ; $i++){
?>

    <div class="d3-product_carousel_picbox d3-product_carousel_picbox1">
    <a href="#">
        <div class="d3-product_carousel_name d3-product_carousel_name1 text-center mt-2"><?php echo $arr[$i]['itemName']; ?></div>
        <div class="text-center"> NT <span class="d3-product_carousel_price d3-product_carousel_price1 text-center"> <?php echo $arr[$i]['checkPrice']; ?></span> $</div>
    </a>
    </div>
<?php
}
?>