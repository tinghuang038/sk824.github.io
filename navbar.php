
<!doctype html>
<html lang="zh">
<!--  -->
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css"
        integrity="sha384-REHJTs1r2ErKBuJB0fCK99gCYsVjwxHrSU0N7I1zl9vZbggVJXRMsv/sLlOAGb4M" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/css.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/navbar1.css"> 
    <link rel="stylesheet" href="./css/login.css">
   

    <style>
   

    .tip-tsai a {
            margin-top: 8px;
            color: #ccc;
        }  

    .overlay {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(0, 0, 0, 0.7);
            transition: opacity 500ms;
            visibility: hidden;
            opacity: 0;
            z-index:1000;
        }
        .overlay:target {
            visibility: visible;
            opacity: 1;
        }
        .textRight {
            margin: 10px;
            position: relative;
            left: 17%;
        }

        .left-col {
            height: 350px;
            margin: 100px auto 90px;
            text-align: center;
        }
        .tsai-icon-email i{
            color: #743CF5;
            font-size: 80px;
        }

        .tsai_loginBtn {
            margin:10px auto;
            width: 227px;
        }
        
        .tsai-icon-email{
            padding:0px 20px 20px;

        }

        .sm-btn {
            margin: auto 105px;
        }

        .sm-btn > button {
            width: 110px;
        }

        .tsai-wrap {
            display: flex;
            justify-content: center;
        }
        .tsai-wrap a {
            color: #444;
            text-decoration: none;
        }

        .tsai-wrap a h4:hover {
            /* color: #555; */
            text-shadow: 0px 3px 6px #ccc;
        }

        .logInActive {
            color: #743CF5;
            /* text-shadow: 0px 3px 6px #ccc; */
        }
        .t-checkbox{
            margin: 10px auto 0px;
        
        }
        .t-checkbox a{
            color: #ccc;
        }
        .t-sm-btn{
            width: 120px;
            margin: 0 auto 110px;
        }
        
        .t-logo{
            width: 180px;
            margin: 0 auto;
            display: none;
        }
        .tsai-btn button{
            margin: 5px;
        }
        .forget{
            cursor: pointer; 
        }
        .tsai-btn .bt-b-g3{
            border-color: green;
        }
        .longIn h4{
            cursor: pointer; 
        }
        .add-div{
            flex-direction: column;
        }
        @media screen and (max-width:767px) {
            .sm-btn {
                margin: auto 55px;
            }

            .sm-btn button {
                width: 110px;
            }

            .textRight {
                margin: 10px;
                position: relative;
                left: 22%;
            }
            .t-logo{
                width: 180px;
                margin: 0 auto;
                display:block;
                margin:auto;
            } 
            .t-logo img{
                width: 100%;
            }
            .t-sm-btn{
                width: 120px;
                margin: 0 10px 10px;
            }
            .margin {
                margin: 20vh auto;
                width: 90vw;
            }
            .t-sm-btn{
                width: 120px;
                margin: 0 auto 20px;
            }
            .tsai-icon i{
                display: none;
            }
            
        }
    
    
    
    
    </style>



</head>

