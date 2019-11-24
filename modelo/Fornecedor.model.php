<?php
	
	class Fornecedor{
		//private $for_id_fornecedor;
		private $for_nm_fornecedor;
		private $for_ds_rede_social;
		private $for_ds_data_nascimento;
		private $for_ds_endereco;
		private $for_ds_cidade;
		private $for_num_endereco;
		private $for_ds_sexo;
		private $for_ds_email;
		private $for_ds_senha;
		//private for_ds_categoria;

		public function __get($atributo) {
			return $this->$atributo;
		}

		public function __set($atributo, $valor){
			$this->$atributo = $valor;
		}
		
	}

?>