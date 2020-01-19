<?php if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }
  ?>
<!doctype html>
<html lang="en">

<head>
  <title>聯絡我們</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/css.css">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="./css/navbar1.css"> 
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/_tpl_nav_head.css">
  <link rel="stylesheet" href="./css/contactUs.css">
  

<style>
.a{
  min-height:calc(100vh - 118px);
  background:url(./images/photo-1515895309288-a3815ab7cf81copy.jpg)center center no-repeat;
  background-size:cover;
  position:relative;
 
}

.bgbgsu{
  position:absolute;
  width:300px;
  transform:rotate(270deg);
  left:300px;
  bottom:220px;
  opacity:.5;
}
@media only screen and (max-width: 600px){
  .bgbgsu{
   display:none;
}   



}
</style>


</head>

<body>
<?php
      require_once('./_tpl_nav_html.php');
      ?>
<div class="navnav"></div>
<div class="a">
  <img  class="bgbgsu"src="./images/suge-logo.svg" alt="">
  <div class="container">

    <div class="row contact-title-div ">
      <div class=" contact-title d-flex justify-content-center col-sm-10 ">
        <div class="sub-title contact ">聯絡我們</div>
      </div>
    </div>

    <div class="row  d-flex justify-content-center">
      <div class="col-sm-5 contact-img">
        <img src="./images/image-20160412-15858-iee25.jpg" alt="">
      </div>

      <div class="col-sm-5 c-info ">
        <form action=" " class="c-form ">
          <div>姓名</div>
          <input class="in contact-input input-n" type="text" maxlength="20" placeholder="必填">
          <div>信箱</div>
          <input class="in contact-input input-e" type="email" placeholder="必填">
          <div>手機</div>
          <input class="in contact-input" type="text" maxlength="15" placeholder="選填">
          <div>留言</div>
          <textarea class="in contact-input message input-m" placeholder=" 請填入訊息"></textarea>
          <div class="d-flex  btn-div">
            <button disabled=disabled class="bt-b-g3 con-clear  cl-disabled" type="button">清除重填</button>

            <button disabled=disabled class="bt-p con-submit  disabled" type="button">送出</button>

          </div>
        </form>
      </div>
      </div>
    </div>
    </div> 
<?php
require_once("./footer.php")

?>


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

    $(".c-form").keyup(function () {

      if ($(".input-m").val() !== "" && $(".input-n ").val() !== "" && $(".input-e").val() !== "") {
        $(".con-submit").removeAttr('disabled').removeClass("disabled")
      } else {
        $(".con-submit").attr("disabled", "null").addClass("disabled");
      }
    })

    $(".c-form").keydown(function () {

      if ($(".contact-input").val() !== "" ) {
        $(".con-clear").removeAttr('disabled').removeClass("cl-disabled")
      } else {
        $(".con-clear").attr("disabled", "null").addClass("cl-disabled");
      }
    })

    $(".con-clear").click(function(){
      $(".contact-input").val("")
    })

    $(".con-submit").on('click',function(){
        // console.log(e.target.id);
            $(".contact-input").val("")
            $('.navnav').append(`<div class="addToCartAlert title purple">您的訊息已寄出:)
                <div class="icon text-center mt-3">
                    <i class="fas fa-check-circle text-center"style='font-size:36px'></i>
                </div>
            </div>`);
            $('.addToCartAlert').css({
                'position':'absolute',
                'top':'40vh',
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
    })
  </script>
</body>

</html>