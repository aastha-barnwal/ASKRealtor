<?php
$con = new mysqli("localhost", "root", "", "askrealtor");
// Check connection
if ($con->connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli->connect_error();
}
?>








<?php
// try{
//     $dsn = "mysql: dbname=id19514028_askrealtor; host=localhost";
//     $user = "id19514028_Aastha";
//     $pwd = "qAzxsw23@w3e";

//     $conn = new PDO($dsn, $user, $pwd);

//     $conn->query("USE id19514028_askrealtor");
// }
// catch(PDOException $e){
//     echo $pwd;
//     die("Error Connecting: ".$e->getMessage());
// }

?>