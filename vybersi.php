<!DOCTYPE html>
<!--suppress ALL -->
<html>
<?php include 'partials/head.php'; ?>
<link href="https://fonts.googleapis.com/css?family=Roboto:500i" rel="stylesheet">
<style>
    h1 {
        font-family: Roboto, sans-serif;
        font-size: 50px;
    }
    div.pokemon{
        margin-top: 50px;
    }
    select{
        margin-top: 30px;
    }
</style>
<body>
<?php include 'partials/navigation.php' ?>
<div class="container">
    <h1 class="text-center">Select 'em all!</h1>
    <div class="col-md-4 col-md-offset-4">
        <select class="form-control">
            <option value="">select your pokemon</option>
            <option value="01">Charmander</option>
            <option value="02">Bulbasaur</option>
            <option value="03">Squirtle</option>
            <option value="04">Pikachu</option>
            <option value="05">Diglett</option>
            <option value="06">Geodude</option>
        </select>
        <div class="pokemon text-center">
        </div>
    </div>
</div>
</body>
<script>
    var selectedPokemon;
    $(document).ready(function () {
        $("select").change(function () {
            selectedPokemon = $(this).find(":selected");
            if (selectedPokemon.val()) {
                $("div.pokemon")
                    .html("<img src=\"img/pokemon/" + selectedPokemon.val() + ".png\" alt=\"\">")
                    .append("<h3>I choose you "+selectedPokemon.text()+" !</h3>");
            }
        });

    })

</script>
</html>