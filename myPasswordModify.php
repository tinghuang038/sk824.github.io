<?php 
session_start();

include("./db.inc.php"); ?>

<!doctype html>
<html lang="en">
  <head>
    <title>會員中心|修改密碼</title>
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
    <link rel="stylesheet" href="css/myPasswordModify.css">

    <style>
    </style>
  </head>
  <body>

  <?php
   require_once('_tpl_nav_html.php');
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
                        <div class="sub-title "><a href="myData.php" class="tsai-list-option active-m">會員資料</a></div>
                        <div class="sub-title "><a href="myOrder1.php" class="tsai-list-option">訂單查詢</a></div>
                        <div class="sub-title "><a href="myFav.php" class="tsai-list-option">我的收藏</a></div>
                        <div class="sub-title "><a href="myVoucher.php" class="tsai-list-option">我的優惠</a></div>
                        <div class="content mt-2 tsai-pwdedit">
                            <a href="myPasswordModify.php" class="key purple">
                                <i class="fas fa-key "></i>  修改密碼
                            </a>
                        </div>
                    </div>
                  </div>
                  <div class="col-xl-8 col-12 tsai-box1">
                    <h3>更改密碼</h3>                 
                        <div class="tsai-card">
                                <figure class="tsai-photo-m">
                                    <img src="images/avator.png" alt="">
                                    <input type="file" name="" id="uploadpic" hidden>
                                    <a href="" class="tsai-avatoredit"><i class="fas fa-plus tsai-avatoredit-icon"></i></a>
                                </figure>
                                <!-- <h4 class="t-h4-m">John</h4> -->
                                <!-- <input type="text" placeholde="Johnnn_1234"> -->
                                <form action="newPwd.php" method="post">
                                    <div class="tsai-memberdatas">
                                        <div class="content d-flex align-items-center tsai-member-data mt-4">
                                            <input name="oldpassword" type="password" placeholder="請輸入舊密碼" class="tsai-dataedit in">
                                            <div class="tip ml-2">(必填)</div>
                                            <a href="#" class="purple closeEye"><i class="fas fa-eye-slash"></i></a>
                                        </div>
                                        <div class="content d-flex align-items-center tsai-member-data mt-4">
                                            <input name="newpassword" type="password" placeholder="請輸入新密碼" class="tsai-dataedit in">
                                            <div class="tip ml-2">(必填)</div>
                                            <a href="#" class="purple closeEye"><i class="fas fa-eye-slash"></i></a>
                                        </div>
                                        <div class="content d-flex align-items-center tsai-member-data mt-4">
                                            <input name="assertpassword" type="password" placeholder="請再次輸入新密碼" class="tsai-dataedit in">
                                            <div class="tip ml-2">(必填)</div>
                                            <a href="#" class="purple closeEye"><i class="fas fa-eye-slash"></i></a>
                                        </div>
                                    </div>
                                    <div class="tsai-data-btngroup d-flex justify-content-end mt-5">
                                    <a href="myData.php" class="bt-b-g3 btbtbt mr-3 "><div class="tsai-logout-btn ">取消</div></a>
                                        <div class="tsai-editmemberdata-btn"><a href=""><button type="submit" class="bt-p">儲存</button></a></div>
                                    </div>
                                    <!-- <div class="content d-flex align-items-center tsai-member-data mt-4">
                                        <input type="password" placeholder="請再次輸入新密碼" class="tsai-dataedit in">
                                        <div class="tip ml-2">(必填)</div>
                                        <a href="#" class="purple closeEye"><i class="fas fa-eye-slash"></i></a>
                                    </div> -->
                                </div>
                                <!-- <div class="tsai-data-btngroup d-flex justify-content-end mt-5">
                                    <div class="tsai-logout-btn mr-3"><a href="myData.php" class="bt-b-g3">取消</a></div>
                                    <div class="tsai-editmemberdata-btn"><button id="newpasswordGo" class="bt-p">儲存</button></div>
                                </div> -->
                                </form>
                                
                        </div>
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

            var dd;
            $(".closeEye").on('click',function(){
                dd =$(this).html();
                console.log(dd)
                if( dd == '<i class="fas fa-eye-slash"></i>'){
                $(this).html("<i class='far fa-eye'></i>");
                $(this).siblings(".tsai-dataedit").attr('type','text');
                }else{
                    $(this).html("<i class='fas fa-eye-slash'></i>");
                    $(this).siblings(".tsai-dataedit").attr('type','password');    
                }
            })


    </script>
  </body>
</html>