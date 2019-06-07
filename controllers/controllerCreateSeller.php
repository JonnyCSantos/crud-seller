<?php
include("../helpers/variables.php");

include("../Class/ClassCrud.php");

$Crud=new ClassCrud();

if($Acao=='Cadastrar'){
    $Crud->insertDB(
        "sellers",
        "?,?,?",
        array(
            $Id,
            $Nome,
            $Email
        )
    );

    echo "Cadastro Realizado com Sucesso!";
} else {
    $Crud->updateDB(
        "sellers",
        "Nome=?,Email=?",
        "Id=?",
        array(
            $Nome,
            $Email,
            $Id
        )
    );

    echo "Cadastro Editado com Sucesso! <a href='/crud-seller/search-sellers'>Voltar</a>";
}

