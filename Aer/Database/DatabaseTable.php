<?php


namespace Aer\Database;


class DatabaseTable
{
    public $tableName;
    private $columns = array();

    public function create(){
        print_r($this->columns);
    }

    public function addColumn(string $type, string $name, int $length){
        $column = array('type' => $type, 'name' => $name, 'length' => $length);
        array_push($this->columns, $column);
    }

    public function varchar(string $name, int $length){
        $this->addColumn('string', $name, $length);
    }

    public function integer(string $name, int $length){
        $this->addColumn('integer', $name, $length);
    }

}