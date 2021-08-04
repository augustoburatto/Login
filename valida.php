<?php
session_start();

$login = $_POST['login'];
$senha = md5($_POST['senha']);

if($login == 'typer' && $senha == '62d07e32afaf0fa9f3d711f31afa4d47'){
    header('Location: https://crm.cbrconsultoria.com.br/custom/scripts/augusto/typer/principal.html');
}
elseif($login == 'impacta' && $senha == 'fca789bcd6c494098531f4c3d58e2c95'){
    header('Location: https://crm.cbrconsultoria.com.br/custom/scripts/augusto/impacta/notas.html');
}else{
    echo 'Usuário ou Senha incorreta';
}
?>