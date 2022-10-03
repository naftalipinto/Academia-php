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
$salario=$_POST['ip_sal'];
$carteira=$_POST['ip_sal'];
$md=$_POST['ip_md'];
$id=$_POST['id'];

$sql="UPDATE professor SET nome='$nome',data_nasc='$data',bi='$bi',morada='$morada',carteira='$carteira',salario='$salario' where id_professor='$id' ";//para este exemplo criem uma tabela com o nome "pessoa" no mysql com os campos :id,nome,sexo,dataNascimento. o id ser� auto-incremento.
mysqli_query($conectar,$sql);

$sql5="SELECT * FROM professor WHERE nome = '$nome'";
$resultado = mysqli_query($conectar,$sql5);
while( $dados = mysqli_fetch_array($resultado)){
    $cod=$dados["id_professor"];
}

$sql3="SELECT * FROM modalidade WHERE nome = '$md'";
$resultado = mysqli_query($conectar,$sql3);
while( $dados = mysqli_fetch_array($resultado)){
    $cm=$dados["id_modalidade"];
}


$sql2="UPDATE telefone_prof SET numero='$telefone' where id_professor='$id' ";

$sql4="UPDATE proforienta SET id_professor='$cod',id_modalidade='$cm' where id_modalidade='$id' ";


 if(mysqli_query($conectar,$sql4)){

	
    header( 'location:../professor_lista.php');
}else{

	echo "erro:".mysqli_error($conectar);
}
mysqli_close($conectar);





?>


