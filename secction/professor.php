<?php
include("../conexao.php");
$sql="SELECT * FROM modalidade";
$result=mysqli_query($conectar,$sql);

?>


<?php
include("../conexao.php");
$sql="select * from funcionario";
$res=mysqli_query($conectar,$sql);
while( $dados = mysqli_fetch_array($res)){
    $nome1=$dados["nome"];
    $acesso=$dados["acesso"];
}
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

            <div class="tabs">
                <div class="tab-header">
                    <div class="active">
                        
                        <img src="../img/add_30px.png" alt="">
                        <label for="">Cadastrar</label>
                    </div>
                    <div>
                        
                        <img src="../img/edit_property_30px.png" alt="">
                        <label for="">Editar</label>
                    </div>
                    <div>
                        <a href="professor_lista.php">
                        <img src="../img/descending_sorting_30px.png" alt="">
                        <label for="">Listar</label>
                        </a>
                    </div>
                </div>
                <div class="tab-indicator"></div>
                <div class="tab-body">
                    <div class="active">
                        
                    <form action="fn/prof_cadastrar.php" method="POST">
                         <br>
                        <br>
                        <nav class="cont1">

                        <nav class="input-box">
                        <label >Nome</label>
                        <input type="text" name="ip_nome" placeholder="Insira o nome" require>
                        </nav>

                        <nav class="input-box">
                        <label for="">BI</label>
                        <input type="text" name="ip_bi" placeholder="Insira o BI" require>
                        
                        </nav>
                        

                        <nav class="input-box">
                        <label for="">Data de Nascimento</label>
                        <input type="date" name="ip_dt_nasc" required>
                        </nav>
                        <nav class="input-box">
                        <label for="">Morada</label>
                        <input type="text" name="ip_morada" placeholder="Insira a morada"required >
                        </nav>
                        <nav class="input-box">
                        <label for="">Telefone</label>
                        <input type="text" name="ip_tlf" placeholder="Insira o número de telefone"require>
                        </nav>

                        <nav class="input-box">
                        <label for="">Salario</label>
                        <input type="text" name="ip_sal" placeholder="Insira o salario" required>
                        </nav>

                        <nav class="input-box">
                        <label for="">Carteira</label>
                        <input type="text" name="ip_nc" placeholder="Insira o número de carteira" required>
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
                        
                        <button>Cadastrar</button>

                        </form>
                    </div>

                    <div>
                        
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores corrupti ratione dolores nihil nobis dignissimos esse quod laudantium porro officiis at incidunt ut, asperiores officia reprehenderit accusamus deleniti commodi ducimus.</p>
                    </div>

                    <div>
                        
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores corrupti ratione dolores nihil nobis dignissimos esse quod laudantium porro officiis at incidunt ut, asperiores officia reprehenderit accusamus deleniti commodi ducimus.</p>
                    </div>
                </div>
            </div>
            
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