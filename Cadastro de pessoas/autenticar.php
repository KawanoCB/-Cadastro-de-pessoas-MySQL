<?php
session_start();
print_r($_POST);
#incluir conexão com banco de dados
include "dataBase.php";
include "config.php";
#verificar de os dados estão vindo do formulário
if(isset($_POST['submit'])){
  #sim
  #realizar consulta na tabela 
  $email=$_POST['email'];
  $senha=($_POST['senha']); //Apesar que atualmente o padrão de crypt md5 não seja tão seguro
  $sql="SELECT id, nome, email, foto     
        FROM usuario
        WHERE email='$email' 
        AND senha='$senha'";
  echo $sql;
  $resultado=$con->query($sql);
?><br><br><?php  
  var_dump($resultado);   
  #verica se retornou algum registro
  if($resultado){
    if($resultado->num_rows>0){
      #sim
      $user=$resultado->fetch_array();
      #Armamazena as informações do usuário na sessão
      $_SESSION['user']=$user;
      #mensagem de sucesso
      $_SESSION['msg']="Sucesso!";
    }
  }else{
      #não
      #mensagem de falha
      $_SESSION['msg']="Falha!";
  }  
}   
?><br><br><?php  
#recarega para a página inicial
var_dump($_SESSION);
//header("Location: index.php");