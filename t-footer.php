<!-- <!doctype html>
<html lang="zh">
  <head>
    <title>footer</title>
    -- Required meta tags --
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    -- Bootstrap CSS --
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css.css">-->


    <style>
    
    footer{
 
        font-weight: 300; 
       
    }
   
    .footer-ul{
        padding:20px 0 10px 0;
        margin:0 auto;
    }
    .footer-li{
        display: inline;
        margin: 0 10px;
    }
    .footer-li a{
        color:white;
    }
    .footer-li a:hover{
        color:white;
        text-decoration: none;
    }

    
    
    .footer-line{
        margin: 10px 0 0 0;
        height: 1px;
    }
    .footer-line2{
        display: none;
    }
    .footer-img{
        width: 18px;
        height:18px;
        margin-bottom: 6.5px;
        margin-left: 10px;
    }
    .footer-ac{
        padding:0;
        margin: 0;
    }
    .copyright{
        text-align: center;
        font-weight: 200;
        margin-bottom:15px  ;
    }
   

   @media only screen and (max-width: 600px){
        
        footer{
           
            font-weight: 300; 
        }
        .footer-ul{
            margin:0 auto;
            padding:10px 0 5px 0;
        }
        .footer-li{
            display: block;
            margin: 0 auto;
            text-align: center;
            line-height: 30px;
        }
        .footer-line1{
            display: none;
        }
        .footer-line2{
            display: block;
        }
        .footer-icon{
            margin: 0 auto;
        }
       .footer-img{
            margin: 0 5px ;
        }
        .copyright{
            margin:10px 0 ;
        }
    }

    </style>
</head>
  <body>
    <footer class="bg-g4">
        <div class="container">
            <div class="row">
            <div class=" col-lg-4 col-md-6 col-xs-12 white">
                <ul class="footer-ul">
                    <li class="footer-li"><a href="">Q&A</a></li>
                    <li class="footer-li"><a href="">關於我們</a></li>
                    <li class="footer-li"><a href="">聯絡我們</a></li>
                </ul>
               
            </div>
        </div>
        </div>
     <div class="row footer-ac">
        <div class="footer-line footer-line1 col-sm-10 col-xs-3 bg-g1"></div>
        <div class="col-xs-12 footer-icon"><a href=""><img  class="footer-img"src="../images/igicon.svg" alt=""></a><a href=""><img  class="footer-img"src="../images/fbicon.svg" alt=""></a></div>
        <div class="footer-line footer-line2 col-sm-10 col-xs-3 bg-g1 "></div>
        <div class=" col-sm-12 copyright white">© 2018 Skate. All rights reserved.</div>
     </div>
      
    </footer>