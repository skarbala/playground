<!DOCTYPE html>
<html>
<?php include 'partials/head.php'; ?>
<link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">

<style>
    h1 {
        font-family: Permanent Marker, sans-serif;
        font-size: 50px;
    }
    img{
        max-width:800px;
        -webkit-box-shadow: 0px 0px 179px -17px rgba(0,0,0,0.75);
        -moz-box-shadow: 0px 0px 179px -17px rgba(0,0,0,0.75);
        box-shadow: 0px 0px 179px -17px rgba(0,0,0,0.75);
    }

    div.radio input{
        float:left;
    }

</style>

<body>
<?php include 'partials/navigation.php' ?>
<div class="container">
    <div class="align-middle text-center">
        <h1>Zena alebo muz?</h1>
        <img src="img/conchita.jpg" alt="">
        <div class="radio">
            <label><input type="radio" name="optradio">Muz</label>
        </div>
        <div class="radio">
            <label><input type="radio" name="optradio">Zena</label>
        </div>
    </div>
</div>
</body>


</html>