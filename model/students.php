<?php

function Select_Student(){
    $select_sql = 'SELECT * FROM students';

    $conn = Connect::getConnet();
    $conn -> exec($select_sql);
}

function Update_Student ($name, $email, $password, $address, $telephone, $postal_code){
    $update_sql = "UPDATE students SET name = '$name', email = '$email', password = '$password',
        address ='$address',  postal_code = '$postal_code'";

    $conn = Connect::getConnet();
    $conn -> exec($update_sql);
}

function Delete_Student ($id){
    $delete_sql = "DELETE FROM student WHERE id = $id";

    $conn = Connect::getConnet();
    $conn -> exec($delete_sql);
}

function Insert_Student ($name, $email, $password, $address, $telephone, $postal_code){
    $insert_sql = "INSERT INTO students (name, email, password, address, telephone, postal_code)
        VALUES ('$name', '$email', '$password', '$address', '$telephone', '$postal_code')";

    $conn = Connect::getConnet();
    $conn -> exec($insert_sql);

}