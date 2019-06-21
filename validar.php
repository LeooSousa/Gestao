<?php 
    $login = $_POST['usuario'];
    $entrar = $_POST['entrar'];
    $senha = md5($_POST['senha']);
    $connect = mysqli_connect('localhost','root','','login_php');
    $db = mysqli_select_db($connect,'login_php');
    $contador = 1;
        if (isset($entrar)) {
                     
            $verifica = mysqli_query($connect, "SELECT * FROM usuarios WHERE usuario = '$login' AND senha = '$senha'") or die("erro ao selecionar");
                if (mysqli_num_rows($verifica)<=0){
                    echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='entrar.html';</script>";
                    die();
                }else{
                    setcookie("usuario",$login);
                    setcookie("contador",$contador);
                    header("Location:planos.html");
                }
        }
?>