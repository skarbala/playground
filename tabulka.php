<?php
$rows = rand(1, 100);
$name = ["Martin", "Florian", "Fero", "Vendelin", "Andrej", "Peter", "Pavol", "Alfonz", "Patrik"];
$surname = ["Premrdal", "Toth", "Herák", "Bihary", "Vyhonský", "Šuška", "Adamec", "Obsust", "Plesivec"];

function getRandomNumber()
{
    return rand(100000, 999999);
}

?>
<!DOCTYPE html>
<html>
<?php include 'partials/head.php'; ?>
<link href="https://fonts.googleapis.com/css?family=Montserrat:900" rel="stylesheet">
<style>
    body {
        background-color: #EEEFF7;
    }

    * {
        color: #31353D;
    }

    button {
        background-color: #92CDCF;
    }

    h1 {
        font-family: Montserrat, serif;
        font-size: 50px;
    }
</style>
<body>
<?php include 'partials/navigation.php' ?>
<div class="container">
    <h1 class="text-center">Nahodna tabulka</h1>
    <div class="row">
        <table class="table table-striped table-hover">
            <thead>
            <th>Id</th>
            <th>Meno</th>
            <th>Priezvisko</th>
            <th>Cislo</th>
            </thead>
            <tbody>
            <?php for ($i = 1; $i < $rows + 1; $i++) {
                echo "<tr>";
                echo "<td>";
                echo $i;
                echo "</td>";
                echo "<td>";
                echo $name[array_rand($name)];
                echo "</td>";
                echo "<td>";
                echo $surname[array_rand($surname)];
                echo "</td>";
                echo "<td>";
                echo getRandomNumber();
                echo "</td>";
                echo "</tr>";
            } ?>
            </tbody>
        </table>
    </div>
</body>
</html>