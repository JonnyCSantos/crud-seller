<?php
include("../helpers/variables.php");

include("../Class/ClassCrudSale.php");

$Crud=new ClassCrudSale();

if($Acao=='Cadastrar'){
    $Crud->insertDB(
        "sales",
        "?,?,?,?,?",
        array(
            $Id_sale,
            $Valor,
            $Comissao,
            $Data,
            $Id_vendedor
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

    echo "Cadastro Editado com Sucesso!";
}

