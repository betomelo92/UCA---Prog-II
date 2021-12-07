<?php
require_once('connect.php');
class Editora extends Connect
{
    protected $connect;
    private $nome, $endereco, $cidade, $email, $telefone;

    public function __construct()
    {
        $this->connect = $this->ConnectBD();
    }

    public function setDados($dados)
    {
        $obj = json_decode($dados);
        $this->nome = $obj->nome;
        $this->endereco = $obj->endereco;
        $this->cidade = $obj->cidade;
        $this->email = $obj->email;
        $this->telefone = $obj->telefone;
    }

    public function insertEditora($dados)
    {
        $this->setDados($dados);
        $sql = "INSERT INTO editora (nome, endereco, cidade, email, telefone) VALUE ('$this->nome', '$this->endereco', '$this->cidade', '$this->email', '$this->telefone')";
        $return = $this->connect->query($sql);
        if ($return)
            return 1;
        else
            return 0;
    }

    public function listEditora()
    {
        $sql = "SELECT * FROM editora order by nome asc";
        $return = $this->connect->query($sql);
        $editoras = array();
        while ($line = $return->fetch_assoc()) {
            $editoras[] = $line;
        }
        return json_encode($editoras);
    }
}
