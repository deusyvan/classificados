<?php
 
class Anuncios {
    public function getMeusAnuncios(){
        global $pdo;
        
        $array = array();
        $sql = $pdo->query("SELECT * FROM anuncios where id_usuario  = :id_usuario");
        $sql->bindValue(":id_usuario", $_SESSION['cLogin']);
        $sql->execute();
        
        if ($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }
        
        return $array;
    }
}
?>