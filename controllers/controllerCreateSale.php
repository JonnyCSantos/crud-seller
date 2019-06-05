<?php
include("../helpers/variablesSales.php");

include("../class/ClassCrudSeller.php");

$Crud=new ClassCrudSeller();
$ComissaoVendedor = ($Valor*8.5)/100;
echo $ComissaoVendedor;

$Crud->insertDB(
        "sales",
        "?,?,?,?,?",
        array(
            $Id,
            $Valor,
            $ComissaoVendedor,
            $Data,
            $Id_vendedor
        )
);

echo "Cadastro Realizado com Sucesso!";