<script
src="https://code.jquery.com/jquery-3.4.1.js"
integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
<script src="./js/accessible-menu.js"></script>


<script>

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


        $("#my-menu").accessibleMenu({
            animation: 'slide',
            animationSpeed: 200
        });


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


        $(".m-circle-num-pos").on("click", function () {
            $(".m-cart-div").toggleClass("m-cart-div-show")
        })
        $(".m-menu").on("click", function () {
            $(".m-cart-div").removeClass("m-cart-div-show")
        })


        function aaa() {

            let lilength = $(".cart-ul > li").length

            if (lilength <= 0) {
                let litext = `<li class="litext purple"> 購物車還沒有商品唷!<a class="litexta" href="">去逛逛?</a><li>`
                $(".cart-ul").html(litext)

                $(".go-pay > button  ,  .price-div >div ").hide()
            }
        }


        $(".t-btn").on("click", function () {
            $(this).parents(".cart-li").hide("slow", function () {
                $(this).closest("li").remove()

                aaa()

            })
        })




        function maaa() {

            let mlilength = $(".m-cart-ul > li").length

            if (mlilength <= 0) {
                let mlitext = `<li class="litext purple"> 購物車還沒有商品唷!<a class="litexta" href="">去逛逛?</a><li>`

                $(".m-cart-ul").html(mlitext)

                $(".m-go-pay > button  ,  .m-price-div >div ").hide()
            }
        }


        $(".m-t-btn").on("click", function () {
            $(this).parents(".m-cart-li").hide("slow", function () {
                $(this).closest("li").remove()

                maaa()

            })
        })


      
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
</script>