<?php include("components/header.php"); 
include("class/ClassCrudSeller.php");
?>
<div class="content container">
    <span>Buscar vendas pelo Id do vendedor</span>
    <form name="FormSearchSales" id="FormSearchSales" method="get" action="controllers/controllerSearchSales.php">
        <div class="FormularioInput">
            <input type="text" id="Id_vendedor" name="Id_vendedor" placeholder="Digite o Id do Vendedor">
        </div>

        <div class="FormularioInput FormularioInput100 Center">
            <input type="submit" value="Buscar">
        </div>
    </form>

    <div class="result">
    </div>
</div>

<?php include("components/footer.php"); ?>