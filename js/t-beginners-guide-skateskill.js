/** 變更圖片類別(滑鼠移入載GIF移出換回PNG) */
function changeImgaeType() {
    // 判斷傳入的photo是否有gif，若沒有就跳出這個function
    if (this.classList.contains('photo--hasGif')) {
      var type = [];
      // 取得觸發事件的photo裡面圖片本體
      var image = this.querySelector('.photo__img');
      // 檢查是否已經轉為gif播放中
      var isPlay = image.classList.contains('photo__img--play');
      // 播放判斷
      if(isPlay) {
        // 如果播放中，就移除播放標記(mouseleave時會觸發)並寫好轉換用的type值
        image.classList.remove('photo__img--play');
        type = ['gif', 'png'];
      }else {
        // 如果未播放，就新增播放標記(mouseenter時會觸發)並寫好轉換用的type值
        image.classList.add('photo__img--play');
        type = ['png', 'gif'];
      }
      // 取得圖片連結(原本的src圖片連結，替換掉副檔名)
      var imageLink = image.getAttribute('src').replace(type[0], type[1]);
      // 設定新的圖片連結到原本的圖片本體中
      image.setAttribute('src', imageLink);
      // 檢查讀取
      checkLoad(image);
    }
  }
  
  /*
    因為querySelectorAll取回的不是Array是NodeList並不存在forEach方法，
    所以透過Array.from()把取回的NodeList轉Array，接著再用forEach為每個photo加上滑鼠事件的監聽 
  */
  var photos = Array.from(document.querySelectorAll('.skill-box, .picBox'));
  photos.forEach(photo => {
    photo.addEventListener('mouseenter', changeImgaeType);
    photo.addEventListener('mouseleave', changeImgaeType);
  });

  $('.skill-box').click(function(){
    $(this).addClass('skillActive').siblings().removeClass('skillActive');

    var skillName = $(this).attr('data-skillName');
    var upBoard='<div class="skateskill-content-boxA d-flex flex-column"><h2 class="title black"><img class="titleSkate" src="images/title-skateboard.svg" alt="">基本上下板</h2><div class="contentAnPic_box"><div class="picBox right-picBox photo photo--hasGif"><img class="photo__img" src="images/t_beginners_guide_skillA01.png" alt=""></div><p class="skateskill-content-p skateskill-right-content"><span>確定前腳：</span>左右腳輪流用單腳踩在四顆螺絲上，站立保持平衡大概三到五秒。覺得哪隻腳站立保持平衡比較順呢？那就是你的慣性前腳。</p></div><div class="contentAnPic_box"><div class="picBox left-picBox photo photo--hasGif"><img class="photo__img" src="images/t_beginners_guide_skillA02.png" alt=""></div><p class="skateskill-content-p skateskill-left-content"><span>練習上板：</span>一開始我們的前腳踩在前面四顆螺絲的位置，腳趾朝向前方，站立後身體保持平衡，順勢後側讓後腳踩在滑板上。</p></div><div class="contentAnPic_box"><div class="picBox right-picBox"><img src="images/t_beginners_guide_skillA03.png" alt=""></div><p class="skateskill-content-p skateskill-right-content"><span>滑板站姿：</span>接著讓雙腳方向平行。勿內八，會比較不好控制滑板。可慢慢移動讓前腳露出兩顆螺絲孔，後腳露出四顆螺絲孔並踩住板尾。</p></div><div class="contentAnPic_box"><div class="picBox center-picBox photo photo--hasGif"><img class="photo__img" src="images/t_beginners_guide_skillA04.png" alt=""></div><p class="skateskill-content-p skateskill-center-content"><span>下板：</span>前腳向前轉，後腳順勢放下來。</p></div></div>';

    var slideBoard='<div class="skateskill-content-boxB d-flex flex-column"><h2 class="title black"><img class="titleSkate" src="images/title-skateboard.svg" alt="">踢轉與滑行</h2><div class="contentAnPic_box"><div class="picBox right-picBox photo photo--hasGif"><img class="photo__img" src="images/t_beginners_guide_skillB01.png" alt=""></div><p class="skateskill-content-p skateskill-right-content"><span>抬板：</span>身體重心微靠前腳上方，重心微微壓低。膝蓋上抬，後腳讓他順勢自然下壓、抬完馬上放回地面。練習時後腳不能刻意出力下壓，容易讓重心向後倒。反覆練習直到掌握抬板技巧，就可練習踢轉。</p></div><div class="contentAnPic_box"><div class="picBox left-picBox photo photo--hasGif"><img class="photo__img" src="images/t_beginners_guide_skillB02.png" alt=""></div><p class="skateskill-content-p skateskill-left-content"><span>正反向踢轉：</span>以向前畫圈的方式重複練習抬板動作，掌握訣竅後，再練習背向踢轉。一樣以向後畫圈的方式，重複抬板練習。</p></div><div class="contentAnPic_box"><div class="picBox right-picBox photo photo--hasGif"><img class="photo__img" src="images/t_beginners_guide_skillB03.png" alt=""></div><p class="skateskill-content-p skateskill-right-content"><span>直線滑行：</span>前腳踩在前面四顆螺絲上，腳趾頭朝向前方，重心擺在前腳，上半身微微壓低，同時後腳會踩在地面。後腳順勢向後推行，就是滑行姿勢。</p></div></div>';

    var ollie='<div class="skateskill-content-boxC d-flex flex-column"><h2 class="title black"><img class="titleSkate" src="images/title-skateboard.svg" alt="">豚跳</h2><div class="contentAnPic_box"><div class="picBox right-picBox photo photo--hasGif"><img class="photo__img" src="images/t_beginners_guide_skillC01.png" alt=""></div><p class="skateskill-content-p skateskill-right-content"><span>跳前站姿：</span>前腳位置在四顆螺絲旁邊，腳尖切齊板子，後腳踩板尾。先在板上試著往前跳，感受時間差與著板點。</p></div><div class="contentAnPic_box"><div class="picBox left-picBox photo photo--hasGif"><img class="photo__img" src="images/t_beginners_guide_skillC02.png" alt=""></div><p class="skateskill-content-p skateskill-left-content"><span>後腳點板：</span>若後腳點板方向是垂直向下，板子會被向下壓，跳不起來。因此點腳方向要稍微朝板尾後方點，板子才會飛。</p></div><div class="contentAnPic_box "><div class="picBox right-picBox photo photo--hasGif"><img class="photo__img" src="images/t_beginners_guide_skillC03.png" alt=""></div><p class="skateskill-content-p skateskill-right-content"><span>前腳跳躍：</span>初期可直接往前跳起，腳落在原始位置前面一點。練習久了，可再加上用前腳向前刷板身，刷到板尖再下踩的動作。</p></div></div>';

    switch(skillName){
      case 'upBoard':
        // $('.skateskill-content-boxB').css('display','none')
        // $('.skateskill-content-boxC').css('display','none')
        // $('.skateskill-content-boxA').css('display','block')
        $('#skateskillContent').html('');
        $('#skateskillContent').append(upBoard);
        $('.skillBpng').css('display','none');
        $('.skillCpng').css('display','none');
        $('.skillApng').css('display','block');
        var photos = Array.from(document.querySelectorAll('.skill-box, .picBox'));
  photos.forEach(photo => {
    photo.addEventListener('mouseenter', changeImgaeType);
    photo.addEventListener('mouseleave', changeImgaeType);
  });
      break;

      case 'slideBoard':
        // $('.skateskill-content-boxA').css('display','none')
        // $('.skateskill-content-boxC').css('display','none')
        // $('.skateskill-content-boxB').css('display','block')
        $('#skateskillContent').html('');
        $('#skateskillContent').append(slideBoard);
        $('.skillApng').css('display','none');
        $('.skillCpng').css('display','none');
        $('.skillBpng').css('display','block');
        var photos = Array.from(document.querySelectorAll('.skill-box, .picBox'));
  photos.forEach(photo => {
    photo.addEventListener('mouseenter', changeImgaeType);
    photo.addEventListener('mouseleave', changeImgaeType);
  });
      break;

      case 'ollie':
        // $('.skateskill-content-boxA').css('display','none')
        // $('.skateskill-content-boxB').css('display','none')
        // $('.skateskill-content-boxC').css('display','block')
        $('#skateskillContent').html('');
        $('#skateskillContent').append(ollie);
        $('.skillBpng').css('display','none');
        $('.skillApng').css('display','none');
        $('.skillCpng').css('display','block');
        var photos = Array.from(document.querySelectorAll('.skill-box, .picBox'));
  photos.forEach(photo => {
    photo.addEventListener('mouseenter', changeImgaeType);
    photo.addEventListener('mouseleave', changeImgaeType);
  });
      break;
    }
  })