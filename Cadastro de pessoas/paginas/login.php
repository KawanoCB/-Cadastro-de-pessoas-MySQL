<?php
include "../config.php";
?>
<!DOCTYPE html>
<link rel="stylesheet" href="../template/CSS/style.css">
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        .pai {
            height: 100vh;
            background: #76bdff4f;
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url(../template/fundo-login.jpg);
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }

        .filho {
            background: #c1d1ffc4;
            align-items: center;
            flex-direction: column;
            justify-content: center;
            border-radius: 30px;
            flex-wrap: nowrap;
            box-shadow: 2px 2px 4px #0000005e;
        }

        form {
            display: grid;
        }

        h1 {
            display: contents;
        }
    </style>
</head>

<body>
    <div class="pai" style="padding: 0; border:0; display: flex; align-items: center; justify-content: center;">
        <div class="filho row g-3" style="padding:20px; width: 18rem; border: auto; display: flex;">
            <h1>Login</h1>
            <form method="post" action="<?php echo URL_BASE ?>autenticar.php">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="senha" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <div class="subm">
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
                <div class="cadas">
                    <a class="cadastro" href="cadastre-se.php">Cadastre-se</a>
                </div>
        </div>
    </div>
    </form>
</body>

</html>