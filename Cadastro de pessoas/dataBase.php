<?php
    #estabelecer conexão com o banco de dados
    $con = mysqli_connect("localhost:3306","root","","veiculos");
    # Check connection
    if (mysqli_connect_errno())
    {
        echo "Falha: ".mysqli_connect_error();
    }