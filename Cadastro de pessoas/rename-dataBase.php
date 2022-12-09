<?php
    #estabelecer conexão com o banco de dados
    $con = mysqli_connect("sql300.epizy.com","epiz_33158967","","epiz_33158967_veiculos");
    # Check connection
    if (mysqli_connect_errno())
    {
        echo "Falha: ".mysqli_connect_error();
    }