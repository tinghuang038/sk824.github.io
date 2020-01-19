<?php session_start();
if (session_status() == PHP_SESSION_NONE) {
    session_start();
  } ?>
<!doctype html>
<html lang="zh">

<head>
    <title>結帳頁面 | 資訊填寫</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/css.css">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="./css/navbar1.css"> 
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/_tpl_nav_head.css">
    <link rel="stylesheet" href="./css/c-checkout-form.css">

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css"
        integrity="sha384-REHJTs1r2ErKBuJB0fCK99gCYsVjwxHrSU0N7I1zl9vZbggVJXRMsv/sLlOAGb4M" crossorigin="anonymous">

    <style>
        html,
        body {
            /* width: 100vw; */
            /* height: 100vh; */
            overflow-X: hidden;
        }

        .btn {
            background-color: white;
        }

        .center_inportantInfo {
            padding-top: 50px;

        }
        .coupon-select{
            color: #666666;
            width: 30%;
            padding:5px 20px;
            border-radius:4px;
            height: 35px;
            margin-left: 10px;
        }
        /* 小塊的東西 */
        #cart-sub-total{
            position: fixed;
            flex-direction: row;
            justify-content: center;
            border-radius: 4px;
            top:10vh;
            left:20vw;
            width:250px;
            background:transparent;
        }
        .btn-group {
            margin:24px
        }
        @media screen and (max-width:767px){
            .coupon-grid{
                flex-direction: column;
                margin: 0
            }
            .coupon-select{
                /* display: none; */
                width: 300px;
                border-radius:4px;
                margin: 10px 0px 0px 0px ;
            }
            .coupon-text{
                margin-left: 20px;
            }
            .coupon-input{
                margin-left: -66px;
            }
        }
        @media screen and (max-width:767px){
            #cart-sub-total{
            position:unset;
            flex-direction: row;
    
            border-radius: 4px; 
            background:transparent;
            }

            .detail-item-list , #cart-sub-total2{
            width:90VW;
            margin: 0 auto;
            
            }
            .p-desc{
                width:90%;
            }
            .item-imgdiv{
                width:50px;
                height:50px;
            }
            .caution-notice{
                width:80vw;
                text-align:center;
                margin:0 auto;
            }
            .btn-group {
            margin:10px;
        }
        }
    </style>

</head>

