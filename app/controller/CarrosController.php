<?php 

class CarrosController { 
    public function index() { 
        $Carro = new Carro();
        $result = $Carro->selectAll();
        return $result;
    }

    public function add() { 
        $Carro = new Carro();
        $Carro->insert($_POST);
    }

    public function edit() { 
        try {
            $Carro = new Carro();
            $Carro->edit($_POST);
        } catch (Exception $e) {
            return $e;
        }
    }

    public function select($idCar) {
        $Carro = new Carro();
        $result = $Carro->selectOne($idCar);
        return $result;
    }

    public function remove($idCar) {
        $Carro = new Carro();
        $result = $Carro->delete($idCar);
        return $result;
    }
}