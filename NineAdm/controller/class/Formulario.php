<?php require_once('../controller/class/Acomodidade.php');?>
<?php include_once('../controller/class/Hotel.php');?>
<?php

	class Formulario{

		public $url_arquivo;
		public $name_btn;
		public $tipo_btn;
		public $acomodidade;
		public $hotel; 

		public function __construct($form,$name,$tipo){
			$this->url_arquivo = $form;
			$this->name_btn = $name;
			$this->tipo_btn = $tipo;
			$this->acomodidade = new Acomodidade(0,"","");
			$this->hotel = new Hotel("","","","","","","","","","","","",""); 
		}

		public function validar_tipo_form(){
			if(isset($_POST['id'])):
		        
		        if($_SERVER["REQUEST_URI"] == '/NineSun/NineAdm/view/formulario-hotel.php'):
		        	$this->tipo_hotel();
		        else:
		        	$this->tipo_servico();
		        endif;
			            
			    $this->url_arquivo = "altera";
				$this->name_btn = "Alterar";
				$this->tipo_btn = "warning";
				 
		    endif;
		}

		public function tipo_hotel(){
			$this->hotel->id = $_POST['id'];
			    $registroH = $this->hotel->get_one_row();
			    $this->hotel = new Hotel(
			    	$registroH['id'],$registroH['nome'],$registroH['endereco'],
			    	$registroH['telefone'],$registroH['website'],$registroH['email'],
			    	$registroH['classificacao'],$registroH['id_cidade'],
			    	$registroH['img_A'],$registroH['img_B'],$registroH['img_C'],
			    	$registroH['img_D'],$registroH['img_E']
			    );
		}

		public function tipo_servico(){
			$this->acomodidade->id = $_POST['id'];		        
			$registroA = $this->acomodidade->get_one_row();
			$this->acomodidade = new Acomodidade($_POST['id'],$registroA['tipo'],
			    									 $registroA['img']);
		}


        
  
      
	}


?>