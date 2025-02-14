<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'contato@henriqueteixeiraoficial.com.br';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->subject = 'Request for a quote';

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['phone'], 'Phone');
  $contact->add_message( $_POST['message'], 'Message', 10);

  echo $contact->send();
?>

<!--  Conecção com o banco de dados  -->
      
<?php
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  $host = 'localhost';
  $dbname = 'mestreadvogados';
  $username = 'root';
  $password = '';

  $conn = new mysqli($host, $username, $password, $dbname);
  if ($conn->connect_error) {
      die("Falha na conexão: " . $conn->connect_error);
  }

  $nome = $_POST['name'];
  $email = $_POST['email'];
  $telefone = $_POST['phone'];
  $mensagem = $_POST['message'];

  $sql = "INSERT INTO contatos (nome, email, telefone, mensagem) VALUES (?, ?, ?, ?)";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ssss", $nome, $email, $telefone, $mensagem);

  if ($stmt->execute()) {
      echo "Dados salvos com sucesso!";
  } else {
      echo "Erro ao salvar os dados: " . $conn->error;
  }

  $stmt->close();
  $conn->close();

  require '../assets/vendor/php-email-form/PHPMailer/PHPMailer.php';
  require '../assets/vendor/php-email-form/PHPMailer/SMTP.php';
  require '../assets/vendor/php-email-form/PHPMailer/Exception.php';

  $mail = new PHPMailer(true);

  try {
      $mail->isSMTP();
      $mail->Host = 'smtp.gmail.com';
      $mail->SMTPAuth = true;
      $mail->Username = 'henriqueteixeira.wd@gmail.com';
      $mail->Password = 'Rick1977';
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
      $mail->Port = 587;

      $mail->setFrom($email, $nome);
      $mail->addAddress('contato@henriqueteixeiraoficial.com.br');
      $mail->Subject = 'Solicitação de Orçamento';
      $mail->Body = "Nome: $nome\nE-mail: $email\nTelefone: $telefone\n\nMensagem:\n$mensagem";

      if ($mail->send()) {
          echo "E-mail enviado com sucesso!";
      } else {
          echo "Erro ao enviar e-mail.";
      }
  } catch (Exception $e) {
      echo "Erro: {$mail->ErrorInfo}";
  }
?>