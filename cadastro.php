<?php

$login = $_POST['login'];
$senha = MD5($_POST['senha']);
$connect = mysqli_connect('localhost','root','');
$db = mysqli_select_db($connect,'login');
$query_select = "SELECT login FROM usuarios WHERE login = '$login";
$select = mysqli_query($connect,$query_select);
$array = myaqli_fetch_array($select);
$logarray = $array['login'];

if($login == "" || $login == null){
    echo"<script language='javascript' type='text/javascript'>alet('O campo login deve ser preechido'); window.location.href=' cadastro.html';</script>";

}else{
    if($logarray == $login){
        echo"<script language='javascript' type='text/javascript'>alet('Esse login já existe'); window.location.href=' cadastro.html';</script>";
        die();

    }else{
        $query = "INSERT INTO usuario (loginh,senha) VALURES ('$login','senha')";
        $insert = mysqli_query($connect,$query);

        if($insert){
            echo"<script language='javascript' type='text/javascript'>alet('Usuário cadastrado com sucesso!'); window.location.href=' cadastro.html';</script>";
        }else{
            echo"<script language='javascript' type='text/javascript'>alet('Não foi possível cadastrar esse usuário'); window.location.href=' cadastro.hetml';</script>";
        }
        }
        }
    ?>