<!doctype html>
<html lang="en">
  <head>
    <title>滑板新聞</title>
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

    <style>
    .jjjj *{
        position: relative;
      }
    
    .j-eventTitle{
      width: 450px;
      height: 450px;
      background-color: #743CF5;
      position: absolute !important;
      z-index:99;
      /* top:0; */
      left: 0;
      justify-content:center; 
      align-items:center
    }
    .j-eventTitle_img,.j-eventTitle,.j-eventcontet{
      padding: 0px!important;
    }
    .j-eventTitle_word{
      font-size: 46px;
    }
    .j-eventTitle_img_box{
      height: 700px;
    }
    .j-eventTitle_img_box img{
      height: 100%;
      width: 100%;
      object-fit: cover;
      overflow: hidden;
    }
    .eventDetail_part2{
      padding: 0 100px 0 100px;
    }
    .j-eventcontet_bg{
    
      position: absolute;
      width: 100%;
      z-index: -1;
      top:220px;
    }
    .eventimg3{
      width: 100%;
    }
    .curl:hover{
      text-decoration: none;
      color: #999999;
    }

    /* topbtn */
    .purple-top-btn{
    position: fixed;
    width: 65px;
    height: 45px;
    bottom: 70px;
    right: 0;
    border-radius: 20px 0 0 20px;
    margin: 0;
    padding: 0;
    transition: 1s cubic-bezier(0.86, 0, 0.07, 1);
    transform: translateX(100%);
    cursor: pointer;
  }
  .purple-top-btn img{
      display: inline-block;
      transition: 1s cubic-bezier(0.86, 0, 0.07, 1);
      margin: 15px;
  }
  /* m版 */
  @media screen and (max-width:767px){
    .j-eventTitle{
      width: 100%;
      height: 150px;
      position: static!important;
      justify-content:start;
    }
    .j-eventTitle_word{
      font-size: 26px;
      padding-left: 50px;
    }
    .j-eventTitle_img_box{
      height: 200px;
    }
    .j-eventTitle_img_box img{
      height: 100%;
      width: 100%;
      object-fit: cover;
      overflow: hidden;
    }
    .j-eventcontet{
      flex-direction: column;
    }
    .j-eventcontet img{
      width: 100%;
    }
    .eventDetail_part2{
      padding: 30px 15px 0 15px;
    }
    .j-eventcontet_bg{
      height: 0;
      width: 100%;
      /* background-color: red; */
    }
  }
    
    </style>

  </head>
  <body>
    
    <?php
        require_once('./_tpl_nav_html.php');
    ?>

    <div class="container jjjj">
      <!-- ----麵包屑-------->
      <div class="row ">
        <div class="col-12 my-4 pt-5 item-list-breadLine">
          <div class="item-list-bread mt-3 d-flex align-items-center">
            <a href="./J-event.php" class="text-decoration-none tip">
              <img src="./images/iconfinder_home.svg" alt="" class="pr-1 pb-1"></a> > 
            <a class="curl g3 content pr-1" href="J-event.php"> 滑板新聞</a>
            <a class="d-inline g3 bread-now content">>給你最純的滑板人視界</a> 
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row justify-content-end">
        <div class="col-lg-3 col-12 j-eventTitle white d-flex">
          <div class="j-eventTitle_word">#給你最純的<br>滑板人視界<br>Let's Go Skate</div>
        </div>
        <div class="col-lg-11 col-12 j-eventTitle_img text-right">
          <div class="j-eventTitle_img_box">
            <img class="text-right" src="images/eventDetailPic1.png" alt="">
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row my-5">
        <div class="col-12 content">非以競技與評分機制為起點且發展逾半世紀的滑板，幾乎未曾被視為一種傳統運動。當滑板於2016年正式納入奧林匹克競賽項目後，也劃分出其文化/運動邁入新時代的格局轉變。然而大眾對於這項在全世界次文化佔據重要角色的滑板，又有多少了解？<br><br>
        今年桃園電影節首開全台灣影展先例，策劃了全以滑板影片與紀錄片為主軸的「給你最純的滑板人視界」觀摩單元，希望能藉由這些擁有獨到敍事的作品，滾動出滑板世界並非只以單向度行進的強與弱為區別，呈現滑板令人著迷的異質魅力。雖與主流運動同樣需經無數嘗試與練習來取得技術成長，滑板文化的主要媒體，始終標榜玩滑板是一種生活風格或自我表達的體現，並藉滑板影片（skate video）傳達個人創意的實踐。從VHS錄影帶到網路社群平台的隨手發佈影音，錄像一直是滑板人曝現自我的媒介。過去其僅止於展現男性的陽剛，隨著現今滑板社群的多元化，讓我們得以一探來自不同族群與性別的滑板視界與自我敍事。<br><br>
        本單元蒐羅了共13部紀錄片與滑板影片，去年於布拉提斯拉瓦國際影展放映的紀錄長片《捷克滑板王》（King Skate），蓃整多達三十小時的珍貴滑板影像記錄，去蕪存菁出這部宛如捷克版的《骨頭幫正傳》，精采呈現了滑板人身處盡是標準化的集體意志世界裡，用力滑出自我的樣貌。<br>本片導演賽門．沙弗拉內克（Simon SAFRANEK）也是捷克DJ團體The Fakes成員之一，獨異的配樂選曲讓人彷彿置身熱血的滑板派對。
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row justify-content-center align-items-center">
        <div class="col-12 d-flex align-items-center justify-content-start j-eventcontet my-5">
          <div class="j-eventcontet_bg bg-g1"></div>
          <img src="images/eventDetailPic2.png" alt="" class="">
          <div class="content eventDetail_part2">另有生活往返於中美兩國、從事紀錄片拍攝的導演班恩．穆林寇森（Ben MULLINKOSSON）參與的數部作品。<br>他與影像工作者山姆．普萊斯-沃爾德曼（Sam PRICE-WALDMAN）和克里斯．庫力西（Chris CRESCI）共同執導的短片《奧薩瑪與艾曼》（Osama and Ayman），其節奏輕快地捕捉兩兄弟生活日常：工作、商品設計、跪禱、玩滑板及不時地遭受外人帶以「伊斯蘭恐懼症」的偏見態度對待。司空見慣的奧薩瑪和艾曼，轉化那些異樣眼光為他們藝術創作一部份，用滑板作為對話的管道，並反以獨特的幽默面對美國社會強烈的反穆斯林意識形態。<br><br>
          另一由穆林寇森與導演克莉絲汀爾．拉羅赫（Kristelle LAROCHE）聯手執導的短片《粉紅板妹來報到》（Gnarly in Pink），記錄了年僅六歲的「粉紅帽帽隊」三人組：貝拉、蕾拉與席艾拉的滑板生活，以及她們搞破壞，穿蓬蓬裙玩滑板，大膽地滑下半管、挑戰新招式，展現新時代板妹的可愛風範；本片也曾於2014年翠貝卡電影節和Hot Docs加拿大國際紀錄片影展放映。<br><br>
          還有與導演布蘭登．卡佩洛（Brandon KAPELOW）合拍的《六六》（Liu Liu），記錄中國女子滑板選手楊柳青（六六）的滑板告白。她以身為女性的視角剖析自己對滑板的態度，述說著或許置身這男性主導的運動世界裡，做自己才是唯一的出口。</div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="content my-5">曾經來台拍攝滑板影片的克里斯．莫爾漢（Chris MULHERN）其作品《台灣練習曲》（Taiwan）也將於影展放映。本片以滑板人的視角，導演將首次造訪台灣各處板點（skate spot）的旅程，記錄並剪接成宛如一首滑板人的城市地景凝視之詩。去年參與坎城影展－短片角落，也在墨西哥國際電影節放映的紀錄短片《我要玩板不要牆》（Build Ramps Not Walls），導演布萊恩．亞當凱維茲（Brian ADAMKIEWICZ）將敍事透過一個擁有美墨雙國籍八歲男孩的直白話語，道出他對川普的美墨國界高牆的疑惑與憂蹙，同時也記錄了當地滑板DIY（自己動手做）精神的極致實踐。<br><br>
          從極短片計畫發想出完整紀實，由導演艾瑞克．桑多瓦爾（Erik Sandoval）與莫妮克．奧圖（Monique O’Toole）共同執導的《我的頭路是玩板》（Quit Your Day Job）也將於影展放映。本片號召來自美國女子滑板圈各地超過40位職業與業餘的眾頂尖女性滑板選手，族群多元地呈現她們各自風格迥異，對技術完成度毫不妥協的硬派精神，向世界預示女性滑板時代的來臨之餘，透過鏡頭也令人體會兩位導演極具耐心的跟拍精神。<br>為探索滑板敍事手法的多元性，本單元也納入被喻為美國滑板界之邪典箇中翹楚、陶德．傑森．法爾康．庫克（Todd Jason Falcon Cook）的新作及畢生心血《滑板啟示錄：終極旅程》（Skateboarding Revelations: Journey to the Final Level）。<br><br>本片導演將自己玩板近35年的歲月濃縮成一部個人自傳體，雜揉了紀錄片、實境秀、喜劇、恐怖片及音樂錄像的形式，結合他致力實踐六千招滑板技巧近乎著魔的執念，給你一生難得一回的非一般滑板影片的觀影體驗。</div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
            <img src="images/eventDetailPic3.png" alt="" class="eventimg3 my-5">
            <div class="hp-button text-center mb-5">
                  <a href="./J-event.php" class="bt-p">返回列表</a>
            </div>
        </div>
      </div>
    </div>

    <div id="purpleTopBtn" class="purple-top-btn bg-purple">
        <img src="./images/chevron-down-solid.svg" alt="">
    </div>

    <?php
      require_once('./footer.php');
    ?>

    <?php
      require_once('t-topBtn.php')
    ?>
    
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="./js/accessible-menu.js"></script>
    <script src="./js/tpl_navbar_js.js"></script>

    <script>
      $("#purpleTopBtn").on('click', function () {
      $('html, body').animate({ scrollTop: 0 }, 1000)
      $("#purpleTopBtn").css('background', '')
      $("#purpleTopBtn img").css('filter', '')
        });
        var uUrl = window.location.href;
            console.log(uUrl);

        $(window).scroll(
            function () {
                if ($(window).scrollTop() > 500) {
                    $("#purpleTopBtn").css('transform', 'translateX(0%)')
                } else {
                    $("#purpleTopBtn").css('transform', 'translateX(100%)')
                }
            }
        )

        $("#purpleTopBtn").mouseenter(
            function () {
                $("#purpleTopBtn").css('background', '#75FB4E')
                $("#purpleTopBtn img").css('filter', 'brightness(0)')
            }
        )
        $("#purpleTopBtn").mouseleave(
            function () {
                $("#purpleTopBtn").css('background', '')
                $("#purpleTopBtn img").css('filter', '')
            }
        )
          
    </script>
  </body>
</html>