<?php if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }
  ?>
<?php

    require_once('./db.inc.php')

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
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <!-- // Add the new slick-theme.css if you want the default styling -->
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
        <!-- Custome CSS -->
        <link rel="stylesheet" href="./css/css.css">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="./css/navbar1.css"> 
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/_tpl_nav_head.css">
        <link rel="stylesheet" href="css/J-DIY-step1-css.css">
        <link rel="stylesheet" href="css/J-DIY-step3-css.css">
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
                  <div class="d1-ball d1-ball0 d1-ball3 bg-purple"><div class="content text-center d1-ballNum white">3</div></div>
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
      <div class="row d3-diy">
          <div class="col-lg-8 col-12 d3-leftsection">
              <div class="d3-intrduction_title">
                  <div class="title d3-title black">
                      <span id="intro-title">板身介紹</span>
                      <img src="images/title.svg" alt="" class="d3-titlePic">
                  </div>
              </div>
              <div class="d3-intrduction_content mt-3">
                  <div class="content black" id='intro-content'>
                  板身是滑板的身體，也是你在玩滑板時腳所踩的地方。
                  通常在選擇板身尺寸時，會以腳長來做基準。腳小的，選小一點的；腳大的反之。
                  建議第一塊滑板就以我們為你選定的尺寸下去挑選你喜歡的圖案吧！
                  </div>
              </div>
              <div class="d3-category_selector mt-4">
                  <div class="">
                      <a href="#" class="d3-category-selection sub-title active select-1" id="3">板身</a>
                      <a href="#" class="d3-category-selection sub-title select-2" id="8">輪架</a>
                      <a href="#" class="d3-category-selection sub-title select-3" id="14">輪子</a>
                      <a href="#" class="d3-category-selection sub-title select-4" id="16">培林</a>
                      <a href="#" class="d3-category-selection sub-title select-5" id="17">配件</a>
                  </div>
              </div>
              <div class="d3-size_selector d-flex my-2">
                    <select class="custom-select custom-select-sm d3-size-selector-selector">
                        <option value="1">7.75</option>
                        <option value="2" selected>8</option>
                        <option value="3">8.25</option>
                        <option value="4">8.5</option>
                    </select>
                  <div class="d3-size-info tip ml-2">注意：更改預設尺寸，將會重置目前所選的所有零件組合 
                  </div>
              </div>
                <div class="d3-product_carousel d-flex">
                    <div class="d3-product_carousel_box d3-product_carousel_box1">
                        <div class="d3-product_carousel_movebox d3-product_carousel_movebox1 d-flex box">
                        </div>
                    </div>
                </div>
                <div class="d3-product_carousel2 d-flex">
                    <div class="d3-product_carousel_box d3-product_carousel_box2 hide">
                        <div class="d3-product_carousel_movebox d3-product_carousel_movebox2 d-flex box hide">
                        </div>
                    </div>
                </div>
                <div class="d3-product_carousel3 d-flex">
                    <div class="d3-product_carousel_box d3-product_carousel_box3 hide">
                        <div class="d3-product_carousel_movebox d3-product_carousel_movebox3 d-flex box hide">
                        </div>
                    </div>
                </div>
                <div class="d3-product_carousel4 d-flex">
                    <div class="d3-product_carousel_box d3-product_carousel_box4 hide">
                        <div class="d3-product_carousel_movebox d3-product_carousel_movebox4 d-flex box hide">
                        </div>
                    </div>
                </div>
                <div class="d3-product_carousel5 d-flex">
                    <div class="d3-product_carousel_box d3-product_carousel_box5 hide">
                        <div class="d3-product_carousel_movebox d3-product_carousel_movebox5 d-flex box hide">
                        </div>
                    </div>
                </div>
              <div class="d3-product_info text-center">
                  <div class="content d3-product_info_content">
                    Ripndip的超經典款滑板，經典木頭色板身、百看不厭，絕對是你第一張版的首選！
                  </div>
              </div>
          </div>
      
          <div class="col-lg-4 col-12 d3-rightsection">
              <div class="d3-product-pic bgbox d-flex">
                <div class="d3-product-pic-box d-flex justify-content-center align-items-center">
                  <img src="images/product-1.png" alt="" class="bgbox-img">
                </div>
                <div class="d3-btnopen">
                    <div class="d3-btnopencategory-m"><a href="#" class="bg-purple white" id="btnopencategory-m">種類</a></div>
                    <div class="d3-btnopeninfo-m"><a href="#" class="purple" id="btnopeninfo-m"> i </a></div>
                </div>
              </div>
              <div class="d3-pricedetail text-center">
                  <div class="tip c1name">Almost Smear 7.75" Magenta Ska NT $ 1635</div>
                  <div class="tip c2name">Stage 11 Hollow Grant Taylor E NT $ 1280</div>
                  <div class="tip c3name">Spitfire F4 101a Classics Red NT $ 1700</div>
                  <div class="tip c4name">Andale Abec 5 Bearings NT $ 600</div>
                  <div class="tip c5name">Almost Cat Wallpaper Skateboar NT $ 600</div>
                  <div class="sub-title d3-price-total mt-2">TOTAL NT$5815</div>
              </div>
              <div class="d3-btngroup d-flex mt-4">
                  <div class="d3-btn-reset">
                      <a href="" class="bt-b-g3">重置</a>
                  </div>
                  <div class="d3-btn-nextstep pl-3">
                      <a href="./J-DIY-step4.php" class="bt-p">組裝完成</a>
                  </div>
              </div>
              <div class="d3-categoryinfo-m hide">
                  <div class="d3-categoryinfo-m-box">
                      <div class="sub-title text-center d3-categoryinfo-m-title white">板身介紹</div>
                      <div class="tip text-center d3-categoryinfo-m-content">
                                    板身是滑板的身體，<br>
                                    也是你在玩滑板時腳所踩的地方。<br>
                                    通常在選擇板身尺寸時，會以腳長來做基準。<br>
                                    腳小的，選小一點的；腳大的反之。<br>
                                    第一塊滑板就以為你選定的尺寸下去挑選你喜歡的圖案吧！
                    </div>
                  </div>
              </div>
              <div class="d3-categoryselector-m hide">
                  <div class="d3-categoryselector-m-box">
                      <div class="d3-categoryselector-m-title">零件類別選擇</div>
                      <div class="text-center">
                          <a href="#" class="d3-cs-m active" id="d3-categoryselector-m-1">板身</a>
                          <a href="#" class="d3-cs-m" id="d3-categoryselector-m-2">輪架</a>
                          <a href="#" class="d3-cs-m" id="d3-categoryselector-m-3">輪子</a>
                          <a href="#" class="d3-cs-m" id="d3-categoryselector-m-4">培林</a>
                          <a href="#" class="d3-cs-m" id="d3-categoryselector-m-5">配件</a>
                      </div>
                  </div>
              </div>
              <div class="d3-categoryinfoactive-bg hide"></div>
          </div>
       </div>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css"
        integrity="sha384-REHJTs1r2ErKBuJB0fCK99gCYsVjwxHrSU0N7I1zl9vZbggVJXRMsv/sLlOAGb4M" crossorigin="anonymous">
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="js/J-DIY-step3-js1.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <script src="./js/accessible-menu.js"></script>
    <script src="./js/tpl_navbar_js.js"></script>
    <script>
    
    // slick套件
    $(document).ready(function(){
        $('.box').slick({
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: false
          // focusOnSelect: true
        });
    });
    

    </script>


    
        

    </script>
  </body>

</html>

