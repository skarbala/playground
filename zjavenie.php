<!DOCTYPE html>
<html>
<?php include 'partials/head.php'; ?>
<link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">

<style>
    h1{
        font-family: Permanent Marker, sans-serif;
        font-size: 70px;
        margin-bottom: 60px;
    }
    #hideHim{
        display: none;
    }
    img.brano{
        margin:0 auto 20px auto;
        width:100%;

    }
    button.btn{
        border-radius: 0;
    }
    body{
        background-color: #f6f6f6;
    }
</style>
<body>
<?php include 'partials/navigation.php' ?>
    <div class="container">
        <h1 class ="text-center">Zjavenie</h1>
        <div class=" col-md-8 col-md-offset-2">
            <div class="brano">
            </div>

            <button id="showHim" class="btn btn-default btn-lg btn-block btn-warning">BUD ODVAZNY</button>
            <button id="hideHim" class= "btn btn-lg btn-danger btn-block">PREC S DIABLOM !!!</button>
        </div>
    </div>
</body>
<script>
$(document).ready(function() {
    $("#showHim").click(function() {
        $("#hideHim").delay(2500).fadeIn(500);

        $('div.brano').delay(2500).queue(function (next) {
            $('<img src="img/brano.jpg" alt="brano" class="brano">').hide().appendTo('div.brano').fadeIn(500);
            next();
        });
        $(this).hide();
    });
     $("#hideHim").click(function() {
        $("div.brano").html("").fadeOut(500);
        $(this).hide();
         $("#showHim").delay(1500).show(0);
    })
});

</script>

</html>