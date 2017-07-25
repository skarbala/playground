<!DOCTYPE html>
<html>
<link href="https://fonts.googleapis.com/css?family=Lobster+Two" rel="stylesheet"><?php include 'partials/head.php'; ?>
<body>
<?php include 'partials/navigation.php' ?>
<style>
    div.col-md-8, select {
        margin-bottom: 20px;
    }

</style>
<div class="container">
    <h1 class="text-center">Xpath training center</h1>
    <div class="col-md-8 col-md-offset-2 button-group">
        <button class="btn">
            First one
        </button>
        <button class="btn">
            Second button
        </button>
        <button class="btn btn-default">
            Next button
        </button>
        <button class="btn btn-default">
            One more button
        </button>
        <button class="btn btn-danger">
            Danger
        </button>
        <button class="btn btn-success">
            Success
        </button>
        <button class="btn btn-warning">
            Warning
        </button>
    </div>
    <div class="col-md-8 col-md-offset-2">
        <div>
            <div>
                <select name="" id="" class="form-control">
                    <option value="">vyber si moznost</option>
                    <option value="1">Moznost 1</option>
                    <option value="2">Moznost 2</option>
                    <option value="3">Moznost 3</option>
                    <option value="4">Moznost 5</option>
                    <option value="5">Moznost 4</option>
                    <option value="6">Moznost 6</option>
                </select>
                <select name="" id="" class="form-control second-select">
                    <option value="">vyber si option</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                    <option value="4">Option 5</option>
                    <option value="5">Option 4</option>
                    <option value="6">Option 6</option>
                </select>
            </div>
        </div>
    </div>
    <div class="col-md-8 col-md-offset-2">
        <div>
            <div class="input-group">
                <input type="text" class="form-control">
                <span class="input-group-btn">
                <button class="btn btn-danger" type="button">Hit me!</button>
                </span>
            </div>
        </div>
    </div>
    <div class="col-md-8 col-md-offset-2">
        <div>
            <div>
                <label for="output" class=" control-label">Vysledok</label>
                <textarea class="form-control" rows="10" id="output">
                </textarea>
            </div>
        </div>
    </div>
</body>
<script>
    $(document).ready(function () {
        $("div.button-group button").click(function () {
            $("#output").val("You clicked " + $(this).text().trim());
        });

        $("select").change(function () {
            $("#output").val("You have chosen " + $(this).find(":selected").text())
        });

    })

</script>
</html>