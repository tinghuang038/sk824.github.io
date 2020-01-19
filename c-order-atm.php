<!doctype html>
<html lang="zh">
  <head>
    <title>訂單完成請至ATM轉帳</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/css.css">
    
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css" integrity="sha384-REHJTs1r2ErKBuJB0fCK99gCYsVjwxHrSU0N7I1zl9vZbggVJXRMsv/sLlOAGb4M" crossorigin="anonymous">


    <style>
 
    /* *{
        border: 0.5px solid red;
    } */

    html, body{


        background: url("./images/bg-stone-grey.jpg") center;
        background-size: cover;
        width: 100vw;
        height: 100vh;
        overflow-X: hidden;
    }

    .c-footer{
        position: absolute;
        bottom: 0px;
        width: 100vw;
    }

    /* ----------------------------- */
    
    .container-atm{
        margin-top:150px;
        height: calc( 100vh - 168.09px );
    }

    .msg-title{
        font-size: 26px;
    }
    
    .check{
        font-size: 80px;
        animation:flip .6s linear both;
    }

    @keyframes flip{
        0%{ 
            transform:rotate3d(-1,1,0,0deg)
        }
        50%{
            transform:rotate3d(-1,1,0,180deg)
        }
        100%{
            transform:rotate3d(-1,1,0,360deg)
        }
    }


    .atm-info{
        background-color: #F4F4F4;
        width: 400px;
        margin: 0 auto;
    }

    .atm-text{
        margin: 20px;
    }

    .go-member, .go-shopping{
        width: 300px;
    }
    
    .go-member:hover{
        color: white;
    }

   
    @media only screen and (max-width: 600px){

    html, body{
        background: white;
    }

    .atm-info{
        width: 350px;
    }

    .check{
        font-size: 60px;
    }

    .msg-text > span{
        font-size: 12px;
        /* word-wrap: break-word; */
    }


    }
    .bt-gg3{
    border: none;
    padding: 10px 20px;
    border-radius: 4px;
    font-size: 16px;
    background: #999;
    color: white;
    transition: .5s;
    }
    .bt-gg3:hover{
        text-decoration:none;
    }
    </style>
</head>
  <body>

  <div class="row">
    <?php
    require_once('navbar.php');
    ?>
  
  </div>

  <div class="container-atm">
       <div>
          <div class="order-complete-msg">
             <div class="msg-title text-center mt-2 mb-2 purple">訂單建立完成</div>
             <div class="check text-center purple">
                <i class="far fa-check-circle"></i>
             </div>
             <div class="msg-text text-center mt-2 mb-2 mr-3 ml-3 content g4">
                <span>下方為本筆訂單的ATM轉帳資訊，您可至會員中心-我的訂單中查看此筆訂單的進度及詳細內容</span>
             </div>
             <div class="atm-info text-center">
                <div class="atm-text">轉帳帳號：5239 5678 9022 3456</div>
                <div class="atm-text">轉帳銀行代碼：822 中國信託商業銀行</div>
                <div class="atm-text">轉帳金額：NT$ 1880元</div>
             </div>
             <div class="msg-text text-center mt-3 mb-3 mr-3 ml-3 content purple">
                <span><strong>提醒：請於2020/01/21 22:00前付款，超過期限訂單將自動取消。</strong></span>
             </div>
          </div>
          <div class="cta-btn text-center mt-1">
             <div class="btn">
                <a href="./myData.php" type="button" class="go-member bt-gg3" id="go-member">會員中心</a>
             </div>
             <div class="btn">
                <a href="./allproduct_sd.php" type="button" class="go-shopping bt-p" id="go-shopping">繼續購物</a>
             </div>
          </div>
       </div>
    </div>
    
<!-- 導入footer -->
<div class="c-footer">
  <?php
    require_once('footer.php');
  ?>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   


  </body>
</html>