var requestURL = 'item_lists.json';

var t_itemList; //全部商品json物件
var t_itemsLength; // 全部商品json物件長度

//把json的key設變數
var id;
var itemId;
var itemName;
var checkPrice;
var itemBrand;
var itemDetail;
var checkQty;
var itemPic01;
var itemPic02;
var itemPic03;
var itemSize;
var categoryId;

var perPage = 18; //一頁有幾個



//加收藏的愛心
var item_addtocollect="<svg class='items-list-addtocollect' id='{{addtocollect}}' data-name='Component 7 – 1' xmlns='http://www.w3.org/2000/svg' width='22' height='19.255' viewBox='0 0 22 19.255'><g id='heart-regular' transform='translate(0 0)'><path class='heart-regular-2' data-name='heart-regular' d='M19.7,33.367a6.472,6.472,0,0,0-8.7.645,6.468,6.468,0,0,0-8.7-.645,6.5,6.5,0,0,0-.455,9.5L9.384,50.55a2.257,2.257,0,0,0,3.231,0l7.537-7.678A6.506,6.506,0,0,0,19.7,33.367Zm-1.014,8.057L11.146,49.1a.177.177,0,0,1-.292,0L3.317,41.424a4.431,4.431,0,0,1,.314-6.475A4.356,4.356,0,0,1,9.5,35.4L11,36.933,12.5,35.4a4.354,4.354,0,0,1,5.865-.455,4.45,4.45,0,0,1,.314,6.48Z' transform='translate(0 -31.978)' fill='#743cf5'/></g><path class='heart-solid ' d='M18.41,33.187a5.449,5.449,0,0,0-7.436.542l-.785.809L9.4,33.729a5.449,5.449,0,0,0-7.436-.542,5.722,5.722,0,0,0-.394,8.284l7.711,7.962a1.249,1.249,0,0,0,1.805,0L18.8,41.472a5.718,5.718,0,0,0-.391-8.284Z' transform='translate(1.012 -30.967)' /></svg>"

//每個商品項目的html 
var item_html="<div id='' data-brand='{{itemBrand}}' data-price='{{dataPrice}}' data-cata='{{categoryId}}' class='items-list-box'+><div class='items-list-new-items'><h2 class='green'>NEW</h2></div><div class='items-list-pic-box'><div class='items-list-pic-gbg'></div><div class='items-list-pic-greenbg'></div><img class='items-list-pic' src='./product/{{itemPic01}}' alt=''>"+item_addtocollect+"</div><h5 class='text-center black items-list-product-name'>{{itemName}}</h5><h3 class='text-center black items-list-product-price'>NT ${{price}}</h3></div>";

$.get( requestURL, function(response) {
    function showItemList(){
      //把上面變數帶入值
      t_itemList = response[2].data;
      t_itemsLength = t_itemList.length;

      for(var i=0; i< perPage ; i++){

        id = t_itemList[i]['id'];
        itemId = t_itemList[i]['itemId']
        itemName = t_itemList[i]['itemName']
        checkPrice = t_itemList[i]['checkPrice']
        itemBrand = t_itemList[i]['itemBrand']
        itemDetail = t_itemList[i]['itemDetail']
        checkQty = t_itemList[i]['checkQty']
        itemPic01 = t_itemList[i]['itemPic01']
        itemPic02 = t_itemList[i]['itemPic02']
        itemPic03 = t_itemList[i]['itemPic03']
        itemSize = t_itemList[i]['itemSize']
        categoryId = t_itemList[i]['categoryId']

        console.log()
        
        var current_item_html=
            item_html.replace("{{itemBrand}}",itemBrand)
                    .replace("{{dataPrice}}",checkPrice)
                    .replace("{{price}}",checkPrice)
                    .replace("{{categoryId}}",categoryId)
                     .replace("{{itemPic01}}",itemPic01)
                    .replace("{{itemName}}",itemName)
                    .replace("{{addtocollect}}","addtocollect_"+id)
        

        $("#items-list-area").append(current_item_html);

        $("#addtocollect_"+id).click(function(){
          $(this).toggleClass('items-list-addtocollect-action')
        })
      };

    }
 
  showItemList();
  


  }).done(function(){});