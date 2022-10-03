<?php
include("../conexao.php");

$sql="select * from funcionario";
$res=mysqli_query($conectar,$sql);
while( $dados = mysqli_fetch_array($res)){
    $nome1=$dados["nome"];
    $acesso=$dados["acesso"];
}

?>


<?php

if(!empty($_GET['id_professor'])){

    $id=$_GET['id_professor'];

    $sql1="select * from professor where id_professor= $id";
    $sql2="select * from telefone_prof where id_professor= $id";
    $sql3="select * from proforienta where id_professor= $id";

$resp=mysqli_query($conectar,$sql1);
$rest=mysqli_query($conectar,$sql2);
$respo=mysqli_query($conectar,$sql3);
if(mysqli_num_rows($resp)>0){

    while( $dados = mysqli_fetch_array($resp)){
        $nome=$dados["nome"];
        $morada=$dados["morada"];
        $data=$dados["data_nasc"];
        $bi=$dados["bi"];
        $salario=$dados['salario'];
        $carteira=$dados['carteira'];
    }

    while( $dado = mysqli_fetch_array($rest)){
        $telefone=$dado["numero"];
    }

    while( $dado = mysqli_fetch_array($respo)){
        $code=$dado["id_modalidade"];
    }
    $sql4="select * from modalidade where id_modalidade= $code";
    $resm=mysqli_query($conectar,$sql4);

    while( $dado = mysqli_fetch_array($resm)){
        $md=$dado["nome"];
    }
}

}else{
    header('location:cliente.php');
}

$sql10="SELECT * FROM modalidade";
$result=mysqli_query($conectar,$sql10);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NP Academy</title>
    <link rel="stylesheet" href="../css/style1.css">
    <link rel="stylesheet" href="../css/fs.css">
</head>
<body>

    <div class="container">

        <aside>
            <div class="top">
                <div class="logo">
                    <img src="../img/horizontal_on_white_by_logaster.png" alt="" class="im">
                </div>
                <div class="close" id="close-btn">
                    <img src="../img/close_25px.png" alt="">

                </div>
            </div>
            <div class="sidebar">
               <a href="menu.php">
                <img src="../img/chart_25px.png" alt="" class="material-icons-sharp" id="m">
                <h3>Dashboard</h3>
               </a>
               <a href="cliente.php">
                <img src="../img/customer_25px.png" alt="" class="material-icons-sharp" id="m">
                <h3>Cliente</h3>
               </a>
               <a href="contrato.php">
                <img src="../img/contract_25px.png" alt="" class="material-icons-sharp" id="m">
                <h3>Contrato</h3>
               </a>
               <a href="aluno.php">
                <img src="../img/student_registration_25px.png" alt="" class="material-icons-sharp" id="m">
                <h3>Aluno</h3>
               </a>
               <a href="#"  class="active">
                <img src="../img/teacher_hiring_25px.png" alt="" class="material-icons-sharp" id="m">
                <h3>Professor</h3>
               </a>
               <a href="modalidade.php">
               <img src="../img/crossfit_25px.png" alt="" class="material-icons-sharp" id="m">
                <h3>Modalidade</h3>
               </a>
               <a href="espaco.php">
                <img src="../img/gym_25px.png" alt="" class="material-icons-sharp" id="m">
                <h3>Espaço</h3>
               </a>
               <a href="aulas.php">
                <img src="../img/leadership_25px.png" alt="" class="material-icons-sharp"id="m">
                <h3>Aulas</h3>
               </a>
               <a href="funcionario.php">
                <img src="../img/administrator_male_25px.png" alt="" class="material-icons-sharp" id="m">
                <h3>Funcionário</h3>
               </a>
             <!---  <a href="#">
                <img src="img/info_25px.png" alt="" class="material-icons-sharp" id="m">
                <h3>About us</h3>
            </a>

            -->
                <a href="../index.php">
                    <img src="../img/Logout_25px.png" alt="" class="material-icons-sharp" id="m">
                    <h3>Sair</h3>
                   </a>
               
            </div>
        </aside>
        <!------------------ END OF ASIDE -------------->


        <main>
            <h1> Professor</h1>
            <form action="fn/professor_update.php" method="POST">
                         <br>
                        <br>
                        <nav class="cont1">

                        <nav class="input-box">
                        <label >Nome</label>
                        <input type="text" name="ip_nome" value="<?php echo $nome?>" require>
                        </nav>

                        <nav class="input-box">
                        <label for="">BI</label>
                        <input type="text" name="ip_bi" value="<?php echo $bi?>" require>
                        
                        </nav>
                        

                        <nav class="input-box">
                        <label for="">Data de Nascimento</label>
                        <input type="date" name="ip_dt_nasc" value="<?php echo $data?>" required>
                        </nav>
                        <nav class="input-box">
                        <label for="">Morada</label>
                        <input type="text" name="ip_morada" value="<?php echo $morada?>" required >
                        </nav>
                        <nav class="input-box">
                        <label for="">Telefone</label>
                        <input type="text" name="ip_tlf" value="<?php echo $telefone?>"require>
                        </nav>

                        <nav class="input-box">
                        <label for="">Salario</label>
                        <input type="text" name="ip_sal" value="<?php echo $salario?>" required>
                        </nav>

                        <nav class="input-box">
                        <label for="">Carteira</label>
                        <input type="text" name="ip_nc" value="<?php echo $carteira?>" required>
                        <input type="hidden" name="id" value="<?php echo $id?>">
                        
                        </nav>

                        <nav class="input-box">
                        <label for="">Modalidade</label>
                        <select class="form-control" name="ip_md">
                        <option>Seleciona a modalidade</option>
                        <?php foreach($result as $key => $value){ ?>
                          <option value="<?= $value['nome'];?>"><?= $value['nome']; ?></option> 
                        <?php } ?>
                    </select>
                        </nav>
                        
                        </nav>
                        </nav>
                        
                        <button>salvar</button>

                        </form>
        </main>

        <!---END OF MAIN MENU-->

        <div class="right">
            <div class="top">
                <button id="menu-btn">
                    <img src="../img/Menu_30px.png" alt="">

                </button>
                <div class="theme">
                    <img src="../img/batman_logo_30px.png" alt="">
                    <img src="../img/sun_30px.png" alt="" class="active">
                </div>
                <div class="profile">
                    <div class="info">
                        
                    <?php echo"<p>Hey, 
                         <b>$nome1</b></p>
                        <small class='text-muted'> $acesso</small>"?>
                    </div>
                    <div class="profile-photo">
                        <img src="../img/profile.jpg" alt="">
                    </div>
                </div>
            </div>
           
                </div>

        </div>
    </div>
    <script src="../js/index.js"></script>
</body>
</html>