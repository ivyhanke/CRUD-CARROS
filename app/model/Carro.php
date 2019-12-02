<?php 
class Carro { 
    public static function selectAll() { 

        $con = ConnectionDB::getConnection(); 
        $sql = "SELECT * FROM car ORDER BY idcar ASC";
        $sql = $con->prepare($sql);
        $sql->execute();

        $resultado = array();

        while ($row = $sql->fetchObject('Carro')) {
            $resultado[] = $row;
        }

        return $resultado;
    }

    public static function insert($post_data)  {
        $con = ConnectionDB::getConnection(); 
        $sql = "INSERT INTO car (model, year, color, brand) VALUES (:model, :year, :color, :brand)";
        $sql = $con->prepare($sql);
        $sql->bindParam(':model', $post_data['model']);
        $sql->bindParam(':year', $post_data['year']);
        $sql->bindParam(':color', $post_data['color']);
		$sql->bindParam(':brand', $post_data['brand']);
        $result = $sql->execute();
        if ($result == 0) {
            throw new Exception("Falha ao inserir carro");

            return false;
        }

        return true; 
    }

    public static function edit($post_data)  {
        $con = ConnectionDB::getConnection(); 
        $sql = "UPDATE car SET model = :model, year = :year, color = :color, brand = :brand WHERE idcar = :idcar";
        $sql = $con->prepare($sql);
        $sql->bindParam(':model', $post_data['model']);
        $sql->bindParam(':year', $post_data['year']);
        $sql->bindParam(':color', $post_data['color']);
        $sql->bindParam(':brand', $post_data['brand']);
        $sql->bindParam(':idcar', $post_data['idcar'], \PDO::PARAM_INT);
        $result = $sql->execute();
        if ($result == 0) {
            throw new Exception("Falha ao alterar carro");

            return false;
        }

        return true;
    }

    
    public static function delete($idcar) { 

        $con = ConnectionDB::getConnection(); 
        $sql = "DELETE FROM car WHERE idcar = :idcar";
        $sql = $con->prepare($sql);
        $sql->bindParam(':idcar', $idcar, \PDO::PARAM_INT);
        $sql->execute();
        $result = $sql->execute();
        if ($result == 0) {
            throw new Exception("Falha ao remover carro");

            return false;
        }

        return true;
    }

    public static function selectOne($idcar) { 

        $con = ConnectionDB::getConnection(); 
        $sql = "SELECT * FROM car WHERE idcar = :idcar";
        $sql = $con->prepare($sql);
        $sql->bindParam(':idcar', $idcar, \PDO::PARAM_INT);
        $sql->execute();

        $resultado = array();

        while ($row = $sql->fetchObject('Carro')) {
            $resultado[] = $row;
        }

        return $resultado;
    }
}