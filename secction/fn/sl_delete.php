<?php
include("../../conexao.php");
if(!empty($_GET['id_sala'])){

    $id=$_GET['id_sala'];

    $sql1=" select * from sala where id_sala= $id";
$resc=mysqli_query($conectar,$sql1);
if(mysqli_num_rows($resc)>0){

   $sdelete=" delete from sala where id_sala=$id";
   $delete=mysqli_query($conectar,$sdelete);

}}

header('location:../espaco_lista.php');
    ?>