<?php
require_once("./db.inc.php");

?>

<?php 



    $sql = "SELECT *
            FROM (`item_lists` LEFT JOIN `category_list` 
            ON `item_lists`.`categoryId` = `category_list`.`categoryId`  )
            LEFT JOIN `categoryparent_list`
            ON `category_list`.`categoryParentId`  =  `categoryparent_list`.`categoryParentId` 
            WHERE `id` = ? ";

    $arrParam = [
        $_GET['id']
    ];

    
    $stmt = $pdo->prepare($sql);
    $stmt->execute($arrParam);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    // echo $_GET['id'];
 ?>  



<!doctype html>
<html lang="zh">

<head>
  <title>商品細節</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css"
    integrity="sha384-REHJTs1r2ErKBuJB0fCK99gCYsVjwxHrSU0N7I1zl9vZbggVJXRMsv/sLlOAGb4M" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/lightslider-itemdetail.css">
  <link rel="stylesheet" href="./css/css.css">
  <link rel="stylesheet" href="./css/itemdetail.css">
  <link rel="stylesheet" href="./css/YYY-slick-theme.css">
  <link rel="stylesheet" href="./css/YYY-slick.css">
  <link rel="stylesheet" href="./css/footer.css">
  <link rel="stylesheet" href="./css/t-topBtn.css">

  <style>
   @media screen and (max-width:415px){

    .purple-top-btn{
      display:none;
    }

   }




  </style>
  <script>
    var row = <?= json_encode($row , JSON_UNESCAPED_UNICODE) ?>;

    function addToCart(shoppingItemId){

      $.get('add-to-cart.php',{sid: shoppingItemId, qty:$('#itemQty').val()},function(data){
      
        console.log(data);
      },'json');
    }
  </script>
</head>

