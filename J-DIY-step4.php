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
    <link rel="stylesheet" href="./css/J-DIY-step1-css.css">
    <link rel="stylesheet" href="./css/J-DIY-step4-css.css">
    <!-- <link rel="stylesheet" href="../fontawesome-free-5.12.0-web/css/all.min.css"> -->


  </head>
  <body>

  <?php
   require_once('./_tpl_nav_html.php');
?>
    <nav class="j-nav"></nav>
    <div class="container-fluid">
        <div class="d4-bgc"></div>
        <img src="images/bg-skate.svg" alt="" class="d4-bgcimg">
    </div>
    <div class="container">
        <div class="row d1-hide-m">
            <div class="col-12 d-flex d1-progressBar">
                <div class="d1-ball d1-ball0 d1-ball1 bg-purple">
                    <div class="content text-center d1-ballNum white">1</div>
                </div>
                <div class="d1-ball d1-ball0 d1-ball2 bg-purple"><div class="content text-center d1-ballNum white">2</div></div>
                <div class="d1-ball d1-ball0 d1-ball3 bg-purple"><div class="content text-center d1-ballNum white">3</div></div>
                <div class="d1-ball0 d1-ball4 bg-purple"><div class="content text-center d1-ballNum white">4</div></div>
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
        <div class="row">
            <div class="col-12 d4-sk8-3d"></div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-5 col-4">
                <div class="d4-title-line"></div>
            </div>
            <div class="col-lg-2 col-4">
                <div class="d4-intrduction_title">
                    <div class="title d4-title black">零件清單
                        <img src="images/title.svg" alt="" class="d4-titlePic">
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-4">
                <div class="d4-title-line"></div>
            </div>
        </div>
        <div class="row justify-content-center d4-product1">
            <div class="col-lg-6 col-9">
                <div class="content d4-product-name">Thank You Good Clouds 7.75" Skateboard Deck</div>
            </div>
            <div class="col-lg-2 col-3">
                <div class="content d4-product-price">NT$ 1635</div>
            </div>
            <div class="col-lg-4 col-12">
                <a class="d4-addtocart" id="32">
                    <i class="fas fa-cart-plus purple"></i>
                </a>
                <a href="" class="d4-addtolike">
                    <i class="far fa-heart"></i>
                </a>
            </div>
        </div>
        <div class="row justify-content-center d4-product2 mt-2">
            <div class="col-lg-6 col-9">
                <div class="content d4-product-name">Polished Hollow Silver DLK Low Krux Skateboard Trucks</div>
            </div>
            <div class="col-lg-2 col-3">
                <div class="content d4-product-price">NT$ 1180</div>
            </div>
            <div class="col-lg-4 col-12">
                <a class="d4-addtocart" id="166">
                    <i class="fas fa-cart-plus purple"></i>
                </a>
                <a href="" class="d4-addtolike">
                    <i class="far fa-heart"></i>
                </a>
            </div>
        </div>
        <div class="row justify-content-center d4-product3 mt-2 text-left">
            <div class="col-lg-6 col-9">
                <div class="content d4-product-name">OJ Wheels Winkowski Trash Panda 55mm 101a</div>
            </div>
            <div class="col-lg-2 col-3">
                <div class="content d4-product-price">NT$ 1300</div>
            </div>
            <div class="col-lg-4 col-12">
                <a class="d4-addtocart" id="204">
                    <i class="fas fa-cart-plus purple"></i>
                </a>
                <a href="" class="d4-addtolike">
                    <i class="far fa-heart"></i>
                </a>
            </div>
        </div>
        <div class="row justify-content-center d4-product4 mt-2 text-left">
            <div class="col-lg-6 col-9">
                <div class="content d4-product-name">Andale Abec 5 Bearings</div>
            </div>
            <div class="col-lg-2 col-3">
                <div class="content d4-product-price">NT$ 600</div>
            </div>
            <div class="col-lg-4 col-12">
                <a class="d4-addtocart" id="218">
                    <i class="fas fa-cart-plus purple"></i>
                </a>
                <a href="" class="d4-addtolike">
                    <i class="far fa-heart"></i>
                </a>
            </div>
        </div>
        <div class="row justify-content-center d4-product5 mt-2 text-left">
            <div class="col-lg-6 col-9">
                <div class="content d4-product-name">Almost Cat Wallpaper Skateboard Grip Tape</div>
            </div>
            <div class="col-lg-2 col-3">
                <div class="content d4-product-price">NT$ 600</div>
            </div>
            <div class="col-lg-4 col-12">
                <a class="d4-addtocart" id="238">
                    <i class="fas fa-cart-plus purple"></i>
                </a>
                <a href="" class="d4-addtolike">
                    <i class="far fa-heart"></i>
                </a>
            </div>
        </div>
        <div class="row d4-total justify-content-center mt-5">
            <div class="title d4-total-text">TOTAL NT$ 5315</div>
        </div>
        <div class="row justify-content-center d4-btn-group mb-5">
            <div class="d4-button1">
                <a href="./J-DIY-step3.php" class="bt-b-g3">修改滑板</a>
            </div>
            <div class="d4-button2">
                    <a class="bt-p" id="addToCartAll">整組購買</a>
            </div>
        </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    
    <div id="stats"></div>
  
    <script src="js/three.js"></script>
    <script src="https://threejs.org/examples/js/controls/OrbitControls.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/stats.js/r16/Stats.min.js"></script>
    <script src="js/track-working.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="./js/accessible-menu.js"></script>
    <script src="./js/tpl_navbar_js.js"></script>
    
    
    <script src="./js/J-DIY-step4-js.js">   
    </script>

    <script>
    

    // 單項加入購物車
    $(".d4-addtocart").on('click',function(){
        console.log($(this).attr('id'))
        $('nav').append(`<div class="addToCartAlert title purple">已加入購物車:)
            <div class="icon text-center mt-3">
                <i class="fas fa-check-circle text-center"style='font-size:36px'></i>
            </div>
        </div>`);
        $('.addToCartAlert').css({
            'position':'absolute',
            'bottom':'60vh',
            'left':'50%',
            'padding': '40px 80px',
            'transform':'translateX(-50%)',
            'background-color':'#ffffff',
            'z-index':'99',
            'border-radius':'5px',
            'border-top':'solid #743CF5 10px',
            'box-shadow':'2px 2px 2px 1px rgba(0, 0, 0, 0.2)'
        })
        setTimeout(function(){ $('.addToCartAlert').css('display','none') }, 1000);
        let id = $(this).attr('id');
        let qty = 1;
        $.ajax({
            method: 'post',
            url: './add-to-cart.php',
            dataType: 'json',
            data: {
            qty: qty,
            id: id
        }
    }).done((json) => {
        // alert(JSON.stringify(json));
        cart_count(json);
        });
})

    // 整組加入購物車
    // 列出五樣商品的id並組成陣列
    if($(window).innerWidth() <= 751){
    let ids =[]
    $(".d4-addtocart").each(function(){
        ids.push($(this).attr('id'))
    })
    let qty = 1;
    let id;
    // 點擊按鈕後，執行for迴圈
    $("#addToCartAll").on('click',function(){
        // console.log('addToCartAll');
        $('nav').append(`<div class="addToCartAlert title purple text-center">已加入購物車:)
            <div class="icon text-center mt-3">
                <i class="fas fa-check-circle text-center"style='font-size:36px'></i>
            </div>
        </div>`);
        $('.addToCartAlert').css({
            'position':'fixed',
              'width':'70%',
              'top':'40vh',
              'left':'50%',
              'padding': '20px 20px',
              'transform':'translateX(-50%)',
              'background-color':'#ffffff',
              'z-index':'99',
              'border-radius':'5px',
              'border-top':'solid #743CF5 10px',
              'box-shadow':'2px 2px 2px 1px rgba(0, 0, 0, 0.2)'
        })
        setTimeout(function(){ $('.addToCartAlert').css('display','none') }, 1000);
        for(let i=0 ; i<ids.length ;i++ ){
            id = ids[i];
            qty = qty;
            $.ajax({
                method: 'post',
                url: './add-to-cart.php',
                dataType: 'json',
                data: {
                qty: qty,
                id: id
                }
                }).done((json) => {
                    // alert(JSON.stringify(json));
                    cart_count(json);
                });
        }
    })
}else{
    let ids =[]
    $(".d4-addtocart").each(function(){
        ids.push($(this).attr('id'))
    })
    let qty = 1;
    let id;
    // 點擊按鈕後，執行for迴圈
    $("#addToCartAll").on('click',function(){
        // console.log('addToCartAll');
        $('nav').append(`<div class="addToCartAlert title purple">已加入購物車:)
            <div class="icon text-center mt-3">
                <i class="fas fa-check-circle text-center"style='font-size:36px'></i>
            </div>
        </div>`);
        $('.addToCartAlert').css({
            'position':'absolute',
            'bottom':'60vh',
            'left':'50%',
            'padding': '40px 80px',
            'transform':'translateX(-50%)',
            'background-color':'#ffffff',
            'z-index':'99',
            'border-radius':'5px',
            'border-top':'solid #743CF5 10px',
            'box-shadow':'2px 2px 2px 1px rgba(0, 0, 0, 0.2)'
        })
        setTimeout(function(){ $('.addToCartAlert').css('display','none') }, 1000);
        for(let i=0 ; i<ids.length ;i++ ){
            id = ids[i];
            qty = qty;
            $.ajax({
                method: 'post',
                url: './add-to-cart.php',
                dataType: 'json',
                data: {
                qty: qty,
                id: id
                }
            }).done((json) => {
                // alert(JSON.stringify(json));
                cart_count(json);
                });
        }
    })
}

    </script>
  </body>
</html>