<?php

include("../class/ClassCrud.php");

$Crud=new ClassCrud();
$IdUser=filter_input(INPUT_GET,'id',FILTER_SANITIZE_SPECIAL_CHARS);

$Crud->deleteDB(
    "sellers",
    "Id=?",
    array(
       $IdUser
    )
);

echo "Dado deletado com sucesso! <a href='/crud-seller/search-sellers'>Voltar</a>";

