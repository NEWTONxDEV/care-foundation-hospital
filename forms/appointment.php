<?php
/*
  Appointment backend temporarily disabled for Formspree.
  If you want to re-enable PHP handling later, restore this file.

  // Replace with your real receiving email address
  $receiving_email_address = 'newtonarinze8@gmail.com';

  if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(403);
    echo 'There was a problem with your submission, please try again.';
    exit;
  }

  $name = strip_tags(trim($_POST['name'] ?? ''));
  $email = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
  $phone = trim($_POST['phone'] ?? '');
  $date = trim($_POST['date'] ?? '');
  $service = trim($_POST['service'] ?? '');
  $reason = trim($_POST['reason'] ?? '');
  $message = trim($_POST['message'] ?? '');
  $bot_field = trim($_POST['bot-field'] ?? '');

  if (!empty($bot_field)) {
    http_response_code(400);
    echo 'Spam detected.';
    exit;
  }

  if (empty($name) || empty($email) || empty($phone) || empty($date) || empty($service) || empty($reason) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo 'Please complete all required fields and use a valid email address.';
    exit;
  }

  $subject = 'Online Appointment Form';

  $email_content = "Name: $name\n";
  $email_content .= "Email: $email\n";
  $email_content .= "Phone: $phone\n";
  $email_content .= "Appointment Date: $date\n";
  $email_content .= "Service: $service\n";
  $email_content .= "Reason for Visit: $reason\n";
  $email_content .= "Message: $message\n";

  $headers = "From: $name <$email>\r\n";
  $headers .= "Reply-To: $email\r\n";
  $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

  if (mail($receiving_email_address, $subject, $email_content, $headers)) {
    echo 'Your appointment request has been sent successfully. We will contact you soon!';
  } else {
    http_response_code(500);
    echo 'There was a problem sending your message. Please try again later.';
  }
*/

echo 'This form backend is disabled. Use Formspree by setting the form action in index.html.';
?>
