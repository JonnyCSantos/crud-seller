<?php

include("../class/ClassCrudSeller.php");

$Crud=new ClassCrudSeller();
$IdUser=filter_input(INPUT_GET,'id',FILTER_SANITIZE_SPECIAL_CHARS);

$Crud->deleteDB(
    "sellers",
    "Id=?",
    array(
       $IdUser
    )
);

echo "Dado deletado com sucesso!";