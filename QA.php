<?php if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }
  ?>
<!doctype html>
<html lang="zh">

<head>
    <title>Q&A</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css"
        integrity="sha384-REHJTs1r2ErKBuJB0fCK99gCYsVjwxHrSU0N7I1zl9vZbggVJXRMsv/sLlOAGb4M" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/css.css">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="./css/navbar1.css"> 
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/_tpl_nav_head.css">
    <link rel="stylesheet" href="./css/QA1.css">
    
</head>

<body>


        <?php
        require_once('./_tpl_nav_html.php');

        ?>


  


    <div class="container　mt-5 vvv">
        <div class="row QA-title-div mt-5">
            <div class=" QA-title d-flex justify-content-center col-sm-10 ">
                <div class="sub-title QA ">　Q&A　</div>
            </div>
        </div>

        <div class="container">
            <div class="row d-flex ">

                <div id="accordion-demo" class="col-sm-12 justiy-content-center">

                    <div class="accordionButton">
                        <div class="bg-purple green sub-title cir-Q ">Q</div>
                        <p class="content black mt-3 ml-5">DIY 配板 是否受消費者保護法「七日猶豫期」規範？</p>
                    </div>
                    <div class="accordionContent ">
                        <div class="QAc-div">
                            <p>依據行政院所公布「通訊交易解除權合理例外情事適用準則」(2016 年 1 月 1 日起施行)第二條規定：<br><br>
                                本法第十九條第一項但書所稱合理例外情事，指通訊交易之商品或服務有下列情形之一，並經企業經營者告知消費者，將排除本法第十九條第一項解除權之適用：<br><br></p>
                            <ol>
                                <li>易於腐敗、保存期限較短或解約時即將逾期。</li>
                                <li>依消費者要求所為之客製化給付。</li>
                                <li>報紙、期刊或雜誌。</li>
                                <li>經消費者拆封之影音商品或電腦軟體。</li>
                                <li>非以有形媒介提供之數位內容或一經提供即為完成之線上服務，經消費者事先同意始提供。</li>
                                <li>已拆封之個人衛生用品。</li>
                                <li>國際航空客運服務。</li>
                            </ol>


                            <p class="purple d-inline">DIY屬於客製化之商品，恕無法辦理退貨，敬請見諒。</p>

                        </div>
                    </div>
                    <div class="accordionButton">
                        <div class="bg-purple green sub-title cir-Q ">Q</div>
                        <p class="content black mt-3 ml-5">退貨的流程？</p>
                    </div>
                    <div class="accordionContent ">
                        <div class="QAc-div">
                            <ol>
                                <li>商品到貨次日起七日內(包含例假日)，退貨品需全新，且完整包含商品吊牌、發票一併放入包裹，超過七天退貨時效，即無法辦理退貨。所有商品依消費者保護法規定，提供到貨七天猶豫期權益，但非試用期。
                                </li>
                                <li>若商品收到後需退貨，請至「訂單查詢」點選該筆訂單，將您的問題告知客服。</li>
                                <li>商品僅提供退貨，無提供換貨。如欲更換商品，請先申請商品退貨並重新下單，單筆購買多項商品須全部退回。</li>
                                <li>(商品、原包裝、吊牌、隨附商品、發票等)若判斷出已使用、異味、商品損毀、發票遺失等恕不接受退貨。</li>
                                <li>倘若最終商品已非完整無法退貨，會將貨品寄還，而此筆寄回的運費(貨到付運費100元)將由買方自行負擔，因此退回商品時請務必多加留意商品完整性。</li>
                            </ol>
                        </div>
                    </div>
                    <div class="accordionButton">
                        <div class="bg-purple green sub-title cir-Q ">Q</div>
                        <p class="content black mt-3 ml-5">退款的時間？</p>
                    </div>
                    <div class="accordionContent ">
                        <div class="QAc-div">
                            <ol>
                                <li>一但申請瑕疵/退貨成立，於收到退回商品確認後4-6個工作天內(不含例假日)，另行為您申請退款/刷退程序。</li>
                                <li>一般退款/刷退時間約需7~10個工作天(不含例假日)，完成退款/退刷，請您留意銀行帳戶/下期信用卡帳單。<br>
                                    <包裹回收退回約需7-14個不含例假日工作天左右，請您耐心等候。>
                                </li>
                                <li>如後續有任何疑問，請洽客服中心或致電(02)6631-6666</li>
                                <li>退款/刷退金額皆將不包含運費(物流服務費)，以商品訂購金額為主。</li>

                            </ol>
                        </div>
                    </div>
                    <div class="accordionButton">
                        <div class="bg-purple green sub-title cir-Q ">Q</div>
                        <p class="content black mt-3 ml-5">退款方式為何?</p>
                    </div>
                    <div class="accordionContent ">
                        <div class="QAc-div">
                            <p>若您是使用現金付款，我們會將款項直接匯入您指定的新台幣銀行帳戶（恕無法提供新台幣以外之幣別匯款），在您的退款帳號資料齊全後，我們將最快七到十個工作天內退款給您；若您是使用信用卡付款，在宅配尚未出貨/尚未門市取貨之前，您的訂單尚未向銀行進行請款，我們會為您取消後續請款動作，故此款項不會在您的信用卡帳單顯示，但若我們已經向銀行完成請款動作，我們將會直接將款項刷退至您當初使用來付款的信用卡帳戶中。
                            </p>
                        </div>
                    </div>
                    <div class="accordionButton">
                        <div class="bg-purple green sub-title cir-Q ">Q</div>
                        <p class="content black mt-3 ml-5">為什麼有些商品無法以超商門市取貨付款的方式購物？</p>
                    </div>
                    <div class="accordionContent ">
                        <div class="QAc-div">
                            <ol>
                                <li>因部份商品體積較為特殊或者過於龐大(長、寬、高)超過目前超商門市取貨限制，故超商不受此類商品的取貨服務。</li>
                                <li>對於某些單價較高的商品，超商門市亦不收受處理。</li>
                                <li>您已超過一定比率訂單未至指定門市取貨，故本公司已先暫時停止您的門市付款交易。</li>

                            </ol>
                        </div>
                    </div>

                    <div class="accordionButton">
                        <div class="bg-purple green sub-title cir-Q ">Q</div>
                        <p class="content black mt-3 ml-5"> 收到商品不符、破損、瑕疵怎麼辦？</p>
                    </div>
                    <div class="accordionContent ">
                        <div class="QAc-div">
                            <p>請在到貨7日內，至「我的帳戶 > 交易查詢 > 退貨」提出申請，將由專人協助您處理。</p>

                        </div>
                    </div>

                    <div class="accordionButton">
                        <div class="bg-purple green sub-title cir-Q ">Q</div>
                        <p class="content black mt-3 ml-5">訂單成立後可以更改送貨地址嗎？</p>
                    </div>
                    <div class="accordionContent ">
                        <div class="QAc-div">
                            <p>若您的訂單狀態為「處理中」，請與我們提出申請，若您的訂單狀態為「出貨中」或「已出貨」，則需請您於原址確認收件</p>
                        </div>
                    </div>


                    <div class="accordionButton">
                        <div class="bg-purple green sub-title cir-Q ">Q</div>
                        <p class="content black mt-3 ml-5">如何變更網站登入密碼？</p>
                    </div>
                    <div class="accordionContent ">
                        <div class="QAc-div">
                            <p>請您登入之後至【我的帳戶】內，點選【更改密碼】即可修改。建議您可每隔一段時間更新密碼並牢記，以確保您個人帳戶安全。</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>







        <div class="row to-contact-div  mt-5  mb-5">
            <div class=" to-contact d-flex col-sm-10 justify-content-center ">
                <div class="content purple to-contact-t">如有其他問題請與我們聯絡 謝謝! </div>
                <button class="bt-p asas"><a href="./contactUs.php">聯絡我們</a></button>
            </div>
        </div>

    </div>


    <?php
    require_once("./footer.php")
    
    ?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
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
    <script src="./js/accordiom.js"></script>
    <script src="./js/accessible-menu.js"></script>
    <script src="./js/tpl_navbar_js.js"></script>
    <script>


        $('#accordion-demo').accordiom({
            showFirstItem: false
        });

    </script>
</body>

</html>