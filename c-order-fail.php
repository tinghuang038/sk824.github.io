<!doctype html>
<html lang="zh">
  <head>
    <title>訂單付款失敗</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/css.css">
    <link rel="stylesheet" href="./css/footer.css">
    
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css" integrity="sha384-REHJTs1r2ErKBuJB0fCK99gCYsVjwxHrSU0N7I1zl9vZbggVJXRMsv/sLlOAGb4M" crossorigin="anonymous">


    <style>
    
    /* *{
        border: 0.5px solid red;
    } */

    html, body{
        background: url("./images/bg-stone-grey.jpg") center;
        background-size: cover;
        /* width: 100vw;
        height: 100vh; */
        overflow-X: hidden;
    }

    .c-footer{
        position: absolute;
        bottom: 0px;
        width: 100vw;
    }


    /* ----------------------------- */
    
    .container-fail{
        margin-top:100px;
        height: calc( 100vh - 218.09px );
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
        width: 230px;
        height: 230px;
    }

    .to-payment{
        width: 300px;
    }



   
    @media only screen and (max-width: 600px){

    html, body{
        background: white;
    }

    .hero-img{
        width: 200px;
        height: 200px;
    }

    .msg-box{
        width: 80vw;
    }


    .msg-text > span{
        font-size: 14px;
        /* word-wrap: break-word; */
    }
    

    }
    

    /* ----------------------------- */
    
 

    </style>
</head>
  <body>
      
  <div class="row">
    <?php
    require_once('navbar.php');
    ?>
  
  </div>

  <div class="container-fail">
       <div class="msg-box">
           <h4 class="text-center mt-2 mb-3 title purple">付款失敗</h4>
           <div class="text-center">
               <img class="hero-img" src="images/oops.png" alt="img">
           </div>
           <div class="msg-text text-center mt-3 mb-3 content purple">
               <span>Oops，付款失敗</span><br>
               <span>訂單尚未建立完成，請嘗試重新付款</span>
           </div>
       </div>
       <div class="cta-btn text-center">
           <div class="btn">
            <button type="button" class="to-payment bt-p" id="go-shopping">重新付款</button>
           </div>
       </div>
  </div>
    
  <footer class="bg-g4">
        <div class="container">
            <div class="row">
            <div class=" col-lg-4 col-md-6 col-xs-12 white">
                <ul class="footer-ul">
                    <li class="footer-li"><a href="">Q&A</a></li>
                    <li class="footer-li"><a href="">關於我們</a></li>
                    <li class="footer-li"><a href="">聯絡我們</a></li>
                </ul>
               
            </div>
        </div>
        </div>
     <div class="row footer-ac">
        <div class="footer-line footer-line1 col-sm-10 col-xs-3 bg-g1"></div>
        <div class="col-xs-12 footer-icon"><a href=""><img  class="footer-img"src="images/igicon.svg" alt=""></a><a href=""><img  class="footer-img"src="images/fbicon.svg" alt=""></a></div>
        <div class="footer-line footer-line2 col-sm-10 col-xs-3 bg-g1 "></div>
        <div class=" col-sm-12 copyright white">© 2018 Skate. All rights reserved.</div>
     </div>
      
    </footer>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
</html>