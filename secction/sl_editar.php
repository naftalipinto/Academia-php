<?php
include("../conexao.php");
$sql="select * from funcionario";
$res=mysqli_query($conectar,$sql);
while( $dados = mysqli_fetch_array($res)){
    $nome1=$dados["nome"];
    $acesso=$dados["acesso"];
}

if(!empty($_GET['id_sala'])){

    $id=$_GET['id_sala'];

    $sql1="select * from sala where id_sala= $id";
   
$resc=mysqli_query($conectar,$sql1);

if(mysqli_num_rows($resc)>0){

    while( $dados = mysqli_fetch_array($resc)){
        $nsala=$dados["nsala"];
    }

   

}else{
    header('location:espaco_lista.php');
}}
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
               <a href="cliente.php" >
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
               <a href="professor.php">
                <img src="../img/teacher_hiring_25px.png" alt="" class="material-icons-sharp" id="m">
                <h3>Professor</h3>
               </a>
               <a href="modalidade.php">
               <img src="../img/crossfit_25px.png" alt="" class="material-icons-sharp" id="m">
                <h3>Modalidade</h3>
               </a>
               <a href="#" class="active">
                <img src="../img/gym_25px.png" alt="" class="material-icons-sharp" id="m">
                <h3>Espa??o</h3>
               </a>
               <a href="aulas.php">
                <img src="../img/leadership_25px.png" alt="" class="material-icons-sharp"id="m">
                <h3>Aulas</h3>
               </a>
               <a href="funcionario.php">
                <img src="../img/administrator_male_25px.png" alt="" class="material-icons-sharp" id="m">
                <h3>Funcion??rio</h3>
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
            <h1> Espa??o</h1>
          
            <form action="fn/sl_update.php" method="POST">
                         <br>
                        <br>
                        <nav class="cont1">

                        <nav class="input-box">
                        <label >Nome</label>
                        <input type="text" name="ip_ns" value="<?php echo $nsala?>" require>
                        <input type="hidden" name="id" value="<?php echo $id?>">
                        </nav>
                        </nav>
                        
                        <button style="height:4%">Salvar</button>

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