<body>
    
    <?php

    require_once("navbar.php") ;

    ?>
  



  <div class="container mt-5 " >

  <div class="container mt-5 ">

    <div class="row justify-content-center  ">

    <div class="col-10 my-3 item-list-breadLine mt-5">
        <div class="item-list-bread">
          <a href="" class="text-decoration-none tip">
            <img src="./images/iconfinder_home.svg" alt=""></a> >
          <a href=""> 商品列表</a> >
          <?php
             if(isset($row["categoryPName"])){
             
             echo " <a href=''> {$row['categoryPName']} </a> >"
           ?>
          <?php
            }
            ?>
          <a href=""><?=$row["categoryName"]; ?></a>
          > <p class="d-inline g4 tip bread-now"> <?= $row["itemName"]; ?></p> 
        </div>
      </div>
    </div>

    <div class="row justify-content-center detail-div ">

      <!-- ------------商品照片-------------- -->
      <div class="col-sm-5">
       <ul id="lightSlider" class="itemimgmain">
          <li class="itemimgmain2" data-thumb="./product/<?php echo $row["itemPic01"]; ?>">
            <a class="" href="#"> <img class="itemimgmain-img" src="./product/<?= $row["itemPic01"]; ?>" />
            </a>
          </li>


          <?php
             if(isset($row["itemPic02"])){
             
             echo "<li class='itemimgmain2' data-thumb='./product/{$row["itemPic02"]}'/>

             <a class='' href='#'> <img class='itemimgmain-img' src='./product/{$row['itemPic02']}' /> </a>
           </li>"
           ?>
          <?php
            }
           ?>

          <?php
             if(isset($row["itemPic03"])){
             
             echo "<li class='itemimgmain2' data-thumb='./product{$row["itemPic03"]}'/>

             <a class='' href='#'> <img class='itemimgmain-img' src='./product{$row['itemPic03']}' /> </a>
           </li>"
           ?>
          <?php
            }
           ?>
           
        </ul>
      </div>


      <!-- ------------商品資訊-------------- -->
      <div class="col-sm-4 detail-info-div ">

     <div class="detail-nib">
      <div class="itemdetail-nbp">
        <div class="itemdetail-name-div">
          <p class="itemdetail-name black title"><?= $row["itemName"]; ?></p>
        </div>
        <div class="itemdetail-bd-div ">
        <p><a href="" class="itemdetail-bd purple content"> <?= $row["itemBrand"]; ?></a> </p>
        </div>
        <div class="  ">
        <p class=" title itemdetail-price red ">NT$ <?=  $row["checkPrice"]; ?></p>
        </div>
        </div>
        </div>
        <div class="form-group itemdetail-form-div">
          <div class="itemdetail-size-div">
            <div class=" content itemdetail-size ">尺寸</div>
            <select name="" id="itemdeatil-select" class="form-control ">

              <option value="<?= $row["itemSize"] ;?>" class="itemdeatil-option">
              <?=  $row["itemSize"] ;?> </option>

            </select>
          </div>


          <div class="">
            <div class="itemdetail-quantity-div d-flex justify-content-between  ">
              <div class=" content itemdetail-quantity ">數量</div>
              <div class=" tip red itemdetail-stock">

                <p>庫存尚有<?= $row["checkQty"]; ?></p>

              </div>
            </div>

            <div class="itemdetail-quantity-add-div d-flex justify-content-between ">

              <button class="itemdetail-min" name=""><i class="fas fa-minus"></i></button>

              <input class="itemdetail-text-box purple qty" id="itemQty" type="text" value="1"
         />
              <button class="itemdetail-add" name=""><i class="fas fa-plus"></i></button>
            </div>

            <!-- ----------加入購物車按鈕 -->
            
            <button class="itemdetail-addtocart white bt-p add_to_cart" onclick="addToCart(<?php echo $_GET['id'] ?>)">加入購物車</button>
            <button class="m-itemdetail-addtocart white bt-p add_to_cart" onclick="addToCart(<?php $_GET['id'] ?>)" >加入購物車</button>


            <div class="itemdetail-like-rating d-flex justify-content-between">
              <div class="itemdetail-rating d-flex">
                <div class="s-1 purple">★</div>
                <div class="s-2 purple">★</div>
                <div class="s-3 purple">★</div>
                <div class="s-4 purple">★</div>
                <div class="s-5 g3">★</div>
                <div class="rating-quantity">(12)</div>
              </div>
              <div><i class="far fa-heart itemdetail-like purple"></i></div>
            </div>

          </div>
        </div>

      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-sm-10 ">
        <hr class="itemdetail-hr ">
      </div>
    </div>



    <!-- ------------介紹-------------- -->

    <div class="row justify-content-center">
      <div class="col-sm-10 ">
        <div class="itemdetail-introduction-div ">
          <ul class="itemdetail-introduction d-flex justify-content-center">
            <li class="itemdetail-intro itemdetail-intro1 itemdetail-intro-se-showcss">商品介紹</li>
            <li class="itemdetail-intro itemdetail-intro2">品牌介紹</li>
            <li class="itemdetail-intro itemdetail-intro3">寄送規定</li>
            <li class="itemdetail-intro itemdetail-intro4 ">購買評價</li>
          </ul>

          <hr class="itemdetail-hr ">

          <div class="itemdetail-introduction-se d-flex justify-content-center tip g4">

            <div class="col-sm-10 itemdetail-intro-se itemdetail-intro-se1 itemdetail-intro-se-show ">
              <div class="i-idiv d-flex justify-content-around">

                  <p> <?= nl2br($row["itemDetail"]); ?></p>
  

                  <img item-d-img src="./images/forMei_cruiser.png" alt="">
               </div>  
            </div>

            <div class="col-sm-10 itemdetail-intro-se itemdetail-intro-se2 ">
              <div class="itemdetail-intro-logo">
                <img src="./images/Rectangle 1542.svg" alt="">
              </div>
              <p class="itemdetail-intro-in">
                恐怖生物、骷髏、魔鬼，Creature的風格常常令人毛骨悚然，而綠色更是Creature的經典，幾乎九成的商品都有著綠色的元素，喜歡Creature風格的朋友，不要錯過了。</p>
            </div>

            <div class="col-sm-10 itemdetail-intro-se itemdetail-intro-se3 ">
              <p>消費者訂購之商品若經配送兩次無法送達，再經本公司以電話 與Email均無法聯繫逾三天者，本公司將取消該筆訂單，並且 全額退款。 <br> <br>
                送貨範圍：
                限台灣本島與離島地區註，部分離島地區包括連江馬祖、綠島、蘭嶼、琉球鄉…等貨件，將送至到岸船公司碼頭，需請收貨人自行至碼頭取貨。
                注意！收件地址請勿為郵政信箱。 <br>
              </p>
              <div class="g3"> 註：離島地區不配送安裝商品、手機門號商品、超大材商品及四機商品。</div>
            </div>

            <div
              class=" col-sm-10 itemdetail-intro-se itemdetail-intro-se4 justify-content-between    ">
              
              <ul class="itemdetail-comment-div ">
                <li class="itemdetail-comment-li d-flex justify-content-center  ">
                  <div class="itemdetail-cp-div"><img class="itemdetail-customer-pic" src="./images/Group 445.svg"
                      alt="">
                  </div>
                  <div class="itemdetail-customer-name">
                    豆皮
                  </div>
                  <div class="itemdetail-customer-rating d-flex justify-content-center">
                    <div class="s-1 purple">★</div>
                    <div class="s-2 purple">★</div>
                    <div class="s-3 purple">★</div>
                    <div class="s-4 purple">★</div>
                    <div class="s-5 g3">★</div>
                  </div>
                  <div class="itemdetail-customer-rating-contents">
                    <p class="itd-rating-contents">
                      質感還不錯.價格實惠呦3333wewewewewfef</p>
                  </div>
                </li>
                <li class="itemdetail-comment-li d-flex justify-content-center ">
                  <div class="itemdetail-cp-div"><img class="itemdetail-customer-pic" src="./images/Group 445.svg"
                      alt="">
                  </div>
                  <div class="itemdetail-customer-name">
                    豆皮
                  </div>
                  <div class="itemdetail-customer-rating d-flex justify-content-center">
                    <div class="s-1 purple">★</div>
                    <div class="s-2 purple">★</div>
                    <div class="s-3 purple">★</div>
                    <div class="s-4 purple">★</div>
                    <div class="s-5 g3">★</div>
                  </div>
                  <div class="itemdetail-customer-rating-contents">
                    <p class="itd-rating-contents">
                      質感還不錯.價格實惠呦3333wewewewewfef</p>
                  </div>
                </li>
                <div class=" itemdetail-comment-page  ">　1　2　3　</div>
            </div>
            </ul>

          </div>
        </div>
      </div>
    </div>

    <div class="row itemdetail-related-div ">
      <div class=" itemdetail-r-title d-flex justify-content-center col-sm-10 ">
        <div class="sub-title itemdetail-related ">相關商品</div>
      </div>
    </div>


    <!-- ------------相關商品slider-------------- -->
    <div class="row  ">
      <div class="  itemdetail-related-pic justify-content-center  d-flex">


        <section class="center slider">




          <div class="tt-div">
            <a href="" class="black">
            <div class="ttimg">
              <div class='bg'></div>
              <img src="./product/02_15_A.png">
            </div>
            <div class="aa">
              <p class="aa-a">Creature Junji Revenge Deck</p>
              <p class="slider-price">NT$ 1380</p>
            </div>
           </a>
          </div>


          <div class="tt-div">
            <a href="" class="black">
            <div class="ttimg">
              <div class='bg'></div>
              <img src="./product/01_23_A.png">
            </div>
            <div class="aa">
              <p class="aa-a">Santa Cruz Gorenado 26.09 Mini Complete Cruzer</p>
              <p class="slider-price">NT$ 5320</p>
            </div>
          </a>
          </div>
        

          <div class="tt-div">
            <a href="" class="black">
            <div class="ttimg">
              <div class='bg'></div>
              <img src="./product/00_28_A.png">
            </div>
            <div class="aa">
              <p class="aa-a">Z-Flex Black Diamond Complete Cruiser - Black 31"</p>
              <p class="slider-price">NT$ 5320</p>
            </div>
          </a>


          </div>
          <div class="tt-div">
            <a href="" class="black">
            <div class="ttimg">
              <div class='bg'></div>
              <img src="./product/03_04_A.png">
            </div>
            <div class="aa">
              <p class="aa-a">OJ Mini Super Juice 55mm 78a</p>
              <p class="slider-price">NT$ 1300</p>
            </div>
           </a>
          </div>

            
          <div class="tt-div">
            <a href="" class="black">
            <div class="ttimg">
              <div class='bg'></div>
              <img src="./product/00_11_A.png">
            </div>
            <div class="aa">
              <p class="aa-a">Maui And Sons Wave Predators Complete Cruiser Skateboard 24"</p>
              <p class="slider-price">NT$ 990</p>
            </div>
          </a>
          </div>


        </section>

      </div>
    </div>


    </div>


  </div>
