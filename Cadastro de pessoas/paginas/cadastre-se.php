<?php
include "../config.php";
//include "./consultabanco.php";
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
                            <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome" aria-label="nome">
                        </div>
                        <div class="col-sm-">
                            <input type="text" name="email" id="email" class="form-control" placeholder="Email" aria-label="email">
                        </div>
                        <div class="col-sm-">
                            <input type="password" placeholder="Digite uma senha" name="senha" id="senha" class="form-control" aria-label="senha">
                        </div>
                        <div class="col-sm-">
                            <input type="password" placeholder="Confirme sua senha" name="senha2" id="senha2" class="form-control" aria-label="senha">
                        </div>
                        <div class="col-sm- box4">
                            <input type="file" id="foto" name="foto" accept="image/*" class="form-control">
                        </div>
                        <div class="col-sm- row g- colum-9" style="padding: 15px 7px; width: 100%; margin-left: initial;">
                            <input type="submit" onclick="autenticarsenhas(event)" name="enviar" value="Enviar" class="btn btn-primary" />
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
            <script>
                function autenticarsenhas(event) {
                    // Create arrays of property names
                    var aProps = document.getElementById('nome').value;
                    var aProps = document.getElementById('email').value;
                    var aProps = document.getElementById('senha').value;
                    var bProps = document.getElementById('senha2').value;
                    var aProps = document.getElementById('foto').value;

                    if (document.getElementById("nome").value.length < 3) {
                        alert('Por favor, preencha todos os campos!');
                        //document.getElementById("senha2").focus();
                        //return false
                        event.preventDefault();
                    }
                    if (document.getElementById("email").value.length < 3) {
                        alert('Por favor, preencha todos os campos!');
                        //document.getElementById("senha2").focus();
                        //return false
                        event.preventDefault();
                    }
                    if (document.getElementById("foto").value.length < 1) {
                        alert('Por favor, escolha uma foto de perfil!');
                        //document.getElementById("senha2").focus();
                        //return false
                        event.preventDefault();
                    }
                    // Verifica caso os campos estejam com menos de 3 caracteres
                    if (document.getElementById("senha").value.length < 3) {
                        //alert('Por favor, preencha a senha!');
                        //document.getElementById("senha").focus();
                        //return false
                        event.preventDefault();

                        if (document.getElementById("senha2").value.length < 3) {
                            alert('Por favor, utilize uma senha maior!');
                            //document.getElementById("senha2").focus();
                            //return false
                            event.preventDefault();
                        }
                    }

                    if (document.getElementById("senha").value != document.getElementById("senha2").value) {
                        //return false
                        alert("Senhas incorretas!");
                        event.preventDefault();               
                    }

                    <?php
                            if (isset($_POST['enviar'])) {
                                $arquivo = "../template/imagens/" . $_FILES["foto"]["name"];
                                if (move_uploaded_file($_FILES["foto"]["tmp_name"], $arquivo)) {
                            
                                    require_once "../dataBase.php";
                                    #executar consulta no BD
                                    $password = mysqli_real_escape_string($con, $_POST["senha"]);  
                                    $password = md5($password);
                                    $sql = "INSERT INTO usuario (nome, email, senha, foto) 
                                    VALUES('{$_POST['nome']}','{$_POST['email']}','{$password}','{$arquivo}')";                                                                                    
                                    //echo $sql;
                                    if (!$con->query($sql)) {
                                        echo "Falha ao salvar registro!";                                
                                    }
                                }
                            }
                        ?>

                }
            </script>
        </div>
    </div>
    </form>
</body>

</html>
