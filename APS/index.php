<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="shortcut icon" size="16x16" href="img/logo.png" type="image/x-icon">
        <link rel="icon" size="16x16" href="img/logo.png" type="image/x-icon">

        <title>Universidade Paulista - APS</title>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="assets/css/painel.css">
    </head>
    <body>
        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <img style="height: 80%; width: 80%;" src="img/logo.png">
                </div>

                <ul class="list-unstyled components">
                    <p><a href="index.php"><i class="glyphicon glyphicon-dashboard"></i> Dashboard</a></p>
                    <hr>
                    <li class="active">
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Sensor DHT11 <i class="glyphicon glyphicon-fire"></i></a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li><a href="#" id="demons_dht11">Demonstração</a></li>
                            <li><a href="#" id="funciona_dht11">Como Funciona</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">Sensor de Chuva <i class="glyphicon glyphicon-tint"></i></a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li><a href="#" id="demons_schuva">Demonstração</a></li>
                            <li><a href="#" id="funciona_schuva">Como Funciona</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>

            <!-- Page Content Holder -->
            <div id="content">

                <nav class="navbar navbar-default">
                    <div class="container-fluid">

                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="btn btn-primary navbar-btn" onclick="AlterarMenu();">
                                <i class="glyphicon glyphicon-align-left"></i>
                                <span id="txtMenu">Ativar Menu</span>
                            </button>
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        </div>
                    </div>
                </nav>
                <div id="apresentacao">
                    <h1>Atividade Prática Supervisionada - UNIP</h1>
                    <h4>Integrantes:</h4>
                    <ul>
                        <li>Matheus Martins</li>
                        <li>Michelle Muniz</li>
                        <li>Stephany De Paula</li>
                    </ul>
                    <br>
                    <h5>Representação do Circuito</h5>
                    <img src="img/circuito.png" style="width: 70%;">
                </div> 
            </div>
        </div>



        <!-- jQuery CDN -->
         <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="assets/js/bootstrap.min.js"></script>

         <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                 });
             });

             $(document).ready( function() {
                $("#demons_dht11").on("click", function() {
                    $("#apresentacao").load("pages/Demonstracao_DHT11.php");
                });
            });

             $(document).ready( function() {
                $("#funciona_dht11").on("click", function() {
                    $("#apresentacao").load("pages/Funciona_DHT11.php");
                });
            });           

             $(document).ready( function() {
                $("#demons_schuva").on("click", function() {
                    $("#apresentacao").load("pages/Demonstracao_SCHUVA.php");
                });
            });

             $(document).ready( function() {
                $("#funciona_schuva").on("click", function() {
                    $("#apresentacao").load("pages/Funciona_SCHUVA.php");
                });
            });          
         </script>
    </body>
</html>
