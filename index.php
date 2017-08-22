<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysql_connect($servername, $username, $password);

if(!$conn){
  die("Connection failed: ". mysql_error());
}
echo "Connected successfully <hr>";
mysql_select_db('tester');
$sql = "SELECT * FROM testing";
$result = mysql_query($sql, $conn);
while ($row = mysql_fetch_array($result)){
  echo $row["text"];
}
?>
