<?php

//var_dump($_SERVER['REQUEST_METHOD']);

// если был использован POST для запроса страницы
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // htmlspecialchars преобразовывает специальные символы в html объекты - вводимый код не будет восприниматься как код
    // htmlentities() - преобразовывает все возможные символы в html объекты
    $firstname = htmlspecialchars($_POST['firstname']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $favouritepet = htmlspecialchars($_POST['favouritepet']);

    // если переменная пустая
    if(empty($lastname)) { 
        exit('Не указана фамилия');
        //header('Location: ../index.php');
    } 

    echo 'These are the data, that the user submitted:';
    echo "<br>";
    echo $firstname;
    echo "<br>";
    echo $lastname;
    echo "<br>";
    echo $favouritepet;

    header('Location: ../index.php');
} else {
    header('Location: ../index.php');
}
