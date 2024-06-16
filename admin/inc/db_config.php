<?php 
$hname='localhost';
$name='root';
$pass='';
$db='hbwebsite';

$conn=mysqli_connect( $hname,$name,$pass,$db);

if(!$conn)
{
die("Cannot connect to database".mysqli_connect_error());
}

function filtration($data)
{
    foreach($data as $key => $value)
    {
        $value = trim($value);
        $value = stripslashes($value);
        $value = strip_tags($value);
        $value = htmlspecialchars($value);

        $data[$key] = $value;
    }
    return $data;
}

function selectALL($table)
{
    $conn = $GLOBALS['conn'];
    $res = mysqli_query($conn, "SELECT * FROM $table");
    return $res;
}

function select($sql,$values,$datatypes)
{
    $conn=$GLOBALS['conn'];
    if($stmt=mysqli_prepare($conn,$sql))
    {
        mysqli_stmt_bind_param($stmt,$datatypes,...$values);
        if(mysqli_stmt_execute($stmt))
        {                     
            $res=mysqli_stmt_get_result($stmt);
            mysqli_stmt_close($stmt);
            return $res;
        }
        else{
            mysqli_stmt_close($stmt);
            die("querry cannot be executed-select");   
        }
    }
    else{
        die("querry cannot be prepared-select");
    }

}    

function update($sql,$values,$datatypes)
{
    $conn=$GLOBALS['conn'];
    if($stmt=mysqli_prepare($conn,$sql))
    {
        mysqli_stmt_bind_param($stmt,$datatypes,...$values);
        if(mysqli_stmt_execute($stmt))
        {                     
            $res=mysqli_stmt_affected_rows($stmt);
            mysqli_stmt_close($stmt);
            return $res;
        }
        else{
            mysqli_stmt_close($stmt);
            die("querry cannot be executed - update");   
        }
    }
    else{
        die("querry cannot be prepared -update");
    }


}

function insert($sql,$values,$datatypes)
{
    $conn=$GLOBALS['conn'];
    if($stmt=mysqli_prepare($conn,$sql))
    {
        mysqli_stmt_bind_param($stmt,$datatypes,...$values);
        if(mysqli_stmt_execute($stmt))
        {                     
            $res=mysqli_stmt_affected_rows($stmt);
            mysqli_stmt_close($stmt);
            return $res;
        }
        else{
            mysqli_stmt_close($stmt);
            die("querry cannot be executed - Insert");   
        }
    }
    else{
        die("querry cannot be prepared - Insert");
    }


}

function delete($sql,$values,$datatypes)
{
    $conn=$GLOBALS['conn'];
    if($stmt=mysqli_prepare($conn,$sql))
    {
        mysqli_stmt_bind_param($stmt,$datatypes,...$values);
        if(mysqli_stmt_execute($stmt))
        {                     
            $res=mysqli_stmt_affected_rows($stmt);
            mysqli_stmt_close($stmt);
            return $res;
        }
        else{
            mysqli_stmt_close($stmt);
            die("querry cannot be executed - Delete");   
        }
    }
    else{
        die("querry cannot be prepared - Delete");
    }


}
?>