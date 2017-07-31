<!DOCTYPE html>
<html>
<?php include 'partials/head.php'; ?>
<link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">

<style>
    h1{
        font-family: Permanent Marker, sans-serif;
        font-size: 50px;
    }
    #hideHim{
        display: none;
    }
    img{
        margin: 20px auto;
        display: block;
        width: auto;
    }
    button.btn{
        border-radius: 0px;
    }
</style>
<body>
<?php include 'partials/navigation.php' ?>
    <div class="container">
        <h1 class ="text-center">Zjavenie</h1>
        <div class="row col-md-8 col-md-offset-2">
            <button id="showHim" class="btn btn-default btn-lg btn-block">ukaz mi</button>
                <img style="display: none" src="img/brano.jpg" alt="brano" class="brano">
            <button id="hideHim" class= "btn btn-lg btn-danger btn-block">prec s diablom !!!</button>
        </div>
    </div>
</body>
<script>
$(document).ready(function() {
    $("#showHim").click(function() {
        $("#hideHim").delay(1500).show(0);
        $(".brano").delay(1000).fadeIn(500);
        $(this).hide();
    });
     $("#hideHim").click(function() {
        $(".brano").fadeOut(500);
        $(this).hide();
         $("#showHim").delay(500).show(0);
    })
});

</script>

</html>