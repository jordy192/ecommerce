<?php 
//Classe de conexão com o banco
namespace Hcode\DB;

class Sql {
	// Dados da conexão com o banco
	const HOSTNAME = "mysql.hostinger.com.br";
	const USERNAME = "u436903558_pet";
	const PASSWORD = "estacio2017";
	const DBNAME = "u436903558_dbpet";

	private $conn;

	// Contrutor padrão do banco
	public function __construct()
	{

		$this->conn = new \PDO(
			"mysql:dbname=".Sql::DBNAME.";host=".Sql::HOSTNAME, 
			Sql::USERNAME,
			Sql::PASSWORD
		);

	}
	// Defini os parâmetros para a conexão
	private function setParams($statement, $parameters = array())
	{

		foreach ($parameters as $key => $value) {
			
			$this->bindParam($statement, $key, $value);

		}

	}
	// Recebe o valor da variavel
	private function bindParam($statement, $key, $value)
	{

		$statement->bindParam($key, $value);

	}
	// Executa a query no banco
	public function query($rawQuery, $params = array())
	{

		$stmt = $this->conn->prepare($rawQuery);

		$this->setParams($stmt, $params);

		$stmt->execute();

	}
	// Seleciona o campo do banco
	public function select($rawQuery, $params = array()):array
	{

		$stmt = $this->conn->prepare($rawQuery);

		$this->setParams($stmt, $params);

		$stmt->execute();

		return $stmt->fetchAll(\PDO::FETCH_ASSOC);

	}

}

 ?>