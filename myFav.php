<?php 
session_start();

include("./db.inc.php"); ?>

<!doctype html>
<html lang="en">
  <head>
    <title>會員中心|我的收藏</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    
    <!-- Costume CSS -->
    <link rel="stylesheet" href="./css/css.css">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="./css/navbar1.css"> 
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/_tpl_nav_head.css">
    <link rel="stylesheet" href="css/myFav.css">
    <style>
    .qqq{
        
        height:50px;
        flex: 0 0 auto;
        width:150px;
    }
    .fav_card_link{
        transition: .5s;
    }
    .fav_card_link:hover{
        text-decoration: none;
        color: #333333
    }
    </style>
  </head>
  <body>

  <?php
      require_once('./_tpl_nav_html.php');

    ?>
    <?php $userName= $_SESSION['userName'];
    $sql_member = "SELECT * FROM users WHERE  userName='$userName'" ;
    $data = $pdo->query($sql_member)->fetch(PDO::FETCH_UNIQUE);
    ?>
        <div class="container ">
              <div class="row justify-content-between">
                <div class="col-xl-3 col-12 tsai-box">
                    <figure class="tsai-photo">
                        <img src="./images/userpic.png" alt="">
                    </figure>
                    <div class="sub-title mt-3 tsai-data-name t-h4"><?php echo $_SESSION['userName']?></div>
                    <div class="tsai-list">  
                        <div class="sub-title "><a href="myData.php" class="tsai-list-option">會員資料</a></div>
                        <div class="sub-title "><a href="myOrder1.php" class="tsai-list-option">訂單查詢</a></div>
                        <div class="sub-title "><a href="myFav.php" class="tsai-list-option active">我的收藏</a></div>
                        <div class="sub-title "><a href="myVoucher.php" class="tsai-list-option">我的優惠</a></div>
                        <div class="content mt-2 tsai-pwdedit">
                            <a href="myPasswordModify.php" class="key black">
                                <i class="fas fa-key "></i>  修改密碼
                            </a>
                        </div>
                    </div>
                  </div>
                  <div class="col-xl-8 tsai-box1">
                    <h3>我的收藏</h3>
                    <div>
                        <div>
                        <div class=" mb-3 text-right tip">
                          
                            <select class=" bt-b-g3 bt-b-g3-c nav-link white qqq tip" id="inputGroupSelect01">
                                <option class="qqq tip " selected>依分類搜尋</option>
                                <option class="tip bg-g3" value="1">ALL</option>
                                <option class="tip bg-g3" value="2">板身</option>
                                <option class="tip bg-g3"value="3">輪子</option>
                                <option class="tip bg-g3"value="4">輪架</option>
                                <option class="tip bg-g3"value="5">培林</option>
                                <option class="tip bg-g3"value="6">交通板</option>
                            </select>
                            </div>
                            <!-- <div class="dropdown text-right " >
                                <button class="bt-b-g3 nav-link dropdown-toggle dropppp" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">依分類搜尋</button>
                            
                                <div class="dropdown-menu dp1">
                                    <a class="dropdown-item" href="#">ALL</a>
                                    <a class="dropdown-item" href="#">板身</a>
                                    <a class="dropdown-item" href="#">輪子</a>
                                    <a class="dropdown-item" href="#">輪架</a>
                                    <a class="dropdown-item" href="#">培林</a>
                                    <a class="dropdown-item" href="#">交通板</a>
                                </div>
                            </div> -->

                            <?php
                            if(isset($_SESSION['like']) && $_SESSION['like'] !== []){
                                foreach($_SESSION['like'] as $key => $value){
                            ?>

                                <div class="tsai-card" data-id="<?=$_SESSION['like'][$key]['likeId']?>">
                                    <div class="d-flex align-items-center justify-content-around fav_card">
                                        <div class="fav-img-div">
                                        <img class="fav-img" src="product/<?=$_SESSION['like'][$key]['itemPic01']?>" alt="">
                                        </div>
                                        <a class="fav_card_link purple" href="http://localhost/skate-store/itemdetail.php?id=<?=$_SESSION['like'][$key]['likeId']?>">
                                            <span class="tsai-left">
                                                <p><?=$_SESSION['like'][$key]['itemName']?></p>
                                                <p>NT $<?=$_SESSION['like'][$key]['checkPrice']?></p>
                                            </span>
                                        </a>
                                        <a href="./delete-Fav.php?likeId=<?= $_SESSION['like'][$key]['likeId'] ?>" class="unlikebtn"><i class="fas fa-heart tsai-chick heart" ></i></a>
                                    </div>
                                </div>
                                <?php
                                    }
                                }else{
                                    ?>
                                    <div class="no-content my-5">
                                        <div class="content">目前沒有收藏唷，去<a href="./allproduct_sd.php" class="purple goshopping">逛逛商品</a>吧</div>
                                    </div>

                            <?php
                            }
                            ?>
 
                        </div>
                    </div>
                  </div>
              </div>
        </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <script src="./js/accessible-menu.js"></script>
    <script src="./js/tpl_navbar_js.js"></script>

    <script>
    
    // $(".unlikebtn").on('click',function(){
    //     $(this).parents('.tsai-card').remove();
    //     if ( $('.tsai-card').length <= 0){
    //         $(".tsai-box1").append(`
    //             <div class="no-content my-5">
    //                 <div class="content">目前沒有收藏唷，去<a href="./allproduct_sd.php" class="purple">逛逛商品</a>吧</div>
    //             </div>
    //         `)
    //     }
    // })

    if(!$('div').hasClass('tsai-card')){
        localStorage.clear();
    }


    $(".dropppp").on("click",function(){
    //    $(this).attr("aria-expanded",true)
    //     $(".dp1").toggle("show")
    })


    </script>
  </body>
</html>