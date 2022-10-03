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
$id=$_POST['id'];

$sql="UPDATE cliente SET nome='$nome',data_nasc='$data',bi='$bi',morada='$morada' where id_cliente='$id' ";//para este exemplo criem uma tabela com o nome "pessoa" no mysql com os campos :id,nome,sexo,dataNascimento. o id ser� auto-incremento.
mysqli_query($conectar,$sql);


$sql2="UPDATE telefone_cli SET numero='$telefone' where id_cliente='$id' ";


 if(mysqli_query($conectar,$sql2)){

	
    header( 'location:../cliente_lista.php');
}else{

	echo "erro:".mysqli_error($conectar);
}
mysqli_close($conectar);





?>


