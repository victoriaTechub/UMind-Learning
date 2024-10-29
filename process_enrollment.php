<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];

    // Here you would normally save to a database or send a confirmation email
    echo "Thank you, $name, for enrolling in the $course course!";
}
?>
