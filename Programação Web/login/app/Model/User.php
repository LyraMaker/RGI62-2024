<?php

class User{
    private string $username;
    private string $senha;
    private bool $ativa;

    

	public function getUsername()
	{
		return $this->username;
	}

	public function setUsername($username)
	{
		$this->username = $username;
	}

	public function getSenha()
	{
		return $this->senha;
	}

	public function setSenha($senha)
	{
		$this->senha = $senha;
	}

	public function getAtiva()
	{
		return $this->ativa;
	}

	public function setAtiva($ativa)
	{
		$this->ativa = $ativa;
	}
}