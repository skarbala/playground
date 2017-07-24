<!DOCTYPE html>
<html>
<?php include 'partials/head.php'; ?>
<body>
<?php include 'partials/navigation.php' ?>
<div class="container">
    <div class="row">
        <h2 class="text-center">Click me baby one more time</h2>
        <div class="col-md-6 col-md-offset-3">
            <div>
                <button id="clickMe" class="btn-block btn">Click me</button>
            </div>
        </div>

    </div>
    <div class="row text-center">
        <h1 id="clicks">0</h1>
        <p>klikov</p>
    </div>
</div>
</body>
<script>
    var clicks = 0;
    $(document).ready(function () {
        $("#clickMe").click(function () {
            $("#clicks").text(++clicks);
        })
    })
</script>

</html>