<!DOCTYPE html>
<html>
<?php include 'partials/head.php'; ?>
<body>
    <?php include 'partials/navigation.php' ?>
    <div class="container">
        <div class="row">
            <h2 class= "text-center">Kalkulacka</h2>
            <div class="col-md-6 col-md-offset-3">
                <div >
                    <input type="text" class="form-control" id="prvyInput" placeholder="prve cislo">
                    <input type="text" class="form-control" id="druhyInput" placeholder="druhe cislo">
                        <button id="spocitaj" class="btn btn-success btn-block">Spocitaj</button>
                        <button id="odpocitaj" class="btn btn-danger btn-block">Odpocitaj</button>
                </div>
                <input type="text" class="form-control" id="vysledok" placeholder="vysledok">
            </div>
        </div>
    </div>
</body>
<script>
document.getElementById("spocitaj").onclick = function spocitaj() {
    var firstNumber = parseInt(document.getElementById('prvyInput').value);
    var sceondNumber = parseInt(document.getElementById('druhyInput').value);
    document.getElementById("vysledok").value = firstNumber + sceondNumber;
}

document.getElementById("odpocitaj").onclick = function spocitaj() {
    var firstNumber = parseInt(document.getElementById('prvyInput').value);
    var sceondNumber = parseInt(document.getElementById('druhyInput').value);
    document.getElementById("vysledok").value = firstNumber - sceondNumber;

}
</script>

</html>