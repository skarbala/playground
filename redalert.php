<!DOCTYPE html>
<html>
<?php include 'partials/head.php'; ?>
<link href="https://fonts.googleapis.com/css?family=Orbitron:900" rel="stylesheet">
<style>
    body {
        background: url("img/carbon_fibre.png");
    }

    a.button {

        display: block;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        width: 500px;
        padding: 32px 43px;
        font-family: Orbitron, cursive;
        font-size: 50px;
        line-height: 26px;
        text-decoration: none;
        color: #FFF;
        text-shadow: 0 1px 2px rgba(0, 0, 0, 0.75);
        background: #5e0d0c;
        outline: none;
        border-radius: 15px;
        border: 1px solid #4c0300;
        box-shadow: inset 2px 2px 0px rgba(255, 255, 255, 0.25), /* highlight */ inset 0 0 6px #a23227, /* inner glow */ inset 0 80px 80px -40px #ac3223, /* gradient */ 2px 2px 3px rgba(0, 0, 0, 0.75); /* shadow */

        position: relative;
        overflow: visible; /* IE9 & 10 */
        -webkit-transition: 500ms linear;
        -moz-transition: 500ms linear;
        -o-transition: 500ms linear;
        transition: 500ms linear;
        margin: 30px auto;
    }

    a.button::before {
        content: '';
        display: block;
        position: absolute;
        top: -7px;
        left: -3px;
        right: 0;
        height: 23px;

    }

    .button:hover {
        background: #a61715;
        text-shadow: 0 1px 2px rgba(0, 0, 0, 0.75), 0 0 40px #FFF;
        box-shadow: inset 1px 1px 0px rgba(255, 255, 255, 0.25), /* highlight */ inset 0 0 6px #da3b2c, /* inner glow */ inset 0 80px 80px -40px #dd4330, /* gradient */ 1px 1px 3px rgba(0, 0, 0, 0.75); /* shadow */

    }

    .button:active {
        box-shadow: inset 1px 1px 0px rgba(255, 255, 255, 0.25), /* highlight */ inset 0 0 6px #da3b2c, /* inner glow */ inset 0 80px 80px -40px #dd4330, /* gradient */ 0px 0px 0px rgba(255, 255, 255, 0.25); /* shadow */

        -webkit-transition: 50ms linear;
        -moz-transition: 50ms linear;
        -o-transition: 50ms linear;
        transition: 50ms linear;
    }

    .centerer {
        display: table-cell;
        vertical-align: middle;
        text-align: center;
        /* noise image */
    }

    .bg {
        width:90%;
        display: table;
        margin: 0 auto;
    }

    .result {
        margin-top: 50px;
    }

    h1 {
        color: #fff;
        font-family: Orbitron, cursive;
        font-size: 60px;
    }


</style>

<body>
<?php include 'partials/navigation.php' ?>
<div class="bg">
    <div class="centerer">
        <a href="#" class="button" id="alert1">RED ALERT 1</a>
        <a href="#" class="button" id="alert2">RED ALERT 2</a>
        <a href="#" class="button" id="alert3">RED ALERT 3</a>
        <div class="result">
            <h1></h1>
        </div>
    </div>

</div>
</body>
<script>
    $(document).ready(function () {
        var result = $("div.result h1");
        $("#alert1").click(function () {
            alert("First alert!");
            result.text("Kirov Reporting");
        });
        $("#alert2").click(function () {
            var r = confirm("Second alert!");
            if (r == true) {
                result.text("Helium mix optimal");
            } else {
                result.text("Negative");
            }
        });

        $("#alert3").click(function () {
            var comradName = prompt("Enter your name comrade", "");
            if (comradName.trim()) {
                result.text("Waiting for your commands " + comradName);
            } else {
                result.text("Negative");
            }
        });
    });
</script>

</html>