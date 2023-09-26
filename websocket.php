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

    function create_value_websocket($table, $column, $id){
        $js_id = $table.$column.$id;
        $starter_value = get_data($table,$column,$id)[0];
        return "
        <span id='".$js_id."'>".$starter_value."</span>
        <script>
            function refresh_value_".$js_id."(){
                var result;
                fetch('http://localhost/homemade_websocketer/get/".$table."/".$column."', {
                headers: {
                    'Accept': 'application/json',
                    'id':".$id."
                }
                })  
                .then(response => response.text())
                .then(text => document.getElementById('".$js_id."').innerHTML = text)
            }   
            var interval = setInterval(refresh_value_".$js_id.", 1000);
        </script>
        ";
    }
?>