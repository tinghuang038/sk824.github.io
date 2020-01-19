<?php 
session_start();

include("./db.inc.php"); ?>

<!doctype html>
<html lang="en">
  <head>
    <title>會員中心|我的優惠</title>
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
    <link rel="stylesheet" href="./css/myVoucher.css">

    <style>
    </style>
  </head>
  <body>

  <?php
       require_once('_tpl_nav_html.php');

?>
<?php $userName= $_SESSION['userName'];
    $sql_member = "SELECT * FROM users WHERE  userName='$userName'" ;
    $data = $pdo->query($sql_member)->fetch(PDO::FETCH_UNIQUE);
    ?>
        <div class="container ">
                <div class="row justify-content-between">
                    <div class="col-xl-3 col-12 tsai-box">
                        <figure class="tsai-photo">
                            <img src="./images/userpic.png" alt="">
                        </figure>
                        <div class="sub-title mt-3 tsai-data-name t-h4"><?php echo $_SESSION['userName']?></div>
                        <div class="tsai-list">  
                            <div class="sub-title "><a href="myData.php" class="tsai-list-option">會員資料</a></div>
                            <div class="sub-title "><a href="myOrder1.php" class="tsai-list-option">訂單查詢</a></div>
                            <div class="sub-title "><a href="myFav.php" class="tsai-list-option">我的收藏</a></div>
                            <div class="sub-title "><a href="myVoucher.php" class="tsai-list-option active">我的優惠</a></div>
                            <div class="content mt-2 tsai-pwdedit">
                                <a href="myPasswordModify.php" class="key black">
                                    <i class="fas fa-key "></i>  修改密碼
                                </a>
                            </div>
                        </div>
                      </div>
                  <div class="col-xl-8 tsai-box1">
                    <h3>我的優惠</h3>
                    <div class="t-vou">
                        <input type="text" class="in tsai-voucher" placeholder="請輸入優惠碼">
                        <button class="bt-p" id='checkVoucher'>兌換</button>
                    </div>
                    <div class="voucherStatus purple hide" >☑ 兌換成功</div>
                    
                    <div id="voucher-tab-demo">
                        <ul id="voucher-tab-title" class="d-flex justify-content-start tab-title">
                            <li class="active"><a href="#tab01">可使用</a></li>
                            <li><a href="#tab02">已使用</a></li>
                            <li><a id="tab03Btn" href="#tab03">已過期</a></li>
                        </ul>
                        <div>
                            <div class="tsai-card">
                                <div id="tab01" class="tab-inner">
                                    <span class="d-flex justify-content-between border">
                                        <p class="flex-grow-1">新會員，現折100。</p>
                                        <p>有效期限：2099/11/11</p>
                                        <p id="" class="tsai-mouse tsai-chick"><i class="fas fa-chevron-down" ></i></p>
                                    </span>
                                    <div class="tsai-show" style="display: none;">
                                        <p>使用規則:</p>
                                        <p>
                                            折價券限會員使用，不得折抵現金之不得轉讓。<br>
                                            折價券的使用方式依折價券上說明為主，恕無法抵扣運費。<br>
                                            折價券不得兌換現金、找零。<br>
                                            折價券使用的面額與日期，請詳閱折價券注意事項。<br>
                                            本公司有權決定終止及變更折價券贈送辦法及折抵方式的權利。<br>
                                            訂單取消時，金額是以「購買時實際支付的金額」來計算，<br>
                                            也就是扣除折價券後的金額。該次消費使用之折價券將無法返還。<br>
                                        </p>
                                    </div>
                                </div>
                                <div id="tab02" class="tab-inner">
                                    <span class="d-flex justify-content-between border">
                                        <p class="flex-grow-1">開幕一周年，88折優惠券。</p>
                                        <p>有效期限：2020/02/13</p>
                                        <p id="" class="tsai-mouse tsai-chick"><i class="fas fa-chevron-down" ></i></p>
                                    </span>
                                    <div class="tsai-show" style="display: none;">
                                        <p>使用規則:</p>
                                        <p>
                                            折價券限會員使用，不得折抵現金之不得轉讓。<br>
                                            折價券的使用方式依折價券上說明為主，恕無法抵扣運費。<br>
                                            折價券不得兌換現金、找零。<br>
                                            折價券使用的面額與日期，請詳閱折價券注意事項。<br>
                                            本公司有權決定終止及變更折價券贈送辦法及折抵方式的權利。<br>
                                            訂單取消時，金額是以「購買時實際支付的金額」來計算，<br>
                                            也就是扣除折價券後的金額。該次消費使用之折價券將無法返還。<br>
                                        </p>
                                    </div>
                                </div>
                                <div id="tab03" class="">
                                    <!-- <span class="d-flex justify-content-between border">
                                        <p class="flex-grow-1">開幕一周年，88折優惠券。</p>
                                        <p>有效期限：2019/02/14</p>
                                        <p id="" class="tsai-mouse tsai-chick"><i class="fas fa-chevron-down" ></i></p>
                                    </span>
                                    <div id="" class="tsai-show" style="display: none;">
                                        <p>使用規則:</p>
                                        <p>
                                            折價券限會員使用，不得折抵現金之不得轉讓。<br>
                                            折價券的使用方式依折價券上說明為主，恕無法抵扣運費。<br>
                                            折價券不得兌換現金、找零。<br>
                                            折價券使用的面額與日期，請詳閱折價券注意事項。<br>
                                            本公司有權決定終止及變更折價券贈送辦法及折抵方式的權利。<br>
                                            訂單取消時，金額是以「購買時實際支付的金額」來計算，<br>
                                            也就是扣除折價券後的金額。該次消費使用之折價券將無法返還。<br>
                                        </p>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    
                  </div>
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
        $(".tsai-chick").click(function(){
            $(".tsai-show").slideToggle();
        })
        $(function(){
            var $li = $('ul.tab-title li');
                $($li. eq(0) .addClass('active').find('a').attr('href')).siblings('.tab-inner').hide();
            
                $li.click(function(){
                    $($(this).find('a'). attr ('href')).show().siblings ('.tab-inner').hide();
           
                    $(this).addClass('active'). siblings ('.active').removeClass('active');
                    $(".tsai-show").hide('slow');

                });
        });


        $("#checkVoucher").on('click',function(){
            var v = $(".tsai-voucher").val();
            console.log(v);

            if( v == "sk824"){
                $(".voucherStatus").text("☑ 兌換成功").removeClass('hide');
                setTimeout(function(){
                    $(".voucherStatus").addClass('hide')},1000)
                setTimeout(function(){
                    $(".tsai-voucher").val("")},1000)
                    $(".tsai-card").append(`
                <div id="tab01" class="tab-inner">
                                    <span class="d-flex justify-content-between border">
                                        <p class="flex-grow-1">開幕一周年，88折優惠券。</p>
                                        <p>有效期限：2020/02/15</p>
                                        <p id="" class="tsai-mouse tsai-chick"><i class="fas fa-chevron-down" ></i></p>
                                    </span>
                                    <div class="tsai-show" style="display: none;">
                                        <p>使用規則:</p>
                                        <p>
                                            折價券限會員使用，不得折抵現金之不得轉讓。<br>
                                            折價券的使用方式依折價券上說明為主，恕無法抵扣運費。<br>
                                            折價券不得兌換現金、找零。<br>
                                            折價券使用的面額與日期，請詳閱折價券注意事項。<br>
                                            本公司有權決定終止及變更折價券贈送辦法及折抵方式的權利。<br>
                                            訂單取消時，金額是以「購買時實際支付的金額」來計算，<br>
                                            也就是扣除折價券後的金額。該次消費使用之折價券將無法返還。<br>
                                        </p>
                                    </div>
                                </div>
                `)
                }else{
                    $(".voucherStatus").text("☒ 折扣碼錯誤").removeClass('hide');
                setTimeout(function(){
                    $(".voucherStatus").addClass('hide')},1000)
                setTimeout(function(){
                    $(".tsai-voucher").val("")},1000)
                }
        })

    </script>
</body>
</html>