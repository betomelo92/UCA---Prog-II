<?php
class LivroController extends AbstractController
{
    public function index()
    {
        $livros = $this->repositorio->listarLivros();
        return $this->view("livro/index", [
            "livros" => $livros
        ]);
    }

    public function cadastro()
    {
        $livro = $this->repositorio->findLivro($this->getParam("id"));
        if ($this->isPost()) {
            $livro = Livro::fromArray($this->getValor());
            $this->repositorio->salvarLivro($livro, $this->getParam("id"));
            $this->addMensagem("Livro salvo com sucesso!");
            $this->redirect("index");
        }
        $autores = $this->repositorio->listarAutores();
        $editoras = $this->repositorio->listarEditoras();
        $livros = $this->repositorio->listarLivros();
        return $this->view("livro/cadastro", [
            "livros" => $livros,
            "editoras" => $editoras,
            "autores" => $autores,
            "livro" => $livro
        ]);
    }

    public function deletar()
    {
        $this->repositorio->deletarLivro($this->getParam("id"));
        $this->addMensagem("Livro removido com sucesso!");
        $this->redirect("index");
    }
}
