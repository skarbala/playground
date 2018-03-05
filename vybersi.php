<!DOCTYPE html>
<!--suppress ALL -->
<html>
<script src="https://cdn.jsdelivr.net/npm/vue"></script>
<link href="https://fonts.googleapis.com/css?family=Roboto:500i" rel="stylesheet">
<?php include 'partials/head.php'; ?>
<style>
  body {
    background: url("img/pokemon/background.jpg") no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
  }

  h1 {
    margin-bottom: 30px;
  }

  h1, h3 {
    font-family: Roboto, sans-serif;
    font-size: 70px;
    color: #FFFFFF;
    text-shadow: 3px 3px 2px #68696b;
  }

  div.pokemon {
    margin-top: 50px;
  }

  select {
    margin-top: 30px;
  }

</style>
<body>
<?php include 'partials/navigation.php' ?>
<div class="container">
  <h1 class="text-center">Select 'em all!</h1>
  <div class="col-md-6 col-md-offset-3">
    <select class="form-control" v-model="selected">
      <option disabled value="">Please select one</option>
      <option v-for="option in options" v-bind:value="option">{{option.text}}</option>
    </select>
  </div>
  <div v-if="selected" class="col-md-10 col-md-offset-1 pokemon text-center">
    <img v-bind:src="'img/pokemon/'+selected.value+'.png'" alt="">
    <h3>I choose you {{selected.text}} !</h3>
  </div>
</div>
</body>
<script>
    new Vue({
        el: '.container',
        data: {
            selected: '',
            options: [
                {value: '01', text: 'Charmander'},
                {value: '02', text: 'Bulbasaur'},
                {value: '03', text: 'Squirtle'},
                {value: '04', text: 'Pikachu'},
                {value: '05', text: 'Diglett'},
                {value: '06', text: 'Geodude'}
            ]
        }
    })
</script>
</html>