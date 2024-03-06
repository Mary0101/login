<?php
$login = $_POST['login'];
$entrar = $_POST['entar'];
$senha = md5($_POST['senha']);
$connect = mysqli_connect('localhost','root','');
$db = mysqli_select_db($connect, 'login');
  if (isset($entrar)){

    $verifica = mysqli_query("SELECT * FROM usuario WHERE login = $connect '$login' AND senha = '$senha'") or die("erro ao selecionar");
    if (mysqli_num_rows($verifica)<=0){
    echo"<script language='javascript' type='text/javascript'>alet('Login e/ou senha incorretos'); window.location.href=' cadastro.hetml';</script>";
die();
  }else{
    setcookie("login",$login);
    header("Location:index.php");
  }
  }
  ?>