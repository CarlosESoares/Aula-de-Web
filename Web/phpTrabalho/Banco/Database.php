<?php 
    function conecta(){
        $user="root";
        $senha="Aluno";
        $database="ppi";
        $host="localhost";
        
        $db = new PDO("mysql:host=$host;dbname=$database",$user,$senha);
        if($db){
            return $db;
        }else{
            return false;
        }
    }

    function chekConexao($connId){
        if($connId){
            echo "conectado";
        }else{
            echo "não foi possivel conectar";
        }
    }
   
    
?>