<?php 
session_start();

include("./db.inc.php"); ?>

<!doctype html>
<html lang="en">
  <head>
    <title>會員中心|訂單查詢</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    
    <!-- Custome CSS -->
    <link rel="stylesheet" href="./css/css.css">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="./css/navbar1.css"> 
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/_tpl_nav_head.css">
    <link rel="stylesheet" href="css/myOrder1.css">

    <style>
    </style>
  </head>
  <body>

  <?php
    require_once('./_tpl_nav_html.php');
?>
<?php $userName= $_SESSION['userName'];
    $sql_member = "SELECT * FROM users WHERE  userName='$userName'" ;
    $data = $pdo->query($sql_member)->fetch(PDO::FETCH_UNIQUE);
    ?>
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-3 col-12 tsai-box">
                    <figure class="tsai-photo">
                        <img src="./images/userpic.png" alt="">
                    </figure>
                    <div class="sub-title mt-3 tsai-data-name t-h4"><?php echo $_SESSION['userName']?></div>
                    <div class="tsai-list">  
                        <div class="sub-title "><a href="myData.php" class="tsai-list-option">會員資料</a></div>
                        <div class="sub-title "><a href="myOrder1.php" class="tsai-list-option active">訂單查詢</a></div>
                        <div class="sub-title "><a href="myFav.php" class="tsai-list-option">我的收藏</a></div>
                        <div class="sub-title "><a href="myVoucher.php" class="tsai-list-option">我的優惠</a></div>
                        <div class="content mt-2 tsai-pwdedit">
                            <a href="myPasswordModify.php" class="key black">
                                <i class="fas fa-key "></i>  修改密碼
                            </a>
                        </div>
                    </div>
                  </div>
                  <div class="col-xl-8 tsai-box1">
                    <h3>訂單查詢</h3>
                    <div class="d-flex tsai-order-category-list">
                        <a href="#" class="tsai-order-category content g2 active" id="process">作業中</a>
                        <a href="#" class="tsai-order-category content g2" id="done">已完成</a>
                        <a href="#" class="tsai-order-category content g2" id="cancel">已取消</a>
                    </div>
                    <div class="tsai-box-content">
                    <div class="tsai-order-card">
                        <div class="order-num tip text-left">訂單編號：G1234567890</div>
                        <div class="status-m tip">運送中</div>
                        <div class="order-progress">
                            <div class="order-progress-p1 order-progress-p">
                                <div class="order-progress-pb"></div>
                                <div class="tip">待付款</div>
                            </div>
                            <div class="order-progress-p2 order-progress-p">
                                <div class="order-progress-pb empty"></div>
                                <div class="tip">待出貨</div>
                            </div>
                            <div class="order-progress-p3 order-progress-p">
                                <div class="order-progress-pb empty"></div>
                                <div class="tip">運送中</div>
                            </div>
                            <div class="order-progress-p4 order-progress-p">
                                <div class="order-progress-pbb empty"></div>
                                <div class="tip">待取貨</div>
                            </div>
                        </div>
                        <div class="order-date tip text-left">訂單日期：2020/01/17</div>
                        <div class="order-total tip text-left mt-1">訂單金額：4580元</div>
                        <div class="order-details">
                            <div class="order-detail d-flex justify-content-between mt-5">
                                <div class="tip">Superior Neapolitan 7.75" Skateboard Deck</div>
                                <div class="tip">NT$ 1880</div>
                            </div>
                            <div class="order-detail d-flex justify-content-between mt-1">
                                <div class="tip">D-Street Beach Complete Cruiser - Multi 26"</div>
                                <div class="tip">NT$ 2250</div>
                            </div>
                            <div class="order-detail d-flex justify-content-between mt-1">
                                <div class="tip">Stage 11 Forged Vintage Silver Independent Skateboard Trucks</div>
                                <div class="tip">NT$ 1500</div>
                            </div>
                            <div class="order-detail d-flex justify-content-between mt-1">
                                <div class="tip">Colours Collectiv Colours Skateboard Grip Tape</div>
                                <div class="tip">NT$ 650</div>
                            </div>
                            <div class="order-total-open content text-right mt-1">訂單金額：4580元</div>
                            <hr>
                        </div>
                        <div class="order-info">
                            <div class="order-info-name tip text-left mt-1">訂購人姓名：陳豆皮</div>
                            <div class="order-info-phone tip text-left mt-1">聯絡電話：0912345678</div>
                            <div class="order-info-address tip text-left mt-1">收件地址：台北市大安區信義路123號3樓</div>
                            <div class="order-info-pay tip text-left mt-1">付款方式：線上刷卡付款</div>
                            <div class="order-info-credit tip text-left mt-1">付款卡號：XXXX 2345 XXXX 1234</div>
                        </div>
                        <div class="order-list-btns mb-3">
                            <div class="order-comment-btn mr-3"><a href="#" class="bt-b-g3 disabled" id="comment">給予評論</a></div>
                            <div class="order-open-btn"><a href="#" class="bt-p" id="open-order">展開訂單</a></div>
                        </div>
                    </div>
                    <div class="noneorderlist pt-5">尚未有清單</div>
                 </div>  
                
            </div>
        </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <script src="./js/accessible-menu.js"></script>
    <script src="./js/tpl_navbar_js.js"></script>
    <script>
        var btn;

        $("#open-order").on("click",function(){
            btn = $(".order-open-btn a").text()
            $(".tsai-order-card").toggleClass("open");
            $(".order-total").toggleClass("disappear");
            if( btn == "展開訂單" ){
            $(".order-open-btn a").html("收合訂單")
            }
            if( btn == "收合訂單" ){
                $(".order-open-btn a").html("展開訂單")
            }
        })

        $(".tsai-order-category").on('click',function(){
            $(this).addClass("active").siblings().removeClass("active")
        })

        $("#done, #cancel").on("click",function(){
            // console.log('111');
            // $("#comment").removeClass("disabled");
            $('.noneorderlist').css('display','block')
            $('.tsai-order-card').addClass('hide')
            $('.tsai-box1').css('height','300px')
        })

        $("#process").on("click",function(){
            $("#comment").addClass("disabled");
            $('.noneorderlist').css('display','none')
            $('.tsai-order-card').removeClass('hide')
            $('.tsai-box1').css('height','')
        })

    </script>
</body>
</html>