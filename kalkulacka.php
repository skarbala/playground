<!DOCTYPE html>
<html>
<?php include 'partials/head.php'; ?>
<style>
    input {
        margin-bottom: 10px;
    }

    button.btn {
        margin-bottom: 20px;
    }
    body{
        background: url("img/gplaypattern.png");
    }
</style>
<body>
<?php include 'partials/navigation.php' ?>
<div class="container">
    <div class="row">
        <h2 class="text-center">Kalkulacka</h2>
        <div class="col-md-6 col-md-offset-3">
            <div>
                <div>
                    <input type="text" class="form-control" id="prvyInput" placeholder="prve cislo">
                </div>
                <div>
                    <input type="text" class="form-control" id="druhyInput" placeholder="druhe cislo">
                </div>
                <button id="spocitaj" class="btn btn-success col-md-6">Spocitaj</button>
                <button id="odpocitaj" class="btn btn-danger col-md-6">Odpocitaj</button>
            </div>
            <input type="text" class="form-control" id="vysledok" placeholder="vysledok">
        </div>
    </div>
</div>
</body>
<script>
    $(document).ready(function () {

        function validateInput() {
            var prvyInput = $("#prvyInput");
            if (!$.isNumeric(prvyInput.val())) {
                $(prvyInput).parent().addClass("has-error");
                return false;
            }
            $(prvyInput).parent().removeClass("has-error");
            return true;
        }

        function validateSecondInput() {
            var druhyInput = $("#druhyInput");
            if (!$.isNumeric(druhyInput.val())) {
                $(druhyInput).parent().addClass("has-error");
                return false;
            }
            $(druhyInput).parent().removeClass("has-error");
            return true;
        }

        $("#spocitaj").click(function () {
            validateInput();
            validateSecondInput();
            if (validateInput() && validateSecondInput()) {
                $("#vysledok").val(parseInt($("#prvyInput").val()) + parseInt($("#druhyInput").val()));
            }
        });

        $("#odpocitaj").click(function () {
            validateInput();
            validateSecondInput();
            if (validateInput() && validateSecondInput()) {
                $("#vysledok").val(parseInt($("#prvyInput").val()) - parseInt($("#druhyInput").val()));
            }
        });

    });

</script>

</html>