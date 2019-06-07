<?php
include("{$_SERVER['DOCUMENT_ROOT']}/crud-seller/Class/ClassCrud.php");
    /* Edição de dados */
    if(isset($_GET['id'])){
        $Acao="Editar";

        $Crud=new ClassCrud();
        $BFetch=$Crud->selectDB("*","sellers","where Id=?",array($_GET['id']));
        $Fetch=$BFetch->fetch(PDO::FETCH_ASSOC);
        $Id=$Fetch['Id'];
        $Nome=$Fetch['Nome'];
        $Email=$Fetch['Email'];
    }

    /* Cadastro novo */
    else{
        $Acao="Cadastrar";
        $Id=0;
        $Nome="";
        $Email="";
    }
?>



<div class="Formulario">
    <form name="FormCadastro" id="FormCadastro" method="post" action="../controllers/controllerCreateSeller.php">
        <input type="hidden" id="Acao" name="Acao" value="<?php echo $Acao; ?>">
        <input type="hidden" id="Id" name="Id" value="<?php echo $Id; ?>">

        <div class="FormularioInput">
            <input type="text" id="Nome" name="Nome" placeholder="Digite o nome" value="<?php echo $Nome; ?>">
        </div>

        <div class="FormularioInput">
            <input type="text" id="Email" name="Email" placeholder="Digite o e-mail" value="<?php echo $Email; ?>">
        </div>

        <div class="FormularioInput FormularioInput100 Center">
            <input type="submit" value="<?php echo $Acao; ?>">
        </div>
    </form>
</div>

<div class="result"></div>