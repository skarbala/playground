<!DOCTYPE html>
<html>
<?php include 'partials/head.php'; ?>

<body>
<?php include 'partials/navigation.php' ?>
    <div class="container">
        <div class="row">
            <h2>Zjavenie</h2>
            <button id="showHim" class="btn btn-success">ukaz mi</button>
            <button id="hideHim" class= "btn btn-danger">prec s diablom</button>
            <div class="row">
                <img style="display: none" src="img/brano.jpg" alt="brano" class="brano">
            </div>
        </div>
    </div>
</body>
<script>
$(document).ready(function() {
    $("#showHim").click(function() {
        $(".brano").fadeIn(500);
    });
     $("#hideHim").click(function() {
        $(".brano").fadeOut(500);
    })
});

</script>

</html>