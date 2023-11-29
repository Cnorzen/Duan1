<?php
 $username = "root";
 $password = "";
 $dbname = "du_an1";
 $servername = "localhost";
 try {
    $PDO = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e)
        {
        echo "Connection failed: " . $e->getMessage();
    }

function ShowArray($array){
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}
function pdo_execute($sql){
    $sql_args = array_slice(func_get_args(),1);
    try{
        $stmt = $GLOBALS['PDO']->prepare($sql);
        $stmt->execute($sql_args);
        return $stmt;
    }
    catch(PDOException $e){
        echo $e->getMessage();
        return false;
    }
    finally{
        unset($stmt);
    }
}
function pdo_execute_single($sql){
    $sql_args = array_slice(func_get_args(),1);
    try{
        $stmt = $GLOBALS['PDO']->prepare($sql);
        $stmt->execute($sql_args);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    catch(PDOException $e){
        echo $e->getMessage();
        return false;
    }
    finally{
        unset($stmt);
    }
}
function pdo_query($sql){
    $sql_args = array_slice(func_get_args(),1);
    try{
        $stmt = $GLOBALS['PDO']->prepare($sql);
        $stmt->execute($sql_args);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    catch(PDOException $e){
        echo $e->getMessage();
        return false;
    }
    finally{
        unset($stmt);
    }
}
function pdo_query_value($sql){
    $sql_args = array_slice(func_get_args(),1);
    try{
        $stmt = $GLOBALS['PDO']->prepare($sql);
        $stmt->execute($sql_args);
        return $stmt->fetchColumn();
    }
    catch(PDOException $e){
        echo $e->getMessage();
        return false;
    }
    finally{
        unset($stmt);
    }
}
function pdo_get_insert_id(){
    return $GLOBALS['PDO']->lastInsertId();
}
?>