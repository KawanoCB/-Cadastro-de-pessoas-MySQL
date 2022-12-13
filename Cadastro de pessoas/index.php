<?php
session_start();
    if(!isset($_SESSION['user'])){
    header("Location: ./paginas/login.php");
    }
    include "config.php";
    include "./template/header.php";
?>
<link rel="stylesheet" href="./template/CSS/style.css">
<style>
    .main{background-image: url(./template/);}
</style>
    <main class="index">
        <section>    
            <div class="corpo">
                <div class="home" style="color: aliceblue;">
                    <H2>Bem vindo ao 'Cadastro de pessoas'</H2>
                </div> 
            </div>   
        </section>
    </main>
  <?php
      include "./template/footer.php";
  ?>
</body>
</html>