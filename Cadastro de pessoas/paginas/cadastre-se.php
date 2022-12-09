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
            <h1>Cadastre-se</h1>
            <form method="POST" enctype="multipart/form-data" style="display: flex; flex-direction: column; flex-wrap: nowrap; justify-content: center; align-items: center;">
                <div class="cadast">
                    <div class="row g-3" style="display: block; margin-left: initial;">
                        <div class="col-sm-">
                            <input type="text" name="nome" class="form-control" placeholder="Nome" aria-label="nome">
                        </div>
                        <div class="col-sm-">
                            <input type="text" name="email" class="form-control" placeholder="Email" aria-label="email">
                        </div>
                        <div class="col-sm-">
                            <input type="password" name="senha" class="form-control" placeholder="Senha" aria-label="senha">
                        </div>
                        <div class="col-sm-">
                            <input type="password" name="senha2" class="form-control" placeholder="Senha" aria-label="senha">
                        </div>
                        <div class="col-sm- box4">
                            <input type="file" id="foto" name="foto" accept="image/*" class="form-control">
                        </div>
                        <div class="col-sm- row g- colum-9" style="padding: 15px 7px; width: 100%; margin-left: initial;">
                            <input type="submit" name="enviar" value="Enviar" class="btn btn-primary" />
                        </div>
                        <div class="cadas">
                            <a class="cadastro" href="login.php">Login</a>
                        </div>
                    </div>
                    <!--div class="row g-3 colun-8">
                        <img src="../template/icon.png" alt="Selecione uma imagem" id="imgPhoto">
                    </div-->
                </div>
            </form>
            <?php
            if (isset($_POST['enviar'])) {
                //if (isset($_POST['senha' == 'senha2'])) {
                $arquivo = "../template/imagens/" . $_FILES["foto"]["name"];
                if (move_uploaded_file($_FILES["foto"]["tmp_name"], $arquivo)) {

                    require_once "../dataBase.php";
                    #executar consulta no BD
                    $sql = "INSERT INTO usuario (nome, email, senha, foto) 
                    VALUES('{$_POST['nome']}','{$_POST['email']}','{$_POST['senha']}','{$arquivo}')";

                    //echo $sql;
                    if (!$con->query($sql)) {
                        echo "Falha ao salvar registro!";
                    }
                }
                //}else{echo"Senhas incorretas";}
            }
            ?>
        </div>
    </div>
    </form>
</body>

</html>