<?php
  require_once("./footer.php");
  require_once("./t-topBtn.php");
?>

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
  <script>

    $('#lightSlider').lightSlider({
      gallery: true,
      item: 1,
      loop: true,
      slideMargin: 0,
      thumbItem: 4
    });





    $(document).ready(function () {
      if(<?=$row["checkQty"]; ?> <= 1){
          $('.itemdetail-add').addClass("itemdetail-min-disable").attr('disabled', true);
        }
      var t = $(".itemdetail-text-box");

      $('.itemdetail-min').addClass("itemdetail-min-disable").attr('disabled', true);

      $(".itemdetail-add").click(function () {
        t.val(Math.abs(parseInt(t.val())) + 1);
        if (parseInt(t.val()) != 1) {
          $('.itemdetail-min').attr('disabled', false).removeClass("itemdetail-min-disable");
        };
        if (parseInt(t.val()) >= <?= $row["checkQty"]; ?>) {
          $('.itemdetail-add').addClass("itemdetail-min-disable").attr('disabled', true);
        }
      })

      $(".itemdetail-min").click(function () {
        t.val(Math.abs(parseInt(t.val())) - 1);
        if (parseInt(t.val()) == 1) {
          $('.itemdetail-min').attr('disabled', true).addClass("itemdetail-min-disable");
        };
        if (parseInt(t.val()) < <?= $row["checkQty"]; ?>) {
          $('.itemdetail-add').removeClass("itemdetail-min-disable").attr('disabled', false);
        }
      })
    })


    $(".itemdetail-text-box").on("keyup", function () {
      if ($(".itemdetail-text-box").val() == "") {
        $(".itemdetail-text-box").val('1')
      }
    })



    $(".itemdetail-like").click(function () {
      $(".itemdetail-like").toggleClass(function () {
        return 'fas';
      });
    });



    // ------------介紹區塊列表-------------

    $(".itemdetail-intro1").on("click", function () {
      $(this).addClass("itemdetail-intro-se-showcss").siblings().removeClass("itemdetail-intro-se-showcss")
      $(".itemdetail-intro-se1").addClass("itemdetail-intro-se-show").siblings().removeClass("itemdetail-intro-se-show")
    })
    $(".itemdetail-intro2").on("click", function () {
      $(this).addClass("itemdetail-intro-se-showcss").siblings().removeClass("itemdetail-intro-se-showcss")
      $(".itemdetail-intro-se2").addClass("itemdetail-intro-se-show").siblings().removeClass("itemdetail-intro-se-show")
    })

    $(".itemdetail-intro3").on("click", function () {
      $(this).addClass("itemdetail-intro-se-showcss").siblings().removeClass("itemdetail-intro-se-showcss")
      $(".itemdetail-intro-se3").addClass("itemdetail-intro-se-show").siblings().removeClass("itemdetail-intro-se-show")
    })

    $(".itemdetail-intro4").on("click", function () {
      $(this).addClass("itemdetail-intro-se-showcss").siblings().removeClass("itemdetail-intro-se-showcss")
      $(".itemdetail-intro-se4").addClass("itemdetail-intro-se-show").siblings().removeClass("itemdetail-intro-se-show")
    })

    // ------------------------相關產品SLIDER---------------------
    $('.center').slick({
      centerMode: true,
      centerPadding: '60px',
      slidesToShow: 3,
      responsive: [
        {
          breakpoint: 768,
          settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 3
          }
        },
        {
          breakpoint: 610,
            settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 2
          }
        },
        {
          breakpoint: 480,
            settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 1
          }
        }
      ]
    });

     // 商品hover效果
     $(".tt-div ").mouseenter(function(){
        $(this).find(".bg").addClass("hp-showbg");
    }).mouseleave(function(){
        $(this).find(".bg").removeClass("hp-showbg");
    })

    $('.add_to_cart').click(function(){

        // var card = $(this).closest('.card');
        // var sid = card.attr('data-sid');
        // // console.warn(sid);
        // var qty = card.find('.qty').val();
        // var obj = {sid:sid, qty: qty}
        // obj=JSON.stringify(obj)
        // localStorage.setItem('cart', obj);
      $(this).text('已加入購物車').addClass('removeHover');

    });
  </script>
</body>

</html>