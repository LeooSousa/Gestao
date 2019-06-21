<?php
 header('Content-Type: text/html; charset=utf-8');
    if (isset($_COOKIE['usuario'])) {
    $login_cookie = $_COOKIE['usuario'];
    setcookie("logado",$login_cookie);
	}
        if(isset($login_cookie)){
            echo"<center><img src='logo1.png'/></center>";
            echo"<center><h2>Bem-Vindo, $login_cookie</h2></center>";
            echo"<center><h2>Essas informações <font color='red'>PODEM</font> ser acessadas por você</h2></center>";
            
            echo"<!DOCTYPE html>
<html>
    <head>
        <title>FERRAMENTA DE LOGIN</title>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width'>
        <script>var numero = 1;</script>
        <style type='text/css'>
            .botaomedio{
            font-size:11px;
            font-family:Verdana,Helvetica;
            font-weight:bold;
            color:black;
            background:#638cb5;
            border:2px;
            width:130px;
            height:20px;
            margin:2px;
            border-radius: 5px;
            }
        </style>
    </head>
    <body>
        <center><form action = logout.php method = get>
            <input type='submit' value='Sair' class='botaomedio'/>
            &nbsp;&nbsp;
        </form></center>
        <center><form action = index.html method = get>
            <input type='submit' value='continuar' class='botaomedio'/>
            &nbsp;&nbsp;
        </form></center>
    </body>
</html>";
        
        }else{
            echo"<center><img src='logo1.png' /></center> <br>";
            echo"<center><h2>Bem-Vindo, convidado!</h2></center> <br>";
            echo"<center><h2>Essas informações <font color='red'>NÃO PODEM</font> ser acessadas por você, DIRIJA-SE À TELA DE LOGIN!</h2></center>";
            echo"<br><center><h2><a href='tela_inicio_login.html'>Faça Login</a> Para ler o conteúdo</h2></center>";
        }
?>