<body>
<div class="nav-bar nav-re col-sm-12">

        <div class="container">
            <div class=" pc-nav row col-xs-12 ">
                <div class="nav-logo "><a href="./J-index-c.php"><img src="./images/logo.svg" alt=""></a></div>
                <ul class="nav-ul black">
                    <li class="nav-li liahs nav-liss  ">
                        <a class="black nav-list navliajq " href="./allproduct_sd.php">商品列表</a> </li>
                    <li class="nav-li liah  "><a class="black " href="./J-DIY-step1.php">DIY你的滑板</a></li>
                    <li class="nav-li liah nav-lis"><a class="black" href="./J-event.php">最新消息</a></li>
                    <li class="nav-li liah nav-lis"><a class="black" href="./t-beginners-guide.php">新手指南</a></li>
                </ul>

                <!-- ---會員中心---- -->
                <ul class="nav-right-ul ml-auto" >
 <!-- 會員Icon -------------------------------------------------------------------------->
                    <li class="nav-right-li"> 
           <!-- 判斷會員是否登入之PHP -->
                        <?php
                         if(isset($_SESSION['userName'])){
                            $url="./myData.php";
                        } else{
                            $url="#popup1";
                        };
                        ?>
                    
                    <a id="memberPurpleBtn" href="<?=$url?>" class="purple user-js-login">
                    <i class="fas fa-user"></i>
                </a>
            </li>
   <!-- /會員Icon ------------------------------------------------------------------------->
                    <li class="nav-right-li  circle-num-pos"><a href="./c-checkout-form.php" class="">

                            <!-- 購物車紅點 -->
                            <div class=" circle-num">1</div>

                            <i class="fas fa-shopping-cart purple"></i>
                        </a></li>

                    <!-- 購物車展開 -->
                    <!-- <div class="cart-div mt-3">
                        <p class="purple cart-tit">購物車內容</p>
                        <hr>
                        <ul class="cart-ul"> -->
                            <!-- 購物車內容 -->
                            <!-- <li class="cart-li">
                                <div class=" d-flex ">
                                    <div class="cart-li-img-div"><img class="cart-li-img"
                                            src="./images/02_ Krux _11.png" alt=""></div>
                                    <div>
                                        <div class="tip pd-name">
                                            <p>Rampage Block Logo Complete Skateboard</p>
                                            <div class="tip">規格</div>
                                        </div>
                                        <div class="cart-ntc-div d-flex ">
                                            <div>NT 800</div>
                                            <div class="cart-num-div">
                                                <button class="cart-num-min"><i class="fas fa-minus"></i></button>
                                                <input type="text" class="cart-num">
                                                <button class="cart-num-add"><i class="fas fa-plus"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" times-div d-flex"><button class="btn t-btn t-btn1"><i
                                                class="fas fa-times times-lh"></i></button>
                                    </div>
                                </div>
                                <hr class="cart-li-hr d-block">
                            </li>

                            <li class="cart-li">
                                <div class=" d-flex">
                                    <div class="cart-li-img-div"><img class="cart-li-img"
                                            src="./images/02_ Krux _11.png" alt=""></div>
                                    <div>
                                        <div class="tip pd-name">
                                            <p>Rampage Block Logo Complete Skateboard</p>
                                            <div class="tip">規格</div>
                                        </div>
                                        <div class="cart-ntc-div d-flex ">
                                            <div>NT 800</div>
                                            <div class="cart-num-div">
                                                <button class="cart-num-min"><i class="fas fa-minus"></i></button>
                                                <input type="text" class="cart-num">
                                                <button class="cart-num-add"><i class="fas fa-plus"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" times-div d-flex"><button class="btn t-btn t-btn1"><i
                                                class="fas fa-times times-lh"></i></button></div>
                                </div>
                                <hr class="cart-li-hr d-block">
                            </li>

                        </ul> -->
                        <!-- <div class="price-div d-flex purple justify-content-end">
                            <div class="carttotalprice">總額</div>
                            <div class="pri">NT$1600</div>
                        </div>
                        <div class="go-pay  d-flex justify-content-end"><button class="bt-p">前往結帳</button></div>
                    </div> -->
                </ul>


                <div class="nav-hover-list col-sm-12 col-xl-12 bg-g3 ">
                    <div class="tip d-flex container ">
                        <div class="navdivw2 d-flex navcor ndivmar mnavtit ">
                            <a href="./allproduct_sd.php?hot_new=2" class="white navaapad navpcla2 navulrightborder  ">最新商品</a>
                            <a href="./allproduct_sd.php?hot_new=1" class="white navaapad navpcla2 navulrightborder">人氣商品</a>
                        </div>

                        <div class="navdivw3  navco d-flex ndivmar justify-content-center">
                            <div class="d-flex ">
                                <p class=" white pccccc">品牌</p>
                            </div>
                            <div class="">
                                <ul class="tip navulw navulleftborder white ">
                                    <li><a href="./allproduct_sd.php?brand=Almost" class="white navpcla">Almost</a></li>
                                    <li><a href="./allproduct_sd.php?brand=DGK" class="white navpcla">DGK</a></li>
                                    <li><a href="./allproduct_sd.php?brand=Enjoi" class="white navpcla">Enjoi</a></li>
                                    <li><a href="./allproduct_sd.php?brand=Independent" class="white navpcla">Independent</a></li>
                                    <li><a href="./allproduct_sd.php?brand=Krux" class="white navpcla">Krux</a></li>
                                </ul>
                            </div>
                            <div>
                                <ul class="tip navulw  white ">
                                    <li><a href="./allproduct_sd.php?brand=Penny%20Skateboards" class="white navpcla">Penny</a></li>
                                    <li><a href="./allproduct_sd.php?brand=RIPNDIP" class="white navpcla">RIPNDIP</a></li>
                                    <li><a href="./allproduct_sd.php?brand=Santa%20Cruz" class="white navpcla">Santa Cruz</a></li>
                                    <li><a href="./allproduct_sd.php?brand=Spitfire" class="white navpcla">Spitfire</a></li>
                                    <li><a href="./allproduct_sd.php?brand=Toy%20Machine" class="white navpcla">Toy Machine</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="navdivw navco d-flex ndivmar ">
                            <div class="d-flex ">
                                <a href="./allproduct_sd.php?cate=[21,22,23,24]" class="white navpcla2 pccccc2 ">交通板</a>
                            </div>
                            <div>
                                <ul class="tip navulw navulleftborder white ">
                                    <li class="navulwli2"><a href="./allproduct_sd.php?cate=[21]" class="white navpcla ">23" 以下</a></li>
                                    <li class="navulwli2"><a href="./allproduct_sd.php?cate=[22]" class="white navpcla ">24" ~ 26"</a></li>
                                    <li class="navulwli2"><a href="./allproduct_sd.php?cate=[23]" class="white navpcla ">27" ~ 29"</a></li>
                                    <li class="navulwli2"><a href="./allproduct_sd.php?cate=[24]" class="white navpcla ">30" 以上</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="navdivw navco d-flex ndivmar ">
                            <div class="d-flex ">
                                <a href="./allproduct_sd.php?cate=[3,4,5,6]" class="white navpcla2 pccccc ">板身</a>
                            </div>
                            <div>
                                <ul class="tip navulw navulleftborder white ">
                                    <li class="navulwli2"><a href="./allproduct_sd.php?cate=[3]" class="white navpcla ">7.75"</a></li>
                                    <li class="navulwli2"><a href="./allproduct_sd.php?cate=[4]" class="white navpcla ">8"</a></li>
                                    <li class="navulwli2"><a href="./allproduct_sd.php?cate=[5]" class="white navpcla ">8.25"</a></li>
                                    <li class="navulwli2"><a href="./allproduct_sd.php?cate=[6]" class="white navpcla ">8.5"</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="navdivw navco d-flex ndivmar">
                            <div class="d-flex ">
                                <a href="./allproduct_sd.php?cate=[8,9,10,11]" class="white navpcla2 pccccc ">輪架</a>
                            </div>
                            <div>
                                <ul class="tip navulw navulleftborder white ">
                                    <li class="navulwli2"><a href="./allproduct_sd.php?cate=[8]" class="white navpcla ">7.75"</a></li>
                                    <li class="navulwli2"><a href="./allproduct_sd.php?cate=[9]" class="white navpcla ">8"</a></li>
                                    <li class="navulwli2"><a href="./allproduct_sd.php?cate=[10]" class="white navpcla ">8.25"</a></li>
                                    <li class="navulwli2"><a href="./allproduct_sd.php?cate=[11]" class="white navpcla ">8.5"</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="navdivw navco d-flex ndivmar ">
                            <div class="d-flex ">
                                <a href="./allproduct_sd.php?cate=[13,14,15]" class="white navpcla2 pccccc ">輪子</a>
                            </div>
                            <div>
                                <ul class="tip navulw navulleftborder white ">
                                    <li class="navulwli2"><a href="./allproduct_sd.php?cate=[14]" class="white navpcla ">85A - 101A (軟硬輪)</a></li>
                                    <li class="navulwli2"><a href="./allproduct_sd.php?cate=[15]" class="white navpcla ">85A以下　(軟輪)</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="navdivw2 d-flex navcor ndivmar   ">
                            <a href="./allproduct_sd.php?cate=[16]" class="white navaapad navpcla2 navulrightborder">培林</a>
                            <a href="./allproduct_sd.php?cate=[17]" class="white navaapad navpcla2 navulrightborder">砂紙</a>
                            <div class="navdivw navco d-flex ndivmar ">
                                <div class="d-flex ">
                                    <a href="" class="white navpcla2 pccccc3 naothermt ">其他</a>
                                </div>
                                <div>
                                    <ul class="tip navulw navulleftborder white naothermt">
                                        <li class="navulwli2"><a href="" class="white navpcla ">T型工具</a></li>
                                        <li class="navulwli2"><a href="" class="white navpcla ">護具</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>





                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- 會員登入頁 ------------------------------------------------------------------------>
    <div id="popup1" class="overlay">
        <div class=" container margin " style="background:#FFF">
            <div class="row ">
                <div class="col-xl-7 col-12 img" style="background: url(images/bg-img.jpg);background-size: cover;">

                </div>
                <div class="col-xl-5 col-12">
                    <a class="cancel" href="#">
                        <i class="fas fa-times "></i>
                    </a>
                    <div class="left-col">
