<?php

class TableCell extends Elemento
{
    /**
     * instancia uma nova célula
     * @param $value = conteúdo da célula
     */
    public function __construct($value)
    {
        parent::__construct('td');
        parent::add($value);
    }
}
