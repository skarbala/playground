<!DOCTYPE html>
<html>
<?php include 'partials/head.php'; ?>

<body>
<?php include 'partials/navigation.php' ?>

    <div class="container">
        <div class="row">
            <h2>Tabulka</h2>
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
            <button class="btn" id="addColumn">Pridaj riadok</button>
            <button class="btn" id="addFiveColumns">Pridaj 5 riadkov</button>
            <select name="" id="">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
            </select>
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
    })
});

function addRow() {
    var current = $('.table tr:last td:first').text();
    var next = parseInt(current) + 1;
    $('.table').append("<tr><td>" + next + "</td><td>Jan</td><td>Hus</td></tr>");
}
</script>

</html>