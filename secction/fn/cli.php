<?php
//invocando o ficheiro de conex�o
include("../../conexao.php");//ficheiro que faz a conexao com a base de dados.
//echo"valor do text ".$_POST["form"];

//verifica se existe a variavel "form",caso exista, executa tudo que esta dentro do comando if.

//abaixo temos a as variaveis passadas com o metodo post.
$nome=$_POST['ip_nome'];
$data=$_POST['ip_dt_nasc'];
$bi=$_POST['ip_bi'];
$morada=$_POST['ip_morada'];
$telefone=$_POST['ip_tlf'];

$sql="INSERT INTO cliente(nome,data_nasc,morada,bi) VALUES('$nome','$data','$morada','$bi')";//para este exemplo criem uma tabela com o nome "pessoa" no mysql com os campos :id,nome,sexo,dataNascimento. o id ser� auto-incremento.
mysqli_query($conectar,$sql);
$sql1="SELECT * FROM cliente WHERE nome = '$nome'";
$resultado = mysqli_query($conectar,$sql1);
while( $dados = mysqli_fetch_array($resultado)){
    $cod=$dados["id_cliente"];
}

$sql2="INSERT INTO telefone_cli(numero,id_cliente) VALUES('$telefone',$cod)";


 if(mysqli_query($conectar,$sql2)){

	
    header( 'location:../cliente.php');
}else{

	echo "erro:".mysqli_error($conectar);
}
mysqli_close($conectar);





?>


