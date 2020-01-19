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
    <title>新手指南 | 入門技巧</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css"
        integrity="sha384-REHJTs1r2ErKBuJB0fCK99gCYsVjwxHrSU0N7I1zl9vZbggVJXRMsv/sLlOAGb4M" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/css.css">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="./css/navbar1.css"> 
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/_tpl_nav_head.css">
    <link rel="stylesheet" href="css/t-beginners-guide-skateskill.css">
    <link rel="stylesheet" href="css/t-topBtn.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        * {
            font-family: 'arial', 'Noto Sans TC', sans-serif;
        }
        .bGuide-nav{
            animation: none;
        }
        .skillBpng, .skillCpng{
            display:none;
        }
        .skillApng{
            display:block;
        }
    </style>
</head>

<body>
    <div class="bGuide-nav">
        <?php
            require_once('./navbar.php');
        ?>
    </div>
    <div class="beginners-guide-html-bg">
        <svg viewbox="0 0 100 100" class="white-trangle">
            <polyline points="0,0 0,100 100,100"></polyline>
        </svg>
        <svg viewbox="0 0 100 100" class="white-trangle white-trangle-right">
            <polyline points="0,100 100,100 100,0"></polyline>
        </svg>
    </div>
    <div class="item-list-nav">
    </div>
    <div class="container beginner-guide-content">
        <div class="row justify-content-center my-4">
            <h2 class="title black">
                <img class="titleSkate" src="images/title-skateboard.svg" alt="">
                入門技巧</h2>
        </div>
        <!-- 入門技巧縮圖 -->
        <div class="row beginner-guide-box d-flex justify-content-center">
            <div class="col-12 flex-column">
                <div class="beginner-guide-img beginner-guide-img-right">
                    <img src="images/img-of-skateboy.svg" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-10 beginner-guide-skate-img d-flex justify-content-center">
                <div data-skillName="upBoard" class="skill-box photo photo--hasGif skillActive">
                    <img class="photo__img" src="images/t_beginners_guide_skillA.png" alt="">
                </div>
                <div data-skillName="slideBoard" class="skill-box photo photo--hasGif">
                    <img class="photo__img" src="images/t_beginners_guide_skillB.png"
                        alt=""></div>
                <div data-skillName="ollie" class="skill-box photo photo--hasGif">
                    <img class="photo__img" src="images/t_beginners_guide_skillC.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 suge-decoration">
                <img src="images/suge-logo.svg" alt="">
            </div>
            <div id="skateskillContent" class="col-12 skateskill-content my-4">
                <!-- upBoard -->
                <div class="skateskill-content-boxA d-flex flex-column">
                    <h2 class="title black">
                        <img class="titleSkate" src="images/title-skateboard.svg" alt="">
                        基本上下板
                    </h2>
                    <div class="contentAnPic_box">
                        <div class="picBox right-picBox photo photo--hasGif">
                            <img class="photo__img" src="images/t_beginners_guide_skillA01.png" alt="">
                        </div>
                        <p class="skateskill-content-p skateskill-right-content">
                            <span>確定前腳：</span>左右腳輪流用單腳踩在四顆螺絲上，站立保持平衡大概三到五秒。覺得哪隻腳站立保持平衡比較順呢？那就是你的慣性前腳。
                        </p>
                    </div>
                    <div class="contentAnPic_box">
                        <div class="picBox left-picBox photo photo--hasGif">
                            <img class="photo__img" src="images/t_beginners_guide_skillA02.png" alt="">
                        </div>
                        <p class="skateskill-content-p skateskill-left-content">
                            <span>練習上板：</span>一開始我們的前腳踩在前面四顆螺絲的位置，腳趾朝向前方，站立後身體保持平衡，順勢後側讓後腳踩在滑板上。
                        </p>
                    </div>
                    <div class="contentAnPic_box">
                        <div class="picBox right-picBox">
                            <img src="images/t_beginners_guide_skillA03.png" alt="">
                        </div>
                        <p class="skateskill-content-p skateskill-right-content">
                            <span>滑板站姿：</span>接著讓雙腳方向平行。勿內八，會比較不好控制滑板。可慢慢移動讓前腳露出兩顆螺絲孔，後腳露出四顆螺絲孔並踩住板尾。
                        </p>
                    </div>
                    <div class="contentAnPic_box">
                        <div class="picBox center-picBox photo photo--hasGif">
                            <img class="photo__img" src="images/t_beginners_guide_skillA04.png" alt="">
                        </div>
                        <p class="skateskill-content-p skateskill-center-content">
                            <span>練習下板：</span>前腳向前轉，後腳順勢放下來。
                        </p>
                    </div>
                    
                </div>

                <!-- slideBoard -->
                <!-- <div class="skateskill-content-boxB d-flex flex-column">
                    <h2 class="title black">
                        <img class="titleSkate" src="images/title-skateboard.svg" alt="">
                        踢轉與滑行
                    </h2>
                    <div class="contentAnPic_box">
                        <div class="picBox right-picBox photo photo--hasGif">
                            <img class="photo__img" src="images/t_beginners_guide_skillB01.png" alt="">
                        </div>
                        <p class="skateskill-content-p skateskill-right-content">
                            <span>抬板：</span>身體重心微靠前腳上方，重心微微壓低。膝蓋上抬，後腳讓他順勢自然下壓、抬完馬上放回地面。練習時後腳不能刻意出力下壓，容易讓重心向後倒。反覆練習直到掌握抬板技巧，就可練習踢轉。
                        </p>
                    </div>
                    <div class="contentAnPic_box">
                        <div class="picBox left-picBox photo photo--hasGif">
                            <img class="photo__img" src="images/t_beginners_guide_skillB02.png" alt="">
                        </div>
                        <p class="skateskill-content-p skateskill-left-content">
                            <span>正反向踢轉：</span>以向前畫圈的方式重複練習抬板動作，掌握訣竅後，再練習背向踢轉。一樣以向後畫圈的方式，重複抬板練習。
                        </p>
                    </div>
                    <div class="contentAnPic_box">
                        <div class="picBox right-picBox photo photo--hasGif">
                            <img class="photo__img" src="images/t_beginners_guide_skillB03.png" alt="">
                        </div>
                        <p class="skateskill-content-p skateskill-right-content">
                            <span>直線滑行：</span>前腳踩在前面四顆螺絲上，腳趾頭朝向前方，重心擺在前腳，上半身微微壓低，同時後腳會踩在地面。後腳順勢向後推行，就是滑行姿勢。
                        </p>
                    </div>
                </div> -->

                <!-- ollie -->
                <!-- <div class="skateskill-content-boxC d-flex flex-column">
                    <h2 class="title black">
                        <img class="titleSkate" src="images/title-skateboard.svg" alt="">
                        豚跳
                    </h2>
                    <div class="contentAnPic_box">
                        <div class="picBox right-picBox photo photo--hasGif">
                            <img class="photo__img" src="images/t_beginners_guide_skillC01.png" alt="">
                        </div>
                        <p class="skateskill-content-p skateskill-right-content">
                            <span>跳前站姿：</span>前腳位置在四顆螺絲旁邊，腳尖切齊板子，後腳踩板尾。先在板上試著往前跳，感受時間差與著板點。
                        </p>
                    </div>
                    <div class="contentAnPic_box">
                        <div class="picBox left-picBox photo photo--hasGif">
                            <img class="photo__img" src="images/t_beginners_guide_skillC02.png" alt="">
                        </div>
                        <p class="skateskill-content-p skateskill-left-content">
                            <span>後腳點板：</span>若後腳點板方向是垂直向下，板子會被向下壓，跳不起來。因此點腳方向要稍微朝板尾後方點，板子才會飛。
                        </p>
                    </div>
                    <div class="contentAnPic_box ">
                        <div class="picBox right-picBox photo photo--hasGif">
                            <img class="photo__img" src="images/t_beginners_guide_skillC03.png" alt="">
                        </div>
                        <p class="skateskill-content-p skateskill-right-content">
                            <span>前腳跳躍：</span>初期可直接往前跳起，腳落在原始位置前面一點。練習久了，可再加上用前腳向前刷板身，刷到板尖再下踩的動作。
                        </p>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <div class="skateskill-content-endGif">
        <img class="skillApng" src="images/t_beginners_guide_skillA.gif" alt="">
        <img class="skillBpng" src="images/t_beginners_guide_skillB.gif" alt="">
        <img class="skillCpng" src="images/t_beginners_guide_skillC.gif" alt="">
        <div class="box-shadow"></div>
    </div>
    <!-- footer -->
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
    <script src="./js/t-beginners-guide-skateskill.js"></script>
</body>

</html>