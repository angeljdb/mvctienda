<?php

/**
 * 
 */
class MySQLdb
{
	private $host = 'mysql';
	private $user = 'default';
	private $pass = 'secret';
	private $dbname = 'mvctienda';
	private static $instancia = null ;
	private $db = null;

	private function __construct()
	{
		$options = [
			PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ,
            PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING
		];
        try {
            $this->db = new PDO(
                'mysql:host' . $this->host . ';dbname=' . $this->dbname, $this->user, $this->pass, $options
            );
        }catch (PDOException $exception){
            exit('La base de datos no es accesible');
        }
        private static function getInstance(){
            if (is_null(self::$instancia)){
                self::$instancia = new MySQLdb();
            }
            return self::$instancia;
            
    }
    public function getDatabase(){
            return $this->db;
    }
	}
}

?>