<div class="cards" style="padding:20px; display:flex; ">
    <?php
    require_once "../dataBase.php";
    $sql = "SELECT * FROM usuario";
    $resultado = $con->query($sql);

    while ($usuario = $resultado->fetch_array()) {
        echo '      
            <div class="padd">
                <div class="cards-body cards-align">
                    <img class="card-img-top perfil" src="' . $usuario['foto'] . '" alt="Card image cap">
                        <h5 class="card-title">' . $usuario['nome'] . '</h5>
                        <p class="card-text">' . $usuario['email'] . '</p>
                    <div>
                        <a type="button" name="editar" class="btn btn-primary">editar</a>
                        <input type="button" value="Excluir" href="excluir.php?=id' . $usuario['id'] . '" class="btn btn-primary bx" style="--bs-btn-color: #fff;
                        --bs-btn-bg: #ff0000;
                        --bs-btn-border-color: #fd0d0d;
                        --bs-btn-hover-color: #fff;
                        --bs-btn-hover-bg: #d70b0b;
                        --bs-btn-hover-border-color: #ca0a0a;
                        --bs-btn-focus-shadow-rgb: 49,132,253;
                        --bs-btn-active-color: #fff;
                        --bs-btn-active-bg: #ca0a0a;
                        --bs-btn-active-border-color: #be0a0a;
                        --bs-btn-active-shadow: inset 0 3px 5pxrgba(0, 0, 0, 0.125);
                        --bs-btn-disabled-color: #fff;
                        --bs-btn-disabled-bg: #fd0d0d;
                        --bs-btn-disabled-border-color: #fd0d0d;">                    
                    </div>                       
                </div>
            </div>';
    }
    ?>
</div>