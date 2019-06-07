<?php
include("../helpers/variablesSales.php");

include("../class/ClassCrud.php");

$Crud=new ClassCrud();
$ComissaoVendedor = ($Valor*8.5)/100;

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

echo "Cadastro Realizado com Sucesso! Comissão de R$" . number_format($ComissaoVendedor,2,",",".");;