<?php
	
	require_once 'Fornecedor.model.php';
	
	class FornecedorService {

		private $conexao;
		private $fornecedor;

		public function __construct(Conexao $conexao, Fornecedor $fornecedor){
			$this->conexao = $conexao->conectar();
			$this->fornecedor = $fornecedor;
		}
		
		public function inserir(){

			if ($this->recuperar($this->fornecedor->email, $this->fornecedor->senha)) {
				return false;
			}

			$query = 'insert into FOR_fornecedor(
				for_nm_fornecedor, 
				for_ds_data_nascimento,
				for_ds_endereco,
				for_ds_cidade,
				for_num_endereco,
				for_ds_sexo,
				for_ds_email,
				for_ds_senha			
			)values(:nome, :dataNascimento, :endereco, :cidade, :numero, :sexo, :email, :senha)';
			$stmt = $this->conexao->prepare($query);
			$stmt->bindValue(':nome', $this->fornecedor->__get('$for_nm_fornecedor'));

			$stmt->bindValue(':dataNascimento', $this->fornecedor->__get('$for_ds_data_nascimento'));

			$stmt->bindValue(':endereco', $this->fornecedor->__get('$for_ds_endereco'));

			$stmt->bindValue(':cidade', $this->fornecedor->__get('$for_ds_cidade'));

			$stmt->bindValue(':numero', $this->fornecedor->__get('$for_num_endereco'));

			$stmt->bindValue(':sexo', $this->fornecedor->__get('$for_ds_sexo'));

			$stmt->bindValue(':email', $this->fornecedor->__get('$for_ds_email'));

			$stmt->bindValue(':senha', md5($this->fornecedor->__get('$for_ds_senha')));
			$stmt->execute();

			return true;
		}

		public function recuperar($email, $senha){
			$query = "select * from FOR_fornecedor where ";
			$query .= " for_ds_email = :email ";
			$query .= " and for_ds_senha = :senha ";

			$stmt = $this->conexao->prepare($query);
			$stmt->bindValue(':email', $email);
			$stmt->bindValue(':senha', md5($senha));
			$stmt->execute();

			$f =  $stmt->fetchAll(PDO::FETCH_OBJ);

			if (sizeof($f) > 0) {
				// $this->fornecedor->__set("$for_nm_fornecedor", 					$f[0]->for_nm_fornecedor);

				// $this->fornecedor->__set("$for_ds_rede_social", 				$f[0]->for_ds_rede_social);

				// $this->fornecedor->__set("$for_ds_data_nascimento", $f[0]->for_ds_data_nascimento);

				// $this->fornecedor->__set("$for_ds_endereco", 							$f[0]->for_ds_endereco);

				// $this->fornecedor->__set("$for_ds_cidade", 									$f[0]->for_ds_cidade);

				// $this->fornecedor->__set("$for_num_endereco", 						$f[0]->for_num_endereco);

				// $this->fornecedor->__set("$for_ds_sexo", 											$f[0]->for_ds_sexo);

				// $this->fornecedor->__set("$for_ds_email", 										$f[0]->for_ds_email);

				// $this->fornecedor->__set("$for_ds_senha", 										$f[0]->for_ds_senha);

				return $f[0];
			}

			return null;
		}


		public function atualizar(){

		}

		public function remover(){

		}

	}
?>