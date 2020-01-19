<?php if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>新手指南</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css"
        integrity="sha384-REHJTs1r2ErKBuJB0fCK99gCYsVjwxHrSU0N7I1zl9vZbggVJXRMsv/sLlOAGb4M" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/css.css">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="./css/navbar1.css"> 
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/_tpl_nav_head.css">
    <link rel="stylesheet" href="./css/t-beginners-guide.css">
    <link rel="stylesheet" href="css/t-topBtn.css">

    <style>
        * {
            transition:.3s ease-in-out;
            font-family: 'arial', 'Noto Sans TC', sans-serif;
        }
        html,body{
            width: 100vw;
            height: 100vh;
        }
        
        .bGuide-footer{
            width:100vw;
            position: absolute;
            bottom:0px;
        }
        .nav-bar.nav-re{
            box-shadow:0 0 5px rgba(#999,.5);
        }
        body{
            background: transparent !important;
        }
        .beginner-guide-content{
            margin-top:150px;
        }
        @media screen and (max-width: 500px){
            .beginner-guide-content{
                margin-top:70px;
            }
            html,body{
                width: 100vw;
                height: auto;
            }
            .bGuide-footer{
                position: relative;
            }
        }
    </style>
</head>

<body>
        <?php
            require_once('./_tpl_nav_html.php');
        ?>
    <div class="container beginner-guide-content">
        <div class="row justify-content-center my-4">
            <h2 class="title black">
                <img class="titleSkate" src="images/title-skateboard.svg" alt="">
                新手指南</h2>
        </div>

        <div class="row beginner-guide-box d-flex justify-content-between">

            <div id="guide-cataBox-left" class="col-lg-5 col-sm-6 flex-column beginner-guide-cataBox">
                <div class="beginner-guide-img beginner-guide-img-left">
                    <img src="images/img-of-cruiser.svg" alt="">
                </div>
                <h2 class="beginner-guide-a g4" href="">滑板介紹</h2>
            </div>

            <div id="guide-cataBox-right" class="col-lg-5 col-sm-6 d-flex flex-column  beginner-guide-cataBox">
                <div class="beginner-guide-img beginner-guide-img-right">
                    <img src="images/img-of-skateboy.svg" alt="">
                </div>
                <p class="beginner-guide-a g4" href="">入門技巧
                </p>
            </div>

        </div>
    </div>
    <div class="bGuide-footer">
    <?php
        require_once('./footer.php');
    ?>
    </div>
    <!-- push top btn php -->
    <?php
        require_once('./t-topBtn.php');
    ?>
    <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>

    <script src="./js/accessible-menu.js"></script>
    <script src="./js/accessible-menu.js"></script>
    <script src="./js/tpl_navbar_js.js"></script>
    <script src="js/t-beginners-guide.js"></script>
</body>

</html>