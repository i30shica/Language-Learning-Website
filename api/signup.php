
<?php
$conn = mysqli_connect("localhost", "root", "", "languagedb", 3306);

if ($conn === false) {
    die("ERROR: Could not connect" . mysqli_connect_error());
}

$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['psw'];
$cpass = $_POST['cpsw'];

if ($cpass != $pass) {
    echo '<script>
            alert("Passwords do not match!!");
            window.location = "index.php";           
        </script>';
} else {
    // Hash the password
    $hashedPassword = password_hash($pass, PASSWORD_DEFAULT);

    // Insert the hashed password into the database
    $insert = mysqli_query($conn, "INSERT INTO user (name, email, password) VALUES ('$name', '$email', '$hashedPassword')");

    if ($insert) {
        echo '<script>
                alert("Registration successful!!");
                window.location = "../index.php";
            </script>';
    }
}
?>
