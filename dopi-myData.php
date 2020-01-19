<?php 
session_start();
// require_once('checksession.php'); 
include("./connectDB.php"); ?>
<!doctype html>
<html lang="en">
  <head>
    <title> </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"

integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="css/skate/css.css">
    <style>
        body{
            color: #333333;
        }
        
        .tsai-box{
            box-shadow: 0px 3px 6px #ccc;
            border-radius: 4px;
            margin: 110px 0px 20px;
            position: relative;
            text-align: center;
            padding: 0px;
            padding-bottom: 20px;
            /* overflow: hidden; */
        }
        .tsai-photo{
            width: 150px;
            height: 150px;
            margin: 60px auto 16px;
            border-radius: 50%;
            overflow: hidden;
            border: 1px solid #ccc;
            position: absolute;
            left: 50%;
            margin-left: -75px;
        }
        .tsai-photo img{
            width: 100%;
        }
        .tsai-box h3{
            margin : 230px auto 30px;
        }
        .tsai-box h4{
            padding: 20px;
        }
        .tsai-box h4:hover{
            background: #F4F4F4;
            border-left: 5px solid #743CF5;
            padding-left: 15px;
            color: #743CF5;

        }
        .tsai-box a{
            color: #333333;
        }
        .tsai-box a:hover{
            text-decoration: none;
            color: #743CF5;
        }
        @media screen and (max-width:767px){
            .tsai-photo{
                display: none;
            }
            .tsai-box h3{
                display: none;
            }
            .tsai-box{
                box-shadow: 0px 0px 0px #FFF;
                border-radius: 4px;
                margin: 20px 0px 20px;
                position: relative;
                text-align: center;
                padding: 0px;
                padding-bottom: 20px;
                /* overflow: hidden; */
            }
            .tsai-box a{
                display: inline-block;
                
            }
            .tsai-box a h4{
                font-size: 20px;
                padding: 5px;
            }
            a.key{
                display: none;
                /* opacity: 0; */
            }
            
        }
        .tsai-box1{
            box-shadow: 0px 3px 6px #ccc;
            border-radius: 4px;
            margin: 110px 0px;
            position: relative;
            text-align: center;
            padding: 0px;
            padding-bottom: 20px;
        }
        .tsai-box1 h3{
            text-align: left;
            margin: 15px 30px 30px;
            padding: 13px;
            background: url(img/title-skateboard.svg) no-repeat;
            background-position: left bottom;
        }
        .tsai-box1 input{
            position: absolute;
            left:30px;
            width: 270px;
        }
        
        .tsai-box1 ul{
            margin: 100px 0px 0px;
        }
        .tsai-box1 ul li{
            /* margin: 0px 20px; */
            padding: 4px 10px;
            margin: 0px 5px 0px 0px;
            color: #ccc;
        }
        .tsai-box1 ul li:hover{
            border-bottom: 4px solid #743CF5;
            color: #333333;
            padding-bottom: 0px ;
        }
        .tsai-card{
            margin: 5px 80px;
            padding: 30px;
        }
        .tsai-card p{
            font-size: 24px;
            line-height: 60px;
        }
        .tsai-card i{
            width: 50px;
        }
        button{
            width: 150px;
            margin: 5px;
        }
        .tsai-photo-m{
            display: none;
        }
        .t-h4-m{
            display: none;
        }
        @media screen and (max-width:767px){
            .tsai-box1{
                margin: 10px 0px;
                box-shadow:none;
            }
            .tsai-box1 h3{
                display: none;
            }
            .tsai-card{
                margin: 5px auto;
                
            }
            .tsai-photo-m{
                width: 150px;
                height: 150px;
                margin: 0px auto 16px;
                border-radius: 50%;
                overflow: hidden;
                border: 1px solid #ccc;
                display: block;
            }
            .tsai-photo-m img{
                width: 100%;
            }
            .t-h4-m{
                display: block;
            }
        }
    </style>
  </head>
  <body>
 <?php
  require_once('nav.php')
 ?>
    <?php $userName= $_SESSION['userName'];
    $sql_member = "SELECT * FROM users WHERE  userName='$userName'" ;
    $data = $pdo->query($sql_member)->fetch(PDO::FETCH_UNIQUE);
    ?>
        <div class="container ">
            <div class="row justify-content-between">
                  <div class="col-xl-3 tsai-box">
                    <figure class="tsai-photo">
                        <img src="img/no_img.jpg" alt="">
                    </figure>
                    <h3><?php echo $_SESSION['userName']?></h3>
                    <a href="myData.php"><h4> 會員資料</h4></a>
                    <a href="myOrder1.html"><h4>訂單查詢</h4></a>
                    <a href="myFav.html"><h4>我的收藏</h4></a>
                    <a href="myVoucher.php"><h4>我的優惠</h4></a>
                    <a href="" class="key">
                        <h4>
                            <i class="fas fa-key"></i> 修改密碼
                        </h4>
                    </a>
                  </div>
                  <!--  ccccccc -->
                  <div class="col-xl-8 tsai-box1">
                    <h3>會員資料</h3>
                    
                        <div class="tsai-card">
                                <figure class="tsai-photo-m">
                                    <img src="img/no_img.jpg" alt="">
                                </figure>
                                <h4 class="t-h4-m">John</h4>
                                <p class="d-flex align-items-center">
                                    <i class="fas fa-user"></i>
                                    <?php echo $data[4]?>
                                </p>
                                <p class="d-flex align-items-center">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <?php echo $data[6]; ?>
                                </p>
                                <p class="d-flex align-items-center">
                                    <i class="far fa-envelope"></i>
                                    <?php echo $data[3]; ?>
                                </p>
                                <p class="d-flex align-items-center">
                                    <i class="fas fa-mobile-alt"></i>
                                    <?php echo $data[5]; ?> 
                                </p>
                                <a href="./logout.php?logout=1"><button class="bt-b-g3">登出</button></a>
                                <a href="myDataModify.html"><button class="bt-p">修改資料</button></a>

                        </div>
                        
                  </div>
            </div>
        </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>