<!-- 登入註冊頁 -->
                        <div id="signIn-register" class=" text-center">
                            <div class="tsai-wrap">
                                <a class="longIn">
                                    <h4 class="logInActive">登入</h4>
                                </a>
                                <a class="longIn">
                                    <h4 class="">註冊</h4>
                                </a>
                            </div>
                    <!-- 登入頁 -->
                            <div id="signIn" class="js-longIn">
                                <form name="myForm" id="myForm" method="post" onsubmit="return checkLoginForm()">
                                    <div class="text-center">
                                        <input name="userName" type="text" class="in inin" placeholder="帳號">
                                    </div>
                                    <div class="text-center">
                                        <input name="pwd" type="password" class="in inin" placeholder="密碼">
                                        <div class="textRight"><a class="forget">忘記密碼?</a></div>
                                    </div>
                                    <div class="tsai-btn">
                                        <button name="login"  type="submit" class="bt-p tsai-login-btn">登入</button>
                                    </div>
                                </form>
                            </div>
                    <!-- /登入頁 -->
                    <!-- 註冊頁 -->
                            <div id="register" class="js-longIn">
                                <form action="add.php" method="post">
                                    <div class="text-center d-flex  add-div">
                                        <input name="name" type="text" class="in inin" placeholder="帳號">
                                        <input name="password" type="password" class="in inin" placeholder="密碼">
                                        <input name="password1" type="password" class="in inin" placeholder="再次輸入密碼">
                                        <input name="mail" type="email" class="in inin" placeholder="E-mail">
                                    </div>
                                    <div class="tip-tsai">
                                        <input type="checkbox" name="" id="" checked="checked">我同意
                                        <a href="">網站服務條款</a>及
                                        <a href="">隱私政策</a>
                                    </div>
                                    <div class="text-center">
                                        <button class="bt-p text-center">註冊會員</button>
                                    </div>
                                </form>
                            </div>
                    <!-- /註冊頁 -->
                        </div>
