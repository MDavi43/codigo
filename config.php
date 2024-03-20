<?php 
$var1 = $_GET['nome'];
$var2 = $_GET['senha'];

if ($var1 == 'Ricardo' && $var2 == '77994466'){ 
    header('Location: paginaricado.html');
    exit;
}

if ($var1 == 'Maria' && $var2 == '07/08/05'){ 
    header('Location: paginamaria.html');
    exit;
}

if ($var1 == 'Robson' && $var2 == '33997711'){ 
    header('Location: paginarobson.html');
    exit;
}

else {
    echo 'acesso negado';
}
?>
