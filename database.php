<?php
// Database connection
if (!function_exists('establishConnection')) {
    function establishConnection() {
        $servername =  "";
        $username =  "root";
        $password =  "";
        $dbname =  "websocketer";
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            echo "Failed to connect to db".mysqli_connect_error();
        }
        return $conn;
    }

    function closeConnection($conn) {
        $conn->close();
    }
}

// Databasse functions

function executeQuery($query) {
    $conn = establishConnection();
    $result = $conn->query($query);
    return mysqli_fetch_array($result);
}
function get_sql_string($value) {
    return mysqli_real_escape_string(establishConnection(), $value);
} 

?>