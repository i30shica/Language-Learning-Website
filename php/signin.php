<?php
//create connection// servername => localhost
//username => root// password => empty
//database name => webtechnology
$conn = mysqli_connect("localhost", "root", "", "languagedb");
//check connection
if ($conn === false) {
    die("ERROR:Could not connect"
        . mysqli_connect_error());
}

$name = $_POST['name'];
$password = $_POST['psw'];
$email = $_POST['email'];

$sql = "INSERT INTO user VALUES('$name','$email','$password')";
if (mysqli_query($conn, $sql)) {
    echo "<h3>data stored in database successfully</h3>"
        . "Please browse your localhost php my admin"
        . "to view the updates data";
    echo nl2br("\n$name\n" . md5($password) . "\n$email");
} else {
    echo "ERROR:hush! Sorry $sql.mysqli_error($conn)";
}
mysqli_close($conn);