<!-- /登入註冊頁 -->
<!-- 忘記密碼頁 -->
                        <div id="forget">
                            <h4>忘記密碼?</h4>
                            <input type="text" class="in inin" placeholder="請輸入註冊信箱">
                            <div>
                                <a class="checkEmail"><button class="bt-p">重新設定密碼</button></a> 
                                <P class="or">or</P>
                                <a class="forgetLogin" ><button class="bt-b-g3">返回上一頁</button></a>
                                
                            </div>
                        </div>
<!-- /忘記密碼頁 -->
<!-- 確認信箱頁 -->
                        <div id="checkEmail">
                            <div  class="t-logo">
                                <img src="images/skate-logo01-2.png" alt="">
                            </div>
                            <div class="tsai-icon-email text-center">
                                <i class="far fa-envelope"></i>
                            </div>
                            <div class="text-center">
                            <p class="or">驗證信函已寄出，<br>      
                                請於10分鐘內置你的信箱收信並完成驗證。
                            </p>
                            </div>
                            <div class="tsai-btn text-center">
                                <p class="or">沒收到信嗎?</p>
                                <button class="bt-p">重新寄送驗證信</button>
                                <button class="bt-b-g3 email-login">返回登入頁面</button>
                            </div>
                        </div>
<!-- /確認信箱頁 -->
<!-- 重設密碼頁 -->
                        <!-- <div id="resetpd1">
                            <div class="left-col">
                                <h4>重設密碼</h4>
                                <input type="text" class="in inin" placeholder="密碼">
                                <input type="text" class="in inin" placeholder="再輸入密碼">
                                <div>
                                    <button class="bt-p">重設密碼</button>
                                </div>
                                <p class="or">or</p>
                                <div class="d-flex sm-btn text-center">
                                    <button class="bt-b-g3">會員註冊</button>
                                    <button class="bt-b-g3">會員登入</button>
                                </div>
                            </div> -->
