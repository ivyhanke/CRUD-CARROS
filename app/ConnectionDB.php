<?php
 
class ConnectionDB 
{
    private static $conexao;
    
	public static function getConnection() {
		$username = "admin";
        $password = "12345678";

		try {
			return new PDO('mysql:host=localhost;dbname=cars', $username, $password);
		} catch(PDOException $e) {
			echo 'ERROR: ' . $e->getMessage();
		}
	}
}