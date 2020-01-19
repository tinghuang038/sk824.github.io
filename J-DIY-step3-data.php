<?php
require_once('db.inc.php')
?>

<!-- 撈取資料庫的資料,並透過ajax將值傳回產生相對應的carousel -->
    <?php

        $sql = "SELECT `itemName`,`checkPrice`,`itemPic01`
                FROM `item_lists`
                WHERE `categoryId`= ? ";
        $stmt = $pdo->prepare($sql);
        $arr = [
            $_GET['cate']
        ];
        $stmt->execute($arr);

        $array = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        for( $i = 0 ; $i< count($array) ; $i++){
    ?>

<!-- 類別1 -->
    <?php
            if($_GET['cate'] == 3){
                // 將第一個產品設定為事先預選好的
                if( $i == 0){
    ?>
            <div class="d3-product_carousel_picbox d3-product_carousel_picbox1 selected">            
    <?php
                }else{
    ?>
            <div class="d3-product_carousel_picbox d3-product_carousel_picbox1">
    <?php
                }
    ?>
                <a href="#">
                    <img src="./product/<?php echo $array[$i]['itemPic01']; ?>" alt="" class="d3-product_carousel_pic d3-product_carousel_pic1">
                    <div class="d3-product_carousel_name d3-product_carousel_name1 text-center mt-2"><?php echo $array[$i]['itemName']; ?></div>
                    <div class="text-center"> NT$ <span class="d3-product_carousel_price d3-product_carousel_price1 text-center"> <?php echo $array[$i]['checkPrice']; ?></span> </div>
                </a>
            </div>
    <?php                          
        }
    ?>

<!-- 類別2 -->
<?php
        if($_GET['cate'] == 8){
            // 將第一個產品設定為事先預選好的
                if( $i == 0){
    ?>
            <div class="d3-product_carousel_picbox d3-product_carousel_picbox2 selected">            
    <?php
                }else{
    ?>
            <div class="d3-product_carousel_picbox d3-product_carousel_picbox2">
    <?php
                }
    ?>
                <a href="#">
                    <img src="./product/<?php echo $array[$i]['itemPic01']; ?>" alt="" class="d3-product_carousel_pic d3-product_carousel_pic2">
                    <div class="d3-product_carousel_name d3-product_carousel_name2 text-center mt-2"><?php echo $array[$i]['itemName']; ?></div>
                    <div class="text-center"> NT$ <span class="d3-product_carousel_price d3-product_carousel_price2 text-center"> <?php echo $array[$i]['checkPrice']; ?></span> </div>
                </a>
            </div>
    <?php                          
        }
    ?>

<!-- 類別3 -->
<?php
            if($_GET['cate'] == 14){
                // 將第一個產品設定為事先預選好的
                if( $i == 0){
    ?>
            <div class="d3-product_carousel_picbox d3-product_carousel_picbox3 selected">            
    <?php
                }else{
    ?>
            <div class="d3-product_carousel_picbox d3-product_carousel_picbox3">
    <?php
                }
    ?>       
                <a href="#">
                    <img src="./product/<?php echo $array[$i]['itemPic01']; ?>" alt="" class="d3-product_carousel_pic d3-product_carousel_pic3">
                    <div class="d3-product_carousel_name d3-product_carousel_name3 text-center mt-2"><?php echo $array[$i]['itemName']; ?></div>
                    <div class="text-center"> NT$ <span class="d3-product_carousel_price d3-product_carousel_price3 text-center"> <?php echo $array[$i]['checkPrice']; ?></span> </div>
                </a>
            </div>
    <?php                          
        }
    ?>

<!-- 類別4 -->
<?php
            if($_GET['cate'] == 16){
                // 將第一個產品設定為事先預選好的
                if( $i == 0){
    ?>
            <div class="d3-product_carousel_picbox d3-product_carousel_picbox4 selected">            
    <?php
                }else{
    ?>
            <div class="d3-product_carousel_picbox d3-product_carousel_picbox4">
    <?php
                }
    ?>        
                <a href="#">
                    <img src="./product/<?php echo $array[$i]['itemPic01']; ?>" alt="" class="d3-product_carousel_pic d3-product_carousel_pic4">
                    <div class="d3-product_carousel_name d3-product_carousel_name4 text-center mt-2"><?php echo $array[$i]['itemName']; ?></div>
                    <div class="text-center"> NT$ <span class="d3-product_carousel_price d3-product_carousel_price4 text-center"> <?php echo $array[$i]['checkPrice']; ?></span> </div>
                </a>
            </div>
    <?php                          
        }
    ?>

<!-- 類別5 -->
<?php
            if($_GET['cate'] == 17){
                // 將第一個產品設定為事先預選好的
                if( $i == 0){
    ?>
            <div class="d3-product_carousel_picbox d3-product_carousel_picbox5 selected">            
    <?php
                }else{
    ?>
            <div class="d3-product_carousel_picbox d3-product_carousel_picbox5">
    <?php
                }
    ?>
                <a href="#">
                    <img src="./product/<?php echo $array[$i]['itemPic01']; ?>" alt="" class="d3-product_carousel_pic d3-product_carousel_pic5">
                    <div class="d3-product_carousel_name d3-product_carousel_name5 text-center mt-2"><?php echo $array[$i]['itemName']; ?></div>
                    <div class="text-center"> NT$ <span class="d3-product_carousel_price d3-product_carousel_price5 text-center"> <?php echo $array[$i]['checkPrice']; ?></span> </div>
                </a>
            </div>
    <?php                          
        }
    ?>

    <?php
        }
    ?>