<!-- /重設密碼頁 -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- /會員登入頁 ------------------------------------------------------------------------>

    <div class="nav-m-bar nav-re col-sm-12">
        <div class="container ">
            <div class=" m-nav row col-xs-12 ">
                <nav class=" col-sm-4 col-xs-4 mobile-item-col   " id="my-menu" aria-label="My menu">
                    <button aria-expanded="false" aria-controls="sub-menu-3" class="navbt m-menu">
                        <img class="nav-m-menup" src="./images/nav.svg" alt="">
                    </button>
                    <ul class="eeee ">
                        <li class=" justify-content-center">
                            <ul id="sub-menu-3" class="bg-g3 ">

                                <li class=" nav-m-listtitli1">
                                    <button aria-expanded="false" aria-controls="sub-menu-3-1"
                                        class="navbt2  white nav-removeclass nav-m-listtit">商品列表 </button>
                                    <ul id="sub-menu-3-1" class=" justify-content-center">

                                        <li class="bg-g1 sub-menu-3-1-1 navappl">
                                            <a href="./allproduct_sd.php?hot_new=2" class="navbt g4 navapp navhhd">最新商品 </a>
                                        </li>
                                        <li class="bg-g1 sub-menu-3-1-1 navappl">
                                            <a href="./allproduct_sd.php?hot_new=1" class="navbt g4 navapp navhhd">人氣商品</a>
                                        </li>
                                        <li class="bg-g1 sub-menu-3-1-1 navappl ">
                                            <button aria-expanded="false" aria-controls="sub-menu-3-1-2"
                                                class="navbt g4 navapp navhhd  m-bbb d-flex justify-content-between m-bbbt" id="ar-a">
                                                <p>品牌</p> <i class="fas fa-chevron-down ardown"></i>
                                            </button>
                                            <ul class="sub-menu-3-1-2">
                                                <li class="bg-g1 sub-menu-3-1-2 navappl2 navlll  brnavm">
                                                    <a href="./allproduct_sd.php?brand=Almost" class="navbt g4 navapp navhhd">
                                                        Almost
                                                    </a>
                                                </li>
                                                <li class="bg-g1 sub-menu-3-1-2 navappl2 navlll brnavm">
                                                    <a href="./allproduct_sd.php?brand=DGK" class="navbt g4 navapp navhhd">
                                                        DGK
                                                    </a>
                                                </li>
                                                <li class="bg-g1 sub-menu-3-1-2 navappl2 navlll brnavm">
                                                    <a href="./allproduct_sd.php?brand=Enjoi" class="navbt g4 navapp navhhd">
                                                        Enjoi
                                                    </a>
                                                </li>
                                                <li class="bg-g1 sub-menu-3-1-2 navappl2 navlll brnavm">
                                                    <a href="./allproduct_sd.php?brand=Independent" class="navbt g4 navapp navhhd ">
                                                        Independent
                                                    </a>
                                                </li>
                                                <li class="bg-g1 sub-menu-3-1-2 navappl2 navlll brnavm">
                                                    <a href="./allproduct_sd.php?brand=Krux" class="navbt g4 navapp navhhd">
                                                        Krux
                                                    </a>
                                                </li>
                                                <li class="bg-g1 sub-menu-3-1-2 navappl2 navlll brnavm">
                                                    <a href="./allproduct_sd.php?brand=Penny%20Skateboards" class="navbt g4 navapp navhhd">
                                                        Penny
                                                    </a>
                                                </li>
                                                <li class="bg-g1 sub-menu-3-1-2 navappl2 navlll brnavm">
                                                    <a href="./allproduct_sd.php?brand=RIPNDIP" class="navbt g4 navapp navhhd ">
                                                        RIPNDIP
                                                    </a>
                                                </li>
                                                <li class="bg-g1 sub-menu-3-1-2 navappl2 navlll brnavm">
                                                    <a href="./allproduct_sd.php?brand=Santa%20Cruz" class="navbt g4 navapp navhhdc ">
                                                        Santa Cruz
                                                    </a>
                                                </li>
                                                <li class="bg-g1 sub-menu-3-1-2 navappl2 navlll brnavm">
                                                    <a href="./allproduct_sd.php?brand=Spitfire" class="navbt g4 navapp navhhd">
                                                        Spitfire
                                                    </a>
                                                </li>
                                                <li class="bg-g1 sub-menu-3-1-2 navappl2 navlll brnavm">
                                                    <a href="./allproduct_sd.php?brand=Toy%20Machine" class="navbt g4 navapp navhhdc ">
                                                        Toy Machine
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="bg-g1 sub-menu-3-1-1 navappl">
                                            <button aria-expanded="false" aria-controls="sub-menu-3-2-1"
                                                class="navbt g4 navapp navhhd  m-bbb  m-bbbt d-flex justify-content-between " id="ar-b">
                                                <p>商品分類</p> <i class="fas fa-chevron-down ardown"></i>
                                            </button>
                                            <ul class="sub-menu-3-2-1 ">
                                                <li class="bg-g1  navappl navlll  brnavm   ">
                                                    <a href="./allproduct_sd.php?cate=[21,22,23,24]" class="navbt g4 navapp navvvv ">交通板</a>
                                                    <button aria-expanded="false" aria-controls="sub-menu-3-2-1"
                                                        class="navbt g4 navapp btatt  text-right"><i
                                                            class="fas fa-plus navvic "></i></button>
                                                    <ul class="">
                                                        <li class="bg-g1 sub-menu-3-2-1 navp5">
                                                            <a href="./allproduct_sd.php?cate=[21]" class="navbt g4 navapp nav321 navhhdc "> 23"
                                                                以下
                                                            </a>
                                                        </li>
                                                        <li class="bg-g1 sub-menu-3-2-1 navp5">
                                                            <a href="./allproduct_sd.php?cate=[22]" class="navbt g4 navapp nav321 navhhdc "> 24"
                                                                ~
                                                                26" </a>
                                                        </li>
                                                        <li class="bg-g1 sub-menu-3-2-1 navp5">
                                                            <a href="./allproduct_sd.php?cate=[23]" class="navbt g4 navapp nav321 navhhdc "> 27"
                                                                ~
                                                                29" </a>
                                                        </li>
                                                        <li class="bg-g1 sub-menu-3-2-1 navp5">
                                                            <a href="./allproduct_sd.php?cate=[24]" class="navbt g4 navapp nav321 navhhdc "> 30"
                                                                以上
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="bg-g1 sub-menu-3-2-2 navappl navlll  brnavm">
                                                    <a href="./allproduct_sd.php?cate=[3,4,5,6]" class="navbt g4 navapp navvvv">板身　</a>
                                                    <button aria-expanded="false" aria-controls="sub-menu-3-2-2"
                                                        class="navbt g4 navapp btatt text-right"><i
                                                            class="fas fa-plus navvic "></i></button>
                                                    <ul class="sub-menu-3-2-2">
                                                        <li class="bg-g1 sub-menu-3-2-2 navp5">
                                                            <a href="./allproduct_sd.php?cate=[3]" class="navbt g4 navapp nav321 navhhdc "> 7.75"
                                                            </a>
                                                        </li>
                                                        <li class="bg-g1 sub-menu-3-2-2 navp5">
                                                            <a href="./allproduct_sd.php?cate=[4]" class="navbt g4 navapp nav321 navhhdc "> 8" </a>
                                                        </li>
                                                        <li class="bg-g1 sub-menu-3-2-2 navp5">
                                                            <a href="./allproduct_sd.php?cate=[5]" class="navbt g4 navapp nav321 navhhdc "> 8.25"
                                                            </a>
                                                        </li>
                                                        <li class="bg-g1 sub-menu-3-2-2 navp5">
                                                            <a href="./allproduct_sd.php?cate=[6]" class="navbt g4 navapp nav321 navhhdc "> 8.5"
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="bg-g1 sub-menu-3-2-3 navappl navlll  brnavm">
                                                    <a href="./allproduct_sd.php?cate=[8,9,10,11]" class="navbt g4 navapp navvvv">輪架　</a>
                                                    <button aria-expanded="false" aria-controls="sub-menu-3-2-3"
                                                        class="navbt g4 navapp btatt text-right"><i
                                                            class="fas fa-plus navvic "></i></button>
                                                    <ul class="sub-menu-3-2-3">
                                                        <li class="bg-g1 sub-menu-3-2-3 navp5">
                                                            <a href="./allproduct_sd.php?cate=[8]" class="navbt g4 navapp nav321 navhhdc "> 7.75"
                                                            </a>
                                                        </li>
                                                        <li class="bg-g1 sub-menu-3-2-3 navp5">
                                                            <a href="./allproduct_sd.php?cate=[9]" class="navbt g4 navapp nav321 navhhdc "> 8" </a>
                                                        </li>
                                                        <li class="bg-g1 sub-menu-3-2-3 navp5">
                                                            <a href="/allproduct_sd.php?cate=[10]" class="navbt g4 navapp nav321 navhhdc "> 8.25"
                                                            </a>
                                                        </li>
                                                        <li class="bg-g1 sub-menu-3-2-3 navp5">
                                                            <a href="./allproduct_sd.php?cate=[11]" class="navbt g4 navapp nav321 navhhdc "> 8.5"
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="bg-g1 sub-menu-3-2-4 navappl navlll  brnavm">
                                                    <a href="./allproduct_sd.php?cate=[13,14,15]" class="navbt g4 navapp navvvv">輪子　</a>
                                                    <button aria-expanded="false" aria-controls="sub-menu-3-2-4"
                                                        class="navbt g4 navapp btatt text-right"><i
                                                            class="fas fa-plus navvic "></i></button>
                                                    <ul class="sub-menu-3-2-4">
                                                        <li class="bg-g1 sub-menu-3-2-4 navp5">
                                                            <a href="./allproduct_sd.php?cate=[14]" class="navbt g4 navapp nav321 navhhdc ">85A -
                                                                101A (軟硬輪)</a>
                                                        </li>
                                                        <li class="bg-g1 sub-menu-3-2-4 navp5">
                                                            <a href="./allproduct_sd.php?cate=[15]" class="navbt g4 navapp nav321 navhhdc ">85A 以下
                                                                (軟輪)</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="bg-g1  navappl navlll  brnavm"><a href="./allproduct_sd.php?cate=[16]"
                                                        class="navbt g4 navapp navvvv">培林　</a></li>
                                                <li class="bg-g1  navappl navlll  brnavm"><a href="./allproduct_sd.php?cate=[17]"
                                                        class="navbt g4 navapp navvvv">砂紙　</a></li>
                                                <li class="bg-g1  navappl navlll  brnavm">
                                                    <a href="#" class="navbt g4 navapp navvvv">其他　</a>
                                                    <button aria-expanded="false" aria-controls="sub-menu-3-2-5"
                                                        class="navbt g4 navapp btatt text-right"><i
                                                            class="fas fa-plus navvic "></i></button>
                                                    <ul class="sub-menu-3-2-5">
                                                        <li class="bg-g1 sub-menu-3-2-5 navp5">
                                                            <a href="#" class="navbt g4 navapp nav321 navhhdc ">T型工具</a>
                                                        </li>
                                                        <li class="bg-g1 sub-menu-3-2-5 navp5">
                                                            <a href="#" class="navbt g4 navapp nav321 navhhdc ">護具</a>
                                                        </li>
                                                    </ul>
                                                </li>


                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                <li class="nav-m-listtitli"> <a href="./J-DIY-step1.php" class=" nav-m-listtita white">DIY你的滑板</a></li>
                                <li class="nav-m-listtitli"> <a href="./J-event.php" class=" nav-m-listtita white">最新消息</a></li>
                                <li class="nav-m-listtitli2"> <a href="./t-beginners-guide.php" class=" nav-m-listtita white">新手指南</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <div class="nav-m-logo col-sm-4 col-xs-4 mobile-item-col "><a href="./J-index-c.php"><img class="navmlg " src="images/logo.svg"
                        alt=""></a></div>
                <ul class="col-sm-4 col-xs-4 ml-auto mobile-item-col  mul">

                   <li class="mnav-right-li m-circle-num-pos ml-3">

                        <!-- 購物車紅點 -->


                        <a class="carta" href="./c-checkout-form.php"><i class=" cart-position fas fa-shopping-cart purple">
                            <div class=" m-circle-num">1</div>
                        </i></a>
                    </li>
                    <li class="mnav-right-li"><a href="" class="purple"><i class="fas fa-user"></i></a></li>
                </ul>


                <!-- 購物車展開 -->
                <!-- <div class="m-cart-div mt-3">
                    <p class="purple m-cart-tit">購物車內容</p>
                    <hr>
                    <ul class="m-cart-ul"> -->
                        <!-- 購物車內容 -->
                        <!-- <li class="m-cart-li">
                            <div class=" d-flex justify-content-around">
                                <div class="m-cart-li-img-div"><img class="m-cart-li-img"
                                        src="./images/02_ Krux _11.png" alt=""></div>
                                <div>
                                    <div class="tip pd-name">
                                        <p>Rampage Block Logo Complete Skateboard</p>
                                        <div class="tip">規格</div>
                                    </div>
                                    <div class="cart-ntc-div d-flex ">
                                        <div>NT 800</div>
                                        <div class="cart-num-div">
                                            <button class="cart-num-min"><i class="fas fa-minus"></i></button>
                                            <input type="text" class="cart-num">
                                            <button class="cart-num-add"><i class="fas fa-plus"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class=" times-div d-flex">
                                    <div><button class="btn t-btn t-btn1 m-t-btn"><i
                                                class="fas fa-times times-lh"></i></button>
                                    </div>
                                </div>
                            </div>
                            <hr class="m-cart-li-hr d-block">
                        </li>


                    </ul>
                    <div class="price-div m-price-div d-flex purple justify-content-end">
                        <div class="carttotalprice">總額</div>
                        <div class="pri"></div>
                    </div>
                    <a href="./c-checkout-form.php"><div class="go-pay m-go-pay d-flex justify-content-end"><button class="bt-p" >前往結帳</button></div></a>
                </div>
                </ul>
            </div> -->
        </div>
    </div>











    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
    <script src="./js/accessible-menu.js"></script>
    <script>
     //-----------------------------------------會員開始

