<?php
    namespace Core;

    class Model {
        
        protected $db;

        public function __construct() {
            global $db;
            $this->db = $db;
        }

        //basic CRUD
        public function create($data, $table) {

            foreach ($data as $key => $value) {
                @$fields .= $key;
                @$values .= ":". $key;

                if(@$i++ < count($data) - 1) {
                    $fields .= ', ';
                    $values .= ', ';
                }
            }

            $sql = "INSERT INTO " . $table . " (" . $fields . ") VALUES (" . $values . ")";
            $sql = $this->db->prepare($sql);

            foreach ($data as $key => $value) {
                $sql->bindValue(":" . $key, $value);
            }

            $sql->execute();
            
            $id = $this->db->lastInsertId();

            return $id;
        }
    }
?>