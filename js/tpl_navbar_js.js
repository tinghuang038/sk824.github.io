  
 // 切換登入註冊
$('#signIn').css('display', 'block');
$('#register').css('display', 'none');

var logInBtn = $('.tsai-wrap .longIn')
$(logInBtn.eq(0)).click(function () {
    console.log("132")
    $('#signIn').css('display', 'block');
    $('#register').css('display', 'none');
})
$(logInBtn.eq(1)).click(function () {
    $('#register').css('display', 'block');
    $('#signIn').css('display', 'none');
})

$(".tsai-wrap a.longIn h4").click(function () {
    $(this).addClass('logInActive').parents('a.longIn').siblings().find('h4').removeClass('logInActive');
});

// 切換成忘記密碼頁
$('#forget').css('display', 'none');
$('.forget').click(function(){
    $('#forget').css('display', 'block');
    $('#signIn-register').css('display', 'none');
});
// 忘記密碼切回登入
$('.forgetLogin').click(function() {
    $('#signIn').css('display', 'block');
    $('#forget').css('display', 'none');
    $('#signIn-register').css('display','block');

    $('#register').css('display', 'none');
});

// 切換確認信箱
$('#checkEmail').css('display','none');
$('.checkEmail').click(function(){
    $('#checkEmail').css('display', 'block');
    $('#forget').css('display', 'none');
    
});    

//確認信箱切回登入頁
$('.email-login').click(function(){
    $('#signIn').css('display', 'block');
    $('#checkEmail').css('display', 'none');
    $('#signIn-register').css('display','block');

    $('#register').css('display', 'none');
})

// 登入後留在原位




function checkLoginForm(){

    $.post('login.php', $('#signIn form').serialize(), function(data){
        console.log(data);
        console.log(data.success);
        if(data.success){
            // window.location = './J-index-c.php';


            let url = location.href.split('#');
            location.href = url[0] ;
           
        
        }else{

        }
       
    }, 'json');
  
    return false;
    
}

function signUpForm(){

    $.post('logout.php', $('#signIn form').serialize(), function(data){
        console.log(data);
        console.log(data.success);
        if(data.success){
            // window.location = './J-index-c.php';


            let url = location.href.split('#');
            location.href = url[0] ;
           
        
        }else{

        }
       
    }, 'json');
  
    return false;
    
}

//------------------------------------------ 會員底線


// ---------------navbar scroll 底色------------------
        $(window).scroll(function () {
            let scroll = $(this).scrollTop()
            if (scroll > 0) {
                $(".nav-bar").addClass("nav-active")
            } else {
                $(".nav-bar").removeClass("nav-active")
            }
        })

        $(window).scroll(function () {
            let scroll = $(this).scrollTop()
            if (scroll > 0) {
                $(".nav-m-bar").addClass("nav-active")
            } else {
                $(".nav-m-bar").removeClass("nav-active")
            }
        })
// -----------------nav 商品列表hover----------------

        $(".nav-list").on("mouseenter", function () {
            $(".nav-hover-list").addClass("visibility ")
        })
        $(".nav-list").on("mouseleave", function () {
            $(".nav-hover-list").removeClass("visibility")
        })
        $(".nav-hover-list").on("mouseenter", function () {
            $(".nav-hover-list").addClass("visibility")
        })
        $(".nav-hover-list").on("mouseleave", function () {
            $(this).removeClass("visibility")
        })

// --------------------手機nav開啟--------------------
        $("#my-menu").accessibleMenu({
            animation: 'slide',
            animationSpeed: 200
        });

// -----------------手機nav +-切換-----------------------

        $(".navvic").on("click", function () {
            if ($(this).hasClass("fa-plus")) {
                $(".navvic").removeClass("fa-minus").addClass("fa-plus")
                $(this).removeClass("fa-plus").addClass("fa-minus")
            } else {
                $(this).removeClass("fa-minus").addClass("fa-plus")
            }
        })

        $(".nav-removeclass").on("click", function () {
            $(".navvic").removeClass("fa-minus").addClass("fa-plus")
        })


        $(".navhhd").on("click", function () {
            $(".navvic").removeClass("fa-minus").addClass("fa-plus")
        })
        $(".circle-num-pos").on("click", function () {
            $(".cart-div").toggleClass("cart-div-show")
        })

        // $(".cart-div").on("mouseleave",function(){
        //     $(".cart-div").toggleClass("cart-div-show")
        // })

// --------------------------手機購物車點擊------------------------
        $(".m-circle-num-pos").on("click", function () {
            $(".m-cart-div").toggleClass("m-cart-div-show")
        })
        $(".m-menu").on("click", function () {
            $(".m-cart-div").removeClass("m-cart-div-show")
        })

// --------------電腦購物車商品為0顯示-------------------
        function aaa() {

            let lilength = $(".cart-ul > li").length

            if (lilength <= 0) {
                let litext = `<li class="litext purple"> 購物車還沒有商品唷!<a class="litexta" href="">去逛逛?</a><li>`
                $(".cart-ul").html(litext)

                $(".go-pay > button  ,  .price-div >div ").hide()
            }
        }

// -----------------電腦購物車刪除商品-------------------
        $(".t-btn").on("click", function () {
            $(this).parents(".cart-li").hide("slow", function () {
                $(this).closest("li").remove()
                aaa()
            })
        })



// --------------手機購物車商品為0顯示-------------------

        function maaa() {

            let mlilength = $(".m-cart-ul > li").length

            if (mlilength <= 0) {
                let mlitext = `<li class="litext purple"> 購物車還沒有商品唷!<a class="litexta" href="">去逛逛?</a><li>`

                $(".m-cart-ul").html(mlitext)

                $(".m-go-pay > button  ,  .m-price-div >div ").hide()
            }
        }

// -----------------手機購物車刪除商品-------------------

        $(".m-t-btn").on("click", function () {
            $(this).parents(".m-cart-li").hide("slow", function () {
                $(this).closest("li").remove()

                maaa()

            })
        })


// -------------手機列表箭頭----------------

        $("#ar-a ").on("click",function(){
            if($(this).children(".ardown").hasClass("trardown")){
            $(this).children(".ardown").removeClass("trardown")
            $("#ar-b >.ardown ").removeClass("trardown")
            }else{
            $(this).children(".ardown").addClass("trardown")
            $("#ar-b >.ardown ").removeClass("trardown")
            }
        })
        $("#ar-b ").on("click",function(){
            if($(this).children(".ardown").hasClass("trardown")){
            $(this).children(".ardown").removeClass("trardown")
            $("#ar-a >.ardown ").removeClass("trardown")
            }else{
            $(this).children(".ardown").addClass("trardown")
            $("#ar-a >.ardown ").removeClass("trardown")
            }
        })
       
        $(".m-menu").on("click",function(){
            $(".ardown").removeClass("trardown")
        })
