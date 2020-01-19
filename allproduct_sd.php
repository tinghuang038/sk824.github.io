<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }

require_once('./db.inc.php');

$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$cate = isset($_GET['cate']) ? json_decode($_GET['cate']) : 0;
$brand = isset($_GET['brand']) ? $_GET['brand'] : '';
$hot_new = isset($_GET['hot_new']) ? $_GET['hot_new'] :'';

$links = []; // link output
$per_page = 18; // 每一頁要顯示幾筆

$where = ' WHERE 1 ';

if(!empty($cate)){
    $where .= " AND `categoryId` IN ('". implode("','", $cate). "') ";
    $links['cate'] = json_encode($cate);
}

if(!empty($brand)){
    $links['brand'] = $brand;
    $brand = $pdo->quote($brand);
    $where .= " AND `itemBrand`={$brand} ";
}

if(!empty($hot_new)){
    $links['hot_new'] = $hot_new;
    $hot_new = $pdo->quote($hot_new);
    $where .= " AND `hot_new`= {$hot_new} ";
}


$t_sql = "SELECT COUNT(1) FROM `item_lists` $where ";

$t_stmt = $pdo->query($t_sql);
$totalRows = $t_stmt->fetch(PDO::FETCH_NUM)[0]; // 拿到總筆數

$totalPages = ceil($totalRows/$per_page); // 取得總頁數

if($page < 1){
    $page = 1;
}
if($page > $totalPages){
    $page = $totalPages;
}

$result = [
    'page' => $page,
    'per_page' => $per_page,
    'totalRows' => $totalRows,
    'totalPages' => $totalPages,
    'hot_new' => $hot_new,
];


$sql = sprintf("SELECT * FROM `item_lists` $where ORDER BY `id` LIMIT %s, %s",
        ($page-1)*$per_page,
            $per_page
);

$stmt = $pdo->query($sql);
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
$result['rows'] = $rows;


//  echo json_encode($result, JSON_UNESCAPED_UNICODE);
// exit;
// ------------------------------------ categories ------------------------------

$c_sql = "SELECT * FROM `category_list` ";
$c_stmt = $pdo->query($c_sql);
$c_rows = $c_stmt->fetchAll(PDO::FETCH_ASSOC);
$cates = [];

foreach($c_rows as $r){
    if($r['categoryParentId']==0){
        $cates[] = $r;
    }
}

foreach($cates as $k=>$c1){
    foreach($c_rows as $r){
        if($r['categoryParentId']!=0 and $c1['categoryId']==$r['categoryParentId']){
            $cates[$k]['c_ids'][] = $r['categoryId'];
            $cates[$k]['children'][] = $r;
        }
    }
}
echo '<!-- ';
print_r($cates);
echo ' --> ';
?>
<!DOCTYPE html>
<html lang="en">

<head>
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>商品 | 全部商品</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css"
        integrity="sha384-REHJTs1r2ErKBuJB0fCK99gCYsVjwxHrSU0N7I1zl9vZbggVJXRMsv/sLlOAGb4M" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/css.css">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="./css/navbar1.css"> 
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/_tpl_nav_head.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/t-items-list.css">

    <style>
        .nav-bar *,
        .nav-m-bar * {
            list-style: none;
        }

        .banner-logo img {
            display: inline-block;
            /* transform:rotate(40deg); */
            opacity:.3;
            padding-bottom: 0px;
            border-bottom:solid 10px white;
            margin-bottom:50px;
        }

        .item-list-banner .banner-logo h2 span{
            position:absolute;
            top: 100px;
            font-size: 280px;
            opacity:1;
            color:#fff;
        }
        h5.hotHotHot{
            color: #743CF5;
        }
    </style>
</head>

