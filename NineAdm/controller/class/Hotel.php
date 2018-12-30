<?php require_once('Conexao.php');

class Hotel{

	public $id;
	public $nome;
	public $endereco;
	public $telefone;
	public $website;
	public $email;
	public $classificacao;
	public $id_cidade;
	public $img_A;
	public $img_B;
	public $img_C;
	public $img_D;
	public $img_E;
	
	function __construct($id,$nome,$endereco,$telefone,$website,$email,$classificacao,$id_cidade,$img_A,$img_B,$img_C,$img_D,$img_E){
       $this->id = $id;
       $this->nome = $nome;
       $this->endereco = $endereco;
       $this->telefone = $telefone;
       $this->website = $website;
       $this->email = $email;       
       $this->classificacao = $classificacao;
       $this->id_cidade = $id_cidade;
       $this->img_A = $img_A;
       $this->img_B = $img_B;
       $this->img_C = $img_C;
       $this->img_D = $img_D;
       $this->img_E = $img_E;
    }
	public function listar(){
		$query = 'SELECT hoteis.id as id_hotel,nome,endereco,telefone,website,email,classificacao,cidade FROM hoteis join cidades ON id_cidade = cidades.id ';

		$conexao = Conexao::pegaConexao();
		$resultado = $conexao->query($query);
		$lista = $resultado->fetchAll();
		return $lista;
	}
	public function get_one_row(){
		$query = "SELECT * FROM hoteis WHERE id = '{$this->id}' ";
		$conexao = Conexao::pegaConexao();
		$resultado = $conexao->query($query);
		$lista = $resultado->fetchAll();
		$lista = $lista[0];
		return $lista;
	}
	public function inserir(){
		$query = "INSERT INTO hoteis (nome,endereco,telefone,website,email,classificacao,id_cidade,img_A,img_B,img_C,img_D,img_E) VALUES('{$this->nome}','{$this->endereco}','{$this->telefone}','{$this->website}','{$this->email}','{$this->classificacao}','{$this->id_cidade}','{$this->img_A}','{$this->img_B}','{$this->img_C}','{$this->img_D}','{$this->img_E}')";
		$conexao = Conexao::pegaConexao();
		$conexao->exec($query);
	}

	public function atualizar(){
		$query = "UPDATE hoteis SET nome = '{$this->nome}',endereco='{$this->endereco}',telefone = '{$this->telefone}', website = '{$this->website}', email = '{$this->email}', classificacao = '{$this->classificacao}', id_cidade = '{$this->id_cidade}',img_A = '{$this->img_A}', img_B = '{$this->img_B}', img_C = '{$this->img_C}', img_D = '{$this->img_D}', img_E = '{$this->img_E}' WHERE id = '{$this->id}'; ";
		$conexao = Conexao::pegaConexao();
		$conexao->exec($query);
	}

	public function deletar(){
		$query = "DELETE FROM hoteis where id = '{$this->id}' ";
		$conexao = Conexao::pegaConexao();
		$conexao->exec($query);
	}

	public function cidadeSelecionada($id){
		if($this->id_cidade == $id){
			return "{$id}\" selected=\"selected\" "; 
		}
		else{
			return "{$id}"; 
		}

	}


}//class
?>