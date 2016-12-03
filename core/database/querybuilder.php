<?php
class Query_builder {
	protected $pdo;
	function 	__construct(PDO $pdo) {
		$this->pdo = $pdo;
	}
	public function select_all( $table ) {
		$query = $this->pdo->prepare("SELECT * FROM $table");		//returns PDO object with property queryString
		$query->execute();																			//returns boolean value i.e. true or false
		return $query->fetchAll(PDO::FETCH_CLASS);							//returns arrays of all rows
	}
	public function insert_data( $table, $parameters ) {
		$sql = sprintf(
			"INSERT INTO %s (%s) VALUES (%s)",
			$table,
			implode(',', array_keys($parameters)),
			':' . implode(', :', array_keys($parameters))
		);
		// $stmt->bindParam(':name', $name);												//returns boolean if $name exist
		// return $stmt->execute();																//returns boolean if query executed
		$stmnt = $this->pdo->prepare($sql);
		return $stmnt->execute($parameters);
	}
}