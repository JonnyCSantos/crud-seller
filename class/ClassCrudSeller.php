<?php
include("{$_SERVER['DOCUMENT_ROOT']}/crud-seller/class/ClassConnection.php");

class ClassCrudSeller extends ClassConnection {
    #Atributos
    private $Crud;
    private $Counter;

    #preparação das declarativas
    private function preparedStatements($Query , $Parameters){
        $this->countParameters($Parameters);
        $this->Crud=$this->conectDB()->prepare($Query);
        echo $this->Counter;

        if($this->Counter > 0) {
            for($i = 1; $i <= $this->Counter; $i++) {
                $this->Crud->bindValue($i, $Parameters[$i-1]);
            }
        }
        $this->Crud->execute();
    }

    #Counter de parâmetros
    private function countParameters($Parameters)  {
        $this->Counter=count($Parameters);
    }

    #Inserção no Banco de Dados
    public function insertDB($Table , $Condition , $Parameters){
        $this->preparedStatements("insert into {$Table} values ({$Condition})" , $Parameters);
        return $this->Crud;
    }

    #Seleção no Banco de Dados
    public function selectDB($Campos , $Table , $Condition , $Parameters){
        $this->preparedStatements("select {$Campos} from {$Table} {$Condition}",$Parameters);
        return $this->Crud;
    }

    #Deletar dados no DB
    public function deleteDB($Table , $Condition , $Parameters){
        $this->preparedStatements("delete from {$Table} where {$Condition}" , $Parameters);
        return $this->Crud;
    }

    #Atualização no banco de dados
    public function updateDB($Table , $Set , $Condition , $Parameters)
    {
        $this->preparedStatements("update {$Table} set {$Set} where {$Condition}",$Parameters);
        return $this->Crud;
    }
}