<div id="purpleTopBtn" class="purple-top-btn bg-purple">
    <img src="images/chevron-down-solid.svg" alt="">
</div>

<script>
$("#purpleTopBtn").on('click',function(){
    $('html, body').animate({scrollTop:0}, 1000)
    $("#purpleTopBtn").css('background','')
    $("#purpleTopBtn img").css('filter','')
});

$(window).scroll(
    function(){
        if($(window).scrollTop()>500){
            $("#purpleTopBtn").css('transform','translateX(0%)')
        }else{
            $("#purpleTopBtn").css('transform','translateX(100%)')
        }
    }
)

$("#purpleTopBtn").mouseenter(
    function(){
        $("#purpleTopBtn").css('background','#75FB4E')
        $("#purpleTopBtn img").css('filter','brightness(0)')
    }
)
$("#purpleTopBtn").mouseleave(
    function(){
        $("#purpleTopBtn").css('background','')
        $("#purpleTopBtn img").css('filter','')
    }
)
</script>