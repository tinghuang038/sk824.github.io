<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }
?>

<!doctype html>
<html lang="en">

<head>
    <title>嘶給 Skate Store</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css"
        integrity="sha384-REHJTs1r2ErKBuJB0fCK99gCYsVjwxHrSU0N7I1zl9vZbggVJXRMsv/sLlOAGb4M" crossorigin="anonymous">
    <!-- Custome CSS -->
    <link rel="stylesheet" href="./css/css.css">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="./css/navbar1.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/_tpl_nav_head.css">
    <link rel="stylesheet" href="./css/J-index.css">
    <link rel="stylesheet" href="./css/t-ani-J-index.css">
    <link rel="stylesheet" href="css/t-topBtn.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>

    <nav class="j-nav">
        <?php
     require_once('./_tpl_nav_html.php');
    
    ?>
    </nav>
    <div class="pcIndexAll">
        <header class="hp-banner">
            <img src="images/bg-skate.svg" alt="" class="sugelogobanner">
            <div class="hp-bannerSquare"></div>
            <div class="hp-bannerSquareBg"></div>
            <img src="images/skate-line-m1.png" alt="" class="hp-skateline-m hp-skateline-m1">
            <img src="images/skate-line-m2.png" alt="" class="hp-skateline-m hp-skateline-m2">
            <img src="images/skate-line-m3.png" alt="" class="hp-skateline-m hp-skateline-m3">
            <img src="images/skateboard-1.png" alt="" class="hp-skateboard1 hide-m">
            <img src="images/skateboard-0.png" alt="" class="hp-skateboard2">
            <div class="phone-skateboard2"></div>

            <!-- 會跳出一個人 -->
            <div class="indexEgg">
                <img src="./images/indexBanner.png" alt="">
            </div>

            <!-- 跑馬 -->
            <div class="runrunrun">
                <div class="skateRunLine topGreen">
                    <img src="images/skate-line.png" alt="" class="hp-skateline topGreenPng">
                </div>
                <div class="skateRunLine downBlack">
                    <img src="images/skate-line.png" alt="" class="hp-skateline downBlackPng">
                </div>
            </div>
            <!-- LOGO -->
            <img src="images/logo.png" alt=""
                class="hp-logo">

        </header>

        <div class="container">
            <div class="hp-diySectionAll">
                <div class="row hp-titleGroup">
                    <div class="col-lg-5 col-4">
                        <div class="hp-titleLine purple purpleLeft chart1_line"></div>
                    </div>
                    <div class="col-lg-2 col-4">
                        <div class="title hp-title text-center">滑板DIY
                            <img src="images/title.svg" alt="" class="hp-titlePic">
                        </div>
                    </div>
                    <div class="col-lg-5 col-4">
                        <div class="hp-titleLine purple chart1_line"></div>
                    </div>
                </div>
                <div class="row hp-DiySection">
                    <div class="col-xl-5 col-12 d-flex mt-5">
                        <div class="hp-sectionLine purple"></div>
                        <div class="title">專屬你的滑板
                            <div class="content">不論你是剛接觸滑板的新手，
                                或是身經百戰的老手，<br>
                                在這裡你可以盡情打造打造你獨一無二的滑板，<br>
                                除了自由化的搭配之外更提供新手完整的配板教學！</div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-12 hp-diyImg">
                        <img src="images/bg-skate.svg" alt="" class="bgSkate">
                        <div class="cruiser">
                            <img class="diyCruiser" src="images/img-of-cruiser.svg" alt="">
                            <img class="diyDeck" src="images/img-of-deck.svg" alt="">
                        </div>
                        <img class="diyGriptape" src="images/img-of-griptape.svg" alt="">
                        <img class="diyBearings" src="images/img-of-bearings.svg" alt="">
                        <img class="diyTrucks" src="images/img-of-trucks.svg" alt="">
                        <img class="diyWheels" src="images/img-of-wheels.svg" alt="">


                        <!-- <img src="images/diy-board.svg" alt="" class="hp-diySkate">
                    <img src="images/trucks.png" alt="" class="hp-diyTrucks hp-diyTrucks1">
                    <img src="images/trucks.png" alt="" class="hp-diyTrucks hp-diyTrucks2">
                    <img src="images/diy-tire.png" alt="" class="hp-diyTire hp-diyTire1">
                    <img src="images/diy-tire.png" alt="" class="hp-diyTire hp-diyTire2">
                    <img src="images/diy-tire.png" alt="" class="hp-diyTire hp-diyTire3">
                    <img src="images/diy-tire.png" alt="" class="hp-diyTire hp-diyTire4"> -->
                    </div>
                </div>
                <div class="hp-Button text-center mt-5 position-relative">
                    <a href="./J-DIY-step1.php" class="bt-p">組裝你的專屬滑板去</a>
                    <!-- 按鈕粗度調整？ -->
                </div>
            </div>
            <div class="hp-newProductSection">
                <div class="row hp-titleGroup">
                    <div class="col-lg-5 col-4">
                        <div class="hp-titleLine purple purpleLeft"></div>
                    </div>
                    <div class="col-lg-2 col-4">
                        <div class="title hp-title text-center">最新商品
                            <img src="images/title.svg" alt="" class="hp-titlePic">
                        </div>
                    </div>
                    <div class="col-lg-5 col-4">
                        <div class="hp-titleLine purple"></div>
                    </div>
                </div>
                <div class="row hp-productList">

                    <?php
                        require_once('./db.inc.php');    

                        $sql = "SELECT * FROM `item_lists` WHERE `hot_new` = '2' LIMIT 6";
                    
                        $stmt = $pdo->prepare($sql);
                        $stmt->execute();

                        if($stmt->rowCount() > 0){
                            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                                $id=$row['id'];
                                $x = $row["itemId"]."price";
                                $y = $row["itemId"]."count";
                                $z = $row["itemId"]."total";
                                $a = $row["itemId"];

                                echo "<div class='col-md-4 col-6' data-aos='fade-up'>" ."<div class='hp-productCard mb-3'>" ."<a href='./itemdetail.php?id=$id' class='black'>" ."<div class='hp-productImgBox text-center'>"
                                ."<div class='bg'></div>" ."<img src='./product/$a.png'alt=>" ."</div>" . "<div class='hp-text-box'>"."<div class='content text-center hp-text'>" .$row['itemName'] ."</div>".
                                "<div class='content hp-price text-center'>NT$" .$row['checkPrice'] ."</div>". "</a>" ."</div>" ."</div>"."</div>";
                            }
                        }else {
                            echo "0 datas";
                        }

                    ?>
                    <!-- 商品顯示排版 -->
                    <!-- <div class="col-md-4 col-6">
                         <div class="hp-productCard">
                            <a href="" class="black">
                                <div class="hp-productImgBox text-center">
                                    <div class="bg"></div>
                                    <img src="images/product-1.png" alt="">
                                </div>
                                <div class="content text-center">Superior Neapolitan 7.75" Skateboard Deck</div>
                                <div class="content hp-price text-center">NT $2250</div>
                            </a>
                         </div>
                    </div> -->

                </div>
                <div class="hp-Button text-center mt-5">
                    <a href="./allproduct_sd.php?hot_new=2" class="bt-p">More</a>
                </div>
            </div>
            <div class="hp-newProductSection">
                <div class="row hp-titleGroup">
                    <div class="col-lg-5 col-4">
                        <div class="hp-titleLine purple purpleLeft"></div>
                    </div>
                    <div class="col-lg-2 col-4">
                        <div class="title hp-title text-center">人氣商品
                            <img src="images/title.svg" alt="" class="hp-titlePic">
                        </div>
                    </div>
                    <div class="col-lg-5 col-4">
                        <div class="hp-titleLine purple"></div>
                    </div>
                </div>
                <div class="row hp-productList">
                    <!-- 商品顯示排版 -->

                    <?php
                      
                        $sql = "SELECT * FROM `item_lists` WHERE `hot_new` = '1' LIMIT 6";
                    
                        $stmt = $pdo->prepare($sql);
                        $stmt->execute();

                        if($stmt->rowCount() > 0){
                            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                                $id=$row['id'];
                                $x = $row["itemId"]."price";
                                $y = $row["itemId"]."count";
                                $z = $row["itemId"]."total";
                                $a = $row["itemId"];

                                echo "<div class='col-md-4 col-6' data-aos='fade-up'>" ."<div class='hp-productCard mb-3'>" ."<a href='./itemdetail.php?id=$id' class='black'>" ."<div class='hp-productImgBox text-center'>"
                                ."<div class='bg'></div>" ."<img src='./product/$a.png'alt=>" ."</div>" . "<div class='hp-text-box'>"."<div class='content text-center hp-text'>" .$row['itemName'] ."</div>".
                                "<div class='content hp-price text-center'>NT$" .$row['checkPrice'] ."</div>". "</a>" ."</div>" ."</div>"."</div>";
                            }
                        }else {
                            echo "0 datas";
                        }

                    ?>

                    <!-- <div class="col-md-4 col-6">
                        <div class="hp-productCard">
                            <a href="" class="black">
                                <div class="hp-productImgBox text-center">
                                    <div class="bg"></div>
                                    <img src="images/product-7.png" alt="">
                                </div>
                                <div class="content text-center">Superior Neapolitan 7.75" Skateboard Deck</div>
                                <div class="content hp-price text-center">NT $2250</div>
                            </a>
                        </div>
                    </div> -->

                </div>
                <div class="hp-Button text-center mt-5">
                    <a href="./allproduct_sd.php?hot_new=1" class="bt-p">More</a>
                </div>
            </div>
            <div class="hp-news">
                <div class="row hp-titleGroup">
                    <div class="col-lg-5 col-4">
                        <div class="hp-titleLine purple purpleLeft"></div>
                    </div>
                    <div class="col-lg-2 col-4">
                        <div class="title hp-title text-center">最新消息
                            <img src="images/title.svg" alt="" class="hp-titlePic">
                        </div>
                    </div>
                    <div class="col-lg-5 col-4">
                        <div class="hp-titleLine purple"></div>
                    </div>
                </div>
                <div class="row hp-eventCardGroup">
                    <div class="col-md-4 col-12" data-aos="fade-up">
                        <div class="hp-eventCard">
                            <div class="hp-eventPicBox">
                                <img src="images/eventPic.jpg" alt="">
                            </div>
                            <div class="hp-eventcardinfo">
                                <div class="tip">2019.12.24</div>
                                <div class="content text-center my-2"><b>#創造你的滑板新生活</b></div>
                                <div class="tip hp-eventContent">
                                    嘶給帶你認識滑板玩滑板，讓你從對滑板一竅不通到代步技巧樣樣行！不論你是大人或小孩，玩家或新手，這是一場兼具運動、趣味、專業技能與交流的活動，一起來創造屬於自己的滑板新生活吧！
                                </div>
                                <div class="hp-button text-right mt-4">
                                    <a href="./J-eventpagedetail.php" class="bt-b-g3">More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-12" data-aos="fade-up">
                        <div class="hp-eventCard">
                            <div class="hp-eventPicBox">
                                <img src="images/eventPic2.jpg" alt="">
                            </div>
                            <div class="hp-eventcardinfo">
                                <div class="tip">2019.12.22</div>
                                <div class="content text-center my-2"><b>#2020世界滑板日</b></div>
                                <div class="tip hp-eventContent">世界滑板日跟著嘶給回歸街頭原始風格，
                                    現場準備各種活動及精美獎品。老朋友、新朋友快來一起街滑囉!
                                    沿途體驗街頭地形運用，共有【三個地點】
                                    每個地點會發送 不同顏色的【滑板日紀念貼紙】
                                    蒐集【三張 滑板日紀念貼紙】即可獲得【滑板日限量紀念徽章】
                                    　</div>
                                <div class="hp-button text-right mt-4">
                                    <a href="./J-eventpagedetail.php" class="bt-b-g3">More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-12" data-aos="fade-up">
                        <div class="hp-eventCard">
                            <div class="hp-eventPicBox">
                                <img src="images/eventPic3.jpg" alt="">
                            </div>
                            <div class="hp-eventcardinfo">
                                <div class="tip">2019.12.19</div>
                                <div class="content text-center my-2"><b>#新款交通板上市</b></div>
                                <div class="tip hp-eventContent">
                                    一個童心未泯的品牌，品牌主理人總是以幽默詼諧的方式在回應這個世界與滑板圈，除了板身還有貼紙，快來店裡挑選聖誕禮物吧!!!</div>
                                <div class="hp-button text-right mt-4">
                                    <a href="./J-eventpagedetail.php" class="bt-b-g3">More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hp-Button text-center mt-5">
                    <a href="./J-event.php" class="bt-p">More</a>
                </div>
            </div>
        </div>
    </div>

    <?php
    
    require_once("./footer.php")
    
    ?>
    <!-- push top btn php -->
    <?php
        require_once('./t-topBtn.php');
    ?>
    
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
    <!-- 錯視 -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <!-- Custome jQ -->
    <script>
        // 商品hover效果
        $(".hp-productCard a").mouseenter(function () {
            $(this).find(".bg").addClass("hp-showbg");
        }).mouseleave(function () {
            $(this).find(".bg").removeClass("hp-showbg");
        })

        // 活動hover效果
        $(".hp-eventCard").mouseenter(function () {
            $(this).addClass("hp-eventCardShadow");
        }).mouseleave(function () {
            $(this).removeClass("hp-eventCardShadow");
        })
    </script>

