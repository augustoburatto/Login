<?php
session_start();

$login = $_POST['login'];
$senha = md5($_POST['senha']);

if($login == 'digitacao@gmail.com' && $senha == 'c2474813fbff471ce724dc0414ca77fa'){ // digitacao2021
    header('Location: https://augustoburatto.github.io/TesteDigitacao/');
}
elseif($login == 'impacta@aluno.com' && $senha == 'fca789bcd6c494098531f4c3d58e2c95'){ //impacta2021
    header('Location: https://augustoburatto.github.io/CalculoNotas/');
}else{
    echo 'Usuário ou Senha incorreta';
}
?>