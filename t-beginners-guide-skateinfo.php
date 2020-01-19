<?php if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>新手指南 | 滑板介紹</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css"
        integrity="sha384-REHJTs1r2ErKBuJB0fCK99gCYsVjwxHrSU0N7I1zl9vZbggVJXRMsv/sLlOAGb4M" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/css.css">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="./css/navbar1.css"> 
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/_tpl_nav_head.css">
    <link rel="stylesheet" href="css/t-beginners-guide-skateinfo.css">
    <link rel="stylesheet" href="css/t-topBtn.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        
        * {
            font-family: 'arial', 'Noto Sans TC', sans-serif;
            transition:.5s ease-in-out;
        }
        html,body{
        padding: 0;
        margin: 0;
        width: 100vw;
        overflow-x: hidden;
        /* height: 200vh; */
    }
    .bGuide-nav *{
            animation: none;
        }
    .bGuide-footer{
            width:100vw;
            position: absolute;
            bottom:0px;

        }
    </style>
</head>

<body>
    <div class="bGuide-nav">
        <?php
            require_once('./_tpl_nav_html.php');
        ?>
    </div>
    <!-- 灰色背景和文章的圖 -->
    <div class="beginners-guide-html-bg">
        <svg viewbox="0 0 100 100" class="white-trangle">
            <polyline points="0,0 0,100 100,100"></polyline>
        </svg>
        <svg viewbox="0 0 100 100" class="white-trangle white-trangle-right">
            <polyline points="0,100 100,100 100,0"></polyline>
        </svg>
        <div class="beginners-guide-deco beginners-guide-cruiser">
            <img src="images/img-of-cruiser.svg" alt="">
        </div>
        <div class="beginners-guide-deco beginners-guide-deck">
            <img src="images/img-of-deck.svg" alt="">
        </div>
        <div class="beginners-guide-deco beginners-guide-trucks">
            <img src="images/img-of-trucks.svg" alt="">
        </div>
        <div class="beginners-guide-deco beginners-guide-wheels">
            <img src="images/img-of-wheels.svg" alt="">
        </div>
        <div class="beginners-guide-deco beginners-guide-bearings">
            <img src="images/img-of-bearings.svg" alt="">
        </div>
        <div class="beginners-guide-deco beginners-guide-griptape">
            <img src="images/img-of-griptape.svg" alt="">
        </div>
    </div>
    <div class="item-list-nav">
    </div>
    <!-- 虛線 -->
    <div class="">
        <div class="skateinfo-dashline line01"></div>
        <div class="skateinfo-dashline line02"></div>
        <div class="skateinfo-dashline line031"></div>
        <div class="skateinfo-dashline line032"></div>
        <div class="skateinfo-dashline line04"></div>
        <div class="skateinfo-dashline line05"></div>
    </div>
    <div class="container beginner-guide-content">
        <div class="row justify-content-center my-4">
            <h2 class="title black">
                <img class="titleSkate" src="images/title-skateboard.svg" alt="">
                滑板介紹</h2>
        </div>

        <div class="row beginner-guide-box d-flex justify-content-center">
            <div class="col-12 flex-column">
                <div class="beginner-guide-img beginner-guide-img-left">
                    <img src="images/img-of-cruiser.svg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- 圖樣選單 -->
    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-10 beginner-guide-skate-img d-flex justify-content-center">
                <div class="img-box" data-scrollH="1182">
                    <span>CRUISER<br>交通板</span>
                    <img class="img1" src="images/img-of-cruiser.svg" alt="">
                </div>
                <div class="img-box" data-scrollH="1557">
                    <span>DECK<br>板身</span>
                    <img class="img2" src="images/img-of-deck.svg" alt=""></div>
                <div class="img-box img-smbox img-smbox03" data-scrollH="2001">
                    <span>TRUCKS<br>輪架</span>
                    <img class="img3" src="images/img-of-trucks.svg" alt="">
                </div>
                <div class="img-box img-smbox" data-scrollH="2301">
                    <span>WHEELS<br>輪子</span>
                    <img class="img4" src="images/img-of-wheels.svg" alt=""></div>
                <div class="img-box img-smbox" data-scrollH="2707">
                    <span>BEARINGS<br>培林</span>
                    <img class="img5" src="images/img-of-bearings.svg" alt=""></div>
                <div class="img-box" data-scrollH="2707">
                    <span>GRIPTAPE<br>砂紙</span>
                    <img class="img6" src="images/img-of-griptape.svg" alt=""></div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 suge-decoration">
                <img src="images/suge-logo.svg" alt="">
            </div>
            <p class="skateinfo-content skateinfo-content-for g4">
                初學滑板者最大的困擾大概就是要如何買一塊適合自己的板了吧。<br>其實無論是技術板、交通板或者是長板都能做到你想做的動作。<br>切記：板子只有分「適合」與「不適合」，所以要先明白自己想玩的滑板種類是甚麼，進而挑選真正「適合」自己的板子!
            </p>
            <!-- 交通板 -->
            <div data-aos="fade-up" class="col-12 skateinfo-content d-flex flex-column my-4">
                <h2 class="title black">
                    <img class="titleSkate" src="images/title-skateboard.svg" alt="">
                    交通板</h2>
                <p class="skateinfo-content-p skateinfo-right-content">
                    其實可直接定義交通板就是可以滑不會跌死，滑起來順<span> 輪子軟
                    </span>就叫做交通板。<br>如果你的想要玩的類型就<span>「只是想滑而已」</span>，那我覺得你也大可不必這麼斟酌：我就是要買叫交通板的板子（別懷疑就是有這麼堅持的人），可以挑選攜帶方便的，畢竟如果要拿著一張44吋、42吋的板子跑來跑去，未免也太累人了一點。
                </p>
            </div>
            <!-- 板身 -->
            <div data-aos="fade-up" class="col-12 skateinfo-content d-flex flex-column my-4">
                <h2 class="title black">
                    <img class="titleSkate" src="images/title-skateboard.svg" alt="">
                    板身</h2>
                <p class="skateinfo-content-p skateinfo-left-content">
                    板身這個零件算是比較特別的，因為價格都差不多，所以完全是以自身的滑板習慣來做選擇。這點對新手來說有點尷尬，因為如果玩過的板型不夠多，還真的無法得知自己到底適合什麼樣的板型。<br>
                    大部份的滑板都是由<span>七層或九層楓木</span>所組成的(當然也有一些比較便宜的滑板是木製的，但由於製造較粗糙，所以很容易斷)，而滑板亦有分寬度，你可以<span>依照自己腳的大小</span>去選擇適合自己腳型的板子。
                </p>
            </div>
            <!-- 輪架 -->
            <div data-aos="fade-up" class="col-12 skateinfo-content d-flex flex-column my-4">
                <h2 class="title black">
                    <img class="titleSkate" src="images/title-skateboard.svg" alt="">
                    輪架</h2>
                <p class="skateinfo-content-p skateinfo-right-content">
                    輪架是整塊滑板的骨骼，它的功用除了支撐板和輪子之外，還有可以調整鋼架的軟硬度，亦決定了滑板在作左右轉彎的難易度。假如鋼架調越軟就越容易轉彎；反之假如鋼架調較硬的話則較不容易轉彎。
                </p>
            </div>
            <!-- 輪子 -->
            <div data-aos="fade-up" class="col-12 skateinfo-content d-flex flex-column my-4">
                <h2 class="title black">
                    <img class="titleSkate" src="images/title-skateboard.svg" alt="">
                    輪子</h2>
                <p class="skateinfo-content-p skateinfo-left-content">
                    輪子有分<span>大小和硬度</span>，大小的規格都是以mm來分別，數字越大輪子越大；而輪子的硬度則是以xxA來分，軟的輪子會和地面產生較大的黏性，硬的則相反。
                </p>
            </div>
            <!-- 培林 -->
            <div data-aos="fade-up" class="col-12 skateinfo-content d-flex flex-column my-4">
                <h2 class="title black">
                    <img class="titleSkate" src="images/title-skateboard.svg" alt="">
                    培林</h2>
                <p class="skateinfo-content-p skateinfo-right-content">
                    放置於輪子中央的零件，滑板的速度快或慢，便全憑培林的好壞了。剛開始玩滑板的話，培林可以不必用太好，因為好的培林可以使滑板滑很遠，並且比較難操控滑板的方向。
                </p>
            </div>
            <!-- 砂紙 -->
            <div data-aos="fade-up" class="col-12 skateinfo-content d-flex flex-column my-4">
                <h2 class="title black">
                    <img class="titleSkate" src="images/title-skateboard.svg" alt="">
                    砂紙</h2>
                <p class="skateinfo-content-p skateinfo-left-content">
                    它是黏在板子的表面上，增加鞋子與板子的磨擦力，一般來說砂紙都是黑的，亦有一些如火燄、迷彩之類圖案，但這些砂紙的磨擦力比較低，所以要玩滑板特技或花式，選擇砂紙也是不可缺少的一環。
                </p>
            </div>
        </div>
    </div>
    <?php
        require_once('./footer.php');
    ?>
    <!-- push top btn php -->
    <?php
        require_once('./t-topBtn.php');
    ?>

    <script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="./js/accessible-menu.js"></script>
    <script src="./js/tpl_navbar_js.js"></script>
    <script>
        AOS.init();
    </script>

    <script src="./js/t-beginners-guide-skateinfo.js"></script>
    
</body>

</html>
