<?php

namespace App\Urm;
use PDO;
class Insert
{

    private string $tableName;
    private array $fieldset;
    private array $fields = [];
    private array $values = [];

    public function __construct()
    {
        $connect = new Connector();
    }

    public function setTableName($tableName): void
    {
        if (empty($tableName)) {
            throw new \Exception('Table name must be set.');
        }
        $this->tableName = $tableName;
    }

    public function setField(array $fields): void
    {
        if (empty($fields)) {
            throw new \Exception('Invalid fields');
        }
        $this->fields = $fields;
    }

    public function setValues(array $values): void
    {
        if (empty($values)) {
            throw new \Exception('Invalid values');
        }
        foreach ($values as $value) {
            if (is_array($value) && count($value) !== count($this->fields)) {
                throw new \Exception('Invalid value count');
            }
        }
        $this->values = $values;
    }
    
    private function getValues(): string
    {
        $result = [];
        foreach ($this->values as $value) {
            $row = is_array($value) ? $value : [$value];
            $escapedRow = [];
            foreach ($row as $value) {
                $escapedRow[] = "'" . $value . "'";
            }
            $result[] = '(' . implode(', ', $escapedRow) . ')';
        }
        return implode(',', $result);
    }

    public function buildUrm(): string
    {
        $fieldsSql = implode(', ', $this->fields);
        $valuesSql = $this->getValues();
        return "INSERT INTO {$this->tableName} ({$fieldsSql}) VALUES {$valuesSql};";
    }

}