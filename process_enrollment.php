<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $company = htmlspecialchars($_POST['company']);
    $service = htmlspecialchars($_POST['service']);
    $details = htmlspecialchars($_POST['details']);

    // Example of processing or saving data
    // For a real application, you could store this information in a database
    // or send an email notification.

    // Simple validation
    if (!empty($name) && !empty($email) && !empty($phone)) {
        echo "<h1>Thank you for your request, $name!</h1>";
        echo "<p>We have received your consultation request regarding <strong>$service</strong>.</p>";
        echo "<p>Our team will reach out to you soon at <strong>$email</strong> or <strong>$phone</strong>.</p>";
        echo "<p>Additional details provided: $details</p>";
    } else {
        echo "<h1>Error</h1>";
        echo "<p>All required fields must be completed.</p>";
    }
} else {
    echo "<h1>Invalid Request</h1>";
    echo "<p>Please submit the form correctly.</p>";
}
?>
