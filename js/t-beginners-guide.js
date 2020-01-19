$('.beginner-guide-cataBox').mouseenter(
    function(){
        $(this).children('div').css('transform','scale(.8)').children('img').css('transform','translate(150px,-50px) rotate(45deg) scale(1.4)')
        $(this).children('p').css({
            'border-top': 'solid 3px rgba(#75FB4E,1)'
        })
    }
)

$('.d-flex.beginner-guide-cataBox').mouseenter(
    function(){
        $(this).children('div').css('transform','scale(.8)').children('img').css('transform','scale(1.4)')
        $(this).children('p').css({
            'border-top': 'solid 3px rgba(#75FB4E,1)'
        })
    }
)

$('.beginner-guide-cataBox').mouseleave(
    function(){
        $(this).children('div').css('transform','').children('img').css('transform','')
        $(this).children('p').css({
            'border-top': 'solid 3px rgba(#75FB4E,0)'
        })
    }
)

$('#guide-cataBox-left').click(
    function(){
        $('.container.beginner-guide-content').css('transition','.5s').css({
            'transform':'translateX(150px) scale(1.2)',
            'opacity':'0',
            'filter':'blur(50px)'
        })
        setTimeout(
            function(){
                window.location.assign('t-beginners-guide-skateinfo.php');
            },1000
        )
    }
)
$('#guide-cataBox-right').click(
    function(){
        $('.container.beginner-guide-content').css('transition','.5s').css({
            'transform':'translateX(-150px) scale(1.2)',
            'opacity':'0',
            'filter':'blur(50px)'
        })
        setTimeout(
            function(){
                window.location.assign('t-beginners-guide-skateskill.php');
            },1000
        )
    }
)