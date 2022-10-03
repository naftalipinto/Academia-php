
<?php

include("../conexao.php");
$sql="select * from funcionario";
$res=mysqli_query($conectar,$sql);
while( $dados = mysqli_fetch_array($res)){
    $nome1=$dados["nome"];
    $acesso=$dados["acesso"];
}



$sql1="SELECT id_professor  FROM professor";
$result=mysqli_query($conectar,$sql1);
$contp=mysqli_num_rows($result);

$sql2="SELECT id_modalidade  FROM modalidade";
$result=mysqli_query($conectar,$sql2);
$contm=mysqli_num_rows($result);

$sql3="SELECT id_sala  FROM sala";
$result=mysqli_query($conectar,$sql3);
$conts=mysqli_num_rows($result);

$sql4="select * from aluno";
$resa=mysqli_query($conectar,$sql4);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NP Academy</title>
    <link rel="stylesheet" href="../css/style1.css">
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
               <a href="#" class="active">
                <img src="../img/chart_25px.png" alt="">
                <h3>Dashboard</h3>
               </a>
               <a href="cliente.php">
                <img src="../img/customer_25px.png" alt="" >
                <h3>Cliente</h3>
               </a>
               <a href="contrato.php">
                <img src="../img/contract_25px.png" alt="">
                <h3>Contrato</h3>
               </a>
               <a href="aluno.php">
                <img src="../img/student_registration_25px.png" alt="">
                <h3>Aluno</h3>
               </a>
               <a href="professor.php">
                <img src="../img/teacher_hiring_25px.png" alt="">
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
                <img src="../img/leadership_25px.png" alt="">
                <h3>Aulas</h3>
               </a>
               <a href="funcionario.php">
                <img src="../img/administrator_male_25px.png" alt="">
                <h3>Funcionário</h3>
               </a>
             <!---  <a href="#">
                <img src="img/info_25px.png" alt="" class="material-icons-sharp" id="m">
                <h3>About us</h3>
            </a>

            -->
                <a href="../index.php">
                    <img src="../img/Logout_25px.png" alt="">
                    <h3>Sair</h3>
                   </a>
               
            </div>
        </aside>
        <!------------------ END OF ASIDE -------------->


        <main>
            <h1> Dashboard</h1>
            <div class="date">
                <input type="date">
            </div>
            <div class="insights">
                <div class="prof">
                    <img src="../img/teacher_hiring_30px.png" alt="">
                    <div class="middle">
                        <div class="left">
                            <h3>Professores</h3>
                           <?php echo" <h1>$contp</h1>"?>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx='38' cy='36' r='36'></circle>
                            </svg>
                            <div class="number">
                                <p>50%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Tempo de existência
                    </small>

                </div>

                <!------END OF PROF-->

                <div class="mod">
                    <img src="../img/skiing_30px.png" alt="">
                    <div class="middle">
                        <div class="left">
                            <h3>Modalidades</h3>
                            <?php echo" <h1>$contm</h1>"?>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx='38' cy='36' r='36'></circle>
                            </svg>
                            <div class="number">
                                <p>50%</p>
                            </div>
                        </div>
                        
                    </div>
                    <small class="text-muted">Tempo de existência
                    </small>

                </div>

                <!--END OF MOD-->


                <div class="esp">
                    <img src="../img/rent_30px.png" alt="">
                    <div class="middle">
                        <div class="left">
                            <h3>Espaços</h3>
                            <?php echo" <h1>$conts</h1>"?>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx='38' cy='36' r='36'></circle>
                            </svg>
                            <div class="number">
                                <p>50%</p>
                            </div>
                        </div>
                        
                    </div>
                    <small class="text-muted">Tempo de existência
                    </small>

                </div>

                <!---END OF ESP-->

            </div>
            <div class="recent-clients">
                <h2>Alunos Recentes</h2>
                <div class="recent-clients">
                
                <table>
                <thead>
                        <tr>
                            
                             <th>Nome</th>
                            <th>BI</th>
                            <th>Data de nascimento</th>
                            <th>Morada</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                    while( $dados = mysqli_fetch_assoc($resa)){ 
                        echo"<tr>";
                        echo"<td>".$dados['nome']."</td>";
                        echo"<td>".$dados['bi']."</td>";
                        echo"<td>".$dados['data_nasc']."</td>";
                        echo"<td>".$dados['morada']."</td>";
                        echo"</tr>";
                }
                ?>
                    </tbody>

                </table>
            </div>
                <a href="#"> Mostrar Todos</a>
            </div>
        </main>

        <!---END OF MAIN MENU-->

        <div class="right">
            <div class="top">
                <button id="menu-btn">
                    <img src="img/Menu_30px.png" alt="">

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
            <!---END OF TOP-->
            <div class="recent-classes">
                <h2> Aulas Recentes</h2>
                <div class="updates">
                    <div class="update">
                        <div class="profile-photo">
                            <img src="../img/leadership_25px.png" alt="">
                        </div>
                        <div class="message">
                            
                            <p>Football <b>uma execelente aula</b></p>
                            <small class="text-muted"> Few moments ago</small>
                        </div>
                    </div>

                    <div class="update">
                        <div class="profile-photo">
                            <img src="../img/leadership_25px.png" alt="">
                        </div>
                        <div class="message">
                            <p>Basketball <b>uma execelente aula</b></p>
                            <small class="text-muted"> Few moments ago</small>
                        </div>
                    </div>

                    <div class="update">
                        <div class="profile-photo">
                            <img src="../img/leadership_25px.png" alt="">
                        </div>
                        <div class="message">
                            <p>Volley <b>uma execelente aula</b></p>
                            <small class="text-muted"> Few moments ago</small>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="../img/leadership_25px.png" alt="">
                        </div>
                        <div class="message">
                            <p>Andebol <b>uma execelente aula</b></p>
                            <small class="text-muted"> Few moments ago</small>
                        </div>
                    </div>
                </div>

            </div>

            <!----END OF RECENTS CLASSES-->


            <div class="loc">
                <h2>Locações</h2>
                <div class="item-online">
                    <div class="icon">
                        <img src="../img/rent_30px.png" alt="">
                    </div>
                    <div class="right">
                        <div class="info">
                            <h3>Alugado</h3>
                            <small class="text-muted">Tempo de existência</small>
                        </div>
                        <h5 class="sucess">Nome do locador</h5>
                        <h3>total de locaçoes</h3>
                    </div>
                </div>

                
            </div>

        </div>
    </div>
    <script src="../js/index.js"></script>
</body>
</html>