// 點 ICON 跳出視窗
// $("#memberPurpleBtn").click(function () {
//     $(window).attr('location', 'http://localhost/skate-store/nav.php#popup1');
// })

// 切換登入註冊
$('#signIn').css('display', 'block');
$('#register').css('display', 'none');

var logInBtn = $('.tsai-wrap .longIn')
$(logInBtn.eq(0)).click(function () {
    $('#signIn').css('display', 'block');
    $('#register').css('display', 'none');
})
$(logInBtn.eq(1)).click(function () {
    $('#register').css('display', 'block');
    $('#signIn').css('display', 'none');
})

$(".tsai-wrap a.longIn h4").click(function () {
    $(this).addClass('logInActive').parents('a.longIn').siblings().find('h4').removeClass('logInActive');
});

// 切換成忘記密碼頁
$('#forget').css('display', 'none');
$('.forget').click(function(){
    $('#forget').css('display', 'block');
    $('#signIn-register').css('display', 'none');
});
// 忘記密碼切回登入
$('.forgetLogin').click(function() {
    $('#signIn').css('display', 'block');
    $('#forget').css('display', 'none');
    $('#signIn-register').css('display','block');

    $('#register').css('display', 'none');
});

// 切換確認信箱
$('#checkEmail').css('display','none');
$('.checkEmail').click(function(){
    $('#checkEmail').css('display', 'block');
    $('#forget').css('display', 'none');
    
});    

