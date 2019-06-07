<?php include("components/header.php"); 
include("class/ClassCrud.php");
?>

<main class="main">
    <div class="main__wrapper">
        <?php include("components/aside.php"); ?>
        <section class="content">
            <div class="content__header">
                <div class="content__title">
                    <h2>Vendedores</h2>
                </div>
            </div>
            <div class="content__main">
                <table class="content__table">
                    <tr class="first">
                        <td>Id</td>
                        <td>Vendedor</td>
                        <td>Email</td>
                        <td>Ações</td>
                    </tr>

                    <!-- Estrutura de loop -->
                    <?php
                    $Crud=new ClassCrud();
                    $BFetch=$Crud->selectDB(
                        "*",
                        "sellers",
                        "",
                        array()
                    );

                    while($Fetch=$BFetch->fetch(PDO::FETCH_ASSOC)){
                    ?>
                    <tr>
                        <td><?php echo $Fetch['Id']; ?></td>
                        <td><?php echo $Fetch['Nome']; ?></td>
                        <td><?php echo $Fetch['Email']; ?></td>
                        <td class="buttons">
                            <a href="<?php echo "components/formCreateSeller.php?id={$Fetch['Id']}"; ?>" class="editar">Editar</a>
                            <a href="<?php echo "controllers/controllerDeleteSeller.php?id={$Fetch['Id']}"; ?>"  class="delete">Excluir</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                <div class="result"></div>
            </div>
        </section>
    </div>
</main>

<?php include("components/footer.php"); ?>