<body> 
<div class="navnav"></div>
    <!-- navbar -->
    <?php
        require_once('./_tpl_nav_html.php');
    ?>

    <!-- banner -->
    <div class="item-list-banner">
        <svg viewbox="-20 -10 900 300" class="banner-greenLine">
            <polyline points="-21,-15 70,50 50,100 130,30 120,80 350,250"></polyline>
        </svg>
        <div class="banner-logo">
            <img src="./images/suge-logo.svg" alt="">
            <h2>ALL PRODUCTS</h2>
        </div>
        <!-- <svg viewbox="50 -50 300 300" class="banner-square">
            <polyline points="0,300 0,0 500,0"></polyline>
        </svg> -->
        <div class="banner-cruiser-pic">
            <img src="./" alt="">
            <!-- <img src="../images/00_D-Street Beach Complete Cruiser - Multi 26_a1.png" alt=""> -->
        </div>
    </div>
    <div class="box"></div>

    <!-- banner下面的地方 -->
    <div class="container item-list-content">
        <div class="row justify-content-center">

            <!-- 麵包屑 -->
            <div class="col-11 col-lg-12 my-3 item-list-breadLine">
                <p class="item-list-bread">
                    <a href="./J-index-c.php" class="text-decoration-none">
                        <img src="./images/iconfinder_home.svg" alt=""> >
                    </a>
                    <a href="" class="locationLocation"> 所有商品 </a>
                </p>
            </div>

            <!-- 下拉選單排序篩選 -->
            <!-- <div class="col-12 col-lg-2 p-3 right-dropdown d-flex justify-content-center">

                <div class="item-list-dropdown">
                    <a class="text-decoration-none bt-b-g3 item-list-price-btn item-list-price-btn-action">價格篩選</a>
                </div>

                <div class="dropdown item-list-dropdown">
                    <a class="dropdown-toggle bt-b-g3 item-list-new-btn" role="button" id="dropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        最新上架&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item">最新上架&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                        <a class="dropdown-item">熱門商品&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                        <a id='cheap2high' class="dropdown-item">價錢由低到高&nbsp;</a>
                        <a class="dropdown-item">價錢由高到低&nbsp;</a>
                    </div>
                </div>

            </div> -->

        </div>
        <!-- 大標 -->
        <div class="row justify-content-center my-4">
            <h4 class="title black" id="item_list_catatitle">
                <img class="titleSkateTitleSkate" src="./images/title-skateboard.svg" alt="">
                所有商品</h4>
        </div>
        <!-- 整頁左下圖 -->
        <div class="items-list-bottom-dec">
            <img src="./images/img-of-cruiser.svg" alt="">
        </div>
        <!-- 左邊欄位 -->
        <div class="row">
            <div class="col-lg-3">
            <!-- <div class="sidebar-price pc-sidebar-price">
                    <h5 class="g3 sidebar-price-h5">清除篩選
                        <img src="../images/price-delete.svg" alt="">
                    </h5>
                    <div class="item-list-sidebar-price">

                        <div id="slider-range" class=""></div>
                        <p class="mt-3">
                            <input type="text" id="amount" readonly style="border:0; color:#666; font-weight:bold;">
                        </p>
                    </div>
                </div> -->

                <ul class="items-list-sidebar">
                    <li class="gray-bg-cata bg-g3">
                        <a id="allAll_filBtn" class="dark-bg-cata-title-active" href="?cate=0">所有商品</a>
                    </li>
                    <li class="gray-bg-cata bg-g3">
                        <a class="gray-bg-cata-title" href="?hot_new=2">最新商品</a>
                    </li>
                    <li class="gray-bg-cata bg-g3">
                        <a class="gray-bg-cata-title" href="?hot_new=1">人氣商品</a>
                    </li>
                    <li class="gray-bg-cata bg-g3 gray-bg-cata-title-action">
                        <a class="linklist bt-toggle position-re gray-bg-cata-title " data-toggle="collapse"
                            data-target=".collapse_collection_menu_4" aria-expanded="true">品牌
                            <div class="img-of-plus">
                                <div class="plus plus01 bg-g1"></div>
                                <div class="plus plus02 bg-g1"></div>
                            </div>
                        </a>
                        <ul class="white-bg-cata no-bb-line brands-cata">
                            <li class="white-bg-cata no-bb-line">
                                <a class="g3 items-cata-tilte" data-brandname="Almost">Almost</a>
                            </li>
                            <li class="white-bg-cata no-bb-line">
                                <a class="g3 items-cata-tilte" data-brandname="DGK">DGK</a>
                            </li>
                            <li class="white-bg-cata no-bb-line">
                                <a class="g3 items-cata-tilte" data-brandname="Enjoi">Enjoi</a>
                            </li>
                            <li class="white-bg-cata no-bb-line">
                                <a class="g3 items-cata-tilte" data-brandname="Independent">Independent</a>
                            </li>
                            <li class="white-bg-cata no-bb-line">
                                <a class="g3 items-cata-tilte" data-brandname="Krux">Krux</a>
                            </li>
                            <li class="white-bg-cata no-bb-line">
                                <a class="g3 items-cata-tilte" data-brandname="Penny Skateboards">Penny</a>
                            </li>
                            <li class="white-bg-cata no-bb-line">
                                <a class="g3 items-cata-tilte" data-brandname="RIPNDIP">RIPNDIP</a>
                            </li>
                            <li class="white-bg-cata no-bb-line">
                                <a class="g3 items-cata-tilte" data-brandname="Santa Cruz">Santa Cruz</a>
                            </li>
                            <li class="white-bg-cata no-bb-line">
                                <a class="g3 items-cata-tilte" data-brandname="Spitfire">Spitfire</a>
                            </li>
                            <li class="white-bg-cata no-bb-line">
                                <a class="g3 items-cata-tilte" data-brandname="Toy Machine">Toy Machine</a>
                            </li>
                        </ul>
                    </li>

                    <li class="gray-bg-cata bg-g3">
                        <a class="linklist bt-toggle position-re gray-bg-cata-title " data-toggle="collapse"
                            data-target=".collapse_collection_menu_4" aria-expanded="true">商品類別
                            <div class="img-of-plus">
                                <div class="plus plus01 bg-g1"></div>
                                <div class="plus plus02 bg-g1"></div>
                            </div>
                        </a>

                        <ul class="white-bg-cata no-bb-line items-cata">

                            <?php foreach($cates as $c1): ?>
                            <li class="white-bg-cata no-bb-line itemsCata_<?= $c1['categoryId'] ?>">

                                <a class="g3 items-cata-tilte">
                                    <?= $c1['categoryName'] ?>
                                    <div class="img-of-plus">
                                        <div class="plus plus01 bg-g3"></div>
                                        <div class="plus plus02 bg-g3"></div>
                                    </div>
                                </a>
                                <ul>
                                    <li class="white-bg-cata-detail">
                                        <a href="?cate=<?php
                                        if(empty($c1['c_ids'])){
                                            echo json_encode([ $c1['categoryId'] ]);
                                        } else {
                                            echo json_encode($c1['c_ids']);
                                        }
                                         
                                         ?>">ALL</a>
                                    </li>
                                    <?php
                                    if(! empty($c1['children'])) 
                                    foreach($c1['children'] as $c2): ?>
                                    <li class="white-bg-cata-detail">
                                        <a href="?cate=[<?= $c2['categoryId'] ?>]"><?= $c2['categoryName'] ?></a>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>

                            </li>
                            <?php endforeach; ?>

                            <?php /*
                            <li class="white-bg-cata no-bb-line items-cata-seletitle04 ">

                                <a class="g3 items-cata-tilte">
                                    交通板-------------
                                    <div class="img-of-plus">
                                        <div class="plus plus01 bg-g3"></div>
                                        <div class="plus plus02 bg-g3"></div>
                                    </div>
                                </a>
                                <ul>
                                    <!-- <li class="white-bg-cata-detail"><a
                                            href="cruiserAll.php">ALL</a></li> -->
                                    <li class="white-bg-cata-detail"><a href="allproduct_sd.php?cate=21">23" 以下</a>
                                    </li>
                                    <li class="white-bg-cata-detail"><a href="allproduct_sd.php?cate=22">24" ~
                                            26"</a></li>
                                    <li class="white-bg-cata-detail"><a href="allproduct_sd.php?cate=23">27" ~
                                            29"</a></li>
                                    <li class="white-bg-cata-detail"><a href="allproduct_sd.php?cate=24">30" 以上</a>
                                    </li>
                                </ul>

                            </li>




                            <li class="white-bg-cata no-bb-line items-cata-seletitle04">
                                <a class="g3 items-cata-tilte">板身
                                    <div class="img-of-plus">
                                        <div class="plus plus01 bg-g3"></div>
                                        <div class="plus plus02 bg-g3"></div>
                                    </div>
                                </a>
                                <ul>
                                    <!-- <li class="white-bg-cata-detail"><a>ALL</a></li> -->
                                    <li class="white-bg-cata-detail"><a href="allproduct_sd.php?cate=3">7.75"</a></li>
                                    <li class="white-bg-cata-detail"><a href="allproduct_sd.php?cate=4">8"</a></li>
                                    <li class="white-bg-cata-detail"><a href="allproduct_sd.php?cate=5">8.25"</a></li>
                                    <li class="white-bg-cata-detail"><a href="allproduct_sd.php?cate=6">8.5"</a></li>
                                </ul>
                            </li>
                            <li class="white-bg-cata no-bb-line items-cata-seletitle04">
                                <a class="g3 items-cata-tilte">輪架
                                    <div class="img-of-plus">
                                        <div class="plus plus01 bg-g3"></div>
                                        <div class="plus plus02 bg-g3"></div>
                                    </div>
                                </a>
                                <ul>
                                    <!-- <li class="white-bg-cata-detail"><a>ALL</a></li> -->
                                    <li class="white-bg-cata-detail"><a href="allproduct_sd.php?cate=8">7.75"</a></li>
                                    <li class="white-bg-cata-detail"><a href="allproduct_sd.php?cate=9">8"</a></li>
                                    <li class="white-bg-cata-detail"><a href="allproduct_sd.php?cate=10">8.25"</a></li>
                                    <li class="white-bg-cata-detail"><a href="allproduct_sd.php?cate=11">8.5"</a></li>
                                </ul>
                            </li>
                            <li class="white-bg-cata no-bb-line items-cata-seletitle03
                            ">
                                <a class="g3 items-cata-tilte">輪子
                                    <div class="img-of-plus">
                                        <div class="plus plus01 bg-g3"></div>
                                        <div class="plus plus02 bg-g3"></div>
                                    </div>
                                </a>
                                <ul>
                                    <!-- <li class="white-bg-cata-detail">
                                        <a href="wheelAll.php">ALL</a>
                                    </li> -->
                                    <li class="white-bg-cata-detail">
                                        <a href="allproduct_sd.php?cate=13">101A以上<span> (硬輪)</span></a>
                                    </li>
                                    <li class="white-bg-cata-detail">
                                        <a href="allproduct_sd.php?cate=14">85A ~ 101A<span> (軟硬輪)</span></a>
                                    </li>
                                    <li class="white-bg-cata-detail">
                                        <a href="allproduct_sd.php?cate=15">85A以下<span> (軟輪)</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="white-bg-cata">
                                <a class="g3" href="allproduct_sd.php?cate=16">培林</a>
                            </li>
                            <li class="white-bg-cata">
                                <a class="g3" href="allproduct_sd.php?cate=17">砂紙</a>
                            </li>
                            <li class="white-bg-cata no-bb-line items-cata-seletitle03">
                                <a class="g3 items-cata-tilte">其他
                                    <div class="img-of-plus">
                                        <div class="plus plus01 bg-g3"></div>
                                        <div class="plus plus02 bg-g3"></div>
                                    </div>
                                </a>
                                <ul>
                                    <li class="white-bg-cata-detail"><a href="">T型工具</a></li>
                                    <li class="white-bg-cata-detail"><a href="">護具</a></li>
                                </ul>
                            </li>
                            */ ?>

                        </ul>
                    </li>
                </ul>
            </div>
            <!-- 商品列表 -->
            <div class="col-12 col-lg-9 no-padding justify-content-around">
                <div class="items-list-area" id="items-list-area">

                    <?php foreach($rows as $row): ?>
                    <div class="list-pic-boxBox" data-aos="fade-up">
                        <a href="./itemdetail.php?id=<?= $row['id'] ?>" id=""
                            class="items-list-box">
                            <div class="items-list-pic-box">
                                <div class="items-list-pic-gbg"></div><img class="items-list-pic"
                                    src="./product/<?= $row['itemPic01'] ?>">
                            </div>
                            <h5 class="text-center black items-list-product-name"><?= $row['itemName'] ?></h5>
                            <h3 class="text-center black items-list-product-price">NT$ <?= $row['checkPrice'] ?></h3>
                        </a>
                        <div class="items-list-pic-greenbg"></div>
                        <svg id="addtocollect_<?= $row['id'] ?>" data-id="<?= $row['id'] ?>" class="items-list-addtocollect"
                            data-name="Component 7 – 1" xmlns="http://www.w3.org/2000/svg" width="22" height="19.255"
                            viewBox="0 0 22 19.255">
                            <g id="heart-regular" transform="translate(0 0)">
                                <path class="heart-regular-2" data-name="heart-regular"
                                    d="M19.7,33.367a6.472,6.472,0,0,0-8.7.645,6.468,6.468,0,0,0-8.7-.645,6.5,6.5,0,0,0-.455,9.5L9.384,50.55a2.257,2.257,0,0,0,3.231,0l7.537-7.678A6.506,6.506,0,0,0,19.7,33.367Zm-1.014,8.057L11.146,49.1a.177.177,0,0,1-.292,0L3.317,41.424a4.431,4.431,0,0,1,.314-6.475A4.356,4.356,0,0,1,9.5,35.4L11,36.933,12.5,35.4a4.354,4.354,0,0,1,5.865-.455,4.45,4.45,0,0,1,.314,6.48Z"
                                    transform="translate(0 -31.978)" fill="#743cf5" />
                            </g>
                            <path class="heart-solid"
                                d="M18.41,33.187a5.449,5.449,0,0,0-7.436.542l-.785.809L9.4,33.729a5.449,5.449,0,0,0-7.436-.542,5.722,5.722,0,0,0-.394,8.284l7.711,7.962a1.249,1.249,0,0,0,1.805,0L18.8,41.472a5.718,5.718,0,0,0-.391-8.284Z"
                                transform="translate(1.012 -30.967)" />
                        </svg>
                    </div>

                    <!-- ------------------------ -->
                    <!-- <div class="items-list-boxBox">
                        <div class="items-list-new-items">
                            <h2 class="green">NEW</h2>
                        </div>
                        <div data-price="" data-cata="" class="items-list-pic-box">
                            <div class="items-list-pic-gbg"></div>
                            <div class="items-list-pic-greenbg"></div>
                            <img class="items-list-pic" src="../product_img/<?= $row['itemPic01'] ?>" alt="">
                            <svg class="items-list-addtocollect" id="Component_7_1" data-name="Component 7 – 1"
                                xmlns="http://www.w3.org/2000/svg" width="22" height="19.255" viewBox="0 0 22 19.255">
                                <g id="heart-regular" transform="translate(0 0)">
                                    <path class="heart-regular-2" data-name="heart-regular"
                                        d="M19.7,33.367a6.472,6.472,0,0,0-8.7.645,6.468,6.468,0,0,0-8.7-.645,6.5,6.5,0,0,0-.455,9.5L9.384,50.55a2.257,2.257,0,0,0,3.231,0l7.537-7.678A6.506,6.506,0,0,0,19.7,33.367Zm-1.014,8.057L11.146,49.1a.177.177,0,0,1-.292,0L3.317,41.424a4.431,4.431,0,0,1,.314-6.475A4.356,4.356,0,0,1,9.5,35.4L11,36.933,12.5,35.4a4.354,4.354,0,0,1,5.865-.455,4.45,4.45,0,0,1,.314,6.48Z"
                                        transform="translate(0 -31.978)" fill="#743cf5" />
                                </g>
                                <path class="heart-solid "
                                    d="M18.41,33.187a5.449,5.449,0,0,0-7.436.542l-.785.809L9.4,33.729a5.449,5.449,0,0,0-7.436-.542,5.722,5.722,0,0,0-.394,8.284l7.711,7.962a1.249,1.249,0,0,0,1.805,0L18.8,41.472a5.718,5.718,0,0,0-.391-8.284Z"
                                    transform="translate(1.012 -30.967)" />
                            </svg>
                        </div>
                        <h5 class="text-center black items-list-product-name"><?= $row['itemName'] ?></h5>
                        <h3 class="text-center black items-list-product-price">NT$ <?= $row['checkPrice']?></h3>
                    </div> -->
                    <?php endforeach; ?>
                    <br>

                    <div class="items-list-page text-center">
                        <?php for($i=1; $i<=$totalPages; $i++): 
                            $links['page'] = $i;
                            ?>
                            <a class="purple <?= $page===$i ? 'items-list-page-action' : '' ?>"
                            href="?<?= http_build_query($links) ?>"><?= $i ?></a>

                        <?php endfor; ?>

                        <!-- <div class="items-page-btn page-btn-left">
                            <img src="./images/chevron-left-solid.svg" alt="">
                        </div>
                        <div class="items-page-btn page-btn-right">
                            <img src="./images/chevron-left-solid.svg" alt="">
                        </div> -->
                    </div>

                    <!---->

                    <!-- <div class="items-list-box">
                        <div class="items-list-new-items">
                            <h2 class="green">NEW</h2>
                        </div>
                        <div data-price="" data-cata="" class="items-list-pic-box">
                            <div class="items-list-pic-gbg"></div>
                            <div class="items-list-pic-greenbg"></div>
                            <img class="items-list-pic"
                                src="product/.jpg" alt="">
                                <svg class="items-list-addtocollect" id="Component_7_1" data-name="Component 7 – 1" xmlns="http://www.w3.org/2000/svg" width="22" height="19.255" viewBox="0 0 22 19.255">
                                    <g id="heart-regular" transform="translate(0 0)">
                                      <path class="heart-regular-2" data-name="heart-regular" d="M19.7,33.367a6.472,6.472,0,0,0-8.7.645,6.468,6.468,0,0,0-8.7-.645,6.5,6.5,0,0,0-.455,9.5L9.384,50.55a2.257,2.257,0,0,0,3.231,0l7.537-7.678A6.506,6.506,0,0,0,19.7,33.367Zm-1.014,8.057L11.146,49.1a.177.177,0,0,1-.292,0L3.317,41.424a4.431,4.431,0,0,1,.314-6.475A4.356,4.356,0,0,1,9.5,35.4L11,36.933,12.5,35.4a4.354,4.354,0,0,1,5.865-.455,4.45,4.45,0,0,1,.314,6.48Z" transform="translate(0 -31.978)" fill="#743cf5"/>
                                    </g>
                                    <path class="heart-solid " d="M18.41,33.187a5.449,5.449,0,0,0-7.436.542l-.785.809L9.4,33.729a5.449,5.449,0,0,0-7.436-.542,5.722,5.722,0,0,0-.394,8.284l7.711,7.962a1.249,1.249,0,0,0,1.805,0L18.8,41.472a5.718,5.718,0,0,0-.391-8.284Z" transform="translate(1.012 -30.967)" />
                                </svg>
                        </div>
                        <h5 class="text-center black items-list-product-name">D-Street Atlas Complete Cruiser - 28"</h5>
                        <h3 class="text-center black items-list-product-price">NT$ 2380</h3>
                    </div>
                    
                </div> -->

                    <!-- 分頁 每頁18個商品 會分到15頁(全部257商品)-->

                    <!-- <div class="items-list-page text-center">
                    <h3 class="purple items-list-page-action">1</h3>
                    <h3 class="purple">2</h3>
                    <h3 class="purple">3</h3>
                    <div class="items-page-btn page-btn-left">
                        <img src="../images/chevron-left-solid.svg" alt="">
                    </div>
                    <div class="items-page-btn page-btn-right">
                        <img src="../images/chevron-left-solid.svg" alt="">
                    </div>
                </div> -->



                </div>
            </div>
        </div>
    </div>

    <div id="purpleTopBtn" class="purple-top-btn bg-purple">
        <img src="./images/chevron-down-solid.svg" alt="">
    </div>

    <?php
        require_once('./footer.php');
    ?>

    <script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
        <script src="./js/accessible-menu.js"></script>
        <script src="./js/tpl_navbar_js.js"></script>

    <?php
            // require_once('./tpl/t-dBug-navbar-js.php');
        ?>
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="./js/items-list.js"></script>
    <!-- <script src="./js/items-list-testJSON.js"></script> -->

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>



    <script>
        var cars = [];
        var bill = [];
        function calcup(x) {
            var count = document.getElementById(x + "count").innerHTML.split(':')[1];
            var count2 = parseInt(count)
            var count3 = count2 + 1;
            //console.log(count2+1)
            document.getElementById(x + "count").innerHTML = document.getElementById(x + "count").innerHTML.split(':')[0] + ":" + count3.toString();
            var sum = parseInt(document.getElementById(x + "price").innerHTML.split(':')[1]) * count3
            document.getElementById(x + "total").innerHTML = document.getElementById(x + "total").innerHTML.split(':')[0] + ":" + sum
        }

        function calcdown(x) {
            var count = document.getElementById(x + "count").innerHTML.split(':')[1];
            var count2 = parseInt(count)
            var count3 = count2 - 1;
            //console.log(count2-1)
            document.getElementById(x + "count").innerHTML = document.getElementById(x + "count").innerHTML.split(':')[0] + ":" + count3.toString();
            var sum = parseInt(document.getElementById(x + "price").innerHTML.split(':')[1]) * count3
            document.getElementById(x + "total").innerHTML = document.getElementById(x + "total").innerHTML.split(':')[0] + ":" + sum
        }
        function car(x) {
            var productName = 'Product : ' + document.getElementById(x).innerHTML.split(':')[1];
            var price = 'Price : ' + document.getElementById(x + 'price').innerHTML.split(':')[1];
            var count = 'Count : ' + document.getElementById(x + 'count').innerHTML.split(':')[1];
            var total = 'Total : ' + document.getElementById(x + 'total').innerHTML.split(':')[1];
            cars.push([productName, price, count, total]);
            bill.push(total.split(':')[1]);
            console.log(cars);
            //showcar(cars)        
        }

        function showcar() {
            var sum = 0;
            for (var i = 0; i < bill.length; i++) {
                sum = sum + parseInt(bill[i]);
            };
            console.log(bill)
            console.log(sum)
            function post_to_url(path, params, method) {
                method = method || "POST";
                var form = document.createElement("form");
                form.setAttribute("method", method);
                form.setAttribute("action", path);

                for (var key in params) {
                    var hiddenField = document.createElement("input");
                    hiddenField.setAttribute("type", "hidden");
                    hiddenField.setAttribute("name", key);
                    hiddenField.setAttribute("value", params[key]);
                    form.appendChild(hiddenField);
                }

                document.body.appendChild(form);    // Not entirely sure if this is necessary
                form.submit();
            }
            post_to_url('car.php', { 'shoppinglist': cars, 'bill': sum });
        }

        // 連到對應細節頁

        $(document).on('click', '.items-list-box', function () {
            var itemId = $(this).attr('id');

            // window.location.href = "itemdetail.php?id="+itemId;
            window.location.assign('./itemdetail.php?id=' + itemId);
            // console.log('itemdetail.php?id='+itemId);
        })

        // 讀取排序文字

        $('.item-list-dropdown a.dropdown-item').click(
            function () {
                $('.item-list-dropdown .bt-b-g3.item-list-new-btn').text($(this).text())
                $('.dropdown.item-list-dropdown img').removeClass('dropdown-click-img-acton')
            }
        )

        // 加入收藏

        let like = [];

        $(".items-list-addtocollect").on('click',function(){
            // 清空localstorage暫存
            // localStorage.clear()
            // exit();
            // 抓取點擊目標的id
            let likeId = $(this).data('id');
            console.log(likeId);

            // 將產品存至localstorage中
            if(like.indexOf(likeId) == -1){
            like.push(likeId);
            // console.log(like);
            }else{
                var index = like.indexOf(likeId);
                // console.log(index)
                like.splice(index,1)
            }

            localStorage.setItem('likeList', JSON.stringify(like));
            // alert(localStorage.getItem('likeList'))
            
            // 收藏到session，導入會員專區我的收藏
            $.ajax({
                method: "post",
                url: "./addToLike.php",
                // dataType: 'json',
                data: {
                    likeId : likeId
                    }
                }).done((json) => {
                    // alert(json)
                    // 加入收藏提示
                    $('.navnav').append(`
                    <div class="addToCartAlert title purple">已加入收藏:)
                        <div class="icon text-center mt-3">
                            <i class="fas fa-heart text-center"style='font-size:36px'></i>
                        </div>
                    </div>`);
                    $('.addToCartAlert').css({
                        'position':'fixed',
                        'top':'40vh',
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
                    });
            })

         // localstorage將收藏的產品暫存保留實心效果
        let localLike = localStorage.getItem('likeList');
        $(".items-list-addtocollect").each(function(){
            let likeId = $(this).data('id');
            if(localLike.indexOf(likeId)>-1){
                $(this).addClass('items-list-addtocollect-action')
            }else{
                $(this).removeClass('items-list-addtocollect-action')
            }
        })

        // 分頁class
        /*
        var nowUrl = window.location.href;
        var nowNum = parseInt(nowUrl.slice(-2)) ;
        console.log(nowNum);
        $('.items-list-page a.purple').eq(0).addClass('items-list-page-action');
        $('.items-list-page a.purple').eq(nowNum).addClass('items-list-page-action').siblings().removeClass('items-list-page-action');
*/

    // $('.items-list-page a.purple').click(
    //     function(){

    //         var pNumber = $(this).text();
    //         var pUrl = 'http://localhost/items-list/skate-store/cat_select/allproduct.php?page='+ pNumber;

    //         alert(pUrl)

    //         if(nowUrl == pUrl){
    //         $(this).addClass('items-list-page-action').siblings().removeClass('items-list-page-action');
    //         }
    //     })


    </script>

</body>

</html>