<?php
//invocando o ficheiro de conex�o
include("../../conexao.php");//ficheiro que faz a conexao com a base de dados.
//echo"valor do text ".$_POST["form"];

//verifica se existe a variavel "form",caso exista, executa tudo que esta dentro do comando if.

//abaixo temos a as variaveis passadas com o metodo post.
$nome=$_POST['ip_md'];
$id=$_POST['id'];

$sql="UPDATE modalidade SET nome='$nome' where id_modalidade='$id' ";//para este exemplo criem uma tabela com o nome "pessoa" no mysql com os campos :id,nome,sexo,dataNascimento. o id ser� auto-incremento.

 if(mysqli_query($conectar,$sql)){

	
    header( 'location:../modalidade_lista.php');
}else{

	echo "erro:".mysqli_error($conectar);
}
mysqli_close($conectar);





?>


