<?php
class Livro
{
    private $repositorio;
    private $titulo;
    private $totalPag;
    private $edicao;
    private $isbn;
    private $ano;
    private $fotocapa;
    private $autores = [];
    private $idEditora;

    /* -------- SETS -------- */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }
    public function setTotalPag($totalPag)
    {
        $this->totalPag = $totalPag;
    }
    public function setEdicao($edicao)
    {
        $this->edicao = $edicao;
    }
    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;
    }
    public function setAno($ano)
    {
        $this->ano = $ano;
    }
    public function setFotoCapa($fotocapa)
    {
        $this->fotocapa = $fotocapa;
    }
    public function setIdEditora($idEditora)
    {
        $this->idEditora = $idEditora;
    }


    /* -------- GETS -------- */
    public function getTitulo()
    {
        return $this->titulo;
    }
    public function getTotalPag()
    {
        return $this->totalPag;
    }
    public function getEdicao()
    {
        return $this->edicao;
    }
    public function getIsbn()
    {
        return $this->isbn;
    }
    public function getAno()
    {
        return $this->ano;
    }
    public function getFotoCapa()
    {
        return $this->totalPag;
    }
    public function getAutores()
    {
        if (!count($this->autores)) {
            $this->autores = $this->repositorio->loadAutoresByLivro($this);
        }
        return $this->autores;
    }
    public function getIdEditora()
    {
        if (!$this->Ideditora) {
            $this->Ideditora = $this->repositorio->loadIdEditoraByLivro($this);
        }
        return $this->Ideditora;
    }
    public function setRepositorio($repositorio)
    {
        $this->repositorio = $repositorio;
    }


    public static function fromArray(array $data)
    {
        $livro = new self();
        $livro->setTitulo($data['titulo']);
        $livro->setTotalPag($data['total de paginas']);
        $livro->setEdicao($data['edicao']);
        $livro->setIsbn($data['ISBN']);
        $livro->setAno($data['ano']);
        $livro->setFotoCapa($data['foto da capa']);
        $livro->setIdEditora($data['editora']);
    }

    public function temAutor($autor)
    {

        foreach ($this->getAutores() as $autorAtual) {
            if ($autor->getId() == $autorAtual->getId()) {
                return true;
            }
        }
        return false;
    }
}
