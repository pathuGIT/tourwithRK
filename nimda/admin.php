<?php
    session_start(); // Start the session at the beginning of the file
    $conn = new mysqli('localhost:3308', 'root', '', 'tourwithRK');

    // Check if the user is logged in and has admin privileges
    if (isset($_SESSION['admin']) != true ){
        // User is not logged in or does not have admin privileges, redirect to login page or display an error
        echo "<script>alert('You are not authorized to view this page. Please login as an admin.'); window.location.href = '/tourwithRK/index.php';</script>";
        exit; // Stop further execution of the script
    }

    // Rest of your admin.php code follows
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect value of input field
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind
    $stmt = $conn->prepare("UPDATE admin SET password = ? WHERE username = ?");
    $stmt->bind_param("ss", $hashedPassword,$username);

    // Execute and check for success
    if ($stmt->execute()) {
        echo "Admin Updated successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
<?php

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Select feedback where check = 0
    $sql = "SELECT * FROM feedback WHERE `check` = 0";
    $result = $conn->query($sql);
?>
<?php

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch bookings from database
    $sql1 = "SELECT * FROM bookings ORDER BY created_at DESC";
    $result1 = $conn->query($sql1);
?>
<?php

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL to update status to 'new' for future bookings
    $sqlNew = "UPDATE bookings SET status = 'new'";
    // SQL to update status to 'expired' for past bookings
    $sqlExpired = "UPDATE bookings SET status = 'expired'";

    // Execute the queries
    $sechSql = "SELECT * from bookings";
    $resultSerch = $conn->query($sechSql);
    if ($resultSerch) {
        while($row = $resultSerch->fetch_assoc()){
           $arr_date = $row['date_of_arrival'];
           $cur_date = date('Y-m-d');

           if($row['status'] != 'accepted'){
                //letsCompare this date 
                if ($arr_date > $cur_date) {
                    //echo"New";
                    $conn->query($sqlNew);
                    echo "<script>
                    document.addEventListener('DOMContentLoaded', function() {
                        document.getElementById('status').style.backgroundColor = 'green'; 
                    });</script>";

                } else {
                    // echo"Expired";
                    $conn->query($sqlExpired);
                    echo "<script>
                    document.addEventListener('DOMContentLoaded', function() {
                        document.getElementById('status').style.backgroundColor = 'red'; 
                    });</script>";

                }
           }else{
                echo "<script>
                document.addEventListener('DOMContentLoaded', function() {
                    document.getElementById('status').style.backgroundColor = 'gold'; 
                });</script>";
           }
            
        }
    } else {
        echo "Error executing query: " . $conn->error;
    }

    $conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="admin.css">
    <title>Document</title>
</head>
<body>
    <div class="row1">
        <div class="col1">
            <h2>Welcome, <?php echo$_SESSION['admin'];?>!</h2>
            <div>
                <button id="Toggle">Update Password</button>
                <button style="background-color: red; padding:5px;"><a href="/tourwithRK/index.php">Logout</a></button>
            </div>
            <div id="updatePane">
                <form action="admin.php" method="post">
                    <p>Update Password</p>
                    <table>
                        <tr>
                            <td>Username</td>
                            <td><input type="text" id="username" name="username" required></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input type="password" id="password" name="password" required><br></td>
                        </tr>
                        <tr>
                            <td><input type="submit" value="Update"></td>
                            <td><button type="reset">Clear</button></td>
                        </tr>

                        <tr>
                            <td colspan="2"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <div class="col2">
            <p>Pending Feedbacks</p>
            <?php if ($result->num_rows > 0): ?>
            <table>
                <tr>
                    <th>Name</th>
                    <th>Country</th>
                    <th>Message</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
                <?php while($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['username']); ?></td>
                        <td><?php echo htmlspecialchars($row['country']); ?></td>
                        <td><?php echo htmlspecialchars($row['feedback']); ?></td>
                        <td><?php echo htmlspecialchars($row['email']); ?></td>
                        <td>
                            <form action="approve_feedback.php" method="post">
                                <input type="hidden" name="feedback_id" value="<?php echo $row['id']; ?>">
                                <input type="submit" name="action" value="Approve">
                                <input type="submit" name="action" value="Not Approve">
                            </form>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </table>
        <?php else: ?>
            <small>No pending feedbacks.</small>
        <?php endif; ?>
        </div>
    </div>
    <div class="row2">
        <div class="col1">
            <p>Bookings Details</p>
            <?php if ($resultSerch->num_rows > 0): ?>
            <table>
                <tr>
                    <th>Status</th>
                    <th>Customer Name</th>
                    <th>Country</th>
                    <th>Date For Arrival</th>
                    <th>Vehicle</th>
                    <th>Created At</th>
                    <th>Replay </th>
                    <th>Action </th>
                </tr>
                <?php while($row = $result1->fetch_assoc()): ?>
                    <tr>
                        <td><p id="status"><?php echo htmlspecialchars($row['status']); ?></p></td>
                        <td><?php echo htmlspecialchars($row['name']); ?></td>
                        <td><?php echo htmlspecialchars($row['country']); ?></td>
                        <td><?php echo htmlspecialchars($row['date_of_arrival']); ?></td>
                        <td><?php echo htmlspecialchars($row['vehicle']); ?></td>
                        <td><?php echo htmlspecialchars($row['created_at']); ?></td>
                        <td>
                            <a href="https://wa.me/<?php echo htmlspecialchars($row['phone']); ?>" target="_blank"><?php echo htmlspecialchars($row['phone']); ?></a> |
                            <a href="mailto:<?php echo htmlspecialchars($row['email']); ?>"><?php echo htmlspecialchars($row['email']); ?></a>
                        </td>
                        <td>
                            <form action="approved_booking.php" method="post">
                                <input type="hidden" name="booking_id" value="<?php echo $row['id']; ?>">
                                <input type="submit" name="action" value="Accept">
                            </form>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </table>
            <?php else: ?>
                <small>No bookings found.</small>
            <?php endif; ?>
        </div>
    </div>

    <script>
        // JavaScript to toggle the display
        document.getElementById('Toggle').addEventListener('click', function() {
            var updatePane = document.getElementById('updatePane');
            if (updatePane.style.display === 'none') {
                updatePane.style.display = 'block';
            } else {
                updatePane.style.display = 'none';
            }
        });
</script>
</body>
</html>
