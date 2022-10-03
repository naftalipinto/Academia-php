<?php
//invocando o ficheiro de conex�o
include("../../conexao.php");//ficheiro que faz a conexao com a base de dados.
//echo"valor do text ".$_POST["form"];

//verifica se existe a variavel "form",caso exista, executa tudo que esta dentro do comando if.

//abaixo temos a as variaveis passadas com o metodo post.
$nome=$_POST['ip_nome'];
$data=$_POST['ip_dt_nasc'];
$bi=$_POST['ip_bi'];
$senha=$_POST['ip_senha'];
$acesso=$_POST['ip_acesso'];

$sql="INSERT INTO funcionario(nome,data_nasc,bi,acesso,senha) VALUES('$nome','$data','$bi','$acesso','$senha')";//para este exemplo criem uma tabela com o nome "pessoa" no mysql com os campos :id,nome,sexo,dataNascimento. o id ser� auto-incremento.

if(mysqli_query($conectar,$sql)){

	
    header( 'location:../funcionario.php');
}else{

	echo "erro:".mysqli_error($conectar);
}
mysqli_close($conectar);


?>


