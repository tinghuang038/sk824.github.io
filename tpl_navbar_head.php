<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }
?>

<!doctype html>
<html lang="zh">
<!--  -->
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css"
        integrity="sha384-REHJTs1r2ErKBuJB0fCK99gCYsVjwxHrSU0N7I1zl9vZbggVJXRMsv/sLlOAGb4M" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/css.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/navbar1.css"> 
    <link rel="stylesheet" href="./css/login.css">
    
    <style>
   

    .tip-tsai a {
            margin-top: 8px;
            color: #ccc;
        }  

    .overlay {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(0, 0, 0, 0.7);
            transition: opacity 500ms;
            visibility: hidden;
            opacity: 0;
            z-index:1000;
        }
        .overlay:target {
            visibility: visible;
            opacity: 1;
        }
        .textRight {
            margin: 10px;
            position: relative;
            left: 17%;
        }

        .left-col {
            height: 350px;
            margin: 100px auto 90px;
            text-align: center;
        }
        .tsai-icon-email i{
            color: #743CF5;
            font-size: 80px;
        }

        
        .tsai-icon-email{
            padding:0px 20px 20px;

        }

        .sm-btn {
            margin: auto 105px;
        }

        .sm-btn button {
            width: 110px;
        }

        .tsai-wrap {
            display: flex;
            justify-content: center;
        }
        .tsai-wrap a {
            color: #444;
            text-decoration: none;
        }

        .tsai-wrap a h4:hover {
            /* color: #555; */
            text-shadow: 0px 3px 6px #ccc;
        }

        .logInActive {
            color: #743CF5;
            /* text-shadow: 0px 3px 6px #ccc; */
        }
        .t-checkbox{
            margin: 10px auto 0px;
        
        }
        .t-checkbox a{
            color: #ccc;
        }
        .t-sm-btn{
            width: 120px;
            margin: 0 auto 110px;
        }
        
        .t-logo{
            width: 180px;
            margin: 0 auto;
            display: none;
        }
        .tsai-btn button{
            margin: 5px;
        }
        .forget{
            cursor: pointer; 
        }
        .tsai-btn .bt-b-g3{
            border-color: green;
        }
        .longIn h4{
            cursor: pointer; 
        }
        .add-div{
            flex-direction: column;
        }
        @media screen and (max-width:767px) {
            .sm-btn {
                margin: auto 55px;
            }

            .sm-btn button {
                width: 110px;
            }

            .textRight {
                margin: 10px;
                position: relative;
                left: 22%;
            }
            .t-logo{
                width: 180px;
                margin: 0 auto;
                display:block;
                margin:auto;
            } 
            .t-logo img{
                width: 100%;
            }
            .t-sm-btn{
                width: 120px;
                margin: 0 10px 10px;
            }
            .margin {
                margin: 20vh auto;
                width: 90vw;
            }
            .t-sm-btn{
                width: 120px;
                margin: 0 auto 20px;
            }
            .tsai-icon i{
                display: none;
            }
            
        }
    
    
    
    
    </style>
