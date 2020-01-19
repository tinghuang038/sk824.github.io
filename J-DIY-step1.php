<?php
require_once('./db.inc.php');
if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <title>DIY你的滑板</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css"
        integrity="sha384-REHJTs1r2ErKBuJB0fCK99gCYsVjwxHrSU0N7I1zl9vZbggVJXRMsv/sLlOAGb4M" crossorigin="anonymous">

    <!-- Custome CSS -->
    <link rel="stylesheet" href="./css/css.css">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="./css/navbar1.css"> 
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/_tpl_nav_head.css">
    <link rel="stylesheet" href="./css/J-DIY-step1-css.css">

    <style>
    </style>
  </head>

  <body>
  <?php
     require_once('./_tpl_nav_html.php');
?>
    <nav class="j-nav"></nav>
    <div class="container">
        <div class="d1-bg bg-purple"></div>
        <div class="row d1-hide-m">
            <div class="col-12 d-flex d1-progressBar">
                <div class="d1-ball d1-ball0 d1-ball1 bg-purple">
                    <div class="content text-center d1-ballNum white">1</div>
                </div>
                <div class="d1-ball d1-ball0 d1-ball2 bg-g1"><div class="content text-center d1-ballNum purple">2</div></div>
                <div class="d1-ball d1-ball0 d1-ball3 bg-g1"><div class="content text-center d1-ballNum purple">3</div></div>
                <div class="d1-ball0 d1-ball4 bg-g1"><div class="content text-center d1-ballNum purple">4</div></div>
            </div>
        </div>
        <div class="row d1-hide-m">
            <div class="col-12 d-flex d1-progressBarInfo">
                <div class="tip black">模式選擇</div>
                <div class="tip black">滑板選擇</div>
                <div class="tip black">組裝滑板</div>
                <div class="tip black">組裝完成</div>
            </div>
        </div>
        <div class="row d1-content">
            <div class="col-6 d-flex d1-coveimgsection">
                <div class="d1-coverimgLine bg-green"></div>
                <img src="images/coverimg.png" alt="" class="d1-coverimg">
            </div>
            <div class="col-lg-6 col-12">
                <div class="title d1-title">模式選擇
                    <img src="images/title.svg" alt="" class="d1-titlePic">
                </div>
                <div class="d1-optionbox">
                    <div class="title purple mb-3"><b>新手專區</b></div>
                    <div class="tip mb-5">對於初次接觸滑板的你，<br>
                        將會依照你的身高腳長替你找出最適合你的滑板尺寸，<br>
                        接下來只要盡情享受搭配的樂趣即可，出發吧！<br>
                        一起打造專屬你的第一張滑板！</div>
                    <div class="d1-Button">
                        <a href="./J-DIY-step2.php" class="bt-p">開始</a>
                    </div>
                </div>
                <div class="d1-optionbox">
                    <div class="title purple mb-3"><b>老手專區</b></div>
                    <div class="tip mb-5">相信已經是老手的你對於自己適合的滑板已經非常瞭解了，<br>
                        沒問題我們都知道，
                        沒有任何的限制，<br>
                        隨你的喜好隨意搭配你最帥最酷的滑板吧！<br>(交通板皆為整組販售，無法提供客製搭配)</div>
                    <div class="d1-Button">
                        <a href="./J-DIY-step2.php" class="bt-p">開始</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="./js/accessible-menu.js"></script>
    <script src="./js/tpl_navbar_js.js"></script>
    <!-- Custome jQ -->
  </body>
</html>