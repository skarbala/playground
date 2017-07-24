<!DOCTYPE html>
<html>
<?php include 'partials/head.php'; ?>
<link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">

<style>
    h1{
        font-family: Permanent Marker, sans-serif;
        font-size: 50px;
    }
</style>
<body>
<?php include 'partials/navigation.php' ?>
    <div class="container">
        <h1 class ="text-center">Zjavenie</h1>
        <div class="row">
            <button id="showHim" class="btn  btn-lg">ukaz mi</button>
            <button id="hideHim" class= "btn btn-lg">prec s diablom</button>
            <div class="row">
                <img style="display: none" src="img/brano.jpg" alt="brano" class="brano">
            </div>
        </div>
    </div>
</body>
<script>
$(document).ready(function() {
    $("#showHim").click(function() {
        $(".brano").delay(1500).fadeIn(1500);
    });
     $("#hideHim").click(function() {
        $(".brano").fadeOut(500);
    })
});

</script>

</html>