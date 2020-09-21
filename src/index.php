<?php
require_once '../login/classes/usuarios.php';
$u = new Usuario();
?> 

<?php
require_once('PHPMailer.php');
require_once('SMTP.php');
require_once('Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

$selectbolo = $_POST['selectbolo'];
$qtdbol = $_POST['qtdbol'];
$selecttopo = $_POST['selecttopo'];
$qtddoc = $_POST['qtddoc'];
$email = $_POST['email'];



try {
	$mail->SMTPDebug = SMTP::DEBUG_SERVER;
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'matheus.comercial.hs@gmail.com';
	$mail->Password = 'Math1122@';
	$mail->Port = 587;

	$mail->setFrom('matheus.comercial.hs@gmail.com');
	$mail->addAddress($email);

	$mail->isHTML(true);
	$mail->Subject = 'Teste de email via gmail Matheus';
	$mail->Body = "Bolo: $selectbolo, qtd: $qtdbol, topo: $selecttopo, qtdtopo: $qtddoc";
	$mail->AltBody = "Bolo: $selectbolo, qtd: $qtdbol, topo: $selecttopo, qtdtopo: $qtddoc";

	if($mail->send()) {
		$u->conectar("finalodaw", "localhost", "root", "");
		$u->cadastraPedido($selecttopo,$selectbolo, $qtdbol,$qtddoc);
		echo 'Email enviado com sucesso';
	} else {
		echo 'Email nao enviado';
	}
} catch (Exception $e) {
	echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
}
?>