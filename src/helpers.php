<?php

/**
 * Retorna o caminho para um ficheiro
 * de secção da página.
 * 
 * @return string
 */
function inc_path(string $fileName): string
{
    return 'inc/' . $fileName;
}

/**
 * Limita o número de caracteres
 * renderizados.
 * 
 * @return string
 */
function textLimit(
    string $text, 
    int $max, 
    ?string $endWith = '...',
): string 
{
    return mb_substr($text, 0, $max) . $endWith;
}

function dd($data): void
{
    var_dump($data);
    die;    
}