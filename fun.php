<?php include "upd.php";?>

<?php

function showData(){
    global $conn;
    $querry = "SELECT * FROM users";
    $res = mysqli_query($conn ,$querry);
    if(!$res ){
    die('query failed'.mysqli_error($conn));
    }

    while($row = mysqli_fetch_assoc($res)){
    $id = $row['id'];
    echo "<option value='$id'>$id</option>";
    }
}


function updtable(){
    global $conn;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];
    $query = "UPDATE users SET ";
    $query.= "username = '$username' ,";
    $query.= "password = '$password' ";
    $query.= "WHERE id = $id";

    $res = mysqli_query($conn,$query);
 if(!$res){
    die("querry failed".mysqli_error($conn));
    }
}


function dltrows(){
    global $conn;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];
    $query = "DELETE from users ";
    $query.= "WHERE id = $id";

    $res = mysqli_query($conn,$query);
 if(!$res){
    die("querry failed".mysqli_error($conn));
    }
}

?>