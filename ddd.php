<?php
require_once('./db.inc.php');
if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }
?>
<!doctype html>
<html lang="zh">
  <head>
    <title>結帳頁面 | 付款</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/css.css">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="./css/navbar1.css"> 
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/_tpl_nav_head.css">
    <link rel="stylesheet" href="./css/c-checkout-payment.css">
    
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css" integrity="sha384-REHJTs1r2ErKBuJB0fCK99gCYsVjwxHrSU0N7I1zl9vZbggVJXRMsv/sLlOAGb4M" crossorigin="anonymous">
    <link rel="stylesheet" href="css/credit.css">
    <style>
    
    html, body{
        /* width: 100vw;
        height: 100vh; */
        overflow-X: hidden;
    }
    .payment-w{
        width: 500px;
    }
    .card-card{
        width: 300px;

    }

    </style>

</head>
  <body>

    
        <?php
            require_once('./_tpl_nav_html.php');
        ?>
  

  
  
    <div class="payment-wrapper mt-5 mb-5">
  
        <div class="heading sub-title">
            <h5>&nbsp商品購買清單列表</h5>
            <a href="c-checkout-form.php" class="back-button mr-2">回上一步<i class="fas fa-chevron-right"></i></a>
        </div> 
        <form action="" class="checkout-final needs-validation" novalidate>
            <div class="cart">
                <ul class="table-head mt-2 mb-2">
                    <li class="p-header">&nbsp&nbsp商品明細</li>
                    <li>數量</li>
                    <li>小計</li>
                    <li>移除</li>
                </ul>
            </div>
            <div class="cart">
                <ul class="cart-wrap">
                    <li class="items p-2">
                        <div class="cart-section">
                            <img class="item-img" src="./images/00_D-Street Beach Complete Cruiser - Multi 26_a1.png" alt="">
                            <div class="p-desc">
                               <a href="#" class="content truncate">D-Street Beach Complete Cruiser - Multi 26</a>
                               <p class="item-dimension">
                                  <span class="size tip">規格:</span class="unit-price tip"></br>
                                  <span class="unit-price tip">單價: NT$ 2,380</span>
                                 </p>
                            </div>
                         </div>
                         <div class="qty">1</div>
                         <div class="sub-total">2,380</div>
                         <div class="times">
                            <button class="remove-btn"><i class="fas fa-times times-lh"></i></button>
                       </div>
                    </li>
                    <li class="items p-2">
                        <div class="cart-section">
                            <img class="item-img" src="./images/00_D-Street Beach Complete Cruiser - Multi 26_a1.png" alt="">
                            <div class="p-desc">
                               <a href="#" class="content truncate">D-Street Beach Complete Cruiser - Multi 26</a>
                               <p class="item-dimension">
                                  <span class="size tip">規格:</span class="unit-price tip"></br>
                                  <span class="unit-price tip">單價: NT$ 2,380</span>
                                 </p>
                            </div>
                         </div>
                         <div class="qty">1</div>
                         <div class="sub-total">2,380</div>
                         <div class="times">
                            <button class="remove-btn"><i class="fas fa-times times-lh"></i></button>
                       </div>
                    </li>
                </ul>
             </div>
             <div class="cart-detail-list">
                <div class="list-title sub-title p-2">&nbsp結帳金額</div>
                <div class="detail-item-list">
                    <div class="list-row p-3">
                        <span class="product-sub-total">小計</span>
                        <span class="currency-format">NT$<span class="number-format">4,760</span></span>
                    </div>
                    <div class="list-row p-3">
                        <span class="shipping-fee">運費</span>
                        <span class="currency-format">NT$<span class="number-format">150</span></span>
                    </div>
                    <div class="list-row p-3">
                        <span class="discount red">折扣碼</span>
                        <span class="currency-format red"><span class="number-format">-50</span></span>
                    </div>
                    <hr>
                    <div class="list-row p-3">
                        <span class="total-pay purple">總額</span>
                        <span class="currency-format purple">NT$<span class="number-format sub-title font-weight-bolder">4,860</span></span>
                    </div>
                </div>
             </div>
            <hr>
            <div class="payment-box">
                <div class="title content p-3">付款方式</div>
                <div class="payment-options">
                    <div class="atm">
                        <div class="d-flex payment-w justify-content-between"> 
                            <div class="radio-option">
                                <input type="radio" name="option" value="atm">
                                <span>ATM轉帳付款</span>
                            </div>
                            <div class="radio-option">
                                <input type="radio" name="option" value="credit-card">
                                <span>信用卡付款</span>
                            </div>
                        </div>
                        
                        <div>
                            <!--  -->
                            <div class="form-wrapper">
                                <div class="atm-container none">
                                    <div class="field-container" id="atm">
                                        <select name="bankSelect" id="bankSelect">
                                            <option value="chinaTrust" name="chinaTrust">822 中國信託</option>
                                            <option value="fubon" name="fubon">012 台北富邦</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!--  -->
                            <div class="credit-card">
                        <div class="form-wrapper" id="form-wrapper">
                            <div class="card-container none">
                                <div class="container container1 preload">
                                    <div class="creditcard">
                                        <div class="front">
                                            <div id="ccsingle"></div>
                                            <svg version="1.1" id="cardfront" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                x="0px" y="0px" viewBox="0 0 750 471" style="enable-background:new 0 0 750 471;" xml:space="preserve">
                                                <g id="Front">
                                                    <g id="CardBackground">
                                                        <g id="Page-1_1_">
                                                            <g id="amex_1_">
                                                                <path id="Rectangle-1_1_" class="lightcolor grey" d="M40,0h670c22.1,0,40,17.9,40,40v391c0,22.1-17.9,40-40,40H40c-22.1,0-40-17.9-40-40V40
                                                        C0,17.9,17.9,0,40,0z" />
                                                            </g>
                                                        </g>
                                                        <path class="darkcolor greydark" d="M750,431V193.2c-217.6-57.5-556.4-13.5-750,24.9V431c0,22.1,17.9,40,40,40h670C732.1,471,750,453.1,750,431z" />
                                                    </g>
                                                    <text transform="matrix(1 0 0 1 60.106 295.0121)" id="svgnumber" class="st2 st3 st4">0123 4567 8910 1112</text>
                                                    <text transform="matrix(1 0 0 1 54.1064 428.1723)" id="svgname" class="st2 st5 st6">JOHN DOE</text>
                                                    <text transform="matrix(1 0 0 1 54.1074 389.8793)" class="st7 st5 st8">cardholder name</text>
                                                    <text transform="matrix(1 0 0 1 479.7754 388.8793)" class="st7 st5 st8">expiration</text>
                                                    <text transform="matrix(1 0 0 1 65.1054 241.5)" class="st7 st5 st8">card number</text>
                                                    <g>
                                                        <text transform="matrix(1 0 0 1 574.4219 433.8095)" id="svgexpire" class="st2 st5 st9">01/23</text>
                                                        <text transform="matrix(1 0 0 1 479.3848 417.0097)" class="st2 st10 st11">VALID</text>
                                                        <text transform="matrix(1 0 0 1 479.3848 435.6762)" class="st2 st10 st11">THRU</text>
                                                        <polygon class="st2" points="554.5,421 540.4,414.2 540.4,427.9 		" />
                                                    </g>
                                                    <g id="cchip">
                                                        <g>
                                                            <path class="st2" d="M168.1,143.6H82.9c-10.2,0-18.5-8.3-18.5-18.5V74.9c0-10.2,8.3-18.5,18.5-18.5h85.3
                                                    c10.2,0,18.5,8.3,18.5,18.5v50.2C186.6,135.3,178.3,143.6,168.1,143.6z" />
                                                        </g>
                                                        <g>
                                                            <g>
                                                                <rect x="82" y="70" class="st12" width="1.5" height="60" />
                                                            </g>
                                                            <g>
                                                                <rect x="167.4" y="70" class="st12" width="1.5" height="60" />
                                                            </g>
                                                            <g>
                                                                <path class="st12" d="M125.5,130.8c-10.2,0-18.5-8.3-18.5-18.5c0-4.6,1.7-8.9,4.7-12.3c-3-3.4-4.7-7.7-4.7-12.3
                                                        c0-10.2,8.3-18.5,18.5-18.5s18.5,8.3,18.5,18.5c0,4.6-1.7,8.9-4.7,12.3c3,3.4,4.7,7.7,4.7,12.3
                                                        C143.9,122.5,135.7,130.8,125.5,130.8z M125.5,70.8c-9.3,0-16.9,7.6-16.9,16.9c0,4.4,1.7,8.6,4.8,11.8l0.5,0.5l-0.5,0.5
                                                        c-3.1,3.2-4.8,7.4-4.8,11.8c0,9.3,7.6,16.9,16.9,16.9s16.9-7.6,16.9-16.9c0-4.4-1.7-8.6-4.8-11.8l-0.5-0.5l0.5-0.5
                                                        c3.1-3.2,4.8-7.4,4.8-11.8C142.4,78.4,134.8,70.8,125.5,70.8z" />
                                                            </g>
                                                            <g>
                                                                <rect x="82.8" y="82.1" class="st12" width="25.8" height="1.5" />
                                                            </g>
                                                            <g>
                                                                <rect x="82.8" y="117.9" class="st12" width="26.1" height="1.5" />
                                                            </g>
                                                            <g>
                                                                <rect x="142.4" y="82.1" class="st12" width="25.8" height="1.5" />
                                                            </g>
                                                            <g>
                                                                <rect x="142" y="117.9" class="st12" width="26.2" height="1.5" />
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g id="Back">
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="back">
                                            <svg version="1.1" id="cardback" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                x="0px" y="0px" viewBox="0 0 750 471" style="enable-background:new 0 0 750 471;" xml:space="preserve">
                                                <g id="Front">
                                                    <line class="st0" x1="35.3" y1="10.4" x2="36.7" y2="11" />
                                                </g>
                                                <g id="Back">
                                                    <g id="Page-1_2_">
                                                        <g id="amex_2_">
                                                            <path id="Rectangle-1_2_" class="darkcolor greydark" d="M40,0h670c22.1,0,40,17.9,40,40v391c0,22.1-17.9,40-40,40H40c-22.1,0-40-17.9-40-40V40
                                                    C0,17.9,17.9,0,40,0z" />
                                                        </g>
                                                    </g>
                                                    <rect y="61.6" class="st2" width="750" height="78" />
                                                    <g>
                                                        <path class="st3" d="M701.1,249.1H48.9c-3.3,0-6-2.7-6-6v-52.5c0-3.3,2.7-6,6-6h652.1c3.3,0,6,2.7,6,6v52.5
                                                C707.1,246.4,704.4,249.1,701.1,249.1z" />
                                                        <rect x="42.9" y="198.6" class="st4" width="664.1" height="10.5" />
                                                        <rect x="42.9" y="224.5" class="st4" width="664.1" height="10.5" />
                                                        <path class="st5" d="M701.1,184.6H618h-8h-10v64.5h10h8h83.1c3.3,0,6-2.7,6-6v-52.5C707.1,187.3,704.4,184.6,701.1,184.6z" />
                                                    </g>
                                                    <text transform="matrix(1 0 0 1 621.999 227.2734)" id="svgsecurity" class="st6 st7">985</text>
                                                    <g class="st8">
                                                        <text transform="matrix(1 0 0 1 518.083 280.0879)" class="st9 st6 st10">security code</text>
                                                    </g>
                                                    <rect x="58.1" y="378.6" class="st11" width="375.5" height="13.5" />
                                                    <rect x="58.1" y="405.6" class="st11" width="421.7" height="13.5" />
                                                    <text transform="matrix(1 0 0 1 59.5073 228.6099)" id="svgnameback" class="st12 st13">John Doe</text>
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-container form-container1">
                                    <div class="field-container field-container1">
                                        <label for="name">姓&emsp;&emsp;&emsp;名&emsp;</label>
                                        <input class="input-name" id="name" maxlength="15" type="text">
                                    </div>
                                    <div class="field-container field-container1">
                                        <label for="cardnumber">信用卡卡號&emsp;</label>
                                        <!-- <span id="generatecard">generate random</span> -->
                                        <input class="input-name" id="cardnumber" type="text" pattern="[0-9]*" maxlength="20" inputmode="numeric">
                                        <svg id="ccicon" class="ccicon" width="750" height="471" viewBox="0 0 750 471" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">

                                        </svg>
                                    </div>
                                    <div class="field-container field-container1">
                                        <label for="expirationdate">Expiration (mm/yy)</label>
                                        <input class="input-name" id="expirationdate" type="text" pattern="[0-9]*" inputmode="numeric">
                                    </div>
                                    <div class="field-container field-container1">
                                        <label for="securitycode">Security Code</label>
                                        <input class="input-name" id="securitycode" type="text" pattern="[0-9]*" inputmode="numeric">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
            <hr>
            <div class="payment-cta mb-3">
                <button type="submit" class="checkout-button bt-p w-30" id="checkout-button">立即付款</button>
            </div>
       </form>
           
    </div>
    
    <div class="footer">
        <div class="bg-g4">
            <div class="container">
                <div class="row">
                <div class=" col-lg-4 col-md-6 col-xs-12 white">
                    <ul class="footer-ul">
                        <li class="footer-li"><a href="">Q&A</a></li>
                        <li class="footer-li"><a href="">關於我們</a></li>
                        <li class="footer-li"><a href="">聯絡我們</a></li>
                    </ul>
                   
                </div>
            </div>
            </div>
         <div class="row footer-ac">
            <div class="footer-line footer-line1 col-sm-10 col-xs-3 bg-g1"></div>
            <div class="col-xs-12 footer-icon"><a href=""><img  class="footer-img"src="images/igicon.svg" alt=""></a><a href=""><img  class="footer-img"src="images/fbicon.svg" alt=""></a></div>
            <div class="footer-line footer-line2 col-sm-10 col-xs-3 bg-g1 "></div>
            <div class=" col-sm-12 copyright white">© 2018 Skate. All rights reserved.</div>
         </div>
         </div>
    </div>
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/credit.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/imask/3.4.0/imask.min.js"></script>
    <script src="./js/accessible-menu.js"></script>
    <script src="./js/tpl_navbar_js.js"></script>
    
    <script>

    //刪除鍵
    $(".remove-btn").on("click", function () {
        $(this).closest("li").remove()

    });

    //付款方式點選
    $(document).ready(function(){
        $('input[type="radio"]').click(function(){
            if($(this).attr("value")=="atm"){
                $(".card-container").hide();
                $(".atm-container").show();
            }
            if($(this).attr("value")=="credit-card"){
                $(".atm-container").hide();
                $(".card-container").show();
            }
        });
    });

    //Bootstrap輸入驗證設定
    (function() {
    'use strict';
     window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                     event.preventDefault();
                     event.stopPropagation();
            }
            form.classList.add('was-validated');
            }, false);
          });
       }, false);
     })();

</script>




    

    </script>
  
  
  
  </body>
</html>