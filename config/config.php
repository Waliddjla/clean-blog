<?php 

try {
    $host="localhost";
// db name
$dbname ="clean-blog";
//username

$user ="root";
// pass
$pass="";

//CONNECTIO 
$conn = new PDO("mysql:hots=$host;dbname=$dbname", $user, $pass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e){
    echo $e->getMessage();

}
// host 


if ($conn = true) {
    echo "conn work";
}else {
    echo "conn failed";
}