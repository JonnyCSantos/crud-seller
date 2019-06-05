<?php
if(isset($_POST['Id'])){ $Id=filter_input(INPUT_POST,'Id',FILTER_SANITIZE_SPECIAL_CHARS); }elseif(isset($_GET['Id'])){ $Id=filter_input(INPUT_GET,'Id',FILTER_SANITIZE_SPECIAL_CHARS); }else{ $Id=0; }
if(isset($_POST['Valor'])){ $Valor=filter_input(INPUT_POST,'Valor',FILTER_SANITIZE_SPECIAL_CHARS); }elseif(isset($_GET['Valor'])){ $Valor=filter_input(INPUT_GET,'Valor',FILTER_SANITIZE_SPECIAL_CHARS); }else{ $Valor=0; }
if(isset($_POST['Comissao'])){ $Comissao=filter_input(INPUT_POST,'Comissao',FILTER_SANITIZE_SPECIAL_CHARS); }elseif(isset($_GET['Comissao'])){ $Comissao=filter_input(INPUT_GET,'Comissao',FILTER_SANITIZE_SPECIAL_CHARS); }else{ $Comissao=0; }
if(isset($_POST['Data'])){ $Data=filter_input(INPUT_POST,'Data',FILTER_SANITIZE_SPECIAL_CHARS); }elseif(isset($_GET['Data'])){ $Data=filter_input(INPUT_GET,'Data',FILTER_SANITIZE_SPECIAL_CHARS); }else{ $Data=""; }
if(isset($_POST['Id_vendedor'])){ $Id_vendedor=filter_input(INPUT_POST,'Id_vendedor',FILTER_SANITIZE_SPECIAL_CHARS); }elseif(isset($_GET['Id_vendedor'])){ $Id_vendedor=filter_input(INPUT_GET,'Id_vendedor',FILTER_SANITIZE_SPECIAL_CHARS); }else{ $Id_vendedor=0; }
