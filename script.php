<?php

$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';

//print_r ($categorias);

$nome = $_POST ['nome'];
$idade = $_POST ['idade'];

//var_dump($nome);
//var_dump($idade);

if($idade >=6 && $idade <= 12)
{
    for($i=0; $i <=count($categorias)-1; $i++)
    {
         if($categorias[$i] == 'infantil') 
            echo "O nadador ".$nome." compete na categoria ". $categorias[$i];
    }
}
else if($idade >= 13 && $idade <= 18)
{
    for($i = 0; $i <=count($categorias)-1; $i++)
    {
        if($categorias[$i] == 'adolescente')
            echo "O nadador ".$nome." compete na categoria ". $categorias[$i];
    }
}
else if($idade >= 19 && $idade <= 64)
{
    for($i = 0; $i <=count($categorias)-1; $i++)
    {
        if($categorias[$i] == 'adulto')
            echo "O nadador ".$nome." compete na categoria ". $categorias[$i];
    }
}
else 
{
    for($i = 0; $i <=count($categorias)-1; $i++)
    {
        if($categorias[$i] == 'idoso')
            echo "O nadador ".$nome." compete na categoria ". $categorias[$i];
    }
}
?>
