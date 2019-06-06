<?php include("components/header.php"); 
include("class/ClassCrud.php");
?>
    <main class="main">
        <div class="main__wrapper">
            <?php include("components/aside.php"); ?>
            <section class="content">
                <div class="content__header">
                    <div class="content__wellcome">
                        <h2>Bem Vindo(a)</h2>
                    </div>
                    <div class="content__search">
                        <form name="FormSearchSales" id="FormSearchSales" method="get" action="controllers/controllerSearchSales.php">
                            <div class="FormularioInput">
                                <input type="text" id="Id_vendedor" name="Id_vendedor" placeholder="Digite o Id do Vendedor">
                            </div>

                            <div class="FormularioInput FormularioInput100 Center">
                                <input type="submit" value="OK">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="content_main">
                    <div class="result"></div>
                    <table class="content__table">
                        <tr class="first">
                            <td>Id</td>
                            <td>Nome</td>
                            <td>E-mail</td>
                            <td>Comissão</td>
                            <td>Valor da Venda</td>
                            <td>Data</td>
                        </tr>
                        <?php
                        $Crud=new ClassCrud();
                        $BFetch=$Crud->selectDB(
                            "sellers.Id, sellers.Nome, sellers.Email, sales.Comissao, sales.Valor, sales.Data",
                            "sellers JOIN sales",
                            "ON sellers.Id = sales.Id_vendedor AND sales.Id_vendedor = sellers.Id",
                            array()
                        );
                        $count = 0;
                        while($Fetch=$BFetch->fetch(PDO::FETCH_ASSOC)){
                            $count++;
                        ?>
                        <tr>
                            <td><?php echo $Fetch['Id']; ?></td>
                            <td><?php echo $Fetch['Nome']; ?></td>
                            <td><?php echo $Fetch['Email']; ?></td>
                            <td><?php echo 'R$' . number_format($Fetch['Comissao'],2,",","."); ?></td>
                            <td><?php echo 'R$' . number_format($Fetch['Valor'],2,",","."); ?></td>
                            <td><?php echo $Fetch['Data']; ?></td>
                        </tr>
                        
                        <?php } ?>
                        <tr>
                            <p class="showing showing-all">Mostrando <?php echo $count;?> venda(s).</p>
                        </tr>
                    </table>
                </div>
            </section>
        </div>
        
    </main>


<?php include("components/footer.php"); ?>