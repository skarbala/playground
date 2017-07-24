<?php
$navigation = ["tabulka","zjavenie","kalkulacka"];
$current_page =  basename($_SERVER['REQUEST_URI'],".php");
 ?>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Ihrisko</a>
    </div>
    <ul class="nav navbar-nav">
      <?php foreach ($navigation as $navigationItem) {
        echo "<li ";
        if ($navigationItem == $current_page) {
          echo "class='active'";
        }
        echo">";
          echo "<a href =".$navigationItem.".php>";
          echo ucfirst($navigationItem);
          echo "</a>";
        echo "</li>";
      }
      ?>
    </ul>
  </div>
</nav>