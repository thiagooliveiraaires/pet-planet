<?php
/*
define('DBSERVER', 'localhost'); // Data server
define('DBUSERNAME', 'root'); // Database username
define('DBPASSWORD', ''); // Database password
define('DBNAME', 'demo'); // Database name

/*connect to MySQL database */
/*
$db = mysqli_connect(DBSERVER, DBUSERNAME, DBPASSWORD, DBNAME);

//Check db connection
if($db === false){
    die("Error: connection error. " . mysqli_connect_error());
}
*/
$link = mysqli_connect("localhost", "root", "Thiago270602", "world");

if ($link) {
    echo "Erro: Falha ao conectar-se com o banco de dados." . PHP_EOL;
    echo "Debugging: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging: " . mysqli_connect_errno() . PHP_EOL;
    exit;
}

echo "sucesso: Sucesso ao conectar-se com a base com a base de dados MySQL" .  PHP_EOL;

mysqli_close($db);
?>
