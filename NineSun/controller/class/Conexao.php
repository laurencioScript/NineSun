<?php

class Conexao{

	public static function pegaConexao(){
		$DB_HOST = '127.0.0.1';
		$DB_SCHEMA = 'baixada_hoteis';
		$DB_USER = 'root';
		$DB_PASSWORD = '';
		$DB_ENCODING =  'utf8';


		$dsn = 'mysql:host=' . $DB_HOST . ';dbname=' . $DB_SCHEMA;
		$options = array(
		    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		);

		if( version_compare(PHP_VERSION, '5.3.6', '<') ){
		    if( defined('PDO::MYSQL_ATTR_INIT_COMMAND') ){
		        $options[PDO::MYSQL_ATTR_INIT_COMMAND] = 'SET NAMES ' . $DB_ENCODING;
		    }
		}else{
		    $dsn .= ';charset=' . $DB_ENCODING;
		}

		$conexao = @new PDO($dsn, $DB_USER, $DB_PASSWORD, $options);

		if( version_compare(PHP_VERSION, '5.3.6', '<') && !defined('PDO::MYSQL_ATTR_INIT_COMMAND') ){
		    $sql = 'SET NAMES ' . $DB_ENCODING;
		    $conexao->exec($sql);
		}
		return $conexao;
	}
		
}

?>
