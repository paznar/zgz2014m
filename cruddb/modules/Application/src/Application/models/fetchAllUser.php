<?php

function fetchAllUser()
{
    $data = file_get_contents($_SERVER['DOCUMENT_ROOT']."/usuarios.txt");
    $data = explode("\n", $data);
    
    return $data;
}