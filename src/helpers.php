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