var mm = window.matchMedia("(min-width: 1208px)");
mm.addListener(resizeWidth);
resizeWidth(mm);

function resizeWidth(pMatchMedia){
   if(pMatchMedia.matches){

   // 交通板區塊
   let a = $("#d2-a");
   // 技術板區塊
   let b = $("#d2-b");
   // 交通板圖片
   let s1=$(".d2-skateboard1")
   // 技術板圖片
   let s2=$(".d2-skateboard2")
   // 交通板大字
   let sc=$(".d2-skateboard1-cruiser2")
   // 技術板大字
   let ss=$(".d2-skateboard2-skateboard2")

   // 左右區塊hover伸縮效果
   a.mouseenter(function(){
      a.addClass("long")
      b.addClass("short")
      s1.addClass("big")
      sc.removeClass("hide");
      a.mouseleave(function(){
            $(this).removeClass("long");
            b.removeClass("short");
            s1.removeClass("big")
            sc.addClass("hide");
      });
   })
   
   // 左右區塊hover伸縮效果
   b.mouseenter(function(){
      b.addClass("long")
      a.addClass("short")
      s2.addClass("big")
      ss.removeClass("hide");
      b.mouseleave(function(){
            $(this).removeClass("long");
            a.removeClass("short");
            s2.removeClass("big")
            ss.addClass("hide");
      });
   })

   //點擊下一步後展開填寫資料區塊
   let open = $("#open_dropdown")
   let c = $("#d2-a");
   let d = $("#d2-b");
   let info = $(".d2-skateboard-2-info");
   open.click(function(){
      a = "";
      b = "";
      d.addClass("fulllong");
      c.addClass("fullshort");
      $(".d2-button2").addClass("hide");
      s2.addClass("dropdown_mode")
      info.addClass("dropdown_mode");
      ss.css("display","none");
      $(".d2-skateboard2-skateboard").css("display","none");
      $(".d2-dropdownsection").addClass("show");
      $(".d2-backbtn").removeClass("d2-back-hide")
   });
   //  返回選擇滑板
   let back = $("#d2-back");
   back.click(function(){
         console.log("back")
      a = $("#d2-a");
      b = $("#d2-b");
      a.removeClass("fullshort");
      b.removeClass("fulllong");
      $(".d2-button2").removeClass("hide");
      s2.removeClass("dropdown_mode")
      info.removeClass("dropdown_mode");
      ss.css("display","block");
      $(".d2-skateboard2-skateboard").css("display","block");
      $(".d2-dropdownsection").removeClass("show")
      $(".d2-backbtn").addClass("d2-back-hide")
   })
}else{
   $("#open_dropdown").on('click',function(){
      location.href='./J-DIY-step3.php'
   })
   }
}