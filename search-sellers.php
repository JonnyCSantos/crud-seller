<?php include("components/header.php"); 
include("class/ClassCrudSeller.php");
?>

<table class="TabelaCrud container">
     <tr>
         <td>Id</td>
         <td>Vendedor</td>
         <td>Email</td>
         <td>Ações</td>
     </tr>

     <!-- Estrutura de loop -->
     <?php
     $Crud=new ClassCrudSeller();
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
         <td>
             <a href="<?php echo "components/formCreateSeller.php?id={$Fetch['Id']}"; ?>"><img src="Images/Edite.png" alt="Editar"></a>
             <button data-href="<?php echo "controllers/controllerDeleteSeller.php?id={$Fetch['Id']}"; ?>" class="delete">Excluir</button>
         </td>
     </tr>
     <?php } ?>
</table>

<div class="result"></div>

<?php include("components/footer.php"); ?>