<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = trim($_POST["name"] ?? "");
    $number = trim($_POST["number"] ?? "");
    $reservationCount = trim($_POST["reservationCount"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $date = trim($_POST["date"] ?? "");
    $time = trim($_POST["time"] ?? "");
    $message = trim($_POST["message"] ?? "");

    if ($name === "" || $number === "" || $reservationCount === "" || $email === "" || $date === "" || $time === "") {
        die("Please fill in all required fields.");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Please enter a valid email address.");
    }

    $to = "bhushanshrestha2060@gmail.com";
    $subject = "New Reservation Request";
    $body = "Name: $name\n";
    $body .= "Number: $number\n";
    $body .= "Email: $email\n";
    $body .= "Guests: $reservationCount\n";
    $body .= "Date: $date\n";
    $body .= "Time: $time\n";
    $body .= "Message: $message\n";

    $safeEmail = preg_replace("/[\r\n]+/", "", $email);
    $headers = "From: bhushanshrestha2060@gmail.com\r\n";
    $headers .= "Reply-To: $safeEmail\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "Reservation sent successfully.";
    } else {
        echo "Email failed to send.";
    }
}
?>