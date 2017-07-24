<!DOCTYPE html>
<html>
<?php include 'partials/head.php'; ?>

<body>
<?php include 'partials/navigation.php' ?>

    <div class="container">

        <div class="row">
            <h2 class="text-center">Tabulka</h2>
            <button class="btn" id="addColumn">Pridaj riadok</button>
            <button class="btn" id="addFiveColumns">Pridaj 5 riadkov</button>
            <button class="btn" id="addHundredColumns">Pridaj 100 riadkov</button>
            <table class="table">
                <thead>
                    <th>Id</th>
                    <th>Meno</th>
                    <th>Priezvisko</th>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Matko</td>
                        <td>Skarbala</td>
                    </tr>
                </tbody>
            </table>

        </div>
</body>
<script>
$(document).ready(function() {
    $('#addColumn').click(function() {
        addRow();
    });

    $('#addFiveColumns').click(function() {
        for (var i = 0; i < 5; i++) {
            addRow();
        }
    });
    $('#addHundredColumns').click(function() {
        for (var i = 0; i < 100; i++) {
            addRow();
        }
    });
});

function addRow() {
    var current = $('.table tr:last td:first').text();
    var next = parseInt(current) + 1;
    $('.table').append("<tr><td>" + next + "</td><td>Jan</td><td>Hus</td></tr>");
}
</script>

</html>