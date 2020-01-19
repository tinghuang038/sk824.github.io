$("#purpleTopBtn").on('click', function () {
    $('html, body').animate({ scrollTop: 0 }, 1000)
    $("#purpleTopBtn").css('background', '')
    $("#purpleTopBtn img").css('filter', '')
});
var uUrl = window.location.href;
    console.log(uUrl);

$(window).scroll(
    function () {
        if ($(window).scrollTop() > 500) {
            $("#purpleTopBtn").css('transform', 'translateX(0%)')
        } else {
            $("#purpleTopBtn").css('transform', 'translateX(100%)')
        }
    }
)

$("#purpleTopBtn").mouseenter(
    function () {
        $("#purpleTopBtn").css('background', '#75FB4E')
        $("#purpleTopBtn img").css('filter', 'brightness(0)')
    }
)
$("#purpleTopBtn").mouseleave(
    function () {
        $("#purpleTopBtn").css('background', '')
        $("#purpleTopBtn img").css('filter', '')
    }
)

$(function () {
    $("#slider-range").slider({
        range: true,
        min: 0,
        max: 6000,
        values: [100, 6000],
        slide: function (event, ui) {
            $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
        }

    });
    $("#amount").val("$" + $("#slider-range").slider("values", 0) +
        " - $" + $("#slider-range").slider("values", 1));

});

