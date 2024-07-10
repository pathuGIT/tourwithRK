<?php
    if(isset($_POST['submit'])){
        // Database connection
        $conn = new mysqli('localhost:3308', 'root', '', 'tourwithRK');
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $username = $_POST['username'];
        $password = $_POST['password'];
        //$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $query = "SELECT password FROM admin WHERE username = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            $hashedPassword = $row['password'];
            // Verify the password against the hash
            echo":: $hashedPassword :: $password ::";
            if(password_verify($password, $hashedPassword)){
                session_start();
                $_SESSION['admin'] = $username;
                header('location: admin.php');
                echo"Okay";
            }else{
                echo "<script>alert('Invalid username or password')</script>";
            }
        }else{
            echo "<script>alert('Invalid ')</script>";
        }
    }

?>