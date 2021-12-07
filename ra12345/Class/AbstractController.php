<?php

abstract class AbstractController
{
    protected $repositorio;

    public function __construct($repositorio)
    {
        $this->repositorio = $repositorio;
    }

    protected function view($nome, array $valores = [])
    {
        $padrao = ["flash" => $this->getMensagem()];
        $valores = array_merge($padrao, $valores);
        extract($valores);
        $template = "view/{$nome}.phtml";
        return include_once $template;
    }

    protected function isPost()
    {
        return count($_POST);
    }

    protected function getValor($valor = "")
    {
        if (empty($valor)) {
            return $_POST;
        }
        return $_POST[$valor] ?? "";
    }

    protected function getParam($valor = false)
    {
        if (empty($valor)) {
            return $_GET;
        }
        return $_GET[$valor] ?? false;
    }

    protected function redirect($action, $id = null, $controller = null)
    {

        $parametros = $_GET;
        if (!empty($controller)) {
            $parametros["controller"] = $controller;
        }
        if (!empty($action)) {
            $parametros["action"] = $action;
        }
        if (empty($id)) {
            unset($parametros["id"]);
        }
        $url = "ra62303?";
        foreach ($parametros as $chave => $valor) {
            if (empty($valor)) {
                continue;
            }
            $url .= "{$chave}={$valor}&";
        }
        header("location: /{$url}");
    }
    protected function addMensagem($texto)
    {
        $_SESSION["flash"] = $texto;
    }

    public function getMensagem()
    {
        $texto = $_SESSION["flash"] ?? "";
        $_SESSION["flash"] = "";
        return $texto;
    }
}
