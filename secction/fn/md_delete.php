<?php
include("../../conexao.php");
if(!empty($_GET['id_modalidade'])){

    $id=$_GET['id_modalidade'];

    $sql1=" select * from modalidade where id_modalidade= $id";
$resc=mysqli_query($conectar,$sql1);
if(mysqli_num_rows($resc)>0){

   $mdelete=" delete from modalidade where id_modalidade=$id";
   $delete=mysqli_query($conectar,$mdelete);

}}

header('location:../modalidade_lista.php');
    ?>