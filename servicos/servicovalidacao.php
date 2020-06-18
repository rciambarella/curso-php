<?php
/**
 * autor: Rubens Ciambarella
 * Data: 16/06/2020
 * Curso de PHP
 * serviço validação mensagem
 */

 //declare(strict_types=1);

 function validaNome(string $nome) : bool
 {
    if (Empty($nome))
    {
        setarMensagemErro( 'O campo Nome é preenchimento obrigatório!');
        return false;
    }
    else if (strlen ($nome) <3)
    {
        setarMensagemErro( 'O campo Nome deve conter no mínimo três caracteres!');
              //echo 'O campo Nome deve conter no mínimo três caracteres!';
        return false;
    }
    else if (strlen ($nome) >40)
    {
        setarMensagemErro( 'O campo Nome deve conter no máximo quarenta caracteres!');
        //echo 'O campo Nome deve conter no máximo quarenta caracteres!';
        return false;
    }
    return true;
 }

function validaIdade(string $idade): bool
{
    if(!is_numeric ($idade))
    {
        setarMensagemErro( 'Digitar somente caracteres numéricos na idade!!!');
    //echo 'digitar somente caracteres numéricos na idade!!!';
    return false;
    }
    return true;
}
?>