$(function () {
    $("#mobile-slider-range").slider({
        range: true,
        min: 0,
        max: 6000,
        values: [100, 6000],
        slide: function (event, ui) {
            $("#mobile-amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
        }

    });
    $("#mobile-amount").val("$" + $("#mobile-slider-range").slider("values", 0) +
        " - $" + $("#mobile-slider-range").slider("values", 1));

});

$(".items-list-sidebar .gray-bg-cata.bg-g3 a").click(
    function () {
        $(this).parent().toggleClass('gray-bg-cata-title-action')
    }
)

$(".items-cata li.white-bg-cata a").click(
    function () {
        // $(this).find('ul').css('transition','.5s ease-in-out');
        $(this).parent('.items-cata li.white-bg-cata').toggleClass('items-cata-title-action');
    }
)
$(".items-list-addtocollect").click(
    function () {
        $(this).toggleClass('items-list-addtocollect-action')
    }
)
$('.item-list-dropdown a.dropdown-item').click(
    function () {
        $('.item-list-dropdown .bt-b-g3.item-list-new-btn').text($(this).text())
        $('.dropdown.item-list-dropdown img').removeClass('dropdown-click-img-acton')
    }
)
$('.item-list-dropdown').click(
    function () {
        $('.dropdown.item-list-dropdown img').addClass('dropdown-click-img-acton')
    }
)
$('.item-list-price-btn').click(
    function () {
        $(this).toggleClass('item-list-price-btn-action')
    }
)
//點到品牌的
$('ul.brands-cata li.white-bg-cata a.items-cata-tilte').click(
    function () {
        var brandName = $(this).data('brandname')
        window.location.assign('?brand=' + brandName);
    }
);

if (window.location.href.indexOf("brand") > -1) {

    // 如果是品牌頁面，品牌列表會展開
    $('.gray-bg-cata').eq(3).removeClass('gray-bg-cata-title-action').find('a.gray-bg-cata-title').addClass('dark-bg-cata-title-active');

    
    var brandName = uUrl.substring(53).replace("%20", " ").replace("&page=1", "").replace("&page=2", "")

    // 改title 和 大標 和 banner的字 還有麵包屑
    document.title = '品牌 |' + brandName;

    $('.item-list-banner .banner-logo h2').html('BRAND: <span>'+brandName +'</span>');

    $('a.locationLocation').text('品牌-'+' '+brandName);

    $('#item_list_catatitle').html('<img class="titleSkateTitleSkate" src="./images/title-skateboard.svg" alt="">'+brandName);

    $('#allAll_filBtn').removeClass('dark-bg-cata-title-active').addClass('gray-bg-cata-title');

    // 不要打開，這很臭 

    switch (brandName) {

    case 'Almost':
    　$('ul.brands-cata li.white-bg-cata').eq(0).find('a').addClass('activeActive').parents().siblings().removeClass('activeActive');
    　break;

    case 'DGK':
    　$('ul.brands-cata li.white-bg-cata').eq(1).find('a').addClass('activeActive').parents().siblings().removeClass('activeActive');
    　break;

    case 'Enjoi':
    　$('ul.brands-cata li.white-bg-cata').eq(2).find('a').addClass('activeActive').parents().siblings().removeClass('activeActive');
    　break;

    case 'Independent':
    　$('ul.brands-cata li.white-bg-cata').eq(3).find('a').addClass('activeActive').parents().siblings().removeClass('activeActive');
    　break;

    case 'Krux':
    　$('ul.brands-cata li.white-bg-cata').eq(4).find('a').addClass('activeActive').parents().siblings().removeClass('activeActive');
    　break;

    case 'Penny':
    　$('ul.brands-cata li.white-bg-cata').eq(5).find('a').addClass('activeActive').parents().siblings().removeClass('activeActive');
    　break;

    case 'RIPNDIP':
    　$('ul.brands-cata li.white-bg-cata').eq(6).find('a').addClass('activeActive').parents().siblings().removeClass('activeActive');
    　break;

    case 'Santa Cruz':
    　$('ul.brands-cata li.white-bg-cata').eq(7).find('a').addClass('activeActive').parents().siblings().removeClass('activeActive');
    　break;

    case 'Spitfire':
    　$('ul.brands-cata li.white-bg-cata').eq(8).find('a').addClass('activeActive').parents().siblings().removeClass('activeActive');
    　break;

    case 'Toy Machine':
    　$('ul.brands-cata li.white-bg-cata').eq(9).find('a').addClass('activeActive').parents().siblings().removeClass('activeActive');
    　break;
    }

}else if (window.location.href.indexOf("cate=0") > -1){
    $('#allAll_filBtn').addClass('dark-bg-cata-title-active');
    $('.gray-bg-cata').eq(4).find('a').removeClass('dark-bg-cata-title-active');

}else if (window.location.href.indexOf("hot_new=") > -1) {
    // 如果不是品牌頁面，品牌列表會關起來
    $('#allAll_filBtn').removeClass('dark-bg-cata-title-active').addClass('gray-bg-cata-title');

    $('.gray-bg-cata').eq(3).addClass('gray-bg-cata-title-action');
    

    var hotNewNum = uUrl.substring(55);

    switch (hotNewNum) {
        case '2':
            $('.gray-bg-cata').eq(1).find('a.gray-bg-cata-title').addClass('dark-bg-cata-title-active');

            document.title = `商品 | 最新商品`;

            $('.item-list-banner .banner-logo h2').html(' NEW ARRIVAL ');

            $('p.item-list-bread').html(`<a href="./J-index-c.php" class="text-decoration-none"><img src="./images/iconfinder_home.svg" alt=""> > </a><a href="?hot_new=2" class="locationLocation">最新商品</a>`);

            $('#item_list_catatitle').html('<img class="titleSkateTitleSkate" src="./images/title-skateboard.svg" alt="">最新商品');

            $('.list-pic-boxBox').prepend('<div class="items-list-new-items"><h2 class="green">NEW</h2></div>')
        break;

        case '1':
            $('.gray-bg-cata').eq(2).find('a.gray-bg-cata-title').addClass('dark-bg-cata-title-active');

            document.title = `商品 | 人氣商品`;

            $('.item-list-banner .banner-logo h2').html('HOT SKATE');

            $('p.item-list-bread').html(`<a href="./J-index-c.php" class="text-decoration-none"><img src="./images/iconfinder_home.svg" alt=""> > </a><a href="?hot_new=1" class="locationLocation">人氣商品</a>`);

            $('#item_list_catatitle').html('<img class="titleSkateTitleSkate" src="./images/title-skateboard.svg" alt="">人氣商品');

            // $('h3.items-list-product-price').removeClass('black').addClass('purple').css('font-size','20px')
        break;
    }
}else if (window.location.href.indexOf("cate=") > -1) {

    // 如果不是品牌頁面，品牌列表會關起來

    $('#allAll_filBtn').removeClass('dark-bg-cata-title-active').addClass('gray-bg-cata-title');

    $('.gray-bg-cata').eq(3).addClass('gray-bg-cata-title-action');
    $('.gray-bg-cata').eq(4).find('a.gray-bg-cata-title').addClass('dark-bg-cata-title-active');

    var uUrl = window.location.href;
    var cateNum = uUrl.substring(52);
    console.log(cateNum)

    // 不要打開，這很臭
    switch (cateNum) {

        case '[21,22,23,24]':
        case '%5B21%2C22%2C23%2C24%5D&page=2':
        case '%5B21%2C22%2C23%2C24%5D&page=1':
            var cateParent =$('ul.items-cata li.white-bg-cata').eq(0).find('a.items-cata-tilte');
            var cateChild =cateParent.closest('li.white-bg-cata-detail ul li.white-bg-cata-detail').eq(0);

            document.title = `商品 | ${cateParent.text()}-ALL`;

            $('.item-list-banner .banner-logo h2').html('Category: <span> CRUISER </span>');

            $('p.item-list-bread').html(`<a href="./J-index-c.php" class="text-decoration-none"><img src="./images/iconfinder_home.svg" alt=""> > </a><a href="?cate=0" class="locationLocation"> 商品類別 </a> > <a href=""> ${cateParent.text()} </a>`);

            $('#item_list_catatitle').html('<img class="titleSkateTitleSkate" src="./images/title-skateboard.svg" alt="">'+ document.title);

        //套class 
        　  $('ul.items-cata li.white-bg-cata.no-bb-line').eq(0).find('ul li.white-bg-cata-detail').eq(0).find('a').addClass('activeActive').parent('li.white-bg-cata.no-bb-line').siblings().find('li.white-bg-cata-detail a').removeClass('activeActive');
        　break;

        case '[21]':
        case '%5B21%5D&page=1':
            var cateParent =$('ul.items-cata li.white-bg-cata').eq(0).find('a.items-cata-tilte');
            var cateChild =cateParent.closest('li.white-bg-cata').find('li.white-bg-cata-detail').eq(1).find('a');
            console.log(cateChild.text());

            document.title = `商品 | ${cateParent.text()}-${cateChild.text()}`;

            $('.item-list-banner .banner-logo h2').html(`Category:CRUISER <span> ${cateChild.text()} </span>`);

            $('p.item-list-bread').html(`<a href="./J-index-c.php" class="text-decoration-none"><img src="./images/iconfinder_home.svg" alt=""> > </a><a href="?cate=0" class="locationLocation"> 商品類別 </a> > <a href="?cate=[21,22,23,24]"> ${cateParent.text()} </a> > <a href=""> ${cateChild.text()} </a>`);

            $('#item_list_catatitle').html('<img class="titleSkateTitleSkate" src="./images/title-skateboard.svg" alt="">'+ document.title);

        //套class 
        　  $('ul.items-cata li.white-bg-cata.itemsCata_1').find('li.white-bg-cata-detail').eq(1).find('a').addClass('activeActive').parent('li.white-bg-cata-detail').siblings().removeClass('activeActive');
        　break;

        case '[22]':
        case '%5B22%5D&page=1':
            var cateParent =$('ul.items-cata li.white-bg-cata').eq(0).find('a.items-cata-tilte');
            var cateChild =cateParent.closest('li.white-bg-cata').find('li.white-bg-cata-detail').eq(2).find('a');
            console.log(cateChild.text());

            document.title = `商品 | ${cateParent.text()}-${cateChild.text()}`;

            $('.item-list-banner .banner-logo h2').html(`Category:CRUISER <span> ${cateChild.text()} </span>`);

            $('p.item-list-bread').html(`<a href="./J-index-c.php" class="text-decoration-none"><img src="./images/iconfinder_home.svg" alt=""> > </a><a href="?cate=0" class="locationLocation"> 商品類別 </a> > <a href="?cate=[21,22,23,24]"> ${cateParent.text()} </a> > <a href=""> ${cateChild.text()} </a>`);

            $('#item_list_catatitle').html('<img class="titleSkateTitleSkate" src="./images/title-skateboard.svg" alt="">'+ document.title);

        //套class 
        　  $('ul.items-cata li.white-bg-cata.itemsCata_1').find('li.white-bg-cata-detail').eq(2).find('a').addClass('activeActive').parent('li.white-bg-cata-detail').siblings().removeClass('activeActive');
        　break;

        case '[23]':
        case '%5B23%5D&page=1':
            var cateParent =$('ul.items-cata li.white-bg-cata').eq(0).find('a.items-cata-tilte');
            var cateChild =cateParent.closest('li.white-bg-cata').find('li.white-bg-cata-detail').eq(3).find('a');
            console.log(cateChild.text());

            document.title = `商品 | ${cateParent.text()}-${cateChild.text()}`;

            $('.item-list-banner .banner-logo h2').html(`Category:CRUISER <span> ${cateChild.text()} </span>`);

            $('p.item-list-bread').html(`<a href="./J-index-c.php" class="text-decoration-none"><img src="./images/iconfinder_home.svg" alt=""> > </a><a href="?cate=0" class="locationLocation"> 商品類別 </a> > <a href="?cate=[21,22,23,24]"> ${cateParent.text()} </a> > <a href=""> ${cateChild.text()} </a>`);

            $('#item_list_catatitle').html('<img class="titleSkateTitleSkate" src="./images/title-skateboard.svg" alt="">'+ document.title);

        //套class 
        　  $('ul.items-cata li.white-bg-cata.itemsCata_1').find('li.white-bg-cata-detail').eq(3).find('a').addClass('activeActive').parent('li.white-bg-cata-detail').siblings().removeClass('activeActive');
        　break;

        case '[24]':
        case '%5B24%5D&page=1':
            var cateParent =$('ul.items-cata li.white-bg-cata').eq(0).find('a.items-cata-tilte');
            var cateChild =cateParent.closest('li.white-bg-cata').find('li.white-bg-cata-detail').eq(4).find('a');
            console.log(cateChild.text());

            document.title = `商品 | ${cateParent.text()}-${cateChild.text()}`;

            $('.item-list-banner .banner-logo h2').html(`Category:CRUISER <span> ${cateChild.text()} </span>`);

            $('p.item-list-bread').html(`<a href="./J-index-c.php" class="text-decoration-none"><img src="./images/iconfinder_home.svg" alt=""> > </a><a href="?cate=0" class="locationLocation"> 商品類別 </a> > <a href="?cate=[21,22,23,24]"> ${cateParent.text()} </a> > <a href=""> ${cateChild.text()} </a>`);

            $('#item_list_catatitle').html('<img class="titleSkateTitleSkate" src="./images/title-skateboard.svg" alt="">'+ document.title);

        //套class 
        　  $('ul.items-cata li.white-bg-cata.itemsCata_1').find('li.white-bg-cata-detail').eq(4).find('a').addClass('activeActive').parent('li.white-bg-cata-detail').siblings().removeClass('activeActive');
        　break;

        
        case '[3,4,5,6]': 
        case '%5B3%2C4%2C5%2C6%5D&page=2': 
        case '%5B3%2C4%2C5%2C6%5D&page=1': 
        case '%5B3%2C4%2C5%2C6%5D&page=3': 
        case '%5B3%2C4%2C5%2C6%5D&page=4': 
        case '%5B3%2C4%2C5%2C6%5D&page=5': 
        case '%5B3%2C4%2C5%2C6%5D&page=6':
            var cateParent =$('ul.items-cata li.white-bg-cata').eq(1).find('a.items-cata-tilte');
            var cateChild =cateParent.closest('li.white-bg-cata-detail ul li.white-bg-cata-detail').eq(0);

            document.title = `商品 | ${cateParent.text()}-ALL`;

            $('.item-list-banner .banner-logo h2').html('Category: <span> DECKS </span>');

            $('p.item-list-bread').html(`<a href="./J-index-c.php" class="text-decoration-none"><img src="./images/iconfinder_home.svg" alt=""> > </a><a href="?cate=0" class="locationLocation"> 商品類別 </a> > <a href=""> ${cateParent.text()} </a>`);

            $('#item_list_catatitle').html('<img class="titleSkateTitleSkate" src="./images/title-skateboard.svg" alt="">'+ document.title);

        //套class 
        　  $('ul.items-cata li.white-bg-cata.no-bb-line').eq(1).find('ul li.white-bg-cata-detail').eq(0).find('a').addClass('activeActive').parent('li.white-bg-cata.no-bb-line').siblings().find('li.white-bg-cata-detail a').removeClass('activeActive');
        　break;

        case '[3]':  
        case '%5B3%5D&page=2': 
        case '%5B3%5D&page=1':
            var cateParent =$('ul.items-cata li.white-bg-cata').eq(1).find('a.items-cata-tilte');
            var cateChild =cateParent.closest('li.white-bg-cata').find('li.white-bg-cata-detail').eq(1).find('a');
            console.log(cateChild.text());

            document.title = `商品 | ${cateParent.text()}-${cateChild.text()}`;

            $('.item-list-banner .banner-logo h2').html(`Category:DECKS <span> ${cateChild.text()} </span>`);

            $('p.item-list-bread').html(`<a href="./J-index-c.php" class="text-decoration-none"><img src="./images/iconfinder_home.svg" alt=""> > </a><a href="?cate=0" class="locationLocation"> 商品類別 </a> > <a href="?cate=[3,4,5,6]"> ${cateParent.text()} </a> > <a href=""> ${cateChild.text()} </a>`);

            $('#item_list_catatitle').html('<img class="titleSkateTitleSkate" src="./images/title-skateboard.svg" alt="">'+ document.title);

        //套class 
        　  $('ul.items-cata li.white-bg-cata.itemsCata_2').find('li.white-bg-cata-detail').eq(1).find('a').addClass('activeActive').parent('li.white-bg-cata-detail').siblings().removeClass('activeActive');
        　break;
        
        case '[4]': 
        case '%5B4%5D&page=2': 
        case '%5B4%5D&page=1':
            var cateParent =$('ul.items-cata li.white-bg-cata').eq(1).find('a.items-cata-tilte');
            var cateChild =cateParent.closest('li.white-bg-cata').find('li.white-bg-cata-detail').eq(2).find('a');
            console.log(cateChild.text());

            document.title = `商品 | ${cateParent.text()}-${cateChild.text()}`;

            $('.item-list-banner .banner-logo h2').html(`Category:DECKS <span> ${cateChild.text()} </span>`);

            $('p.item-list-bread').html(`<a href="./J-index-c.php" class="text-decoration-none"><img src="./images/iconfinder_home.svg" alt=""> > </a><a href="?cate=0" class="locationLocation"> 商品類別 </a> > <a href="?cate=[3,4,5,6]"> ${cateParent.text()} </a> > <a href=""> ${cateChild.text()} </a>`);

            $('#item_list_catatitle').html('<img class="titleSkateTitleSkate" src="./images/title-skateboard.svg" alt="">'+ document.title);

        //套class 
        　  $('ul.items-cata li.white-bg-cata.itemsCata_2').find('li.white-bg-cata-detail').eq(2).find('a').addClass('activeActive').parent('li.white-bg-cata-detail').siblings().removeClass('activeActive');
        　break;
        
        case '[5]': 
        case '%5B5%5D&page=1': 
        case '%5B5%5D&page=2': 
        case '%5B5%5D&page=3':
            var cateParent =$('ul.items-cata li.white-bg-cata').eq(1).find('a.items-cata-tilte');
            var cateChild =cateParent.closest('li.white-bg-cata').find('li.white-bg-cata-detail').eq(3).find('a');
            console.log(cateChild.text());

            document.title = `商品 | ${cateParent.text()}-${cateChild.text()}`;

            $('.item-list-banner .banner-logo h2').html(`Category:DECKS <span> ${cateChild.text()} </span>`);

            $('p.item-list-bread').html(`<a href="./J-index-c.php" class="text-decoration-none"><img src="./images/iconfinder_home.svg" alt=""> > </a><a href="?cate=0" class="locationLocation"> 商品類別 </a> > <a href="?cate=[3,4,5,6]"> ${cateParent.text()} </a> > <a href=""> ${cateChild.text()} </a>`);

            $('#item_list_catatitle').html('<img class="titleSkateTitleSkate" src="./images/title-skateboard.svg" alt="">'+ document.title);

        //套class 
        　  $('ul.items-cata li.white-bg-cata.itemsCata_2').find('li.white-bg-cata-detail').eq(3).find('a').addClass('activeActive').parent('li.white-bg-cata-detail').siblings().removeClass('activeActive');
        　break;

        case '[6]': 
        case '%5B6%5D&page=1':
            var cateParent =$('ul.items-cata li.white-bg-cata').eq(1).find('a.items-cata-tilte');
            var cateChild =cateParent.closest('li.white-bg-cata').find('li.white-bg-cata-detail').eq(4).find('a');
            console.log(cateChild.text());

            document.title = `商品 | ${cateParent.text()}-${cateChild.text()}`;

            $('.item-list-banner .banner-logo h2').html(`Category:DECKS <span> ${cateChild.text()} </span>`);

            $('p.item-list-bread').html(`<a href="./J-index-c.php" class="text-decoration-none"><img src="./images/iconfinder_home.svg" alt=""> > </a><a href="?cate=0" class="locationLocation"> 商品類別 </a> > <a href="?cate=[3,4,5,6]"> ${cateParent.text()} </a> > <a href=""> ${cateChild.text()} </a>`);

            $('#item_list_catatitle').html('<img class="titleSkateTitleSkate" src="./images/title-skateboard.svg" alt="">'+ document.title);

        //套class 
        　  $('ul.items-cata li.white-bg-cata.itemsCata_2').find('li.white-bg-cata-detail').eq(4).find('a').addClass('activeActive').parent('li.white-bg-cata-detail').siblings().removeClass('activeActive');
        　break;

        case '[8,9,10,11]': 
        case '%5B8%2C9%2C10%2C11%5D&page=1': 
        case '%5B8%2C9%2C10%2C11%5D&page=2':
            var cateParent =$('ul.items-cata li.white-bg-cata').eq(2).find('a.items-cata-tilte');
            var cateChild =cateParent.closest('li.white-bg-cata-detail ul li.white-bg-cata-detail').eq(0);

            document.title = `商品 | ${cateParent.text()}-ALL`;

            $('.item-list-banner .banner-logo h2').html('Category: <span> TRUCKS </span>');

            $('p.item-list-bread').html(`<a href="./J-index-c.php" class="text-decoration-none"><img src="./images/iconfinder_home.svg" alt=""> > </a><a href="?cate=0" class="locationLocation"> 商品類別 </a> > <a href=""> ${cateParent.text()} </a>`);

            $('#item_list_catatitle').html('<img class="titleSkateTitleSkate" src="./images/title-skateboard.svg" alt="">'+ document.title);

        //套class 
        　  $('ul.items-cata li.white-bg-cata.no-bb-line').eq(2).find('ul li.white-bg-cata-detail').eq(0).find('a').addClass('activeActive').parent('li.white-bg-cata.no-bb-line').siblings().find('li.white-bg-cata-detail a').removeClass('activeActive');
        　break;

        case '[8]':  
        case '%5B8%5D&page=1':
            var cateParent =$('ul.items-cata li.white-bg-cata').eq(2).find('a.items-cata-tilte');
            var cateChild =cateParent.closest('li.white-bg-cata').find('li.white-bg-cata-detail').eq(1).find('a');
            console.log(cateChild.text());

            document.title = `商品 | ${cateParent.text()}-${cateChild.text()}`;

            $('.item-list-banner .banner-logo h2').html(`Category:TRUCKS <span> ${cateChild.text()} </span>`);

            $('p.item-list-bread').html(`<a href="./J-index-c.php" class="text-decoration-none"><img src="./images/iconfinder_home.svg" alt=""> > </a><a href="?cate=0" class="locationLocation"> 商品類別 </a> > <a href="?cate=[8,9,10,11]"> ${cateParent.text()} </a> > <a href=""> ${cateChild.text()} </a>`);

            $('#item_list_catatitle').html('<img class="titleSkateTitleSkate" src="./images/title-skateboard.svg" alt="">'+ document.title);

        //套class 
        　  $('ul.items-cata li.white-bg-cata.itemsCata_7').find('li.white-bg-cata-detail').eq(1).find('a').addClass('activeActive').parent('li.white-bg-cata-detail').siblings().removeClass('activeActive');
        　break;

        case '[9]':  
        case '%5B9%5D&page=1': 
        case '%5B9%5D&page=2': 
            var cateParent =$('ul.items-cata li.white-bg-cata').eq(2).find('a.items-cata-tilte');
            var cateChild =cateParent.closest('li.white-bg-cata').find('li.white-bg-cata-detail').eq(2).find('a');
            console.log(cateChild.text());

            document.title = `商品 | ${cateParent.text()}-${cateChild.text()}`;

            $('.item-list-banner .banner-logo h2').html(`Category:TRUCKS <span> ${cateChild.text()} </span>`);

            $('p.item-list-bread').html(`<a href="./J-index-c.php" class="text-decoration-none"><img src="./images/iconfinder_home.svg" alt=""> > </a><a href="?cate=0" class="locationLocation"> 商品類別 </a> > <a href="?cate=[8,9,10,11]"> ${cateParent.text()} </a> > <a href=""> ${cateChild.text()} </a>`);

            $('#item_list_catatitle').html('<img class="titleSkateTitleSkate" src="./images/title-skateboard.svg" alt="">'+ document.title);

        //套class 
        　  $('ul.items-cata li.white-bg-cata.itemsCata_7').find('li.white-bg-cata-detail').eq(2).find('a').addClass('activeActive').parent('li.white-bg-cata-detail').siblings().removeClass('activeActive');
        　break;

        case '[10]':  
        case '%5B10%5D&page=1':
            var cateParent =$('ul.items-cata li.white-bg-cata').eq(2).find('a.items-cata-tilte');
            var cateChild =cateParent.closest('li.white-bg-cata').find('li.white-bg-cata-detail').eq(3).find('a');
            console.log(cateChild.text());

            document.title = `商品 | ${cateParent.text()}-${cateChild.text()}`;

            $('.item-list-banner .banner-logo h2').html(`Category:TRUCKS <span> ${cateChild.text()} </span>`);

            $('p.item-list-bread').html(`<a href="./J-index-c.php" class="text-decoration-none"><img src="./images/iconfinder_home.svg" alt=""> > </a><a href="?cate=0" class="locationLocation"> 商品類別 </a> > <a href="?cate=[8,9,10,11]"> ${cateParent.text()} </a> > <a href=""> ${cateChild.text()} </a>`);

            $('#item_list_catatitle').html('<img class="titleSkateTitleSkate" src="./images/title-skateboard.svg" alt="">'+ document.title);

        //套class 
        　  $('ul.items-cata li.white-bg-cata.itemsCata_7').find('li.white-bg-cata-detail').eq(3).find('a').addClass('activeActive').parent('li.white-bg-cata-detail').siblings().removeClass('activeActive');
        　break;

        case '[11]':  
        case '%5B11%5D&page=1':
            var cateParent =$('ul.items-cata li.white-bg-cata').eq(2).find('a.items-cata-tilte');
            var cateChild =cateParent.closest('li.white-bg-cata').find('li.white-bg-cata-detail').eq(4).find('a');
            console.log(cateChild.text());

            document.title = `商品 | ${cateParent.text()}-${cateChild.text()}`;

            $('.item-list-banner .banner-logo h2').html(`Category:TRUCKS <span> ${cateChild.text()} </span>`);

            $('p.item-list-bread').html(`<a href="./J-index-c.php" class="text-decoration-none"><img src="./images/iconfinder_home.svg" alt=""> > </a><a href="?cate=0" class="locationLocation"> 商品類別 </a> > <a href="?cate=[8,9,10,11]"> ${cateParent.text()} </a> > <a href=""> ${cateChild.text()} </a>`);

            $('#item_list_catatitle').html('<img class="titleSkateTitleSkate" src="./images/title-skateboard.svg" alt="">'+ document.title);

        //套class 
        　  $('ul.items-cata li.white-bg-cata.itemsCata_7').find('li.white-bg-cata-detail').eq(4).find('a').addClass('activeActive').parent('li.white-bg-cata-detail').siblings().removeClass('activeActive');
        　break;

        case '[14,15]': 
        case '%5B14%2C15%5D&page=2': 
        case '%5B14%2C15%5D&page=1':
            var cateParent =$('ul.items-cata li.white-bg-cata').eq(3).find('a.items-cata-tilte');
            var cateChild =cateParent.closest('li.white-bg-cata-detail ul li.white-bg-cata-detail').eq(0);

            document.title = `商品 | ${cateParent.text()}-ALL`;

            $('.item-list-banner .banner-logo h2').html('Category: <span> WHEELS </span>');

            $('p.item-list-bread').html(`<a href="./J-index-c.php" class="text-decoration-none"><img src="./images/iconfinder_home.svg" alt=""> > </a><a href="?cate=0" class="locationLocation"> 商品類別 </a> > <a href=""> ${cateParent.text()} </a>`);

            $('#item_list_catatitle').html('<img class="titleSkateTitleSkate" src="./images/title-skateboard.svg" alt="">'+ document.title);

        //套class 
        　  $('ul.items-cata li.white-bg-cata.no-bb-line').eq(3).find('ul li.white-bg-cata-detail').eq(0).find('a').addClass('activeActive').parent('li.white-bg-cata.no-bb-line').siblings().find('li.white-bg-cata-detail a').removeClass('activeActive');
        　break;

        case '[14]':  
        case '%5B14%5D&page=1': 
        case '%5B14%5D&page=2':
            var cateParent =$('ul.items-cata li.white-bg-cata').eq(3).find('a.items-cata-tilte');
            var cateChild =cateParent.closest('li.white-bg-cata').find('li.white-bg-cata-detail').eq(1).find('a');
            console.log(cateChild.text());

            document.title = `商品 | ${cateParent.text()}-${cateChild.text()}`;

            $('.item-list-banner .banner-logo h2').html(`Category:TRUCKS <span> ${cateChild.text()} </span>`);

            $('p.item-list-bread').html(`<a href="./J-index-c.php" class="text-decoration-none"><img src="./images/iconfinder_home.svg" alt=""> > </a><a href="?cate=0" class="locationLocation"> 商品類別 </a> > <a href="?cate=[14,15]"> ${cateParent.text()} </a> > <a href=""> ${cateChild.text()} </a>`);

            $('#item_list_catatitle').html('<img class="titleSkateTitleSkate" src="./images/title-skateboard.svg" alt="">'+ document.title);

        //套class 
        　  $('ul.items-cata li.white-bg-cata.itemsCata_12').find('li.white-bg-cata-detail').eq(1).find('a').addClass('activeActive').parent('li.white-bg-cata-detail').siblings().removeClass('activeActive');
        　break;

        case '[15]':  
        case '%5B15%5D&page=1':
            var cateParent =$('ul.items-cata li.white-bg-cata').eq(3).find('a.items-cata-tilte');
            var cateChild =cateParent.closest('li.white-bg-cata').find('li.white-bg-cata-detail').eq(2).find('a');
            console.log(cateChild.text());

            document.title = `商品 | ${cateParent.text()}-${cateChild.text()}`;

            $('.item-list-banner .banner-logo h2').html(`Category:TRUCKS <span> ${cateChild.text()} </span>`);

            $('p.item-list-bread').html(`<a href="./J-index-c.php" class="text-decoration-none"><img src="./images/iconfinder_home.svg" alt=""> > </a><a href="?cate=0" class="locationLocation"> 商品類別 </a> > <a href="?cate=[14,15]"> ${cateParent.text()} </a> > <a href=""> ${cateChild.text()} </a>`);

            $('#item_list_catatitle').html('<img class="titleSkateTitleSkate" src="./images/title-skateboard.svg" alt="">'+ document.title);

        //套class 
        　  $('ul.items-cata li.white-bg-cata.itemsCata_12').find('li.white-bg-cata-detail').eq(2).find('a').addClass('activeActive').parent('li.white-bg-cata-detail').siblings().removeClass('activeActive');
        　break;

        case '[16]': 
        case '%5B16%5D&page=2': 
        case '%5B16%5D&page=1':
            var cateParent =$('ul.items-cata li.white-bg-cata').eq(4).find('a.items-cata-tilte');
            var cateChild =cateParent.closest('li.white-bg-cata-detail ul li.white-bg-cata-detail').eq(0);

            document.title = `商品 | ${cateParent.text()}-ALL`;

            $('.item-list-banner .banner-logo h2').html('Category: <span> BEARINGS </span>');

            $('p.item-list-bread').html(`<a href="./J-index-c.php" class="text-decoration-none"><img src="./images/iconfinder_home.svg" alt=""> > </a><a href="?cate=0" class="locationLocation"> 商品類別 </a> > <a href="?cate=%5B16%5D&page=1"> ${cateParent.text()} </a>`);

            $('#item_list_catatitle').html('<img class="titleSkateTitleSkate" src="./images/title-skateboard.svg" alt="">'+ document.title);

        //套class 
        　  $('ul.items-cata li.white-bg-cata.no-bb-line').eq(4).find('ul li.white-bg-cata-detail').eq(0).find('a').addClass('activeActive').parent('li.white-bg-cata.no-bb-line').siblings().find('li.white-bg-cata-detail a').removeClass('activeActive');
        　break;

        case '[17]': 
        case '%5B17%5D&page=2': 
        case '%5B17%5D&page=1':
            var cateParent =$('ul.items-cata li.white-bg-cata').eq(5).find('a.items-cata-tilte');
            var cateChild =cateParent.closest('li.white-bg-cata-detail ul li.white-bg-cata-detail').eq(0);

            document.title = `商品 | ${cateParent.text()}-ALL`;

            $('.item-list-banner .banner-logo h2').html('Category: <span> GRIPTAPE </span>');

            $('p.item-list-bread').html(`<a href="./J-index-c.php" class="text-decoration-none"><img src="./images/iconfinder_home.svg" alt=""> > </a><a href="?cate=0" class="locationLocation"> 商品類別 </a> > <a href="?cate=%5B17%5D&page=1"> ${cateParent.text()} </a>`);

            $('#item_list_catatitle').html('<img class="titleSkateTitleSkate" src="./images/title-skateboard.svg" alt="">'+ document.title);

        //套class 
        　  $('ul.items-cata li.white-bg-cata.no-bb-line').eq(5).find('ul li.white-bg-cata-detail').eq(0).find('a').addClass('activeActive').parent('li.white-bg-cata.no-bb-line').siblings().find('li.white-bg-cata-detail a').removeClass('activeActive');
        　break;
        }
}


