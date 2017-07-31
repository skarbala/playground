<?php
$email = "";
$password = "";
$password_repeat = "";
$name = "";
$surname = "";

if ($_POST) {
    $email = $_POST['email'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $password = $_POST['password'];
    $password_repeat = $_POST['password-repeat'];
}

function validate_password($password, $password_repeat)
{
    if ($_POST) {
        if (strlen($password) < 5 || ($password != $password_repeat)) {
            return true;
        }
        return false;
    }
}

function validate_empty($input)
{
    if ($_POST) {
        return empty($input);
    }
    return false;
}

function validate()
{
    foreach ($_POST as $key) {
        if (empty($key)) {
            return false;
        }
    }
    if (validate_password($_POST['password'], $_POST['password-repeat'])) {
        return false;
    }
    return true;
}

function registration_result(){
 if ($_POST) {
    if (validate()) {
        echo "<div class=\"alert alert-success\"><strong>Registracia uspesna!</strong></div>";
    } else {
        echo "<div class=\"alert alert-danger\"><strong>Registracia neuspesna!</strong> </div>";
    }
}

}

?>

<!DOCTYPE html>
<html>
<?php include 'partials/head.php'; ?>
<link href="https://fonts.googleapis.com/css?family=Montserrat:900" rel="stylesheet">

<style>
    div.result {
        margin-top: 20px;
    }

    h1 {
        font-family: Montserrat, serif;
        font-size: 50px;
        margin-bottom: 50px;
    }

</style>
<body>
<?php include 'partials/navigation.php' ?>
<div class="container">
    <h1 class="text-center">Registracia</h1>
    <div class="col-md-4 col-md-offset-4">
        <form action="" method="POST">
            <div class="form-group <? echo validate_empty($email) ? "has-error" : ""; ?>">
                <input type="email" class="form-control" name="email" placeholder="Email" value="<? echo $email ?>">
            </div>
            <div class="form-group <? echo validate_empty($name) ? "has-error" : ""; ?>">
                <input type="text" class="form-control" name="name" placeholder="Meno" value="<? echo $name ?>">
            </div>
            <div class="form-group <? echo validate_empty($surname) ? "has-error" : ""; ?>">
                <input type="text" class="form-control" name="surname" placeholder="Priezvisko"
                       value="<? echo $surname ?>">
            </div>
            <div class="form-group <? echo validate_password($password, $password_repeat) ? "has-error" : ""; ?>">
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <div class="form-group <? echo validate_password($password, $password_repeat) ? "has-error" : ""; ?>">
                <input type="password" class="form-control" name="password-repeat" placeholder="Password repeat">
            </div>
            <button type="submit" class="btn btn-success btn-lg btn-block">Registruj sa</button>
        </form>
        <div class="result text-center">
            <?registration_result()?>
        </div>
    </div>
</div>
</body>

</html>