//確認信箱切回登入頁
$('.email-login').click(function(){
    $('#signIn').css('display', 'block');
    $('#checkEmail').css('display', 'none');
    $('#signIn-register').css('display','block');

    $('#register').css('display', 'none');
})

// 登入後留在原位
function checkLoginForm(){

    $.post('login.php', $('#signIn form').serialize(), function(data){
        console.log(data);
        console.log(data.success);
        if(data.success){
            location.href = './J-index-c.php';
            
        }else{

        }

    }, 'json');

    return false;
}

//------------------------------------------ 會員底線


// ---------------navbar scroll 底色------------------
        $(window).scroll(function () {
            let scroll = $(this).scrollTop()
            if (scroll > 0) {
                $(".nav-bar").addClass("nav-active")
            } else {
                $(".nav-bar").removeClass("nav-active")
            }
        })

        $(window).scroll(function () {
            let scroll = $(this).scrollTop()
            if (scroll > 0) {
                $(".nav-m-bar").addClass("nav-active")
            } else {
                $(".nav-m-bar").removeClass("nav-active")
            }
        })
// -----------------nav 商品列表hover----------------

        $(".nav-list").on("mouseenter", function () {
            $(".nav-hover-list").addClass("visibility ")
        })
        $(".nav-list").on("mouseleave", function () {
            $(".nav-hover-list").removeClass("visibility")
        })
        $(".nav-hover-list").on("mouseenter", function () {
            $(".nav-hover-list").addClass("visibility")
        })
        $(".nav-hover-list").on("mouseleave", function () {
            $(this).removeClass("visibility")
        })

