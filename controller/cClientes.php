<?php
require_once("../model/mClientes.php");
require_once("../model/conexao.php");
class cClientes {
	private $cliente;
	public function __construct() {
		$this->cliente = new mclientes(null,null, null, null, null); 
	}
	public function Inserir($nome,$sob_nome,$user,$senha) {
		$con = new conexao();
		$this->cliente->setNome($nome);
		$this->cliente->setSobrenome($sob_nome);
		$this->cliente->setUser($user);
		$this->cliente->setSenha($senha);
		$query = "INSERT INTO  `usuarios` (`nome`, `sobrenome`, `login`, `senha`) VALUES ('".$this->cliente->getNome()."','".$this->cliente->getSobrenome()."','".$this->cliente->getUser()."','".$this->cliente->getSenha()."')";
		$con->executar($query);
		$con->desconectar();
	}
	public function Pesquisar($nome) {
		$con = new conexao();
		if (isset($nome)) {
			$query = "SELECT * from usuarios where nome like '%$nome%'";
		} else {
			$query = "SELECT * from usuarios";
		}
		$sql = $con->executar($query);
		$con->desconectar();
		return $sql;
	}
		public function Pesquisar_atu($id) {
		$con = new conexao();
		if (isset($id)) {
			$query = "SELECT * from usuarios where id = $id";
		}
		$sql = $con->executar($query);
		$con->desconectar();
		return $sql;
	}
	public function Excluir($id){
		$con = new conexao();
		if (isset($id)) {
			$query = "DELETE from usuarios where id = $id";
		}
		$sql = $con->executar($query);
		$con->desconectar();
		return $sql;
	}
	    public function Atualizar($nome,$sob_nome,$user,$senha,$id){
	    $con = new conexao();
	    $this->cliente->setNome($nome);
		$this->cliente->setSobrenome($sob_nome);
		$this->cliente->setUser($user);
		$this->cliente->setSenha($senha);
        $query= "UPDATE `usuarios` SET `nome`='".$this->cliente->getNome()."',`sobrenome`='".$this->cliente->getSobrenome()."',`login`='".$this->cliente->getUser()."',`senha`='".$this->cliente->getSenha()."' WHERE id = $id";
		$sql = $con->executar($query);
		$con->desconectar();
		return $sql;
    }
	
}
?>