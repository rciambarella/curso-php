<?php
/**
 * autor: Rubens Ciambarella
 * Data: 16/06/2020
 * Curso de PHP
 * serviço cartegoria competidor
 * print_r ($categorias)
 */

function defineCategoriaCompetidor(string $nome, string $idade) : ?string
{
    $categorias[] = 'infantil';
    $categorias[] = 'adolescente';
    $categorias[] = 'adulto';
    $categorias[] = 'idoso';
    removerMensagemErro();
   if (validaNome($nome) && (validaIdade($idade)))
   {
        if($idade >=6 && $idade <= 12)
        {
            for($i=0; $i <=count($categorias)-1; $i++)
            {
                if($categorias[$i] == 'infantil')
                {
                    setarMensagemSucesso( "O nadador ".$nome." compete na categoria ".$categorias[$i]);
                    return null;
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
                    setarMensagemSucesso( "O nadador ".$nome." compete na categoria ".$categorias[$i]);
                    return null;
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
                    setarMensagemSucesso( "O nadador ".$nome." compete na categoria ".$categorias[$i]);
                    return null;
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
                    setarMensagemSucesso( "O nadador ".$nome." compete na categoria ".$categorias[$i]);
                    return null;
                    //echo "O nadador ".$nome." compete na categoria ". $categorias[$i];
                }
            }
        }
    }
   else 
    {
        removerMensagemSucesso();
    } 
   return obterMensagemErro();
   }
   ?>