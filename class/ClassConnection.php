<?php

abstract class ClassConnection {
    #realizará a conexão com o banco de dados
    protected function conectDB() {
        try {
            $Con = new PDO("mysql:host=localhost;dbname=crud-sellers", "root", "");
            return $Con;
        }catch (PDOException $Erro) {
            return $Erro->getMessage();
        }
    }
}