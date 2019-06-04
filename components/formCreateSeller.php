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

<div class="result"></div>

<div class="Formulario">
    <h1 class="Center">Cadastro</h1>

    <form name="FormCadastro" id="FormCadastro" method="post" action="../controllers/controllerCreate.php">
        <input type="text" id="Acao" name="Acao" value="<?php echo $Acao; ?>">
        <input type="hidden" id="Id" name="Id" value="<?php echo $Id; ?>">

        <div class="FormularioInput">
            Nome: <br>
            <input type="text" id="Nome" name="Nome" value="<?php echo $Nome; ?>">
        </div>

        <div class="FormularioInput">
            Email: <br>
            <input type="text" id="Email" name="Email" value="<?php echo $Email; ?>">
        </div>

        <div class="FormularioInput FormularioInput100 Center">
            <input type="submit" value="<?php echo $Acao; ?>">
        </div>
    </form>
</div>