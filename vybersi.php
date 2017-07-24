<!DOCTYPE html>
<html>
<?php include 'partials/head.php'; ?>
<link href="https://fonts.googleapis.com/css?family=Roboto:500i" rel="stylesheet">
<style>
    h1 {
        font-family: Roboto, sans-serif;
        font-size: 50px;
    }
</style>
<body>
<?php include 'partials/navigation.php' ?>
<div class="container">
    <h1 class="text-center">Select 'em all!</h1>
    <div class="col-md-4 col-md-offset-4">
        <select class="form-control">
            <option value="">select your pokemon</option>
            <option value="1">Charmander</option>
            <option value="2">Bulbasaur</option>
            <option value="3">Squirtle</option>
            <option value="4">Pikachu</option>
            <option value="5">Diglett</option>
            <option value="6">Geodude</option>
        </select>
    </div>
    <div class="pokemon">

    </div>

</div>
</body>
<script>
    var selectedPokemon;

    $(document).ready(function () {
        $("select").change(function () {
           selectedPokemon =$(this).find(":selected").val();
            if (selectedPokemon){
                $("div.pokemon").html("<img src=\"img/pokemon/"+selectedPokemon+".png\" alt=\"\">");
            }
       });

   })

</script>
</html>