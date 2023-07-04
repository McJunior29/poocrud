<?php
class mClientes {
	private $nome;
    private $sob_nome;
    private $user;
    private $senha;

	public function __construct( $nome, $sob_nome, $user, $senha){
		$this->nome = $nome;
		$this->sob_nome = $sob_nome;
		$this->user = $user;
		$this->senha = $senha;
	}
    public function getNome(){
        return $this->nome;
    }
    public function getSobrenome(){
        return $this->sob_nome;
    }
    public function getUser(){
        return $this->user;
    }
    public function getSenha(){
        return $this->senha;
    }
	public function setNome($nome){
        $this->nome = $nome;
    }
    public function setSobrenome($sob_nome){
        $this->sob_nome = $sob_nome;
    }
    public function setUser($user){
        $this->user = $user;
    }
    public function setSenha($senha){
        $this->senha = $senha;
    }

}
?>