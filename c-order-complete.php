<?php session_start();
if (session_status() == PHP_SESSION_NONE) {
    session_start();
    
  } 
  
  unset($_SESSION['cart']);
  ?>
<!doctype html>
<html lang="zh">
  <head>
    <title>信用卡訂單付款完成</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/css.css">
    
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css" integrity="sha384-REHJTs1r2ErKBuJB0fCK99gCYsVjwxHrSU0N7I1zl9vZbggVJXRMsv/sLlOAGb4M" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/css.css">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="./css/navbar1.css"> 
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/_tpl_nav_head.css">

    <style>
    
    /* *{
        border: 0.5px solid red;
    } */

    html, body{
        background: url(./images/bg-stone-grey.jpg) center;
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
    
    /* .center_inportantInfo{
        padding: 10px 0px;
    } */

    .container-card{
        margin-top:70px;
        height: calc( 100vh - 178.09px );
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .msg-box{
        background-color: white;
        width: 800px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .hero-img{
        width: 250px;
        height: 250px;
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

    .hero-img{
        width: 200px;
        height: 200px;
    }

    .msg-box > p{
        font-size: 14px;
        width: 400px;
        /* word-wrap:break-word; */
        padding: 10px;
    }
    

    }
    
    

    </style>
</head>
<body>

<div class="row">
  <?php
   require_once('./_tpl_nav_html.php');
  ?>

</div>

<div class="center_inportantInfo">
   <div class="container-card">
      <div>
         <div class="msg-box">
             <h3 class="text-center title purple p-2">付款完成</h3>
             <div class="text-center mb-2">
                 <img class="hero-img" src="./images/fingeryeah.png" alt="img">
             </div>
             <p class="text-center mt-3 mb-3 p-2 purple">
                 本筆訂單建立完成，您可至會員中心-我的訂單中查看此筆訂單的進度及詳細內容
             </p>
         </div>
      </div>
      <div class="cta-btn text-center mt-4">
         <div class="btn bt-p  m-2">
             <a href="./myData.php"  class="go-member " id="go-member">會員中心</a>
         </div>
         <div class="btn bt-p m-2">
             <a href="./allproduct_sd.php" class="go-shopping " id="go-shopping">繼續購物</a>
         </div>
      </div>
   </div>
</div>


<!-- 導入footer -->
<div class="c-footer">
<?php
  require_once('./footer.php');
?>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/credit.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/imask/3.4.0/imask.min.js"></script>
    <script src="./js/accessible-menu.js"></script>
    <script src="./js/tpl_navbar_js.js"></script>

  </body>
</html>