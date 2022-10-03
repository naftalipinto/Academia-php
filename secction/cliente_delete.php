<?php
include("../conexao.php");
if(!empty($_GET['id_cliente'])){

    $id=$_GET['id_cliente'];

    $sql1="select * from cliente where id_cliente= $id";
    $sql2="select * from telefone_cli where id_cliente= $id";
$resc=mysqli_query($conectar,$sql1);
$rest=mysqli_query($conectar,$sql2);
if(mysqli_num_rows($resc)>0){

   $cldelete=" delete from cliente where id_cliente=$id";
   $delete=mysqli_query($conectar,$cldelete);

   $cldeletet=" delete from telefone_cli where id_cliente=$id";
   $deletet=mysqli_query($conectar,$cldeletet);
}}

header('location:cliente_lista.php');
    ?>