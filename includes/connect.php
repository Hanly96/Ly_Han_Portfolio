<?php
$db_dsn = array(
    'host'=>'hanlydesigns.com',
    'dbname'=>'db_hanly_portfolio',
    'charset'=>'utf8',
);

$dsn ='mysql:'.http_build_query($db_dsn,'',';');

//DataBase credentials
$db_user = 'hanlydesigns';
$db_pass = 'Ted040196#';

//tri-catch to show connection error
try{
    $pdo = new PDO($dsn,$db_user,$db_pass);
    // var_dump($pdo);
}catch(PDOException $exception){
    echo'connect error'.$exception->getMessage();
    exit();
}

?>