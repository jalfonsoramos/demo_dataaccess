<?php    
    ini_set('display_errors',1); 
    error_reporting(E_ALL);
    
	spl_autoload_register(function ($class_name) {
        include $class_name . '.php';
    });

    $user='dev';
    $pass='Jup1t3r!';
    $conn=new PDO('mysql:host=localhost;dbname=world', $user, $pass);
     
    $repo = new CityRepository($conn);
    echo '===Get By Id===</br>';
    $result =  $repo->getById(1);    
    while($row = $result->fetch()){
        echo $row['Name'] . '<br />';
    }
    echo '===Get By Name===</br>';
    $result =  $repo->getByName('rat');    
    while($row = $result->fetch()){
        echo $row['Name'] . '<br />';
    }    
?>