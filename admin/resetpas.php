<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST["email"];
  
  // Generate a random reset token
  $resetToken = bin2hex(random_bytes(32));

  // TODO: Store the reset token and associated email in a database or file for future verification

  // Send the reset email to the user
  $to = $email;
  $subject = "Reset Your Password";
  $message = "Click the link below to reset your password:\n\n";
  $message .= "http://www.example.com/reset_password.php?token=" . $resetToken;
  $headers = "From: noreply@example.com" . "\r\n" .
             "Reply-To: noreply@example.com" . "\r\n" .
             "X-Mailer: PHP/" . phpversion();

  if (mail($to, $subject, $message, $headers)) {
    echo "Password reset instructions have been sent to your email.";
  } else {
    echo "Failed to send reset instructions. Please try again later.";
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Forgot Password</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
      .container {
  width: 300px;
  margin: 0 auto;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  text-align: center;
}

h1 {
  margin-bottom: 20px;
}

label {
  display: block;
  margin-bottom: 10px;
  text-align: left;
}

input[type="email"] {
  width: 100%;
  padding: 10px;
  margin-bottom: 20px;
}

input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  padding: 10px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #45a049;
}

  </style>
  <!-- Include this script within the HTML file -->
<script>
  function validateForm() {
    var email = document.getElementById("email").value;
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!emailRegex.test(email)) {
      alert("Please enter a valid email address.");
      return false;
    }
    return true;
  }
</script>

<!-- Modify the form tag to include the onsubmit event -->
<form action="#" method="post" onsubmit="return validateForm()">

</head>
<body>
  <div class="container">
    <h1>Forgot Password</h1>
    <form action="reset_password.php" method="post">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
      <input type="submit" value="Reset Password">
    </form>
  </div>
</body>
</html>
