<?php
require_once "views/header.php";
require_once "Class/connect.php";

//require_once "Model/Editora.php";
//require_once "Model/Livro.php";
//require_once "Model/Autor.php";



if (isset($_GET['page'])) {
    $url = $_GET['page'];

    if ($url == 'autores') {
        $sql = "SELECT * FROM autor";
        $result = $connect->query($sql);
        require_once "views/autores.php";
    }

    if ($url == 'livros') {
        $sql = "SELECT * FROM livro";
        $result = $connect->query($sql);
        require_once "views/livros.php";
    }

    if ($url == 'editoras') {
        $sql = "SELECT * FROM editora";
        $result = $connect->query($sql);
        require_once "views/editoras.php";
    }
} elseif (isset($_GET['autor'])) {
    require_once "model/autor.php";
} elseif (isset($_GET['livro'])) {
    $url = $_GET['autor'];
    $sql = "SELECT * FROM livro WHERE autor = " . $url;
    $result = $connect->query($sql);
    require_once "views/livroid.php";
} elseif (isset($_GET['editora'])) {
    $url = $_GET['autor'];
    $sql = "SELECT * FROM livro WHERE autor = " . $url;
    $result = $connect->query($sql);
    require_once "views/editoraid.php";
} else {
    $sql = "SELECT * FROM livro";
    $result = $connect->query($sql);
}