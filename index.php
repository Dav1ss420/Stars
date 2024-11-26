<?php

echo"✈";

$connection = new mysqli("localhost", "root", "", "lohs");
$result = $connection->query("SELECT * FROM users");

$data = $result->fetch_assoc();

var_dump($data);
echo "<br>";
echo"<pre>";
var_dump($_SERVER);
echo"</pre>";




if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $sql = "INSERT INTO users
                (username, pass)
                VALUES
                ('$username', '$password')";
    $connection->query($sql);

};
echo "<form method='POST'>";
    echo "<label>Lietotajvards: <input name='username' /></label><br>";
    echo "<label> Parole: <input name='password' type='password' /></label><br>";
    echo "<input type='submit' value='Registreties' />";
echo "</form>";



?>