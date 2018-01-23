<?php

require dirname(__FILE__) . '/Elemento.php';
require dirname(__FILE__) . '/TableRow.php';

class Table extends Elemento
{
    /**
     * Instancia uma nova tabela
     */
    public function __construct()
    {
        parent::__construct('table');
    }
    
    /**
     * Agrega um novo objeto linha (TableRow) na tabela
     */
    public function addRow()
    {
        // instancia objeto linha
        $row = new TableRow;
        
        // armazena no array de linhas
        parent::add($row);
        return $row;
    }
}
