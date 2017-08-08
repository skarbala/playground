<!DOCTYPE html>
<html>
<?php include 'partials/head.php'; ?>
<link href="https://fonts.googleapis.com/css?family=Montserrat:900" rel="stylesheet">
<style>
    h1 {
        font-size: 50px;
        font-family: Montserrat, serif;
        margin-bottom: 50px;
    }
    body{
        background-color: #f6f6f6;
    }

</style>

<body>
<?php include 'partials/navigation.php' ?>
<div class="container text-center">
    <h1>Nemenne</h1>
    <div class="col-md-6 col-md-offset-3">
        <div class="form-horizontal">
            <div class="form-group">
                <label for="text" class="col-sm-2 control-label">Meno</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" value="Eva Mazikova" disabled>
                </div>
            </div>
            <div class="form-group">
                <label for="sel1" class="col-sm-2 control-label">Zamestnanie</label>
                <div class="col-sm-10">
                    <select class="form-control" id="sel1" disabled>
                        <option>Hudobny drahokam</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="sel1" class="col-sm-2 control-label">Vek</label>
                <div class="col-sm-10">
                    <select class="form-control" id="sel1">
                        <option disabled>40-50</option>
                        <option disabled>50-60</option>
                        <option>194+</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default btn-block btn-danger" disabled>Mna nestlacis</button>
                    <button type="submit" class="btn btn-default btn-block btn-success" >Mna stlacis ale nic nespravim</button>
                </div>
            </div>
        </div>
    </div>
</div>
</body>


</html>