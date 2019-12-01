<?php

session_start();

$turma = false;
if(filter_input(INPUT_GET, 'turma')){
    $turma = true;
}