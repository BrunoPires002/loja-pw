<?php


    header("Location: index.php");
    $produto = $_POST['produto'];
    

    if($produto == 1){
        setcookie('regata', $produto, time()+160);
        setcookie('bermuda', $produto, time()+1);
        setcookie('tenis', $produto, time()+1);
    }
    else if($produto == 2){
        setcookie('bermuda', $produto, time()+160);
        setcookie('regata', $produto, time()+0);
        setcookie('tenis', $produto, time()+0);
    }
    else if($produto == 3){
        setcookie('tenis', $produto, time()+160);
        setcookie('regata', $produto, time()+0);
        setcookie('bermuda', $produto, time()+0);
    }
/*
    if($produto == 1){
        setcookie('regata', $produto, time()+10);
    }
    else if($produto == 2){
        setcookie('bermuda', $produto, time()+160);
    }
    else if($produto == 3){
        setcookie('tenis', $produto, time()+160);
    }
*/
?>