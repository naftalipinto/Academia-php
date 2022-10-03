<?php
include("../conexao.php");
$sql="SELECT * FROM cliente";
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
                <img src="../img/chart_25px.png" alt="">
                <h3>Dashboard</h3>
               </a>
               <a href="cliente.php" >
                <img src="../img/customer_25px.png" alt="">
                <h3>Cliente</h3>
               </a>
               <a href="#" class="active">
                <img src="../img/contract_25px.png" alt="">
                <h3>Contrato</h3>
               </a>
               <a href="aluno.php">
                <img src="../img/student_registration_25px.png">
                <h3>Aluno</h3>
               </a>
               <a href="professor.php">
                <img src="../img/teacher_hiring_25px.png">
                <h3>Professor</h3>
               </a>
               <a href="modalidade.php">
               <img src="../img/crossfit_25px.png" alt="">
                <h3>Modalidade</h3>
               </a>
               <a href="espaco.php">
                <img src="../img/gym_25px.png" alt="">
                <h3>Espaço</h3>
               </a>
               <a href="aulas.php">
                <img src="../img/leadership_25px.png" >
                <h3>Aulas</h3>
               </a>
               <a href="funcionario.php">
                <img src="../img/administrator_male_25px.png" >
                <h3>Funcionário</h3>
               </a>
             <!---  <a href="#">
                <img src="img/info_25px.png" alt="" class="material-icons-sharp" id="m">
                <h3>About us</h3>
            </a>

            -->
                <a href="../index.php">
                    <img src="../img/Logout_25px.png" alt="" >
                    <h3>Sair</h3>
                   </a>
               
            </div>
        </aside>
        <!------------------ END OF ASIDE -------------->


        <main>
            <h1> Contrato</h1>

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
                    <a href="contrato_lista.php">
                        <img src="../img/descending_sorting_30px.png" alt="">
                        <label for="">Listar</label>
                        </a>
                    </div>
                </div>
                
                <div class="tab-body">
                    <div class="active">
                        
                    <form action="fn/cd_cadastrar.php" method="POST">
                         <br>
                        <br>
                        <nav class="cont1">
                        <nav class="input-box">
                        <label for="">Data de Entrada</label>
                        <input type="date" name="ip_dt_in" required>
                        </nav>
                        <nav class="input-box">
                        <label for="">Data de Saida</label>
                        <input type="date" name="ip_dt_out" required>
                        </nav>
                        <nav class="input-box">
                        <label >Forma de pagamento</label>
                        <select name="ip_forma" id="" required>
                            <option value="Cash">Cash</option>
                            <option value="Crédito">Crédito</option>
                        </select>
                        </nav>
                        <nav class="input-box">
                        <label for="">Valor</label>
                        <input type="text" name="ip_valor" placeholder="Insira o valor" required >
                        </nav>
                        <nav class="input-box">
                        <label for="">Cliente</label>
                        <select class="form-control" name="ip_cliente">
                        <option>Seleciona o Cliente</option>
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