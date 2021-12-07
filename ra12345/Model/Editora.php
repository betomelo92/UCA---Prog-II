<?php
class Editora
{
    private $repositorio;
    private $nome;
    private $endereco;
    private $cidade;
    private $email;
    private $telefone;
    private $livros = [];

    /* -------- SETS -------- */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }
    public function setLivros($livros)
    {
        $this->livros = $livros;
    }
    public function setRepositorio($repositorio)
    {
        $this->repositorio = $repositorio;
    }


    /* -------- GETS -------- */
    public function getNome()
    {
        return $this->nome;
    }
    public function getEndereco()
    {
        return $this->endereco;
    }
    public function getCidade()
    {
        return $this->cidade;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getTelefone()
    {
        return $this->telefone;
    }
    public function getLivros()
    {
        if (!count($this->livros)) {
            $this->livros = $this->repositorio->loadLivrosByEditora($this);
        }
        return $this->livros;
    }
    public function __toString()
    {
        return $this->nome . " / " . $this->cidade;
    }
}
