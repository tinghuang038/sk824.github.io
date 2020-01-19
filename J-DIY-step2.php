<?php if (session_status() == PHP_SESSION_NONE) {
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
    <link rel="stylesheet" href="css/J-DIY-step1-css.css">
    <link rel="stylesheet" href="css/J-DIY-step2-css.css">
    <link rel="stylesheet" href="../fontawesome-free-5.12.0-web/css/all.min.css">

  </head>
  <body>
  <?php
    require_once('./_tpl_nav_html.php');
?>
    <nav class="j-nav"></nav>
    <div class="container">
        <div class="row d1-hide-m">
            <div class="col-12 d-flex d1-progressBar">
                <div class="d1-ball d1-ball0 d1-ball1 bg-purple">
                    <div class="content text-center d1-ballNum white">1</div>
                </div>
                <div class="d1-ball d1-ball0 d1-ball2 bg-purple"><div class="content text-center d1-ballNum white">2</div></div>
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
        <div class="row mt-4 d2-titlegroup">
            <div class="col-4">
                <div class="title d2-title">滑板選擇
                    <img src="images/title.svg" alt="" class="d2-titlePic">
                </div>
            </div>
            <div class="col-8">
                <div class="tip">不管你是想要帥氣的溜著滑板、用滑板來代步，或是想要學習高超酷炫的滑板技巧，<br>
                    這邊將幫助你快速認識滑板，並挑選適合你的滑板類型！</div>
            </div>
        </div>
    </div>
    <div class="container-fluid b">
        <div class="row d-flex d2-section">
            <div class="d2-cruisersection bg-purple" id="d2-a">
                <h2 class="white d2-skateboard1-cruiser2 hide">Cruiser</h2>
                <h2 class="white d2-skateboard1-cruiser">Cruiser</h2>
                <img src="images/skateboard-1.png" alt="" class="d2-skateboard1">
                <div class="d2-skateboard-1-info">
                    <div class="title white d2-skateboard1-title">交通板
                    </div>
                    <div class="content white d2-skateboard1-content">
                        <br>這類型的板適合當作日常的代步工具，<br>
                        為了適應各種地形及方便攜帶，會選用軟輪且板材較輕的材質。<br><br>
                        若不是想要玩技術滑板的，<br>
                        單純只是想要用來代步或呈現一種Life style，那交通板非常適合你。
                        <br>(交通板皆為整組販售，無法提供客製搭配)
                    </div>
                </div>
                <div class="d2-button1">
                    <a href="./allproduct_sd.php?cate=[21,22,23,24]" class="d2-bt-w">挑選交通板去</a>
                </div>
            </div>
            <div class="d2-skateboardsection bg-white" id="d2-b">
                <a href="#" class="d2-backbtn d2-back-hide" id="d2-back">
                    <i class="fas fa-chevron-left d2-back purple"></i>
                </a>
                <h2 class="purple d2-skateboard2-skateboard2 hide">Skateboard</h2>
                <h2 class="purple d2-skateboard2-skateboard">Skateboard</h2>
                <img src="images/skateboard-0.png" alt="" class="d2-skateboard2">
                <div class="d2-skateboard-2-info">
                    <div class="title purple d2-skateboard2-title">技術板
                    </div>
                    <div class="content purple d2-skateboard2-content"><br>形狀頭尾對稱，
                        通常是以雙頭翹板的形狀呈現，
                        材質以木頭為主，<br>
                        適合於滑板場、平地滑行。<br><br>
                        
                        這類板型也確實能夠做出較多花式滑板的特殊技巧。<br>
                        適合喜歡翻跳、極限運動的板友。
                    </div>
                    <div class="d2-dropdownsection-m d-flex">
                        <div class="d2-foot-m pr-4">
                            <div class="tip mb-2">選擇你的腳長</div>
                            <select class="custom-select custom-select mb-3">
                                <!-- <option selected>Open this select menu</option> -->
                                <option value="foot1" selected>23cm以下</option>
                                <option value="foot2">23-25cm</option>
                                <option value="foot3">25-27cm</option>
                                <option value="foot4">27cm以上</option>
                            </select>
                        </div>
                        <div class="d2-height-m">
                            <div class="tip mb-2">選擇你的身高</div>
                            <select class="custom-select custom-select mb-3">
                            <!-- <option selected>Open this select menu</option> -->
                            <option value="height1" selected>150cm以下</option>
                            <option value="height2">151-160cm</option>
                            <option value="height3">161-170cm</option>
                            <option value="height4">171cm以上</option>
                        </select>
                        </div>
                    </div>
                </div>
                <div class="d2-button2 white">
                    <a href="#" class="bt-p white" id="open_dropdown">搭配你的專屬滑板</a>
                </div>
                <div class="d2-dropdownsection">
                    <div class="content mb-2">請選擇你的腳長</div>
                    <select class="custom-select custom-select-lg mb-3">
                        <!-- <option selected>Open this select menu</option> -->
                        <option value="foot1" selected>23cm以下</option>
                        <option value="foot2">23-25cm</option>
                        <option value="foot3">25-27cm</option>
                        <option value="foot4">27cm以上</option>
                    </select>
                    <div class="content mb-2">請選擇你的身高</div>
                    <select class="custom-select custom-select-lg mb-3">
                        <!-- <option selected>Open this select menu</option> -->
                        <option value="height1" selected>150cm 以下</option>
                        <option value="height2">151-160cm</option>
                        <option value="height3">161-170cm</option>
                        <option value="height4">171cm 以上</option>
                      </select>
                    <div class="d2-dropdownbutton mt-3">
                        <a href="./J-DIY-step3.php" class="bt-p">下一步</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../fontawesome-free-5.12.0-web/js/all.min.js"></script>
    <script src="./js/accessible-menu.js"></script>
    <script src="./js/tpl_navbar_js.js"></script>
    <!-- Custome jQ -->
    <script src="js/J-DIY-step2-js.js"></script>

  </body>
</html>