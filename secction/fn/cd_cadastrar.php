<?php
//invocando o ficheiro de conex�o
include("../../conexao.php");//ficheiro que faz a conexao com a base de dados.
//echo"valor do text ".$_POST["form"];

//verifica se existe a variavel "form",caso exista, executa tudo que esta dentro do comando if.

//abaixo temos a as variaveis passadas com o metodo post.
$datain=$_POST['ip_dt_in'];
$dataout=$_POST['ip_dt_out'];
$valor=$_POST['ip_valor'];
$forma=$_POST['ip_forma'];
$aluno=$_POST['ip_cliente'];

$sql1="SELECT * FROM cliente WHERE nome = '$aluno'";
$resultado = mysqli_query($conectar,$sql1);
while( $dados = mysqli_fetch_array($resultado)){
    $nome=$dados["nome"];
    $morada=$dados["morada"];
    $data=$dados["data_nasc"];
    $bi=$dados["bi"];
    $idc=["id_cliente"];
}

$sql2="INSERT INTO aluno(nome,morada,data_nasc,bi) VALUES('$nome','$morada','$data','$bi')";
$resultado = mysqli_query($conectar,$sql2);

$sql3="SELECT * FROM aluno WHERE nome = '$nome'";
$resultado = mysqli_query($conectar,$sql3);
while( $dados = mysqli_fetch_array($resultado)){
    $cod=$dados["id_aluno"];
}
$sql4="INSERT INTO contrato(forma,valor,dt_in,dt_out,id_aluno) VALUES('$forma','$valor','$datain','$dataout','$cod')";


 if(mysqli_query($conectar,$sql4)){

	
    header( 'location:../contrato.php');
}else{

	echo "erro:".mysqli_error($conectar);
}
mysqli_close($conectar);





?>


