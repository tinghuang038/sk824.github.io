  
var productInfo =$(".d3-product_info_content");
var i;

// 針對類別以ajax取得資料並產生相對應的carousel

$(document).ready(function(e){
  $.get('J-DIY-step3-data.php',{cate:3},function(res){
    // 先解除原本的套件效果
    $('.box').slick('unslick');
    $(".d3-product_carousel_movebox1").html(res);
  // 待資料撈出後再加套件掛入   
  }).then(function(){
    $('.box').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      infinite: false
    });
  })

// 類別1:板身底下的產品點擊後，右方的大圖及品名價格做即時更新
$(document).on("click",".d3-product_carousel_picbox1",function(){
  // console.log('click')
  // 大圖即時更新
  let currentimg = $(this).find(".d3-product_carousel_pic1").attr("src");
  $(".bgbox-img").attr("src",currentimg);
  // 點擊的產品加上focus效果
  $(this).addClass("selected").siblings().removeClass("selected");
  // 品名價格即時更新
  $(".c1name").text($(this).find(".d3-product_carousel_name1").text()+" NT $"+$(this).find(".d3-product_carousel_price1").text());
  // 隨機產生產品介紹內文
  i = Math.ceil(Math.random()*8)-1;
  $(productInfo).text(product_info[i])
  // 總金額計算
  count();
});

// 針對類別以ajax取得資料並產生相對應的carousel

$(document).ready(function(e){
  $.get('J-DIY-step3-data.php',{cate:8},function(res){
    // 先解除原本的套件效果
    $('.box').slick('unslick');
    $(".d3-product_carousel_movebox2").html(res);
  // 待資料撈出後再加套件掛入  
  }).then(function(){
    $('.box').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      infinite: false
    });
  })
})  
  
// 類別2:輪架底下的產品點擊後，右方的大圖及品名價格做即時更新
    $(document).on('click',".d3-product_carousel_picbox2",function(){
      // 大圖即時更新
      let currentimg = $(this).find(".d3-product_carousel_pic2").attr("src");
      $(".bgbox-img").attr("src",currentimg);
      // 點擊的產品加上focus效果
      $(this).addClass("selected").siblings().removeClass("selected");
      // 品名價格即時更新
      $(".c2name").text($(this).find(".d3-product_carousel_name2").text()+" NT $"+$(this).find(".d3-product_carousel_price2").text());
      // 隨機產生產品介紹內文
      i = Math.ceil(Math.random()*8)-1;
      $(productInfo).text(product_info[i])
      // 總金額計算
      count();
    })

    // 針對類別以ajax取得資料並產生相對應的carousel

    $(document).ready(function(e){
      $.get('J-DIY-step3-data.php',{cate:14},function(res){
        // 先解除原本的套件效果
        $('.box').slick('unslick');
        $(".d3-product_carousel_movebox3").html(res);
      // 待資料撈出後再加套件掛入   
      }).then(function(){
        $('.box').slick({
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: false
        });
      })
    })  
    
// 類別3:輪子底下的產品點擊後，右方的大圖及品名價格做即時更新
    $(document).on("click",".d3-product_carousel_picbox3",function(){
      // 大圖即時更新
      let currentimg = $(this).find(".d3-product_carousel_pic3").attr("src");
      console.log(currentimg);
      $(".bgbox-img").attr("src",currentimg);
      // 點擊的產品加上focus效果
      $(this).addClass("selected").siblings().removeClass("selected");
      // 品名價格即時更新
      $(".c3name").text($(this).find(".d3-product_carousel_name3").text()+" NT $"+$(this).find(".d3-product_carousel_price3").text());
      // 隨機產生產品介紹內文
      i = Math.ceil(Math.random()*8)-1;
      $(productInfo).text(product_info[i])
      // 總金額計算      
      count();
    })

    // 針對類別以ajax取得資料並產生相對應的carousel

    $(document).ready(function(e){
      $.get('J-DIY-step3-data.php',{cate:16},function(res){
        // 先解除原本的套件效果
        $('.box').slick('unslick');
        $(".d3-product_carousel_movebox4").html(res);
      // 待資料撈出後再加套件掛入   
      }).then(function(){
        $('.box').slick({
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: false
        });
      })
    })  
    
