<?php require_once('Conexao.php');

class ServicoDoHotel{

	public $id;
	public $servico_A;
	public $servico_B;
	public $servico_C;
	public $servico_D;
	public $servico_E;
	public $servico_F;
	public $servico_G;
	public $servico_H;
	public $servico_I;
	public $servico_J;
	public $servico_K;
	public $servico_L;
	public $servico_M;
	public $servico_N;
	public $servico_O;
	
	function inicializa($ary){
		$this->servico_A = $ary[0];
		$this->servico_B = $ary[1];
		$this->servico_C = $ary[2];
		$this->servico_D = $ary[3];
		$this->servico_E = $ary[4];
		$this->servico_F = $ary[5];
		$this->servico_G = $ary[6];
		$this->servico_H = $ary[7];
		$this->servico_I = $ary[8];
		$this->servico_J = $ary[9];
		$this->servico_K = $ary[10];
		$this->servico_L = $ary[11];
		$this->servico_M = $ary[12];
		$this->servico_N = $ary[13];
		$this->servico_O = $ary[14];
    }

    public function inserir(){
		$query = "INSERT INTO servicos (servico_A,servico_B,servico_C,servico_D,servico_E,servico_F,servico_G,servico_H,servico_I,servico_J,servico_K,servico_L,servico_M,servico_N,servico_O) 
		VALUES 
		('{$this->servico_A}','{$this->servico_B}','{$this->servico_C}','{$this->servico_D}','{$this->servico_E}','{$this->servico_F}','{$this->servico_G}','{$this->servico_H}','{$this->servico_I}','{$this->servico_J}','{$this->servico_K}','{$this->servico_L}','{$this->servico_M}','{$this->servico_N}','{$this->servico_O}')";
		echo $query;
		$conexao = Conexao::pegaConexao();
		$conexao->exec($query);
	}

	public function atualizar(){
		$query = "UPDATE servicos SET servico_A = '{$this->servico_A}', servico_B = '{$this->servico_B}', servico_C = '{$this->servico_C}', servico_D = '{$this->servico_D}', servico_E = '{$this->servico_E}', servico_F = '{$this->servico_F}', servico_G = '{$this->servico_G}', servico_H = '{$this->servico_H}',servico_I = '{$this->servico_I}', servico_J = '{$this->servico_J}', servico_K = '{$this->servico_K}', servico_L = '{$this->servico_L}', servico_M = '{$this->servico_M}', servico_N = '{$this->servico_N}', servico_O  = '{$this->servico_O}' WHERE id = '{$this->id}' ;";

		$conexao = Conexao::pegaConexao();
		$conexao->exec($query);
	}

	public function atualizar_campo($campo,$value,$id){
		$query = "UPDATE servicos SET {$campo} = '{$value}' WHERE id = {$id};";
		
		$conexao = Conexao::pegaConexao();
		$conexao->exec($query);
	}

	public function deletar(){
		$query = "DELETE FROM servicos where id = '{$this->id}' ";
		$conexao = Conexao::pegaConexao();
		$conexao->exec($query);
	}

	public function listar(){
		$query = "SELECT * FROM servicos;";
		$conexao = Conexao::pegaConexao();
		$resultado = $conexao->query($query);
		$lista = $resultado->fetchAll();
		return $lista;
	}

	

	public static function get_one_row($id){
		$query = "SELECT servico_A,servico_B,servico_C,servico_D,servico_E,servico_F,servico_G,servico_H,servico_I,servico_J,servico_K,servico_L,servico_M,servico_N,servico_O FROM servicos WHERE id = '{$id}' ;";
		$conexao = Conexao::pegaConexao();
		$resultado = $conexao->query($query);
		$lista = $resultado->fetchAll();
		$lista = $lista[0];
		return $lista;
	}

	public static function buscaServico($servicos){
		
		$acomo = array();
		
		for ($i=0; $i <14 ; $i++) {
			if($servicos[$i] != 0){
				$query = "SELECT tipo From tipos_de_servicos where id = '{$servicos[$i]}';";
				$conexao = Conexao::pegaConexao();
				$resultado = $conexao->query($query);
				$lista = $resultado->fetchAll();
				array_push($acomo,$lista[0]['tipo']);
			}
		}		
		return $acomo;
	}

	public static function valida_servico($valor){
        if(isset($_POST['id'])){
        
        	$lista_id = ServicoDoHotel::get_one_row($_POST['id']);
        	
        	$lista_acomodidades = ServicoDoHotel::buscaServico($lista_id);
            
            foreach ($lista_acomodidades as $acomo){
                if($valor==$acomo){
                        echo "checked";
                }
            }
        }
    }

}//class
?>