</body>

<script>
    var cars = [];
    var bill = [];
    function calcup(x) {
        var count = document.getElementById(x + "count").innerHTML.split(':')[1];
        var count2 = parseInt(count)
        var count3 = count2 + 1;
        //console.log(count2+1)
        document.getElementById(x + "count").innerHTML = document.getElementById(x + "count").innerHTML.split(':')[0] + ":" + count3.toString();
        var sum = parseInt(document.getElementById(x + "price").innerHTML.split(':')[1]) * count3
        document.getElementById(x + "total").innerHTML = document.getElementById(x + "total").innerHTML.split(':')[0] + ":" + sum
    }

    function calcdown(x) {
        var count = document.getElementById(x + "count").innerHTML.split(':')[1];
        var count2 = parseInt(count)
        var count3 = count2 - 1;
        //console.log(count2-1)
        document.getElementById(x + "count").innerHTML = document.getElementById(x + "count").innerHTML.split(':')[0] + ":" + count3.toString();
        var sum = parseInt(document.getElementById(x + "price").innerHTML.split(':')[1]) * count3
        document.getElementById(x + "total").innerHTML = document.getElementById(x + "total").innerHTML.split(':')[0] + ":" + sum
    }
    function car(x) {
        var productName = 'Product : ' + document.getElementById(x).innerHTML.split(':')[1];
        var price = 'Price : ' + document.getElementById(x + 'price').innerHTML.split(':')[1];
        var count = 'Count : ' + document.getElementById(x + 'count').innerHTML.split(':')[1];
        var total = 'Total : ' + document.getElementById(x + 'total').innerHTML.split(':')[1];
        cars.push([productName, price, count, total]);
        bill.push(total.split(':')[1]);
        console.log(cars);
        //showcar(cars)        
    }

    function showcar() {
        var sum = 0;
        for (var i = 0; i < bill.length; i++) {
            sum = sum + parseInt(bill[i]);
        };
        console.log(bill)
        console.log(sum)
        function post_to_url(path, params, method) {
            method = method || "POST";
            var form = document.createElement("form");
            form.setAttribute("method", method);
            form.setAttribute("action", path);

            for (var key in params) {
                var hiddenField = document.createElement("input");
                hiddenField.setAttribute("type", "hidden");
                hiddenField.setAttribute("name", key);
                hiddenField.setAttribute("value", params[key]);
                form.appendChild(hiddenField);
            }

            document.body.appendChild(form);    // Not entirely sure if this is necessary
            form.submit();
        }
        post_to_url('car.php', { 'shoppinglist': cars, 'bill': sum });
    }

</script>
<script>
    $(window).scroll(
        function () {
            console.log($(window).scrollTop())
        }
    )
</script>
</html>