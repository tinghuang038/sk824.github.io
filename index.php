<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>嘶給 Skate Store</title>
    <style>
        /* *{
            border: solid 1px red;
        } */
        html, body{
            padding: 0px;
            margin: 0px;
            /* background: #666; */
            overflow-x: hidden;
        }

        /* 假的首頁 */
        /* .indexPage{
            position: absolute;
            left: 50vw;
            opacity: 0;
            transform: translate(-50%,0%);
            animation: op-fade-in 1s ease-in-out 1s;
            animation-fill-mode: forwards;
            display: none;
        } */

        .skateBoy,.skateWord{
            position: absolute;
            transform: scale(0.8) translateX(-50%);
            left: 50vw;
            top: 30vh;
            mix-blend-mode:multiply;
            animation: op-fade-out 1s ease-in-out 2.5s;
            animation-fill-mode: forwards;
        }
        .skateWord{
            transform: scale(1) translateX(-70%);
            top: 26vh;
        }
        .op-suge-logo{
            position: absolute;
            top: 40vh;
            opacity: 0;
            animation: sugeAni 2.5s ease-in-out;
            animation-fill-mode: forwards;
        }
        @keyframes sugeAni {
            0%{
                opacity: .5;
                left:100vw;
                transform: scale(5) translateX(100%);
            }
            100%{
                opacity: .5;
                left:0vw;
                transform: scale(5) translateX(-100%);
            }
        }
        @keyframes op-fade-out {
            0%{
                opacity: 1;
                transform:scale(0.8) translateX(-50%);
            }
            100%{
                opacity: 0;
                transform: scale(0.8) translateX(50%);
            }
        }
        @keyframes op-fade-in {
            0%{
                opacity: 0;
                transform: translate(-50%,1%);
            }
            100%{
                opacity: 1;
                transform: translate(-50%,0%);
            }
        }
    </style>
</head>
<body>
    <div class="op-ani">
        <img class="skateWord" src="./op-test/ani/sugeWord.gif" alt="">
        <img class="skateBoy" src="./op-test/ani/skateBoy.gif" alt="">
        <div class="op-suge-logo">
            <img src="./op-test/suge-logo.svg" alt="">
        </div>
    </div>
    <!-- <div class="indexPage">
        <img src="Desktop HD – 9@2x.jpg" alt=""> -->
        <!-- <img src="Desktop HD – 1.jpg" alt=""> -->
    <!-- </div> -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>
        setTimeout(
            function(){
                window.location.assign('./J-index-c.php');
            },3500);
    </script>
</body>
</html>