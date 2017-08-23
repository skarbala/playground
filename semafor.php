<!DOCTYPE html>
<html>
<link href="https://fonts.googleapis.com/css?family=Montserrat:900" rel="stylesheet">
<?php include 'partials/head.php'; ?>
<style>
    h1 {
        font-size: 50px;
        font-family: Montserrat, serif;
        margin-bottom: 150px;
    }
    body{
        background-color: #f6f6f6;
    }
    div.light{
        height: 200px;
        width:200px;
        background-color: rgba(205, 58, 63,1);
        margin:0 auto;
        border-radius: 50%;
        cursor:pointer;
    }
    div.light:hover{
        background-color: rgba(10, 129, 0,1);
    }
    div.light:active{
        background-color: rgb(191, 111, 7);

    }
</style>
<body>
<?php include 'partials/navigation.php' ?>

<div class="container text-center">
    <h1>SeMaFor</h1>
    <div class="light"></div>
</div>
</body>
</html>