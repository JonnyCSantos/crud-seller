<?php 
// Acoes
if(isset($_POST['Acao'])){ $Acao=filter_input(INPUT_POST,'Acao',FILTER_SANITIZE_SPECIAL_CHARS); }elseif(isset($_GET['Acao'])){ $Acao=filter_input(INPUT_GET,'Acao',FILTER_SANITIZE_SPECIAL_CHARS); }else{ $Acao=""; }

if(isset($_POST['Id'])){ $Id=filter_input(INPUT_POST,'Id',FILTER_SANITIZE_SPECIAL_CHARS); }elseif(isset($_GET['Id'])){ $Id=filter_input(INPUT_GET,'Id',FILTER_SANITIZE_SPECIAL_CHARS); }else{ $Id=0; }

// Sellers
if(isset($_POST['Nome'])){ $Nome=filter_input(INPUT_POST,'Nome',FILTER_SANITIZE_SPECIAL_CHARS); }elseif(isset($_GET['Nome'])){ $Nome=filter_input(INPUT_GET,'Nome',FILTER_SANITIZE_SPECIAL_CHARS); }else{ $Nome=""; }
if(isset($_POST['Email'])){ $Email=filter_input(INPUT_POST,'Email',FILTER_SANITIZE_SPECIAL_CHARS); }elseif(isset($_GET['Email'])){ $Email=filter_input(INPUT_GET,'Email',FILTER_SANITIZE_SPECIAL_CHARS); }else{ $Email=""; }
// Sales
if(isset($_POST['Id_sale'])){ $Id_sale=filter_input(INPUT_POST,'Id_sale',FILTER_SANITIZE_SPECIAL_CHARS); }elseif(isset($_GET['Id_sale'])){ $Id=filter_input(INPUT_GET,'Id_sale',FILTER_SANITIZE_SPECIAL_CHARS); }else{ $Id_sale=0; }
if(isset($_POST['Valor'])){ $Valor=filter_input(INPUT_POST,'Valor',FILTER_SANITIZE_SPECIAL_CHARS); }elseif(isset($_GET['Valor'])){ $Valor=filter_input(INPUT_GET,'Valor',FILTER_SANITIZE_SPECIAL_CHARS); }else{ $Valor=""; }
if(isset($_POST['Comissao'])){ $Comissao=filter_input(INPUT_POST,'Comissao',FILTER_SANITIZE_SPECIAL_CHARS); }elseif(isset($_GET['Comissao'])){ $Comissao=filter_input(INPUT_GET,'Comissao',FILTER_SANITIZE_SPECIAL_CHARS); }else{ $Comissao=""; }
if(isset($_POST['Data'])){ $Data=filter_input(INPUT_POST,'Data',FILTER_SANITIZE_SPECIAL_CHARS); }elseif(isset($_GET['Data'])){ $Data=filter_input(INPUT_GET,'Data',FILTER_SANITIZE_SPECIAL_CHARS); }else{ $Data=""; }
if(isset($_POST['Id_vendedor'])){ $Id_vendedor=filter_input(INPUT_POST,'Id_vendedor',FILTER_SANITIZE_SPECIAL_CHARS); }elseif(isset($_GET['Id_vendedor'])){ $Id_vendedor=filter_input(INPUT_GET,'Id_vendedor',FILTER_SANITIZE_SPECIAL_CHARS); }else{ $Id_vendedor=""; }
