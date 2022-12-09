<?php
require_once "../dataBase.php";
$id=$_GET['id'];
$sql="DELETE FROM usuario WHERE id=$id";
$resultado=$con->query($sql);
header("Location: ../index.php");