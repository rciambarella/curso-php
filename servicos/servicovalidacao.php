<?php
/**
 * autor: Rubens Ciambarella
 * Data: 16/06/2020
 * Curso de PHP
 * servi�o valida��o mensagem
 */

 //declare(strict_types=1);

 function validaNome(string $nome) : bool
 {
    if (Empty($nome))
    {
        setarMensagemErro( 'O campo Nome � preenchimento obrigat�rio!');
        return false;
    }
    else if (strlen ($nome) <3)
    {
        setarMensagemErro( 'O campo Nome deve conter no m�nimo tr�s caracteres!');
              //echo 'O campo Nome deve conter no m�nimo tr�s caracteres!';
        return false;
    }
    else if (strlen ($nome) >40)
    {
        setarMensagemErro( 'O campo Nome deve conter no m�ximo quarenta caracteres!');
        //echo 'O campo Nome deve conter no m�ximo quarenta caracteres!';
        return false;
    }
    return true;
 }

function validaIdade(string $idade): bool
{
    if(!is_numeric ($idade))
    {
        setarMensagemErro( 'Digitar somente caracteres num�ricos na idade!!!');
    //echo 'digitar somente caracteres num�ricos na idade!!!';
    return false;
    }
    return true;
}
?>