// 類別4:培林底下的產品點擊後，右方的大圖及品名價格做即時更新
    $(document).on("click",".d3-product_carousel_picbox4",function(){
      // 大圖即時更新
        let currentimg = $(this).find(".d3-product_carousel_pic4").attr("src");
        console.log(currentimg);
        $(".bgbox-img").attr("src",currentimg);
        // 點擊的產品加上focus效果
        $(this).addClass("selected").siblings().removeClass("selected");
        // 品名價格即時更新
        // console.log($(".c1name").text())
        $(".c4name").text($(this).find(".d3-product_carousel_name4").text()+" NT $"+$(this).find(".d3-product_carousel_price4").text());
        // 隨機產生產品介紹內文
        i = Math.ceil(Math.random()*8)-1;
        $(productInfo).text(product_info[i])
        // 總金額計算
        count();
      })

    // 針對類別以ajax取得資料並產生相對應的carousel

    $(document).ready(function(e){
      $.get('J-DIY-step3-data.php',{cate:17},function(res){
        
        $('.box').slick('unslick');
        $(".d3-product_carousel_movebox5").html(res);
      // 待資料撈出後再加套件掛入 
      }).then(function(){
        $('.box').slick({
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: false
        });
      })
    })  

// 類別5:配件底下的產品點擊後，右方的大圖及品名價格做即時更新
      $(document).on("click",".d3-product_carousel_picbox5",function(){
         // 大圖即時更新
          let currentimg = $(this).find(".d3-product_carousel_pic5").attr("src");
          // console.log(currentimg);
          $(".bgbox-img").attr("src",currentimg);
          // 點擊的產品加上focus效果
          $(this).addClass("selected").siblings().removeClass("selected");
          // 品名價格即時更新
          // console.log($(".c1name").text())
          $(".c5name").text($(this).find(".d3-product_carousel_name5").text()+" NT $"+$(this).find(".d3-product_carousel_price5").text());
          // 隨機產生產品介紹內文
          i = Math.ceil(Math.random()*8)-1;
          $(productInfo).text(product_info[i])
          // 總金額計算
          count();
      });

    // 類別1:版身點擊後，右方的大圖及品名價即時更新為已選擇的產品

     $(".select-1,#d3-categoryselector-m-1").on("click",function(){
      // 大圖更新
        let currentimg = $(".selected").find(".d3-product_carousel_pic1").attr("src");
        $(".bgbox-img").attr("src",currentimg);
        
        //　隱藏其他類別的carousel
        $(".d3-product_carousel_box2").addClass("hide");
        $(".d3-product_carousel_box3").addClass("hide");
        $(".d3-product_carousel_box4").addClass("hide");
        $(".d3-product_carousel_box5").addClass("hide");
        $(".d3-product_carousel_box1").removeClass("hide");

        // 零件標題及內文更新
        $("#intro-content").text(intro[0].content)
        $("#intro-title").text(intro[0].title)
      })

    // 類別2:輪架點擊後，右方的大圖及品名價即時更新為已選擇的產品

      $(".select-2,#d3-categoryselector-m-2").on('click',function(){
        // 大圖更新
        let currentimg = $(".selected").find(".d3-product_carousel_pic2").attr("src");

        $(".bgbox-img").attr("src",currentimg);

        //　隱藏其他類別的carousel
        $(".d3-product_carousel_box1").addClass("hide");
        $(".d3-product_carousel_box3").addClass("hide");
        $(".d3-product_carousel_box4").addClass("hide");
        $(".d3-product_carousel_box5").addClass("hide");
        $(".d3-product_carousel_box2").removeClass("hide");

        // 零件標題及內文更新
        $("#intro-content").text(intro[1].content)
        $("#intro-title").text(intro[1].title)

      })

    // 類別3:輪子點擊後，右方的大圖及品名價即時更新為已選擇的產品

        $(".select-3,#d3-categoryselector-m-3").on("click",function(){
        // 大圖更新
        let currentimg = $(".selected").find(".d3-product_carousel_pic3").attr("src");

        $(".bgbox-img").attr("src",currentimg);
        //　隱藏其他類別的carousel
        $(".d3-product_carousel_box1").addClass("hide");
        $(".d3-product_carousel_box2").addClass("hide");
        $(".d3-product_carousel_box4").addClass("hide");
        $(".d3-product_carousel_box5").addClass("hide");
        $(".d3-product_carousel_box3").removeClass("hide");

        // 零件標題及內文更新
        $("#intro-content").text(intro[2].content)
        $("#intro-title").text(intro[2].title)

      })

    // 類別4:培林點擊後，右方的大圖及品名價即時更新為已選擇的產品

        $(".select-4,#d3-categoryselector-m-4").on("click",function(){
        // 大圖更新
        let currentimg = $(".selected").find(".d3-product_carousel_pic4").attr("src");
        $(".bgbox-img").attr("src",currentimg);

        //　隱藏其他類別的carousel
        $(".d3-product_carousel_box1").addClass("hide");
        $(".d3-product_carousel_box2").addClass("hide");
        $(".d3-product_carousel_box3").addClass("hide");
        $(".d3-product_carousel_box5").addClass("hide");
        $(".d3-product_carousel_box4").removeClass("hide");

        // 零件標題及內文更新
        $("#intro-content").text(intro[3].content)
        $("#intro-title").text(intro[3].title)

      })

    // 類別5:配件點擊後，右方的大圖及品名價即時更新為已選擇的產品

    $(".select-5,#d3-categoryselector-m-5").on("click",function(){
      // 大圖更新
      let currentimg = $(".selected").find(".d3-product_carousel_pic5").attr("src");
      $(".bgbox-img").attr("src",currentimg);

      //　隱藏其他類別的carousel 
      $(".d3-product_carousel_box1").addClass("hide");
      $(".d3-product_carousel_box2").addClass("hide");
      $(".d3-product_carousel_box3").addClass("hide");
      $(".d3-product_carousel_box4").addClass("hide");
      $(".d3-product_carousel_box5").removeClass("hide");

      // 零件標題及內文更新
      $("#intro-content").text(intro[4].content)
      $("#intro-title").text(intro[4].title)

      })

    //  類別按鈕點擊後的active效果切換(web及mobile版本)

      $(".d3-category-selection").on("click",function(){
        $(this).addClass("active").siblings().removeClass("active")
      })

      $(".d3-cs-m").on("click",function(){
        $(this).addClass("active").siblings().removeClass("active");
        $(".d3-categoryinfoactive-bg").addClass("hide");
        $(".d3-categoryselector-m").addClass("hide")
      })



    // total-------------------
    // 總額即時計算
      let count = function(){
        c1price = parseInt($(".selected").find(".d3-product_carousel_price1").text());
        c2price = parseInt($(".selected").find(".d3-product_carousel_price2").text());
        c3price = parseInt($(".selected").find(".d3-product_carousel_price3").text());
        c4price = parseInt($(".selected").find(".d3-product_carousel_price4").text());
        c5price = parseInt($(".selected").find(".d3-product_carousel_price5").text());


        $(".d3-price-total").text("TOTAL NT$" + (c1price + c2price + c3price + c4price + c5price))
      }




    // mobile info & category dropdown list--------------------
    // mobile版的零件資訊及類別切換選單開關
    // 查看零件介紹按鈕  
    $("#btnopeninfo-m").on("click",function(){
         $(".d3-categoryinfo-m").toggleClass("hide");
         $(".d3-categoryinfoactive-bg").toggleClass("hide");
         $("#btnopencategory-m").on("click",function(){
          $(".d3-categoryinfo-m").addClass("hide");          
          $(".d3-categoryselector-m").removeClass("hide");
          $(".d3-categoryinfoactive-bg").removeClass("hide");
       })
      })
      // 類別切換按鈕
      $("#btnopencategory-m").on("click",function(){
        $(".d3-categoryselector-m").toggleClass("hide");
        $(".d3-categoryinfoactive-bg").toggleClass("hide");
        $("#btnopeninfo-m").on("click",function(){
          $(".d3-categoryinfo-m").removeClass("hide");          
          $(".d3-categoryselector-m").addClass("hide");
          $(".d3-categoryinfoactive-bg").removeClass("hide");
       })
     })
    //  選單展開時的灰底
      $(".d3-categoryinfoactive-bg").on("click",function(){
        $(".d3-categoryinfo-m").addClass("hide");
        $(".d3-categoryinfoactive-bg").addClass("hide");
        $(".d3-categoryselector-m").addClass("hide")
       });


      })

      // 設定零件介紹的陣列
      var intro = [
        {
          title:'板身介紹',
          content:'板身是滑板的身體\，\也是你在玩滑板時腳所踩的地方\。\通常在選擇板身尺寸時\，\會以腳長來做基準\。\腳小的\，\選小一點的\；\腳大的反之\。\
          建議第一塊滑板就以我們為你選定的尺寸下去挑選你喜歡的圖案吧！'},
        {
          title:'輪架介紹',
          content:'輪架如同滑板的懸吊系統\，\它攸關到了滑板的操控性\、\安全性\、\穩定度等等\。\
          如何選擇一個適合的輪架，是滑板人必學的課題\！\
          中柱長度不可超過輪架\，\因此不同大小的板子\，\自然也需要搭配不同大小的輪架！'},
        {
          title:'輪子介紹',
          content:'輪子的硬度單位是A\，\一般做招用硬輪\：\95A以上\、\街滑用輪\：\95A以下\。\通常越硬的輪子\，\其摩擦力越小\（\會打滑，好做招\）\、\加速快、續航力較差\；\
          越軟的輪子\，\其摩擦力越大\、\起步慢\、\續航力強\、\較吸震。'
        },
        {
          title:'培林介紹',
          content:'培林是機械專有名詞，也可以稱為軸承\。\
          一塊滑板總共會有八個培林\！\
          續滑力好的培林\，\推幾下就能滑相當長的距離\，\做招時不用擔心滑板會慢下來\，\導致無法做招\，\滑起來也比較省力\，\可謂好處多多。'
        },{
          title:'砂紙介紹',
          content:'滑板表面貼的砂紙，雖然不起眼，但卻是幫助我們完成各種招式的大功臣\。\
          如果少了砂紙的摩擦力\，\滑板充其量就只是一塊裝了輪子的木板而已\，\
          有了砂紙，才可以讓滑板的動作千變萬化！砂紙就是這麼低調且不可或缺的東西。'
        }
      ]

      // 設定產品介紹隨機產生的陣列
      var product_info = [
        "Ripndip的超經典款滑板，經典木頭色板身、百看不厭，絕對是你第一張版的首選！",
        "以純色生活美學與製造跑車的精工手藝設計而成的都會滑板，時尚有品味的你絕不能錯過！",
        "一片很特別的滑板，不止外表特別有個性外而且板身上還有很多細節唷！",
        "最Rock最殺的滑板品牌，選擇他就絕不會錯了！心動不要錯過喔!",
        "採用了80年代三部經典電影當作主題，張張都是經典，張張都是滑板場上最耀眼的！",
        "來自經典滑板品牌blindskate的全新板身，限量新上市！",
        "擁有小巧的板身與別於一般交通板身的形狀，使Rat Stick成為可以當作技術板來玩！",
        "經典的 Blind,WKND LOGO板，身為白色控又喜歡簡單的圖案設計嗎？這張非你莫屬～"
      ]

          

      