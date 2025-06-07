<?php
$con = new mysqli('localhost:4307', 'root', '', 'final'); // Adjust as needed

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'] ?? null;
    $phonenumber = $_POST['phonenumber'] ?? null;
    $email = $_POST['email'] ?? null;
    $persons = (int)($_POST['persons'] ?? 0);
    $tables = (int)($_POST['tables'] ?? 0);
    $reservation = $_POST['reservation'] ?? null;
    $branch = $_POST['branch'] ?? null;
    $ganap = $_POST['ganap'] ?? null;  // Ensure this line is included
    $time = $_POST['time'] ?? null;
    $date = $_POST['date'] ?? null;

    // Check for required fields
    if (is_null($fullname) || is_null($phonenumber) || is_null($email) || is_null($branch) || is_null($reservation) || is_null($ganap) || is_null($time) || is_null($date)) {
        die("Required fields are missing.");
    }

    // Prepare and bind
    $stmt = $con->prepare("INSERT INTO `reservations` (fullname, phonenumber, email, persons, tables, reservation, branch, ganap, time, date) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    if ($stmt === false) {
        die("Prepare failed: " . $con->error);
    }

    // Bind parameters
    $stmt->bind_param("sssiisssss", $fullname, $phonenumber, $email, $persons, $tables, $reservation, $branch, $ganap, $time, $date);

    // Attempt to execute the statement
    if ($stmt->execute()) {
        echo "Your ";
    } else {
        echo "Error: " . $stmt->error; // Display error if execution fails
    }

    // Close the statement
    $stmt->close();
}

// Close the database connection
$con->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fireworks Success Message</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: 'Arial', sans-serif;
            overflow: hidden;
            background-color: black; /* Set background to black */
        }
        .message{
            padding-left: 30% 30% 30%;
            font-size: 1px;
            
        }
        .message1 {
            position: relative;
            z-index: 10;
            font-size: 2.5em;
            color: white;
            padding: 20px;
            border-radius: 10px;
            background-color: rgba(247, 16, 112, 0.8);
            opacity: 0;
            transform: scale(0);
            animation: popIn 1.2s forwards;
        }

        @keyframes popIn {
            0% {
                opacity: 0;
                transform: scale(0);
            }
            50% {
                opacity: 1;
                transform: scale(1.1);
            }
            70% {
                transform: scale(0.9);
            }
            100% {
                transform: scale(1);
            }
        }

        .firework {
            position: absolute;
            bottom: 0;
            width: 2px;
            height: 100px;
            background: rgba(255, 255, 255, 0.5);
            animation: shoot 1s forwards, explode 0.5s forwards;
            opacity: 0;
            padding-right: 50%;
        }

        @keyframes shoot {
            from {
                bottom: 0;
                opacity: 1;
            }
            to {
                bottom: 70%;
                opacity: 1;
            }
        }

        @keyframes explode {
            0% {
                transform: scale(1);
                opacity: 1;
            }
            100% {
                transform: scale(2);
                opacity: 0;
            }
        }
    </style>
</head>
<body>

<div class="message1" id="message1">Your data has been submitted successfully!</div>

<script>
    const fireworksCount = 10; // Number of fireworks
    const body = document.body;

    // Function to create fireworks
    function createFirework() {
        const firework = document.createElement('div');
        firework.className = 'firework';
        firework.style.left = `${Math.random() * 100}vw`;
        firework.style.animationDelay = `${Math.random() * 2}s`; // Random delay for each firework
        body.appendChild(firework);

        // Remove the firework after animation
        firework.addEventListener('animationend', () => {
            firework.remove();
        });
    }

    // Create fireworks at intervals
    setInterval(createFirework, 400);

    // Set the message to appear
    setTimeout(() => {
        document.getElementById('message1').style.opacity = '1';
    }, 200); // Delay for the message to appear
</script>

</body>
</html>