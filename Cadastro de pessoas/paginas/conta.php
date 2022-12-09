<?php
include "../config.php";
include "../template/header.php";
?>
<link rel="stylesheet" href="../template/CSS/style.css">
<main class="conta">
    <section>
        <div class="corpo">
            <div style="padding:15px">
                <form method="POST" enctype="multipart/form-data" style="display: flex; flex-direction: column; flex-wrap: nowrap; justify-content: center; align-items: center;">
                    <div class="cadast">
                        <div class="row g-3 colun-7">
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
                            <div class="col-sm- row g-" style="padding: 15px 7px; width: 100%;">
                                <input type="submit" name="enviar" value="Enviar" class="btn btn-primary" />
                            </div>
                        </div>
                        <div class="row g-3 colun-8">
                            <img src="../template/icon.png" alt="Selecione uma imagem" id="imgPhoto">
                        </div>
                    </div>
                </form>

            </div>
            <hr />
                                   
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
           
            include "../paginas/listaContas.php";
            ?>
        </div>
    </section>
</main>
<?php
include "../template/footer.php";
?>
<script src="../script/imputfile.js"></script>
</body>

</html>