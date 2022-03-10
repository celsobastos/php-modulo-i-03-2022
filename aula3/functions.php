<?php

/**
 * 
 */
function validaTipoDeArquivo($extensao){
    $is_extension = strrpos($type , $extensao);
    if ($is_extension === false) {
        return false;
    }
    return true;
}