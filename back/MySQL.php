<?php

namespace db;

class MySQL implements \Database
{
    private $table;
    private $db;
    public function __construct(string $table){
        $this->table = $table;
        $this->db = new \mysqli('localhost','root','','shop', 3306);
        $this->db->set_charset('utf8mb4');

        if ($this->db->connect_errno) {
            throw new \RuntimeException('Ошибка соединения mysqli: ' . $this->db->connect_error);
        }
    }

    public function getTable(): string{
        return $this->table;
    }

    public function get(array $where = []): ?array{
        $sql = "SELECT * FROM " . $this->getTable();
        if(count($where) > 0){
            $w = [];
            foreach($where as $key => $value){
                if(is_null($value)) $value = 'NULL';
                else if(is_string($value)) $value = '"' . $value . '"';

                $w[] = $key . '=' . $value;
            }

            $sql .= ' WHERE ' . implode(' AND', $w);
        }

        $result = $this->db->query($sql);
        if(is_bool($result)) return null;

        if($result->num_rows == 0) return null;
        else if($result->num_rows == 1) return $result->fetch_assoc();

        $rows = [];
        while ($row = $result->fetch_assoc()) $rows[] = $row;
        return $rows;
    }

    public function insert(array $data): void{
        $keys = [];
        $values = [];

        foreach($data as $key => $value){
            $keys[] = '`' . $key . '`';
            if(is_numeric($value)) $values[] = $value;
            else $values[] = "'" . $this->real_string($value) . "'";
        }

        $sql = "INSERT INTO `" . $this->getTable() . "`(" . implode(", ", $keys) . ") VALUES (" . implode(", ", $values) . ")";
        $result = $this->db->query($sql);
    }
    public function update(array $updateData, array $where): void{

    }
    public function delete(array $where): void{

    }
}