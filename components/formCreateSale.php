<?php
include("{$_SERVER['DOCUMENT_ROOT']}/crud-seller/Class/ClassCrudSale.php");
    /* Edição de dados */
    if(isset($_GET['Id'])){
        // $Acao="Editar";

        // $Crud=new ClassCrudSeller();
        // $BFetch=$Crud->selectDB("*","sales","where Id=?",array($_GET['id']));
        // $Fetch=$BFetch->fetch(PDO::FETCH_ASSOC);
        // $Id_sale=$Fetch['Id_sale'];
        // $Valor=$Fetch['Valor'];
        // $Comissao=$Fetch['Comissao'];
        // $Data=$Fetch['Data'];
        // $Id_vendedor=$Fetch['Id_vendedor'];
    }

    /* Cadastro novo */
    else{
        $Acao="Cadastrar";
        $Id=0;
        $Valor="";
        $Comissao="";
        $Data="";
        $Id_vendedor="";
    }
?>

<div class="result"></div>

<div class="Formulario">
    <h1 class="Center">Cadastro de Venda</h1>

    <form name="FormCadastroSale" id="FormCadastroSale" method="post" action="controllers/controllerCreateSale.php">
        <input type="text" id="Acao" name="Acao" value="<?php echo $Acao; ?>">
        <input type="hidden" id="Id" name="Id" value="<?php echo $Id; ?>">

        <div class="FormularioInput">
            Valor: <br>
            <input type="text" id="Valor" name="Valor">
        </div>

        <div class="FormularioInput">
            Comissão: <br>
            <input type="text" id="Comissao" name="Comissao">
        </div>

        <div class="FormularioInput">
            Data: <br>
            <input type="text" id="Data" name="Data">
        </div>

        <div class="FormularioInput">
            Id do Vendedor: <br>
            <input type="text" id="Id_vendedor" name="Id_vendedor">
        </div>

        <div class="FormularioInput FormularioInput100 Center">
            <input type="submit" value="<?php echo $Acao; ?>">
        </div>
    </form>
</div>