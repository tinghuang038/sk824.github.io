<?php
session_start();
require_once('./db.inc.php'); 
?>
<!doctype html>
<html lang="en">
  <head>
    <title>會員中心|修改資料</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Custome CSS -->
    <link rel="stylesheet" href="./css/css.css">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="./css/navbar1.css"> 
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/_tpl_nav_head.css">
    <link rel="stylesheet" href="css/myDataModify.css">

    
    <style>
    </style>
  </head>
  <body>

  <?php
   

    $userName= $_SESSION['userName'];
    $sql_member = "SELECT * FROM users WHERE  userName='$userName'" ;
    $data = $pdo->query($sql_member)->fetch(PDO::FETCH_UNIQUE);
    require_once('_tpl_nav_html.php');
?>

        <div class="container ">
            <div class="row justify-content-between">
                <div class="col-xl-3 col-12 tsai-box">
                <div class="acac">
                    <figure class="tsai-photo">
                        <img src="./images/userpic.png" alt="">
                        <input type="file" name="" id="uploadpic" hidden>
                        <a href="" class="tsai-avatoredit"><i class="fas fa-plus tsai-avatoredit-icon"></i></a>
                    </figure>
                    </div>
                    <div class="sub-title mt-3 tsai-data-name t-h4"><?php echo $_SESSION['userName']?></div>
                    <div class="tsai-list">  
                        <div class="sub-title "><a href="myData.php" class="tsai-list-option active">會員資料</a></div>
                        <div class="sub-title "><a href="myOrder1.php" class="tsai-list-option">訂單查詢</a></div>
                        <div class="sub-title "><a href="myFav.php" class="tsai-list-option">我的收藏</a></div>
                        <div class="sub-title "><a href="myVoucher.php" class="tsai-list-option">我的優惠</a></div>
                        <div class="content mt-2">
                            <a href="myPasswordModify.php" class="key black">
                                <i class="fas fa-key "></i>  修改密碼
                            </a>
                        </div>
                    </div>
                  </div>
                  <div class="col-xl-8 col-12 tsai-box1">
                    <h3>會員資料</h3>                 
                    <div class="tsai-card">
                            <div class="acac">
                                <figure class="tsai-photo-m">
                                    <img src="images/avator.png" alt="">
                                    <input type="file" name="" id="uploadpic" hidden>
                                    <a href="" class="tsai-avatoredit"><i class="fas fa-plus tsai-avatoredit-icon"></i></a>
                                </figure>
                             </div>
                                <!-- <h4 class="t-h4-m">John</h4> -->
                                <!-- <input type="text" placeholde="Johnnn_1234"> -->
                                <div class="tsai-memberdatas">
                                    <form action="update.php" method="post">
                                    <div class="content d-flex align-items-center tsai-member-data">
                                        <i class="fas fa-user"></i>
                                        <input name="name"type="text" placeholder="<?= $data[4]?>" value="<?= $data[4]?>" class="tsai-dataedit in">
                                    </div>
                                    <div class="content d-flex align-items-center tsai-member-data mt-4">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <input name="address" type="text" placeholder="<?= $data[6]; ?>"  value="<?= $data[6]; ?>" class="tsai-dataedit in">
                                    </div>
                                    <div class="content d-flex align-items-center tsai-member-data mt-4">
                                        <i class="far fa-envelope"></i>
                                        <input name="email" type="text" placeholder="<?= $data[3]; ?>" value="<?= $data[3]; ?>" class="tsai-dataedit in">
                                    </div>
                                    <div class="content d-flex align-items-center tsai-member-data mt-4">
                                        <i class="fas fa-mobile-alt"></i>
                                        <input name="phone_number" type="text" placeholder="<?php echo $data[5]; ?>" value="<?=$data[5]; ?>" class="tsai-dataedit in">  
                                        <div class="tip ml-2 imti">(必填)</div>
                                    </div>
                               
                                </div>
                                <div class="tsai-data-btngroup d-flex justify-content-end mt-5">
                                    <div class="tsai-logout-btn mr-3 buttons-button"><div class="bt-b-g3 text-center"><a href="myData.php">取消</a></div></div>
                                    <div class="tsai-editmemberdata-btn buttons-button"><button type="submit" class="bt-p text-center">儲存</button></div>
                                </div>
                                
                        </div>
                        </form>
                  </div>
            </div>
        </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>

    <script src="./js/accessible-menu.js"></script>
    <script src="./js/tpl_navbar_js.js"></script>
    <script>
        
            $(".tsai-avatoredit").on("click",function(){
                $("#uploadpic").click();
            })


    </script>
  </body>
</html>