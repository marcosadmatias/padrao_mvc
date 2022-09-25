<?php 
class Model{
	protected static $entity;
	protected $fail;
	protected $query;
	protected $params;
	protected $db;

	public function __construct($entity){
		global $db;
		$this->db = $db;
		self::$entity = $entity;
	}

	public function fail()
	{
		return $this->fail;
	}

	// @params null|string $terms
	// @param null|string $params
    // @param string $columns
	public function find($terms = null, $params = null, $columns = "*")
	{
		if($terms){
			$this->query = "SELECT {$columns} FROM ".static::$entity." WHERE {$terms}";
			parse_str($params, $this->params);
			return $this;
		}

		$this->query = "SELECT {$columns} FROM ".static::$entity;
		return $this;
	}

	public function fetch($all = false)
	{
		try{
			$sql = $this->db->prepare($this->query);
			$sql->execute();

			if(!$sql->rowCount()){
				return null;
			}

			if($all){
				return $sql->fetchAll(PDO::FETCH_ASSOC);
			}
			
			return $sql->fetch(PDO::FETCH_ASSOC);
		}catch(PDOException $exception){
			$this->fail = $exception;
			return false;
		}
	}
}