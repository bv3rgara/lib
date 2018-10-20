<?php
include ("index.php");
?>
<html>
    <style>
        @import url("https://fonts.googleapis.com/css?family=Raleway");
        * {
            box-sizing: border-box;
        }
        .button {
            position: relative;
            padding: 1em 1.5em;
            border: none;
            background-color: transparent;
            cursor: pointer;
            outline: none;
            font-size: 18px;
            margin: 1em 0.8em;
        }
        .button.type1 {
            color: #566473;
        }
        .button.type1.type1::after, .button.type1.type1::before {
            content: "";
            display: block;
            position: absolute;
            width: 20%;
            height: 20%;
            border: 2px solid;
            transition: all 0.6s ease;
            border-radius: 2px;
        }
        .button.type1.type1::after {
            bottom: 0;
            right: 0;
            border-top-color: transparent;
            border-left-color: transparent;
            border-bottom-color: #566473;
            border-right-color: #566473;
        }
        .button.type1.type1::before {
            top: 0;
            left: 0;
            border-bottom-color: transparent;
            border-right-color: transparent;
            border-top-color: #566473;
            border-left-color: #566473;
        }
        .button.type1.type1:hover:after, .button.type1.type1:hover:before {
            width: 100%;
            height: 100%;
        }
        .button.type2 {
            color: #16a085;
        }
        .button.type2.type2:after, .button.type2.type2:before {
            content: "";
            display: block;
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: #16a085;
            transition: all 0.3s ease;
            transform: scale(0.85);
        }
        .button.type2.type2:hover:before {
            top: 0;
            transform: scale(1);
        }
        .button.type2.type2:hover:after {
            transform: scale(1);
        }
        .button.type3 {
            color: #435a6b;
        }
        .button.type3.type3::after, .button.type3.type3::before {
            content: "";
            display: block;
            position: absolute;
            width: 20%;
            height: 20%;
            border: 2px solid;
            transition: all 0.6s ease;
            border-radius: 2px;
        }
        .button.type3.type3::after {
            bottom: 0;
            right: 0;
            border-top-color: transparent;
            border-left-color: transparent;
            border-bottom-color: #435a6b;
            border-right-color: #435a6b;
        }
        .button.type3.type3::before {
            top: 0;
            left: 0;
            border-bottom-color: transparent;
            border-right-color: transparent;
            border-top-color: #435a6b;
            border-left-color: #435a6b;
        }
        .button.type3.type3:hover:after, .button.type3.type3:hover:before {
            border-bottom-color: #435a6b;
            border-right-color: #435a6b;
            border-top-color: #435a6b;
            border-left-color: #435a6b;
            width: 100%;
            height: 100%;
        }
    </style>
    <body> 
        <div class="container">
            <table id="myTable" class="table table-hover">    
                <h1>Efectos en Botones</h1>   
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <button class="button type1">
                            Efecto 1
                        </button>
                    </div>
                    <div class="form-group">
                        <button class="button type2">
                            Efecto 2
                        </button>
                    </div>
                    <div class="form-group">
                        <button class="button type3">
                            Efecto 3
                        </button>
                    </div>
            </form>
            </table>
        </div>
    </body>
</html>