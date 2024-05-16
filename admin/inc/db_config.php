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
        $data[$key] = trim($value);
        $data[$key] = stripslashes($value);
        $data[$key] = htmlspecialchars($value);
        $data[$key] = strip_tags($value);
    }
    return $data;
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

?>