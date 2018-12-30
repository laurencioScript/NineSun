<?php 
	require_once 'class/Conexao.php';

	class Grid{

		public $cidade;
		public $classificacao;
		public $acomodidade;
		public $keyword;

		
		public static function getStar($value){
			$estrelas = "";
			if ($value == 0) {
				
			}
			else{
				for ($i=0; $i < $value ; $i++) { 
					$estrelas .= "<span class=\"glyphicon glyphicon-star\"></span>";
				}
			}
			
			return $estrelas;
		}

		public function buscarHoteis(){

			$query = "SELECT nome,endereco,telefone,website,classificacao,img_A,email FROM hoteis join cidades ON id_cidade = cidades.id 
				JOIN servicos ON hoteis.id = servicos.id  WHERE ";
			
			if(count($this->keyword) > 1){
				$string = $this->keyword[1];
				$string = trim($string);
				$this->keyword[1] = $string;
				$query .= count($this->cidade) > 1 ? " ( ": "";
				
			};
			
			if(count($this->cidade) > 1){
				$query .= " cidades.id in (";
				for ($i = 1; $i < count($this->cidade); $i++) { 
					$query .= $i > 1 ? ","  : "";
					$query.= "'{$this->cidade[$i]}' ";
				};
				$query .= ") ";
					
			};

			if(count($this->keyword) > 1){
				$query .= count($this->cidade) > 1? " OR ": "";
				$query .= " cidade = '{$this->keyword[1]} ' ";
				$query .= count($this->cidade) > 1? " ) ": "";
			};

			

			if(count($this->classificacao) > 1){
				if(count($this->cidade) > 1 || count($this->keyword) > 1){
					$query.= " AND ";
				}
				$query .= " classificacao IN (";
				for ($i = 1; $i < count($this->classificacao); $i++) { 
					$query .= $i > 1 ? ","  : "";
					$query.= "'{$this->classificacao[$i]}' ";
				};
					$query.= ")";
			};

			if(count($this->acomodidade) > 1){
				if(count($this->cidade) > 1){
					$query.= " AND ";
				}
				for ($i = 1; $i < count($this->acomodidade); $i++) { 
					$query .= ($i > 1) ? " AND" : "";
					$this->acomodidade[$i] = strtolower($this->acomodidade[$i]);
					$query.= "(servico_A = {$this->acomodidade[$i]} or servico_B = {$this->acomodidade[$i]} or servico_C = {$this->acomodidade[$i]}
					or servico_D = {$this->acomodidade[$i]} or servico_E = {$this->acomodidade[$i]} or servico_F = {$this->acomodidade[$i]} 
					or servico_G = {$this->acomodidade[$i]} or servico_H = {$this->acomodidade[$i]} or servico_I = {$this->acomodidade[$i]}
					or servico_J = {$this->acomodidade[$i]} or servico_K = {$this->acomodidade[$i]} or servico_L = {$this->acomodidade[$i]} 
					or servico_M = {$this->acomodidade[$i]} or servico_N = {$this->acomodidade[$i]} or servico_O = {$this->acomodidade[$i]})";
				};
			};

			

			if(count($this->keyword) > 1){
				$query .= count($this->cidade) > 1 || count($this->classificacao) > 1  || count($this->acomodidade) > 1 ? " OR ": " OR ";
				$query .= " nome = '{$this->keyword[1]}' ";
				
			};
			if(count($this->cidade) > 1 || count($this->acomodidade) > 1 || count($this->classificacao) > 1 || count($this->keyword) > 1 ){
				$conexao = Conexao::pegaConexao();
				$resultado = $conexao->query($query);
				$lista = $resultado->fetchAll();
				 return $lista;
			}
			return null;
		}

	}

	

	

	





		


