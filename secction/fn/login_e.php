<?php
//invocando o ficheiro de conex�o
include("../../conexao.php");//ficheiro que faz a conexao com a base de dados.
//echo"valor do text ".$_POST["form"];

//verifica se existe a variavel "form",caso exista, executa tudo que esta dentro do comando if.

//abaixo temos a as variaveis passadas com o metodo post.
$bi=$_POST['ip_usuario'];
$senha=$_POST['ip_senha'];



$sql1="SELECT * FROM funcionario WHERE bi= '$bi'";
$resultado = mysqli_query($conectar,$sql1);
while( $dados = mysqli_fetch_array($resultado)){
    $cod=$dados["senha"];
    $nome=$dados["nome"];
    $acesso=$dados["acesso"];
}

if($senha=="$cod"){
    header( 'location:../menu.php');

}
else{
    echo"conta não encontrada";
}


mysqli_close($conectar);





?>


