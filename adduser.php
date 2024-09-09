<!DOCTYPE html>
<html>
<head>
  <title>Gestão de Abastecimento de Água</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    
    <style type="text/css">
   
.heading{
  text-align: center;
}
.l{
  font-size: 30px;
  padding: 5px;
}
footer{
      border-top: 1px solid #0278BA;
      padding: 10px 0;
      width: 100%;
      text-align: center;
      margin: 30px 0 0;
      background-color: #ddd;
}
.navbar li:hover{
        background-color: silver;
    }  
ul li ul.dropdown{
        background: #f2f2f2;
        color: black;
        display: none;
        padding: 0px;
        position: absolute;
        z-index: 999;
       
    }
ul li:hover ul.dropdown{
        display: block; 
}
ul li ul.dropdown li{
        display: block;
}
.sidenav {
  height: 100%;
  width: 180px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}
</style>
      
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #1159B7; margin-left: 150px;">
        <img src="logo.jfif" height="80px" width="120px" alt="Logotipo não encontrado" style="border-radius: 20px; margin-left: 20px;">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Alternar navegação">
                <span class="navbar-toggler-icon"></span>
            </button>
                <a class="navbar-brand"style="font-size:32px; color: white; href="#">Abastecimento de Água</a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0 ml-5">
                    <li class="nav-item ">
                        <a class="nav-link ml-2 active"style="font-size:22px; color: white;" href="index.php">Início<span class="sr-only">(atual)</span></a>
                    </li>
                        <li><a class="nav-link ml-2"style="font-size:22px; color: white;" href="#">Entrar</a>
                            <ul class="dropdown" style="list-style-type: none;">
                    <li class="nav-item">
                        <a class="nav-link ml-2"style="font-size:22px; color: white;" href="login.php">Como Usuário</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ml-2"style="font-size:22px; color: white; " href="admin.php">Como Administrador</a>
                    </li>
                    </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ml-2"style="font-size:22px; color: white;" href="aboutus.php">Sobre Nós</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ml-2"style="font-size:22px; color: white;" href="contactus.php">Contacte-nos</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right" id="login-panel" style="color: white;">
                    <li>

  <div class="use">
    <?php
session_start(); 
if($_SESSION['login_user']=="admin"){
?>
 
<li class='active' style='float:right;'>
  <?php 
  if(isset($_SESSION['login_user'])){
  if($_SESSION['logged']==true)
    { 
      echo $_SESSION['login_user'];
      echo '<a href="logout.php"><span>Sair</span></a></li>';
    }
  elseif($_SESSION['logged']==false)
    {
      echo '<a href="reg.html"><span>Entrar/Registar</span></a></li>';
    }
}
  ?>
</div></ul>
            </div>
        </div>
    </nav>
<h1 class="heading">Sistema de Gestão de Abastecimento de Água</h1>

<div class="sidenav">
  <h2 style="color: white; margin-bottom: 20px; margin-left: 5px;">Painel de Controle</h2>
  <a href="dashboard.php">Pedidos</a>
  <a href="regdash.php">Clientes Registrados</a>
  <a href="#">Adicionar Cliente</a>
  <a href="aboutus.php">Sobre Nós</a>
  <a href="contactus.php">Contacte-nos</a>
</div>
    
<form action="addreg.php" method="POST" style="">
  <div class="container" style="padding: 16px; background-color: white; width: 600px; margin-top: 20px;">
    <h3 style="text-align: center;">Adicionar Novo Usuário</h3>
    <hr>
    <label for="name"><b>Nome</b></label>
    <input type="text" placeholder="Digite o Nome" name="username" required><br>

    <label for="password"><b>Senha</b></label>
    <input type="password" placeholder="Digite a Senha" name="password" required><br>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Digite o Email" name="email" required><br>

    <label for="phone"><b>Número de Telefone</b></label>
    <input type="text" placeholder="Digite o Telefone" name="phone" required><br>

    <label for="address"><b>Endereço</b></label>
    <input type="text" placeholder="Digite o Endereço" name="address" required><br>
    <hr>

    <button type="submit" class="registerbtn">Adicionar Usuário</button>

        
          <?php
             
          }else{
            echo "Você não é administrador";
          }
          ?>
        </table>
      
    
</div>
<footer  style="background-color: #1159B7;">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="copy-right-bottom" style="color: white;">
                    <span style="color: red;">"Site melhor visualizado em resolução 1024x768 em I.E. 10 ou superior, Google Chrome 40 ou superior, Firefox 37 ou superior, Safari 8 ou superior."
          </span>
          <ul class="f-menu" style="list-style-type:none">
            <li><a href="termsncon.php">Termos & Condições</a></li>
            <p class="copy-right-union">Copyright © Todos os direitos reservados</p>
          </ul>
          
        </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>