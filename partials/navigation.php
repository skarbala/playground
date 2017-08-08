<?php
$navigation = [
    "click me baby",
    "vyber si",
    "tabulka",
    "red alert",
    "zjavenie",
    "kalkulacka",
    "xpath training center",
    "zena alebo muz",
    "registracia",
    "move me",
    "stroop effect",
    "disabled",
    ];
$current_page = basename($_SERVER['REQUEST_URI'], ".php");

function makeLink($link)
{
    return strtolower(str_replace(" ", "", $link));
}

?>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">Ihrisko</a>
        </div>
        <ul class="nav navbar-nav">
            <?php foreach ($navigation as $navigationItem) {
                echo "<li ";
                if (makeLink($navigationItem) == $current_page) {
                    echo "class='active'";
                }
                echo ">";
                echo "<a href =" . makeLink($navigationItem) . ".php>";
                echo ucfirst($navigationItem);
                echo "</a>";
                echo "</li>";
            }
            ?>
        </ul>
    </div>
</nav>