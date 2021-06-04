<?php use App\controllers\AuthController;

require_once "../../vendor/autoload.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    session_start();
    $authcontroller = new AuthController();
    $authcontroller->login();
//    if (!) {
//        $error = "Mat khau tai khoan khong dung";
//    }
}
var_dump($_REQUEST['pwd']);
//if (isset($error)):
//echo $error;
//    <?php echo $error; ?><!----><?php //endif; ?>
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log in</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma-rtl.min.css">
    <style>
        .container {
            margin-top: 20%;
            width: 30%;
        }
        .button {
            width: 100%;
        }
        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
        }

        img.avatar {
            width: 40%;
            border-radius: 50%;
        }
    </style>
</head>
<body>

<form method="post">
    <div class="container">
        <div class="imgcontainer">
            <img src="../../uploads/download (2).jpeg" alt="Avatar" class="avatar">
        </div>
        <div class="field">
            <p class="control has-icons-left has-icons-right">
                <input class="input" name="email" type="email" placeholder="Email">
                <span class="icon is-small is-left">
      <i class="fas fa-envelope"></i>
    </span>
                <span class="icon is-small is-right">
      <i class="fas fa-check"></i>
    </span>
            </p>
        </div>
        <div class="field">
            <p class="control has-icons-left">
                <input class="input" name="pwd" type="password" placeholder="Password">
                <span class="icon is-small is-left">
      <i class="fas fa-lock"></i>
    </span>
            </p>
        </div>
        <div class="field">
            <p class="control">
                <button class="button is-success">
                    Login
                </button>
            </p>
        </div>
    </div>
</form>



<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
        crossorigin="anonymous"></script>
</body>
</html>