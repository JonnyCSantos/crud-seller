<div class="Content">
    <div class="result"></div>

    <div class="Formulario">
        <h1 class="Center">Cadastro de Vendas</h1>

        <form name="FormCreateSale" id="FormCreateSale" method="post" action="controllers/controllerCreateSale.php">
            <div class="FormularioInput">
                Valor: <br>
                <input type="text" id="Valor" name="Valor">
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
                <input type="submit" value="Cadastrar">
            </div>
        </form>
    </div>
</div>