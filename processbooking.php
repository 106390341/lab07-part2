<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checking User Input Data at the Server</title>
</head>
<body>
    <?php

        if (isset($_POST['customername']) && isset($_POST['email'])) {
            $customerName = $_POST['customername'];
            $email = $_POST['email'];
            echo "<p>Thank you for your booking, <strong>" . htmlspecialchars($customerName) . "</strong>!</p>";
            echo "<p>A confirmation email has been sent to: <strong>" . htmlspecialchars($email) . "</strong></p>";
        } else {
            echo "<p>No booking data received. Please complete the registration form.</p>";
        }
    ?>
</body>
</html>