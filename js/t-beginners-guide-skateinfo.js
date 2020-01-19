$('.img-box').mouseenter(function(){
    $(this).css('transform','scale(1.2)').find('span').css('opacity','1');
});
$('.img-box').mouseleave(function(){
    $(this).css('transform','scale(1)').find('span').css('opacity','');
});

// 1182 交通版
// 1557 板身
// 2001 輪架
// 2301 輪子
// 2707 培林 砂紙

$(".img-box").on('click',function(){
    var scrollT=$(this).attr('data-scrollH');
    console.log(scrollT)
    $('html, body').animate({scrollTop:scrollT},1000)
})

