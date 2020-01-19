
    // 單項加入購物車
    $(".d4-addtocart").on('click',function(){
        console.log($(this).attr('id'))
        $('nav').append(`<div class="addToCartAlert title purple">已加入購物車:)
            <div class="icon text-center mt-3">
                <i class="fas fa-check-circle text-center"style='font-size:36px'></i>
            </div>
        </div>`);
        $('.addToCartAlert').css({
            'position':'absolute',
            'bottom':'60vh',
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
        let id = $(this).attr('id');
        let qty = 1;
        $.ajax({
            method: 'post',
            url: './add-to-cart.php',
            dataType: 'json',
            data: {
            qty: qty,
            id: id
        }
    }).done((json) => {
        // alert(JSON.stringify(json));
        cart_count(json);
        });
})

    // 整組加入購物車
    // 列出五樣商品的id並組成陣列
    if($(window).innerWidth() <= 751){
    let ids =[]
    $(".d4-addtocart").each(function(){
        ids.push($(this).attr('id'))
    })
    let qty = 1;
    let id;
    // 點擊按鈕後，執行for迴圈
    $("#addToCartAll").on('click',function(){
        // console.log('addToCartAll');
        $('nav').append(`<div class="addToCartAlert title purple text-center">已加入購物車:)
            <div class="icon text-center mt-3">
                <i class="fas fa-check-circle text-center"style='font-size:36px'></i>
            </div>
        </div>`);
        $('.addToCartAlert').css({
            'position':'fixed',
              'width':'70%',
              'top':'40vh',
              'left':'50%',
              'padding': '20px 20px',
              'transform':'translateX(-50%)',
              'background-color':'#ffffff',
              'z-index':'99',
              'border-radius':'5px',
              'border-top':'solid #743CF5 10px',
              'box-shadow':'2px 2px 2px 1px rgba(0, 0, 0, 0.2)'
        })
        setTimeout(function(){ $('.addToCartAlert').css('display','none') }, 1000);
        for(let i=0 ; i<ids.length ;i++ ){
            id = ids[i];
            qty = qty;
            $.ajax({
                method: 'post',
                url: './add-to-cart.php',
                dataType: 'json',
                data: {
                qty: qty,
                id: id
                }
                }).done((json) => {
                    // alert(JSON.stringify(json));
                    cart_count(json);
                });
        }
    })
}else{
    let ids =[]
    $(".d4-addtocart").each(function(){
        ids.push($(this).attr('id'))
    })
    let qty = 1;
    let id;
    // 點擊按鈕後，執行for迴圈
    $("#addToCartAll").on('click',function(){
        // console.log('addToCartAll');
        $('nav').append(`<div class="addToCartAlert title purple">已加入購物車:)
            <div class="icon text-center mt-3">
                <i class="fas fa-check-circle text-center"style='font-size:36px'></i>
            </div>
        </div>`);
        $('.addToCartAlert').css({
            'position':'absolute',
            'bottom':'60vh',
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
        for(let i=0 ; i<ids.length ;i++ ){
            id = ids[i];
            qty = qty;
            $.ajax({
                method: 'post',
                url: './add-to-cart.php',
                dataType: 'json',
                data: {
                qty: qty,
                id: id
                }
            }).done((json) => {
                // alert(JSON.stringify(json));
                cart_count(json);
                });
        }
    })
}