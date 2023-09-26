<?php

    function get_data($table, $column, $id){
        return executeQuery("SELECT $column FROM $table WHERE id = $id");
    }

    function get_data_array($table){
        return executeQuery("SELECT * FROM $table");
    }   

    function update_value($table, $column, $id){
        $data = get_data($table,$column,$id);
        return $data[0];
    }
?>