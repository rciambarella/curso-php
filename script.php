<?php
/**
 * autor: Rubens Ciambarella
 * Data: 16/06/2020
 * Curso de PHP
 */

 session_start ();

$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';

//print_r ($categorias);

$nome = $_POST ['nome'];
$idade = $_POST ['idade'];

//var_dump($nome);
//var_dump($idade);


if (Empty($nome))
{
    $_SESSION ['mensagem-de-erro'] = 'O campo Nome é preenchimento obrigatório!';
        header('location: index.php');
        //  O campo Nome é preenchimento obrigatório!
        return;
}
else if (strlen ($nome) <3)
{
    $_SESSION ['mensagem-de-erro'] = 'O campo Nome deve conter no mínimo três caracteres!';
    header('location: index.php');
    //echo 'O campo Nome deve conter no mínimo três caracteres!';
    return;
}
else if (strlen ($nome) >40)
{
    $_SESSION ['mensagem-de-erro'] = 'O campo Nome deve conter no máximo quarenta caracteres!';
    header('location: index.php');
    //echo 'O campo Nome deve conter no máximo quarenta caracteres!';
    return;
}
else if(!is_numeric ($idade))
{
    $_SESSION ['mensagem-de-erro'] = 'Digitar somente caracteres numéricos na idade!!!';
    header('location: index.php');
    //echo 'digitar somente caracteres numéricos na idade!!!';
    return;
}

if($idade >=6 && $idade <= 12)
{
    for($i=0; $i <=count($categorias)-1; $i++)
    {
         if($categorias[$i] == 'infantil')
         {
            $_SESSION ['mensagem-de-sucesso'] = "O nadador ".$nome." compete na categoria ".$categorias[$i];
            header('location: index.php');
            return;
            //echo "O nadador ".$nome." compete na categoria ". $categorias[$i];
         }
    }
}
else if($idade >= 13 && $idade <= 18)
{
    for($i = 0; $i <=count($categorias)-1; $i++)
    {
        if($categorias[$i] == 'adolescente')
        {
            $_SESSION ['mensagem-de-sucesso'] = "O nadador ".$nome." compete na categoria ".$categorias[$i];
            header('location: index.php');
            return;
            //echo "O nadador ".$nome." compete na categoria ". $categorias[$i];
        }
    }
}
else if($idade >= 19 && $idade <= 64)
{
    for($i = 0; $i <=count($categorias)-1; $i++)
    {
        if($categorias[$i] == 'adulto')
        {
            $_SESSION ['mensagem-de-sucesso'] = "O nadador ".$nome." compete na categoria ".$categorias[$i];
            header('location: index.php');
            return;
            //echo "O nadador ".$nome." compete na categoria ". $categorias[$i];
        }
    }
}
else 
{
    for($i = 0; $i <=count($categorias)-1; $i++)
    {
        if($categorias[$i] == 'idoso')
        {
            $_SESSION ['mensagem-de-sucesso'] = "O nadador ".$nome." compete na categoria ".$categorias[$i];
            header('location: index.php');
            return;
            //echo "O nadador ".$nome." compete na categoria ". $categorias[$i];
        }
    }
}
?>
