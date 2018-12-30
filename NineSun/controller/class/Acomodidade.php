<?php require_once('Conexao.php');

class Acomodidade{

	public $id;
	public $tipo;
	public $imagem;

	function __construct($id,$tipo,$imagem) {
       $this->id = $id;
       $this->tipo = $tipo;
       $this->imagem = $imagem;
    }

	public static function listar(){
		$query = 'SELECT * FROM tipos_de_servicos';

		$conexao = Conexao::pegaConexao();
		$resultado = $conexao->query($query);
		$lista = $resultado->fetchAll();
		return $lista;
	}

	public function get_one_row(){
		$query = "SELECT * FROM tipos_de_servicos WHERE id = '{$this->id}' ";
		$conexao = Conexao::pegaConexao();
		$resultado = $conexao->query($query);
		$lista = $resultado->fetchAll();
		$lista = $lista[0];
		return $lista;
	}

	public function inserir(){
		$query = "INSERT INTO tipos_de_servicos (tipo,img) VALUES ('{$this->tipo}','{$this->imagem}')";
		$conexao = Conexao::pegaConexao();
		$conexao->exec($query);
	}

	public function atualizar(){
		$query = "UPDATE tipos_de_servicos SET tipo = '{$this->tipo}', img = '{$this->imagem}' where id = '{$this->id}' ";
		$conexao = Conexao::pegaConexao();
		$conexao->exec($query);
	}

	public function deletar(){
		$query = "DELETE FROM tipos_de_servicos  where id = '{$this->id}';";
		$conexao = Conexao::pegaConexao();
		$conexao->exec($query);
	}

}

?>