<body>


    <?php
            require_once('_tpl_nav_html.php');
        ?>



    <div class="center_inportantInfo">
        <div class="container mt-5 mb-5">
            <div class="row justify-content-end abcc">
                <div class="heading sub-title  mx-0 col-sm-9 col-xs-12">
                    <h5 class="ml-3 mt-2">購物車內容</h5>
                    <a href="./allproduct_sd.php" class="continue mr-3">繼續購物<i class="fas fa-chevron-right"></i></a>
                </div>
                <form action="" method="POST" class="checkout-form col-sm-9 py-3">
                    <div class="cart ">
                        <ul class="table-head  pl-0 py-2 mb-2">
                            <li class="text-left ml-3">商品明細</li>
                            <li>數量</li>
                            <li>小計</li>
                            <li>移除</li>
                        </ul>
                    </div>
                    <div class="cart-product ">
                        <ul class="cart-wrap  bg-g1 pl-0">
                            <?php
                            if( isset($_SESSION["cart"]) && count($_SESSION["cart"]) > 0 ){
                                foreach($_SESSION['cart'] as $key => $value) {
                            ?>
                            <li class="items pt-2" data-id="<?= $_SESSION['cart'][$key]['id'] ?>" data-price="<?= $_SESSION['cart'][$key]['checkPrice']; ?>">
                                <div class="info-wrap">
                                    <div class="cart-section">
                                        <div class="item-imgdiv px-2">
                                            <img class="item-img" src="./product/<?= $_SESSION['cart'][$key]['itemPic01'];?>" alt="">
                                        </div>
                                        <div class="p-desc  ">
                                            <a href="./itemdetail.php?id=<?= $_SESSION['cart'][$key]['id']?>" class=" truncate content mt-2 g4 text-decoration-none"><?= $_SESSION['cart'][$key]['itemName'] ;?></a>
                                            <p class="item-dimension mb-1 mt-3">
                                                <span class="unit-price tip size tip">規格:<?= $_SESSION['cart'][$key]['itemSize'] ;?></span></br>
                                                <span class="unit-price tip">單價: NT$ <?= $_SESSION['cart'][$key]['checkPrice']; ?></span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="qty-button">
                                        <button type="button" class="minus-button"><i class="fas fa-minus"></i></button>
                                        <input type="text" class="qn text-center qty" value="<?= $_SESSION['cart'][$key]['qty'] ;?>" min="1" max="100">
                                        <button type="button" class="plus-button"><i class="fas fa-plus"></i></button>
                                    </div>
                                    <div class="sub-total">
                                    <?php $a= $_SESSION['cart'][$key]['qty'] ;
                                          $b= $_SESSION['cart'][$key]['checkPrice']; 
                                          $price=$a*$b;
                                          echo $price;
                                    
                                    ?>
                                    </div>
                                    <div class="times">
                                        <button class="remove-btn" data-id="<?= $_SESSION['cart'][$key]['id'] ?>" >
                                            <a href="javascript:"><i class="fas fa-times times-lh"></i></a> </button>
                                    </div>
                                </div>
                                <hr class="hr-b">
                            </li>
                           
                            
                            <?php
                                }
                            } else {
                                echo '<li class="litext purple nopd"> 購物車還沒有商品唷!<a class="litexta" href="./allproduct_sd.php">去逛逛?</a><li>';
                            }
                            ?>
                           
                        </ul>
                        <hr class="hr-b pb-1">
                        <div class="caution-notice tooo" id="caution-notice">
                                 <i class="fas fa-exclamation-circle "></i>商品總材積超過限制，本次訂單將無法提供超商配送。
                        </div>
                        <hr>
                    
                    
                    
                    </div>
                    <div class="content pl-2 ml-3">配送方式</div>
                    <div class="shipping-box ">
                        <div class="delivery-options">
                            <div class="express">
                                <div class="d-flex">
                                    <p class="option-title">宅配</p>
                                </div>
                                <div class="option">
                                    <ul class="mr-3 mb-2">
                                        <li class="mr-3">
                                            <div class="delivery-btn py-2 px-1" id="tcat" role="button" tabindex="0">
                                                <img src="./images/delivery_truck.svg" alt="express">
                                                <p class="mb-0">黑貓宅急便</p>
                                            </div>
                                        </li>
                                        <li class="mr-3">
                                            <div class="delivery-btn py-2 px-1" id="postoffice" role="button" tabindex="0">
                                                <img src="./images/Package.svg" alt="postoffice">
                                                <p class="mb-0">郵局</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="c-store">
                                <div class="d-flex">
                                    <p class="option-title">便利商店取貨</p>
                                </div>
                                <div class="option">
                                    <ul class="mr-3">
                                        <li class="mr-3">
                                            <div class="delivery-btn-disabled py-2 px-1" id="S-Eleven" role="button" tabindex="0">
                                                <img src="./images/7-Eleven.svg" alt="S-Eleven">
                                                <p class="mb-0">7-11</p>
                                            </div>
                                        </li>
                                        <li class="mr-3">
                                            <div class="delivery-btn-disabled py-2 px-1" id="FamilyMart" role="button" tabindex="0">
                                                <img src="./images/familymart.svg" alt="FamilyMart">
                                                <p class="mb-0">全家</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="coupon-grid mt-2 mb-2">
                        <div class="coupon-input">
                            <label for="coupon-text" class="content">折扣碼</label>
                            <input type="text" name="coupon-text" placeholder="請輸入折扣碼" id="coupon-text"
                                class="coupon-text px-2 py-1">
                            <a class="coupon-btn white"  id="checkCoupon">使用</a>
                        </div>
                        <div class="checkText purple"></div>
                        <select class="coupon-select in tip g3" name="sss">
                            <option value="" class="g3">請選擇折扣碼</option>
                            <option value="">新會員，現折100</option>
                            <!-- <option value="">23</option> -->
                            <!-- <option value="">13</option> -->
                        </select>
                    </div>
                    <hr>
                    <div class="content pl-2 ml-3">個人資料</div>
                    <div class="delivery-info">
                        <div class="content-box">
                            <div class="recipient-info">
                                <div class="info-box">
                                    <div class="box m-3">
                                        <label for="recipient" class="tip control-label mt-2 ml-0">收件人姓名</label>
                                        <input type="text" class="in form-control" id="recipient" placeholder="姓名">
                                    </div>
                                    <div class="box m-3">
                                        <label for="telnum" class="tip control-label mt-2 ml-0">電話</label>
                                        <input type="tel" class="in form-control" id="telnum" placeholder="請輸入手機號碼">
                                    </div>
                                </div>
                            </div>
                            <div class="add-box  m-3">
                                <div class="tip "><span>收件地址</span></div>
                                <div id="twzipcode" class="area-info">
                                    <div data-role="county" data-name="county[]" data-value="預設值"
                                        data-style="county-style" class="mr-3">
                                    </div>
                                    <div data-role="district" data-name="district[]" data-value="大安區"
                                        data-style="district-style" class="mr-3">
                                    </div>
                                    <div data-role="zipcode" data-name="zipcode" data-value="160"
                                        data-style="zipcode-style" class="mr-3">
                                    </div>
                                </div>
                                <div class="add-text  mb-3">
                                    <div>
                                        <input type="text" class="in add content form-control mt-2 ml-0" id="add"
                                            placeholder="詳細地址">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="content ml-3">發票類型</div>
                    <div class="invoice-picker m-2">
                        <div class="invoice-type">
                            <div class="btn-group btn-group-toggle ">
                                <label class="exprss btn in">
                                    <input type="radio" name="options" id="radio1" autocomplete="off"
                                        onclick="myFunction()">
                                    <div>個人</div>
                                </label>
                            </div>
                            <div class="btn-group btn-group-toggle ">
                                <label class="exprss btn in">
                                    <input type="radio" name="options" id="radio2" autocomplete="off"
                                        onclick="myFunction()">
                                    <div>公司</div>
                                </label>
                            </div>
                            <div class="btn-group btn-group-toggle ">
                                <label class="exprss btn in">
                                    <input type="radio" name="options" id="radio3" autocomplete="off"
                                        onclick="myFunction()">
                                    <div>手機載具</div>
                                </label>
                            </div>
                            <div class="btn-group btn-group-toggle ">
                                <label class="exprss btn in">
                                    <input type="radio" name="options" id="radio4" autocomplete="off"
                                        onclick="myFunction()">
                                    <div>自然人憑證</div>
                                </label>
                            </div>
                            <div class="btn-group btn-group-toggle">
                                <label class="exprss btn in">
                                    <input type="radio" name="options" id="radio5" autocomplete="off"
                                        onclick="myFunction()">
                                    <div>捐贈碼</div>
                                </label>
                            </div>
                        </div>
                        <div class="invoice-text">
                            <div class="invoice-rules-title tip text-center none mb-3 p-2" id="text1">
                                <span><strong>統一發票使用辦法規定:</strong>依統一發票使用辦法規定：個人發票一經開立，無法更改或改開公司戶發票，需開立統編請選擇『公司用(統編)
                                    』，請務必確認選用之電子發票載具類型是否正確，一經開立不得要求更改。</span>
                            </div>
                            <div class="invoice-rules-title none mb-3 p-2" id="text2">
                                <div class="corp-code-input">
                                    <label for="code-title" class="content control-label">統一編號</label>
                                    <input type="text" class="in code-text form-control mb-2" id="corp-code"
                                        placeholder="請輸入統一編號">
                                    <input type="text" class="in code-text form-control mb-2" id="corp-name"
                                        placeholder="請輸入發票抬頭">
                                </div>
                                <div class="default-notice tip text-center">
                                    <span><strong>統一發票使用辦法規定:</strong>依統一發票使用辦法規定：公司戶發票一經開立，無法更改為個人發票。請務必確認輸入之公司統編是否正確，一經開立不得要求更改。</span>
                                </div>
                            </div>
                            <div class="invoice-rules-title none mb-3 p-2" id="text3">
                                <div class="vehicle-code-input">
                                    <label for="code-title" class="content control-label">手機載具</label>
                                    <input type="text" class="in code-text form-control" id="vehicle-code"
                                        placeholder="手機條碼第一碼務必為「/」，後面為七碼(大寫英文，符號，數字)">
                                </div>
                                <div class="default-notice tip text-center">
                                    <span><strong>統一發票使用辦法規定:</strong>請務必確認載具代碼是否正確，一經開立不得要求更改。</span>
                                </div>
                            </div>
                            <div class="invoice-rules-title none mb-3 p-2" id="text4">
                                <div class="vehicle-code-input">
                                    <label for="code-title" class="content control-label">自然人憑證</label>
                                    <input type="text" class="in code-text form-control" id="identity-code"
                                        placeholder="請輸入自然人憑證號碼">
                                </div>
                                <div class="default-notice tip text-center">
                                    <span><strong>統一發票使用辦法規定:</strong>請務必確認憑證號碼是否正確，一經開立不得要求更改。</span>
                                </div>
                            </div>
                            <div class="invoice-rules-title none mb-3 p-2" id="text5">
                                <div class="charity-code-input">
                                    <label for="code-title" class="content control-label">捐贈碼</label>
                                    <input type="text" class="in code-text form-control" id="charity-code"
                                        placeholder="請輸入欲捐贈單位的捐贈碼">
                                </div>
                                <div class="default-notice tip text-center">
                                    <span><strong>統一發票使用辦法規定:</strong>請務必確認捐贈碼是否正確，一經開立不得要求更改。</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="policy-check-box pl-3">
                        <div class="policy-text mb-2">
                            <span><input type="checkbox" checked="checked" class="tip"
                                    id="policy1">同意會員責任規範及個資聲明。</span>
                        </div>
                        <div class="policy-text mb-2">
                            <span><input type="checkbox" checked="checked" class="tip"
                                    id="policy2">為保障彼此權益，賣家在收到您的訂單後仍保有決定是否接受訂單及出貨與否之權利。</span>
                        </div>
                    </div>
                    <hr>

                    <div class="cart-sub-total " id="cart-sub-total">
        <div class="detail-item-list">
            <!-- <div class="list-title sub-title p-2">結帳金額</div>
            <div class="list-row p-2">
                <span class="product-sub-total">小計</span>
                <span class="currency-format">NT$<span class="number-format"></span></span>
            </div>
            <div class="list-row p-2">
                <span class="shipping-fee">運費</span>
                <span class="currency-format">NT$<span class="number-format">150</span></span>
            </div>
            <div class="list-row p-2">
                <span class="discount red">折扣碼</span>
                <span class="currency-format red"><span class="number-format">-50</span></span>
            </div>
            <hr>
            <div class="list-row p-2">
                <span class="total-pay purple">應付總額</span>
                <span class="currency-format purple">NT$<span
                        class="number-format sub-title font-weight-bolder">4,860</span></span>
            </div> -->

            <div class="payment-cta mb-3">
                <div class=" text-center abbbb mt-2">
                    <div class="cart-sub-total " id="cart-sub-total2">
                        <div class="detail-item-list ">
                            <div class="list-title sub-title p-2">結帳金額</div>
                            <div class="list-row p-2">
                                <span class="product-sub-total">小計</span>
                                <span class="currency-format">NT$<span class="number-format total-1"></span></span>
                            </div>
                            <div class="list-row p-2">
                                <span class="shipping-fee">運費</span>
                                <span class="currency-format"><span class="number-format">免運</span></span>
                            </div>
                            <div class="list-row p-2">
                                <span class="discount red">折扣碼</span>
                                <span class="currency-format red">-<span class="number-format coupon"></span></span>
                            </div>
                            <hr>
                            <div class="list-row p-2">
                                <span class="total-pay purple">應付總額</span>
                                <span class="currency-format purple">NT$<span class="number-format sub-title font-weight-bolder total-2"></span></span>
                            </div>

                            <!-- <img class="skate-img" src="./images/title-skateboard.svg" alt=""> -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <div class="subnitBtnRight  row  justify-content-end mr-2">
                       <a href="./c-checkout-payment.php" class="checkout-button bt-p" id="checkout-button"> 立即付款</a>
                    </div>



                   
                </form>
            </div>
        </div>
    </div>
    
    </div>
    <?php
    // require_once("./footer.php");
    ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <script src="./js/accessible-menu.js"></script>
    <script src="./js/tpl_navbar_js.js"></script>

    <!-- twzipcode plugin -->
    <!-- <script src="./js/jquery.twzipcode.js"></script> -->
    <script>

        //產品數量加減控制
        $(document).ready(function(){
            calTotalPrice();
        })
        $('.plus-button').click(function () {
            var th = $(this).closest('.qty-button').find('.qn');
            let id = $(this).closest('.items').attr('data-id');
            let v = th.val()*1 + 1;
            th.val( v);
            $.post('add-to-cart.php', {id:id, qty:v}, function(){
                calTotalPrice();
            });
        });
        $('.minus-button').click(function () {
            var th = $(this).closest('.qty-button').find('.qn');
            let id = $(this).closest('.items').attr('data-id');
            let v = th.val()*1 - 1;
            if(v < 1) v=1;
            th.val( v);
            $.post('add-to-cart.php', {id:id, qty:v}, function(){
                calTotalPrice();
            });
        });
        // 折扣碼
        // let coupon = $('.coupon').text() *1;

        function calTotalPrice(){
            let coupon = $('.coupon').text() *1;
            let items = $('.items');
            let total = 0;
            items.each(function(){
                let price = $(this).attr('data-price') * 1;
                let qty = $(this).find('.qn').val();

                $(this).find('.sub-total').html(price*qty);
                total += price*qty;
                totalAll = total - coupon
            });

            $(".total-1").html(total);
            $(".total-2").html(totalAll);


        }

        //刪除鍵
        $(".remove-btn").on("click", function (event) {
            event.stopPropagation();
            let removeBtn = $(this);
            let id = removeBtn.attr('data-id');

            $.ajax({
              method: 'post',
              url: './delete-Cart.php',
              dataType: 'json',
              data: {
                id: id
              }
            }).done((json) => {
              cart_count(json);
            });         
        });


        //配送選項
        let tcat = $('#tcat');
        let postoffice = $('#postoffice');
        let SEleven = $('#S-Eleven');
        let familyMart = $('#FamilyMart');

        $("#tcat").click(
            function () {

                $(this).addClass("focus");
                postoffice.removeClass("focus");
                SEleven.removeClass("focus");
                familyMart.removeClass("focus");
            });

        $("#postoffice").click(
            function () {

                $(this).addClass("focus");
                tcat.removeClass("focus");
                SEleven.removeClass("focus");
                familyMart.removeClass("focus");
            });

        
        //發票類型點選
        function myFunction() {
            // Get the checkbox
            var radio1 = document.getElementById("radio1");
            var radio2 = document.getElementById("radio2");
            var radio3 = document.getElementById("radio3");
            var radio4 = document.getElementById("radio4");
            var radio5 = document.getElementById("radio5");
            // Get the output text
            var text1 = document.getElementById("text1");
            var text2 = document.getElementById("text2");
            var text3 = document.getElementById("text3");
            var text4 = document.getElementById("text4");
            var text5 = document.getElementById("text5");

            // If the checkbox is checked, display the output text
            if (radio1.checked == true) {
                text1.style.display = "block";
            } else {
                text1.style.display = "none";
            }

            if (radio2.checked == true) {
                text2.style.display = "block";
            } else {
                text2.style.display = "none";
            }

            if (radio3.checked == true) {
                text3.style.display = "block";
            } else {
                text3.style.display = "none";
            }

            if (radio4.checked == true) {
                text4.style.display = "block";
            } else {
                text4.style.display = "none";
            }

            if (radio5.checked == true) {
                text5.style.display = "block";
            } else {
                text5.style.display = "none";
            }

        }

        $(".btn").on("click", function () {
            $(this).children("input").addClass("exbtnclick").siblings(".exprss").removeClass("exbtnclick");
        })


        // 確認折扣碼
        
        $('#checkCoupon').on('click',function(){
            let couponText = $('#coupon-text').val();
            if(couponText == '150off' ){
                $('.coupon').text('150');
                // coupon =150;
                $('.checkText').text('☑ 兌換成功')
                calTotalPrice(); 
                
                // $('.checkText').css('dispaly','block')
                // $(".total-2").html(totalAll);
            }else{
                alert('沒有折扣')
            }
        })




        // //twzipcode plugin
        // $("#twzipcode").twzipcode();


        // 來唷來唷優惠碼
        // var couponText = 'M300-HD';
        // var currentCoupon = $('input#coupon-text').val();

        // $('input#coupon-text').keyup(
        //     function(){
        //         if(currentCoupon === couponText){
        //             $(this).css('background','#f24');
        //         }else{
        //             $(this).css('background','skyblue');
        //         }
        //     }
        // );

      
    </script>



</body>

</html>