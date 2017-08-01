<!DOCTYPE html>
<html>
<link href="https://fonts.googleapis.com/css?family=Luckiest+Guy" rel="stylesheet">
<?php include 'partials/head.php'; ?>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>

<style>
    h1, h2 {
        font-family: Luckiest Guy, sans-serif;
        text-transform: uppercase;
    }
    h2 {
        font-size: 20px;
    }

    div.colours {
        margin-top: 50px;
    }
</style>
<body>
<?php include 'partials/navigation.php' ?>
<div class="container text-center">
    <h1>Stroop effect</h1>
    <h2>name the colours</h2>
</div>

<div class="colours text-center">
    <h1 style="color:#ff0e0e">Green</h1>
    <h1 style="color:#058006">Blue</h1>
    <h1 style="color:#12fcff">Yellow</h1>
    <h1 style="color:#ffbb43">Black</h1>
    <h1 style="color:#ff46d9">White</h1>
</div>
</body>
</html>