// --------------------手機nav開啟--------------------
        $("#my-menu").accessibleMenu({
            animation: 'slide',
            animationSpeed: 200
        });

// -----------------手機nav +-切換-----------------------

        $(".navvic").on("click", function () {
            if ($(this).hasClass("fa-plus")) {
                $(".navvic").removeClass("fa-minus").addClass("fa-plus")
                $(this).removeClass("fa-plus").addClass("fa-minus")
            } else {
                $(this).removeClass("fa-minus").addClass("fa-plus")
            }
        })

        $(".nav-removeclass").on("click", function () {
            $(".navvic").removeClass("fa-minus").addClass("fa-plus")
        })


        $(".navhhd").on("click", function () {
            $(".navvic").removeClass("fa-minus").addClass("fa-plus")
        })
        $(".circle-num-pos").on("click", function () {
            $(".cart-div").toggleClass("cart-div-show")
        })

        // $(".cart-div").on("mouseleave",function(){
        //     $(".cart-div").toggleClass("cart-div-show")
        // })

// --------------------------手機購物車點擊------------------------
        $(".m-circle-num-pos").on("click", function () {
            $(".m-cart-div").toggleClass("m-cart-div-show")
        })
        $(".m-menu").on("click", function () {
            $(".m-cart-div").removeClass("m-cart-div-show")
        })

// --------------電腦購物車商品為0顯示-------------------
        function aaa() {

            let lilength = $(".cart-ul > li").length

            if (lilength <= 0) {
                let litext = `<li class="litext purple"> 購物車還沒有商品唷!<a class="litexta" href="">去逛逛?</a><li>`
                $(".cart-ul").html(litext)

                $(".go-pay > button  ,  .price-div >div ").hide()
            }
        }

// -----------------電腦購物車刪除商品-------------------
        $(".t-btn").on("click", function () {
            $(this).parents(".cart-li").hide("slow", function () {
                $(this).closest("li").remove()
                aaa()
            })
        })



// --------------手機購物車商品為0顯示-------------------

        function maaa() {

            let mlilength = $(".m-cart-ul > li").length

            if (mlilength <= 0) {
                let mlitext = `<li class="litext purple"> 購物車還沒有商品唷!<a class="litexta" href="">去逛逛?</a><li>`

                $(".m-cart-ul").html(mlitext)

                $(".m-go-pay > button  ,  .m-price-div >div ").hide()
            }
        }

// -----------------手機購物車刪除商品-------------------

        $(".m-t-btn").on("click", function () {
            $(this).parents(".m-cart-li").hide("slow", function () {
                $(this).closest("li").remove()

                maaa()

            })
        })


// -------------手機列表箭頭----------------

        $("#ar-a ").on("click",function(){
            if($(this).children(".ardown").hasClass("trardown")){
            $(this).children(".ardown").removeClass("trardown")
            $("#ar-b >.ardown ").removeClass("trardown")
            }else{
            $(this).children(".ardown").addClass("trardown")
            $("#ar-b >.ardown ").removeClass("trardown")
            }
        })
        $("#ar-b ").on("click",function(){
            if($(this).children(".ardown").hasClass("trardown")){
            $(this).children(".ardown").removeClass("trardown")
            $("#ar-a >.ardown ").removeClass("trardown")
            }else{
            $(this).children(".ardown").addClass("trardown")
            $("#ar-a >.ardown ").removeClass("trardown")
            }
        })
       
        $(".m-menu").on("click",function(){
            $(".ardown").removeClass("trardown")
        })

        
    </script>
</body>

</html>