<?php
include("{$_SERVER['DOCUMENT_ROOT']}/crud-seller/class/ClassCrudSeller.php");

$Id_vendedor=filter_input(INPUT_GET,'Id_vendedor',FILTER_SANITIZE_SPECIAL_CHARS);
?>

<table class="TabelaCrud container">
     <tr>
         <td>Id</td>
         <td>Nome</td>
         <td>E-mail</td>
         <td>Comissão</td>
         <td>Valor da Venda</td>
         <td>Data</td>
     </tr>

     <!-- Estrutura de loop -->
     <?php
     $Crud=new ClassCrudSeller();
     $BFetch=$Crud->selectDB(
         "sellers.Id, sellers.Nome, sellers.Email, sales.Comissao, sales.Valor, sales.Data",
         "sellers JOIN sales",
         "ON sellers.Id = sales.Id_vendedor AND sales.Id_vendedor = $Id_vendedor",
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
        <p>Mostrando <?php echo $count;?> venda(s) para este vendedor.</p>
     </tr>
</table>