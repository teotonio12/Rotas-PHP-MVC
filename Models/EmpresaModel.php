<?php

require "../Models/BaseModels.php";

class EmpresaModel extends BaseModels 
{

    public $tabela = 'empresas';
    public $colunas = [
        'id_empresas','razao','cnpj', 'contato'
    ];

}