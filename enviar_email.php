<?php
require './phpMailer/Exception.php';
require './phpMailer/PHPMailer.php';
require './phpMailer/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (
  empty($_POST['name']) ||
  empty($_POST['last_name']) ||
  empty($_POST['phonenumber']) ||
  empty($_POST['email'])
) {
  echo 'error';
  exit;
}

$name = $_POST['name'];
$last_name = $_POST['last_name'];
$phone = $_POST['phonenumber'];
$email = $_POST['email'];

$mail = new PHPMailer(true);
try {
    $mail->isSMTP();  // Utilizar SMTP
    $mail->Host = 'smtp.gmail.com';  // Servidor SMTP (en este caso, Gmail) si se usa otro correo seria smtp.tu-correo.com
    $mail->SMTPAuth = true;  // Activar la autenticación SMTP
    $mail->Username = 'example@gmail.com'; 
    $mail->Password = 'tu-contraseña-smtp';  
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;  // Usar TLS
    $mail->Port = 587;  // Puerto para TLS (587)

    // Configurar el remitente y destinatario
    $mail->setFrom('example@gmail.com', 'Nombre Remitente');  // Dirección de correo del remitente
    $mail->addAddress('example@gmail.com', 'Nombre Destinatario');  // Dirección de correo del destinatario

    // Configurar el contenido del correo
    $mail->isHTML(true);  // Establecer el formato del correo como HTML
    $mail->Subject = 'AMAZON REFUGE INN: Contacto';  // Asunto del correo
    $mail->Body    = "
      <html>
      <head>
          <title>AMAZON REFUGE INN: Contacto</title>
      </head>
      <body>
          <p><strong>Nombre:</strong> $name $last_name</p>
          <p><strong>Teléfono:</strong> $phone</p>
          <p><strong>Email:</strong> $email</p>
      </body>
      </html>
      ";  // Cuerpo del correo en formato HTML

    if ($mail->send()) {
      echo 'success';
    } else {
      echo 'error';
    }
} catch (Exception $e) {
    echo "Error: {$mail->ErrorInfo}";
}
?>
