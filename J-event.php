<?php
require_once('./db.inc.php');
if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <title>最新消息</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- Custome CSS -->
    <link rel="stylesheet" href="./css/css.css">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="./css/navbar1.css"> 
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/_tpl_nav_head.css">
    <link rel="stylesheet" href="./css/J-event.css">
  </head>
  <body>

      <nav class="j-nav">
      <?php
        require_once('./_tpl_nav_html.php');
    ?>
      </nav>
      <div class="container">
        <div class="row hp-titleGroup">
            <div class="col-12">
                <div class="title hp-title">最新消息
                    <img src="images/title.svg" alt="" class="hp-titlePic">
                </div>
            </div>
        </div>
        <div class="row hp-eventCardGroup">
            <div class="col-md-4 col-12">
                <div class="hp-eventCard">
                    <div class="hp-eventPicBox">
                        <img src="images/eventPic.jpg" alt="">
                    </div>
                    <div class="hp-eventcardinfo">
                        <div class="tip">2019.12.24</div>
                        <div class="content text-center my-2"><b>#創造你的滑板新生活</b></div>
                        <div class="tip hp-eventContent">嘶給帶你認識滑板玩滑板，讓你從對滑板一竅不通到代步技巧樣樣行！不論你是大人或小孩，玩家或新手，這是一場兼具運動、趣味、專業技能與交流的活動，一起來創造屬於自己的滑板新生活吧！</div>
                        <div class="hp-button text-right mt-4">
                            <a href="./J-eventpagedetail.php" class="bt-b-g3">More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12">
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
            <div class="col-md-4 col-12">
                <div class="hp-eventCard">
                    <div class="hp-eventPicBox">
                        <img src="images/eventPic3.jpg" alt="">
                    </div>
                    <div class="hp-eventcardinfo">
                        <div class="tip">2019.12.19</div>
                        <div class="content text-center my-2"><b>#新款交通板上市</b></div>
                        <div class="tip hp-eventContent">一個童心未泯的品牌，品牌主理人總是以幽默詼諧的方式在回應這個世界與滑板圈，除了板身還有貼紙，快來店裡挑選聖誕禮物吧!!!</div>
                        <div class="hp-button text-right mt-4">
                            <a href="./J-eventpagedetail.php" class="bt-b-g3">More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hp-Button text-center mt-2">
            <a href="" class="bt-p">More</a>
        </div>
        <div class="row hp-titleGroup">
            <div class="col-12">
                <div class="title hp-title">滑板新聞
                    <img src="images/title.svg" alt="" class="hp-titlePic">
                </div>
            </div>
        </div>
        <div class="row hp-eventCardGroup">
            <div class="col-md-4 col-12">
                <div class="hp-eventCard">
                    <div class="hp-eventPicBox">
                        <img src="images/eventPic6.jpg" alt="">
                    </div>
                    <div class="hp-eventcardinfo">
                        <div class="tip">2020.01.15</div>
                        <div class="content text-center my-2"><b>#奧運滑板新項目</b></div>
                        <div class="tip hp-eventContent">Tre Flip、Backside Bigspin、Crooked Grind。你或許不曾正視他，你或許不把它視為一項運動，你或許認為這只是叛逆的街頭文化。

2016年國際奧委會將滑板正式列入2020年東京奧運正式比賽項目，對滑板的運動價值、文化及其精神做出認可。但僅此一步，真的能輕易突破我們對滑板的刻板印象嗎？</div>
                        <div class="hp-button text-right mt-4">
                            <a href="./J-eventpagedetail.php" class="bt-b-g3">More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="hp-eventCard">
                    <div class="hp-eventPicBox">
                        <img src="images/eventPic5.jpg" alt="">
                    </div>
                    <div class="hp-eventcardinfo">
                        <div class="tip">2019.01.08</div>
                        <div class="content text-center my-2"><b>#給你最純的滑板人視界</b></div>
                        <div class="tip hp-eventContent">今年桃園電影節首開全台灣影展先例，策劃了全以滑板影片與紀錄片為主軸的「給你最純的滑板人視界」觀摩單元，希望能藉由這些擁有獨到敍事的作品，滾動出滑板世界並非只以單向度行進的強與弱為區別，呈現滑板令人著迷的異質魅力。雖與主流運動同樣需經無數嘗試與練習來取得技術成長，滑板文化的主要媒體，始終標榜玩滑板是一種生活風格或自我表達的體現，並藉滑板影片（skate video）傳達個人創意的實踐。從VHS錄影帶到網路社群平台的隨手發佈影音，錄像一直是滑板人曝現自我的媒介。過去其僅止於展現男性的陽剛，隨著現今滑板社群的多元化，讓我們得以一探來自不同族群與性別的滑板視界與自我敍事。
                            　</div>
                        <div class="hp-button text-right mt-4">
                            <a href="./J-eventpagedetail.php" class="bt-b-g3">More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="hp-eventCard">
                    <div class="hp-eventPicBox">
                        <img src="images/eventPic4.jpg" alt="">
                    </div>
                    <div class="hp-eventcardinfo">
                        <div class="tip">2019.12.28</div>
                        <div class="content text-center my-2"><b>#新竹首座賽事級滑板公園啟用</b></div>
                        <div class="tip hp-eventContent">滑板族新聚點，左岸滑板公園正式啟用!新竹市政府於頭前溪高灘地「新竹左岸」河濱公園增設滑板公園，提供全新的平滑板場與多角度的滑板設施，尚未正式啟用就吸引許多滑板族前往搶先體驗，更在今（25）日啟用典禮帶來精彩滑板秀，市長林智堅表示，新啟用的左岸滑板公園不僅讓滑板族不用在街頭冒險練習，還可以成為舉辦全國性賽事的專業場地，相信市民朋友都感受到新竹左岸現有的改造成果。</div>
                        <div class="hp-button text-right mt-4">
                            <a href="./J-eventpagedetail.php" class="bt-b-g3">More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hp-Button text-center mt-2 mb-5">
            <a href="" class="bt-p">More</a>
        </div>    
      </div>
      <?php
      require_once("./footer.php")
      ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="./js/accessible-menu.js"></script>
    <script src="./js/tpl_navbar_js.js"></script>
  </body>
</html>