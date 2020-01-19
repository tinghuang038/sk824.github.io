<?php
    session_start();
?>


<!doctype html>
<html lang="en">
  <head>
    <title>關於我們</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css"
    integrity="sha384-REHJTs1r2ErKBuJB0fCK99gCYsVjwxHrSU0N7I1zl9vZbggVJXRMsv/sLlOAGb4M" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css" integrity="sha384-REHJTs1r2ErKBuJB0fCK99gCYsVjwxHrSU0N7I1zl9vZbggVJXRMsv/sLlOAGb4M" crossorigin="anonymous">

  <link rel="stylesheet" href="./css/lightslider-itemdetail.css">
  <link rel="stylesheet" href="./css/css.css">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="./css/navbar1.css"> 
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/_tpl_nav_head.css">

    <link rel="stylesheet" href="./css/_tpl_nav_head.css">


    <style>
      html,body{
        width: 100vw;
        height: 100vh;
        overflow-x:hidden;
      }
      body{
        /* background: #ccc; */
      }
      /* .tsai-box11{
        width:500px;
      } */
      .tsai-box11 h3{
          text-align: left;
          margin: 11px 0 30px;
          padding: 13px;
          background: url(./images/title-skateboard.svg) no-repeat;
          background-position: left bottom;
      }
      .tsai-box11 p{
        /* font-size: 24px; */
        line-height:50px;
        margin-left: 50px;
        /* text-align:center; */
      }
      .us-img{
        width: 600px;
        margin: 0 auto;
        display:none;

        /* position: absolute;
        bottom: 126px; */
      }
      .us-img img{
        display:none;
        margin: 50px auto 0;
        width: 100%;

      }
      .us-img1{
        width: 600px;
        margin: 0 auto;
        /* position: absolute;
        bottom: 126px; */
      }
      .us-img1 img{
        margin: 50px auto 0;
        width: 100%;

      }
      .us-footer{
        position: absolute;
        bottom: 0;
      }
      .us-wrap{
        margin-top: 10px;
      }
      .navnavnav{
        position:relative;
        height:100px;
        width:100vw;
      }
      .us-text{
        margin: 0 auto;
      }
      @media only screen and (max-width: 600px){
        html,body{
          width: 100%;
          height: 100%;
          overflow-x:hidden;
        }
        .navnavnav{
          position:relative;
          height:auto;
          width:100vw;
        }
        .tsai-box11 h3{
          text-align: left;
          margin: 50px 0 30px;
          padding: 13px;
          background: url(../images/title-skateboard.svg) no-repeat;
          background-position: left bottom;
        }
        .tsai-box11 p{
          font-size: 14px;
          margin: 20px;
        }
        .us-footer{
          position: absolute;
          bottom: 0;
        }
        .us-img{
          width: 600px;
          margin: 0 auto;
          display: block;
        }
        .us-img img{
          display: block;
          margin: 0px auto 180px;
        }
        .us-img1{
          display:none;
        }
      }
    </style>
  </head>
  <body>
<div>
  <div class="navnavnav">
  <?php
      require_once('./_tpl_nav_html.php');
    ?>
  </div>
  <div class="container">
          <div class="row justify-content-between us-wrap">
              
              <div class=" tsai-box11 us-text">
                <h3 class="sub-title">關於我們</h3>
                <p class="sub-title"> 
                  我們是一間販賣滑板相關產品的網路商城，
                  致力於提供所有玩家最優良且齊全的滑板商品。</br>
                  品牌名稱<span class="purple">「嘶給」</span>取自Skate諧音，也同日文<span class="purple">スゲ</span>-厲害的意思。</br>
                  </br>
                  「嘶給」販售品質優良且種類齊全的滑板商品，
                  並提供初學者詳細、清楚的入門指南，
                  不管是第一次想接觸滑板的新手或是想要替自己的裝備升級的老手，
                  都可以在商城內找到他們需要的商品。</br>
                  </br>
                  商城內亦有特別的ＤIY配板功能，
                  可讓使用者隨心所欲搭配出屬於自己的獨特滑板。</br></br>

                </p>
              </div>
              <div class="us-img">
                <img src="./images/forTsai_aboutUs.png" alt="">
              </div>
          </div>
      </div>
<div class="us-footer">
  <div class=" us-img1">
    <img src="./images/forTsai_aboutUs.png" alt="">
  </div>
  <?php
    
  require_once("./footer.php")
  
  ?>

</div>
      

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="./js/lightslider-itemdetail.js"></script>
  <script src="./js/slick.js"></script>
  <script src="./js/accessible-menu.js"></script>
  <script src="./js/tpl_navbar_js.js"></script>

  </body>
</html>