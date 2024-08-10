<!-- <?php
        $connect = mysqli_connect("localhost", "root", "", "languagedb", 3306);
        //check connection
        if ($connect === false) {
            die("ERROR:Could not connect"
                . mysqli_connect_error());
        }
        $email = $_POST['email'];
        $pass = $_POST['psw'];

        if ($connect === false) {
            die("ERROR:Could not connect"
                . mysqli_connect_error());
        }
        $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$pass'";
        $result = $connect->query($sql);

        if ($result->num_rows == 1) {
            echo '<script>
        window.location = "../home.html";
        </script>';
        } else {
            echo '<script>
                alert("Invalid credentials!");
                window.location = "../";
            </script>';
        }

        ?> -->
<!-- Normal password -->
<!-- <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST["email"];
            $password = $_POST["psw"];

            // Your database connection code here
            $conn = mysqli_connect("localhost", "root", "", "languagedb", 3306);

            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            // Perform a SQL query to check if the user exists and the password matches
            $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
            $result = mysqli_query($conn, $sql);

            if ($result && mysqli_num_rows($result) == 1) {
                // User is authenticated
                session_start(); // Start a session if not already started
                $row = mysqli_fetch_assoc($result);
                $_SESSION["user_id"] = $row["id"]; // Store user information in the session
                echo "Login successfully";
                header("Location: ../home.html"); // Redirect to a welcome page or dashboard
                exit();
            } else {
                // Invalid credentials
                echo "Invalid email or password. Please try again.";
            }

            // Close the database connection
            mysqli_close($conn);
        }
        ?> -->

<!-- Hashed password -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["psw"];

    // Your database connection code here
    $conn = mysqli_connect("localhost", "root", "", "languagedb", 3306);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Perform a SQL query to check if the user exists
    $sql = "SELECT * FROM user WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $hashedPassword = $row["password"];

        // Verify the submitted password against the hashed password
        if (password_verify($password, $hashedPassword)) {
            // Password is correct, user is authenticated
            session_start(); // Start a session if not already started
            $_SESSION["user_id"] = $row["id"]; // Store user information in the session
            echo "Login successfully";
            header("Location: ../index.html"); // Redirect to a welcome page or dashboard
            exit();
        } else {
            // Password is incorrect
            echo "Invalid password. Please try again.";
        }
    } else {
        // User with the provided email does not exist
        echo "User not found. Please check your email and try again.";
    }

    // Close the database connection
    mysqli_close($conn);
}
?>