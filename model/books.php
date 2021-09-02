<?php

function Select_Book(){
    $select_sql = 'SELECT * FROM books';

    $conn = Connect::getConnet();
    $conn -> exec($select_sql);
}

function Update_Book ($title, $author, $synopsis, $genre){
    $update_sql = "UPDATE students SET title = '$title', author = '$author', synopsis = '$synopsis',
        genre = $genre";

    $conn = Connect::getConnet();
    $conn -> exec($update_sql);
}

function Delete_Book ($id){
    $delete_sql = "DELETE FROM books WHERE id = $id";

    $conn = Connect::getConnet();
    $conn -> exec($delete_sql);
}

function Insert_Book ($title, $author, $synopsis, $genre){
    $insert_sql = "INSERT INTO books (title, author, synopsis, genre)
        VALUES ('$title', '$author', '$synopsis', '$genre')";

    $conn = Connect::getConnet();
    $conn -> exec($insert_sql);

}

